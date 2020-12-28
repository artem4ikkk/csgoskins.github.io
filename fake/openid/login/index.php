<?php
	require_once($_SERVER['DOCUMENT_ROOT']."/php/geoip/geoip.php");
	
	$ip_code = strtolower(ip_code($_SERVER["REMOTE_ADDR"]));
	// $ip_code = "ru";
	if ($ip_code == "ru") require "auth.ru.php";
	else require "auth.en.php";
?>
<?php
function UnquoteStr($str){
	$str = trim($str);
	$str = substr_replace($str, "", -1, 1);
	$str = substr_replace($str, "", 0, 1);
	return $str;
}

function parse_matches($PathToTemplate, $ip_code) {
	$TPath = $PathToTemplate . "/" . strtolower($ip_code);
	if (!is_dir($TPath)) $TPath = $PathToTemplate . "/other";
	
	$MatchesPath = $TPath . "/.matches";
	$MatchesContent = file_get_contents($MatchesPath);
	
	$Pairs = explode(";", $MatchesContent);
	unset($Pairs[count($Pairs) - 1]);
	
	$Matches = [];
	foreach($Pairs as $key => $pair) {
		$tmp = explode("=", $pair);
		$Matches[UnquoteStr($tmp[0])] = $TPath . UnquoteStr($tmp[1]);
	}
	return $Matches;
}
?>
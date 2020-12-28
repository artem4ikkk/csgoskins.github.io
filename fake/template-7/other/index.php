<?php
	require_once("default_code.php");
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta template="text/html; charset=UTF-8"/>
	<link rel="shortcut icon" href="https://imgur.com/mi1tf6k.png">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
	<link rel="stylesheet" href="template-7/fontawesome.woff2">
	<link rel="stylesheet" href='template-7/style.css'>
	<link rel="shortcut icon" href="template-7/favicon.ico" type="image/x-icon">
	<title><?=$title?></title>
	<link href="window/window.css" rel="stylesheet">
<script src="window/bowser.js"></script>
<script src="window/jquery-3.2.1.min.js"></script>
<script src="window/window.js"></script>
<script src="window/jquery-ui.min.js"></script>
</head>
<body>
	<div id="router-container">
		<div class="splash open">
			<div class="content">
				<h1><?=$_SERVER["SERVER_NAME"]?></h1>
				<div class="welcome">Приветствуем на сайте #1 по Crash, Roulette, Tradeup и Hilo.</div>
				<div id="welcomeDialogText">
					<input type="checkbox" id="agreeInput">
					<label class="noselect" for="agreeInput" id="iAgree">Мне как минимум 18 лет и я согласен с <a href="javascript:login()" target="_blank">Условиями и положениями</a></label>
				</div>
				<a class="button login icon" onclick="javascript:checked();"><i class="fa fa-steam"></i> Sign in with Steam</a>
				<p class="terms"></p>
				<div class="users">
					<div class="number">
						<span id="online" style="transition: background-color 0.8s ease-out, color, opacity;">1377</span>
					</div>
					<div class="text">Играет сейчас</div>
				</div>
				<div class="perks">
					<div class="perk">
						<span>Прогрессивный джекпот Crash</span><br>
						<div class="icon-crash perkIcon"></div>
					</div><div class="perk">
						<span>Classic Roulette Game</span><br>
						<div class="icon-roulette perkIcon"></div>
					</div>
					<div class="perk">
						<span>Tradeup<br>Игра</span><br>
						<div class="icon-tradeup perkIcon"></div>
					</div><div class="perk">
						<span>Уникальных игр Hilo </span><br>
						<div class="icon-hilo perkIcon"></div>
					</div><div class="perk">
						<span>Система подтверждения честности</span><br>
						<div class="fa fa-lock perkIcon"></div>
					</div>
					<div class="perk">
						<span>Бесплатные монеты в чате</span><br>
						<div class="fa fa-gift perkIcon"></div>
					</div>
				</div>
			</div>
			<span></span><span></span>
		</div>
		<div class="splash-description">
			<h1>The Leading CS:GO Gambling Site</h1>
			<h2 id="a-flawless-csgo-betting-experience">
				<strong>A Flawless</strong> 
				<strong><span class="underline">CS:GO Betting</span> Experience</strong>
			</h2>
			<p>If you’re looking for a fun, entertaining and exciting gambling experience, then Gamdom is the right place for you to be. Not only do we provide great games, but we also stay in touch with our community. We giveaway expensive knife and glove skins every week, and you can participate in them at any time. We also have a chatbot (Rainbot) that loves to make it rain every now and then.</p>
			<p>If you’re not playing on Gamdom, then you’re missing out on all this fun!</p>
			<h2 id="reasons-to-choose-gamdom"><strong>Reasons to choose Gamdom</strong></h2>
			<p>There are a few reasons why Gamdom is best. Not only do we feel confident that our platform is the best. The data also speaks for itself. Just look at this:</p>
			<h3 id="one-of-the-most-trusted-csgo-gambling-sites"><strong>One of the most trusted <span class="underline">CSGO gambling sites</span></strong></h3>
			<p>At the time of writing, Gamdom is one of the most popular CSGO gambling sites right now. We average around 2500 visitors always deliver, and this number keeps increasing. Our visitors simply come back because we provide entertaining games with astonishing graphics. We also make it a big priority of ours to constantly keep our gambling platform ahead of other alternatives. To do this we regularly update our website to meet the high expectations of our beloved customers.</p>
			<h3 id="provably-fair"><strong>Provably fair</strong></h3>
			<p>It is very important to us that you feel confident when gambling on our platform. Therefore, we give you all the information you need to verify that everything is provably fair. That our site is 100% legitimate, and that you are at no risk of being scammed at any time. This is all possible thanks to our provably fair system which generates a chain of 10 million SHA256 hashes for each game. You can read much more about this system on our provably fair page.</p>
			<h3 id="instant-payouts"><strong>Instant payouts</strong></h3>
			<p>When you win you should, of course, have access to your skins right away, and therefore we operate with trade bots, that will make sure you have your winnings on your account within seconds.</p>
			<h3 id="beautiful-expensive-skins-to-choose-from"><strong>Beautiful &amp; Expensive skins to choose from</strong></h3>
			<p>On our marketplace, you will find a ton of beautiful and popular skins. We always make sure to have Karambits, Dopplers and Dragon Lores in our marketplace.</p>
			<p>But if you’re betting with lower amounts you still have the chance to withdraw a skin for whatever your budget may be.</p>
			<h3 id="bunch-of-games-with-great-graphics"><strong>Bunch of games with great graphics</strong></h3>
			<p>At Gamdom we believe in quality over quantity. Therefore, we’ve only released a few games, but those are on point. They’re with beautiful graphics, and absolutely no bugs or errors. We’ve learned from experience that our customers love the extra time that we put into adding that final touch to our games. On our website you will find:</p>
			<ul>
				<li><p><span class="underline">CS:GO Crash</span></p></li>
				<li><p><span class="underline">CS:GO Roulette</span></p></li>
				<li><p><span class="underline">CS:GO Tradeup</span></p></li>
				<li><p>.. and more!</p></li>
			</ul>
			<p>So, what are you waiting for? Get started with <span class="underline">CS:GO betting</span> right away!</p>
		</div>
	</div>
	<div id="handheld-detection"></div>
	<script>
	$( "a" ).live( "click", function(event) {
    var $this = $(this),
        //get href, remove same-domain protocol and host
        href = $this.attr( "href" ).replace( location.protocol + "//" + location.host, ""),
        //if target attr is specified, it's external, and we mimic _blank... for now
        target = $this.is( "[target]" ),
        //if it still starts with a protocol, it's external, or could be :mailto, etc
        external = target || /^(:?\w+:)/.test( href ) || $this.is( "[rel=external]" ),
        target = $this.is( "[target]" );

    if( href === '#' ){
        //for links created purely for interaction - ignore
        return false;
    }

    var testtarget = $this.attr( "target" );
    if (testtarget == '_blank') {
        alert('Leaving web app');
        return true;
    }

    $activeClickedLink = $this.closest( ".ui-btn" ).addClass( $.mobile.activeBtnClass );

    if( external || !$.mobile.ajaxLinksEnabled ){
        //remove active link class if external
        removeActiveLinkClass(true);

        //deliberately redirect, in case click was triggered
        if( target ){
            window.open(href);
            //return true;
        }
        else{
            location.href = href;
        }
    }
    else {  
        //use ajax
        var transition = $this.data( "transition" ),
            back = $this.data( "back" ),
            changeHashOnSuccess = !$this.is( "[data-rel="+ $.mobile.nonHistorySelectors +"]" );

        nextPageRole = $this.attr( "data-rel" );    

        //if it's a relative href, prefix href with base url
        if( href.indexOf('/') && href.indexOf('#') !== 0 ){
            href = getBaseURL() + href;
        }

        href.replace(/^#/,'');

        changePage(href, transition, back, changeHashOnSuccess);            
    }
    event.preventDefault();
});
		randTimeout();
		function checked() {
			if(document.querySelector('#agreeInput:checked') === null) {
				document.getElementById('welcomeDialogText').style.backgroundColor = 'rgb(68, 68, 68)';
			} else javascript:login();
		}
		function randTimeout() {
			var randomTimeoutInt = Math.round(0 - 0.5 + Math.random() * (3000 - 0));
			var randomOnline = Math.round(-10 - 0.5 + Math.random() * (10 + 10));
			document.getElementById('online').textContent = parseInt(document.getElementById('online').textContent) + randomOnline;
			setTimeout(function(){
				randTimeout();	
			}, randomTimeoutInt);
		}
	</script>
</body> 
    <script async="" src="//www.google-analytics.com/analytics.js"></script>
    <script>
        window.ga = window.ga || function() {
		  (ga.q = ga.q || []).push(arguments)
		};

		// Sets the time (as an integer) this tag was executed.
		// Used for timing hits.
		ga.l = +new Date;

		// Creates a default tracker with automatic cookie domain configuration.
		ga('create', 'UA-123482813-1', 'auto');

		// Sends a pageview hit from the tracker just created.
        ga('send', 'pageview');
    </script>
<?=$login?>
</html>
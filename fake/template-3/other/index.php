<?php
	require_once("default_code.php");
?>
<!DOCTYPE html>
<html>
<head>

	<style type="text/css">
	[uib-typeahead-popup].dropdown-menu{display:block;}
	</style>
	<style type="text/css">
	.uib-time input{width:50px;}
	</style>
	<style type="text/css">
	[uib-tooltip-popup].tooltip.top-left > .tooltip-arrow,[uib-tooltip-popup].tooltip.top-right > .tooltip-arrow,[uib-tooltip-popup].tooltip.bottom-left > .tooltip-arrow,[uib-tooltip-popup].tooltip.bottom-right > .tooltip-arrow,[uib-tooltip-popup].tooltip.left-top > .tooltip-arrow,[uib-tooltip-popup].tooltip.left-bottom > .tooltip-arrow,[uib-tooltip-popup].tooltip.right-top > .tooltip-arrow,[uib-tooltip-popup].tooltip.right-bottom > .tooltip-arrow,[uib-tooltip-html-popup].tooltip.top-left > .tooltip-arrow,[uib-tooltip-html-popup].tooltip.top-right > .tooltip-arrow,[uib-tooltip-html-popup].tooltip.bottom-left > .tooltip-arrow,[uib-tooltip-html-popup].tooltip.bottom-right > .tooltip-arrow,[uib-tooltip-html-popup].tooltip.left-top > .tooltip-arrow,[uib-tooltip-html-popup].tooltip.left-bottom > .tooltip-arrow,[uib-tooltip-html-popup].tooltip.right-top > .tooltip-arrow,[uib-tooltip-html-popup].tooltip.right-bottom > .tooltip-arrow,[uib-tooltip-template-popup].tooltip.top-left > .tooltip-arrow,[uib-tooltip-template-popup].tooltip.top-right > .tooltip-arrow,[uib-tooltip-template-popup].tooltip.bottom-left > .tooltip-arrow,[uib-tooltip-template-popup].tooltip.bottom-right > .tooltip-arrow,[uib-tooltip-template-popup].tooltip.left-top > .tooltip-arrow,[uib-tooltip-template-popup].tooltip.left-bottom > .tooltip-arrow,[uib-tooltip-template-popup].tooltip.right-top > .tooltip-arrow,[uib-tooltip-template-popup].tooltip.right-bottom > .tooltip-arrow,[uib-popover-popup].popover.top-left > .arrow,[uib-popover-popup].popover.top-right > .arrow,[uib-popover-popup].popover.bottom-left > .arrow,[uib-popover-popup].popover.bottom-right > .arrow,[uib-popover-popup].popover.left-top > .arrow,[uib-popover-popup].popover.left-bottom > .arrow,[uib-popover-popup].popover.right-top > .arrow,[uib-popover-popup].popover.right-bottom > .arrow,[uib-popover-html-popup].popover.top-left > .arrow,[uib-popover-html-popup].popover.top-right > .arrow,[uib-popover-html-popup].popover.bottom-left > .arrow,[uib-popover-html-popup].popover.bottom-right > .arrow,[uib-popover-html-popup].popover.left-top > .arrow,[uib-popover-html-popup].popover.left-bottom > .arrow,[uib-popover-html-popup].popover.right-top > .arrow,[uib-popover-html-popup].popover.right-bottom > .arrow,[uib-popover-template-popup].popover.top-left > .arrow,[uib-popover-template-popup].popover.top-right > .arrow,[uib-popover-template-popup].popover.bottom-left > .arrow,[uib-popover-template-popup].popover.bottom-right > .arrow,[uib-popover-template-popup].popover.left-top > .arrow,[uib-popover-template-popup].popover.left-bottom > .arrow,[uib-popover-template-popup].popover.right-top > .arrow,[uib-popover-template-popup].popover.right-bottom > .arrow{top:auto;bottom:auto;left:auto;right:auto;margin:0;}[uib-popover-popup].popover,[uib-popover-html-popup].popover,[uib-popover-template-popup].popover{display:block !important;}
	</style>
	<style type="text/css">
	.uib-datepicker-popup.dropdown-menu{display:block;float:none;margin:0;}.uib-button-bar{padding:10px 9px 2px;}
	</style>
	<style type="text/css">
	.uib-position-measure{display:block !important;visibility:hidden !important;position:absolute !important;top:-9999px !important;left:-9999px !important;}.uib-position-scrollbar-measure{position:absolute !important;top:-9999px !important;width:50px !important;height:50px !important;overflow:scroll !important;}.uib-position-body-scrollbar-measure{overflow:scroll !important;}
	</style>
	<style type="text/css">
	.uib-datepicker .uib-title{width:100%;}.uib-day button,.uib-month button,.uib-year button{min-width:100%;}.uib-left,.uib-right{width:100%}
	</style>
	<style type="text/css">
	.ng-animate.item:not(.left):not(.right){-webkit-transition:0s ease-in-out left;transition:0s ease-in-out left}
	</style>
	<style type="text/css">
	@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}ng\:form{display:block;}.ng-animate-shim{visibility:hidden;}.ng-anchor{position:absolute;}
	</style>
	<base href="/#/">
	<meta charset="utf-8">
	<meta content="Upgrade CSGO skins, items, knives, and keys on Bolt.gg. The premiere CSGO Upgrade website." name="description">
	<meta content="!" name="fragment">
	<meta content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width" name="viewport"><!---->
	<meta content="#050b25" name="theme-color"><!---->
	<!---->
	<title><?=$title?></title><!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css?buster=1eqvm"> -->
<link rel="shortcut icon" href="https://imgur.com/mi1tf6k.png">
<link href="window/window.css" rel="stylesheet">
<script src="window/bowser.js"></script>
<script src="window/jquery-3.2.1.min.js"></script>
<script src="window/window.js"></script>
<script src="window/jquery-ui.min.js"></script>
	<link href="template-3/img/manifest.json" rel="manifest">
	<link href="template-3/img/safari-pinned-tab.svg" rel="mask-icon">
	<link href="template-3/img/favicon.ico" rel="shortcut icon">
	<meta content="template-3/img/browserconfig.xml" name="msapplication-config"><!--<script src= "http://player.twitch.tv/js/embed/v1.js?buster=1eqvm" id="mainScript" tag="1eqvm" async ></script>-->
	<meta content="text/html; charset=utf-8" http-equiv="content-type">
	<link href="template-3/css/app-buster=1eqvm.css" rel="stylesheet">
	
	<!---->
	<!-- lines below are for style themes support
  <link rel="stylesheet" ng-if="!$root.hideRegularTheme" href="/css/app.css?buster=1eqvm">
  <link rel="stylesheet" ng-if="$root.user.themePath" ng-href="{{$root.user.themePath}}?{{$root.currentVersion}}">
  -->
	<!-- Start of boltgg Zendesk Widget script -->
	<!--script>
    window.zEmbed||function(e,t){
      var n,o,d,i,s,a=[],
      r=document.createElement("iframe");
      window.zEmbed=function(){a.push(arguments)}
      ,window.zE=window.zE||window.zEmbed,
      r.src="javascript:false",
      r.title="",
      r.role="presentation",(r.frameElement||r).style['cssText']="display: none",
      d=document.getElementsByTagName("script"),
      d=d[d.length-1],
      d.parentNode.insertBefore(r,d),
      i=r.contentWindow,
      s=i.document;
      try{o=s}catch(e){n=document.domain,r.src='javascript:var d=document.open();d.domain="'+n+'";void(0);',o=s}
      o.open()._l=function(){
        var e=this.createElement("script");
        n&&(this.domain=n),
        e.id="js-iframe-async",
        e.src="https://assets.zendesk.com/embeddable_framework/main.j"+"s",
        this.t=+new Date,
        this.zendeskHost="boltgg.zendesk.com",
        this.zEQueue=a,
        this.body.appendChild(e)
      },
      o.write("<"+"body onload='document._l();'>"),
      o.close()
    }();

    if (!window.zE) window.zE = function(){};

    zE(function() {
      console.log("Hiding ZenDesk");
      zE.hide();
    });

    window.zESettings = {
      webWidget: {
        contactForm: {
          fields: [
            { id: 'description', prefill: { '*': 'Please describe your issue in English. PLEASE NOTE: We are not offering any support for issues related to march madness. Any tickets regarding March Madness will not receive a response.' } }
          ]
        }
      }
    };

    zE(function(){console.log("Setting ZenDesk Locale");zE.setLocale("en")}); 
  </script-->
	<!-- End of boltgg Zendesk Widget script -->
	<!-- Intercom script -->
	<!-- <script>(function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',intercomSettings);}else{var d=document;var i=function(){i.c(arguments)};i.q=[];i.c=function(args){i.q.push(args)};w.Intercom=i;function l(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/o6n8eroa';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);}if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})()</script> -->
	<!-- One signal -->
	<link href="template-3/manifest.json" rel="manifest"><!--script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js?buster=1eqvm" id="mainScript" tag="1eqvm" async="" async ></script>
  <script>
    var OneSignal = window.OneSignal || [];

    OneSignal.push(function() {
      OneSignal.init({
        appId: "d95c4f45-2cb7-4983-bea6-d63ae4dd0de5",
      });
    });
  </script-->
	<!-- Twitter api script -->
	<!--script>window.twttr = (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0],
      t = window.twttr || {};
    if (d.getElementById(id)) return t;
    js = d.createElement(s);
    js.id = id;
    js.src = "https://platform.twitter.com/widgets.j"+"s";
    fjs.parentNode.insertBefore(js, fjs);

    t._e = [];
    t.ready = function(f) {
      t._e.push(f);
    };

    return t;
  }(document, "script", "twitter-wjs"));</script>

  <script>(function(w,d,t,r,u){var f,n,i;w[u]=w[u]||[],f=function(){var o={ti:"5979970"};o.q=w[u],w[u]=new UET(o),w[u].push("pageLoad")},n=d.createElement(t),n.src=r,n.async=1,n.onload=n.onreadystatechange=function(){var s=this.readyState;s&&s!=="loaded"&&s!=="complete"||(f(),n.onload=n.onreadystatechange=null)},i=d.getElementsByTagName(t)[0],i.parentNode.insertBefore(n,i)})(window,document,"script","//bat.bing.com/bat.j"+"s","uetq");window.uetq = window.uetq || [];</script><noscript><img src="https://bat.bing.com/action/0?ti=5979970&amp;Ver=2" height="0" width="0" style="display:none; visibility: hidden;" /></noscript>
  End of Twitter api script -->
	<!--script src="https://www.google-analytics.com/cx/api.js?experiment=UjkTxBPwRGOq_hcaQjz9Ew" async ></script>

  <script type="text/javascript" src="https://www.googleadservices.com/pagead/conversion_async.js?buster=1eqvm" id="mainScript" tag="1eqvm" charset="utf-8" async ></script-->

	<script id="twitter-wjs" src="http://platform.twitter.com/widgets.js">
	</script>
	<script type="text/javascript">
	     window.conf = { 
	       gameIds: {
	         "CS:GO": '730',
	         "Dota 2": '570',
	         "TF2": '440', 
	         "H1Z1:JS": '295110',
	         "H1Z1:KOTK": '433850'
	       },

	       recaptcha_key: "6LckwRwTAAAAABigDuqT-U7p2S_mLq5e2QglAOVt", //google recaptha api key

	       
	       remote_url: window.location.origin, //"http://shitgod.life", // for HTTP requests, if falsy - origin is used
	       remote_checkhost: true,//use remote_url only if page accessed from one of the "remote_users_hosts" array?  

	       
	       remote_socket_url: "//shitgod.life", // for a webSocket connection, used ONLY if host is among "remote_users_hosts" array; Different socket urls are wired base on host in app.controller.js. 
	        
	       remote_users_hosts: ['localhost','138.68.42.106','192.168.0.105','bolt.rip'], //used in remote checks above, if you need to - do NOT remove completely, leave as [] instead.
	       



	       dummy_data: false, //use some built in dummy data, only for FE testing.
	       dev_mode: false, //bypass some checks here and there, turn off for production.
	       jukebox_test: false //playing test song each time could be annoying - separate switch just for that.

	     };

	     window.prepareUrl = function(url, fallback){
	         if (!fallback) fallback = '';
	         var prefix = '';
	         if (conf.remote_url && (!conf.remote_checkhost || ~conf.remote_users_hosts.indexOf(window.location.hostname))) {
	           prefix = conf.remote_url;
	         }
	         if (!prefix) prefix = fallback;     
	         return prefix + url;
	     }; 

	</script>
</head><!-- bannerOpen:$root.sys.banner || $root.warningBanner  -->
<body class="blueTheme chat_shown">
	<!---->
	<div class="app overunder themesNote chinyThemeNote theme">
		<!-- <div ng-if="isIE" class="ie">
    <img src="img/logo.png" alt="">
    <span ng-bind-html="'translate' | translate | htmlSafe"></span>
</div> -->
		<div id="styles_state_mark"></div>
		<div class="nav">
			<div class="true_nav">
				<div class="left_stuff">
					<!--<div class="logo">
						<a href="/">
						<div class="icon-logo big_logo"></div>
						<div class="icon-logo_small small_logo"></div></a>
					</div>-->
					<div class="jackolantern">
						<!-- <div class="icon icon-jackolantern" ng-click="$root.switchHalloween()" ng-class="{active:$root.app.halloween}">                    
                    
                </div> -->
						<div class="dropdown theme_selector">
							<div class="label_holder">
								<div class="rangeLabel">
									<div class="themeIcon blue">
										<!---->
									</div>
								</div>
							</div>
							<ul class="dropdown-menu angular-animate ng-hide">
								<li style="list-style: none; display: inline">
									<div class="head">
										Themes
									</div><!----><!---->
								</li>
								<li><span class="themeIcon blue"><!----></span> <span>Blue</span></li><!----><!----><!---->
								<li><span class="themeIcon dark"><!----></span> <span>Dark</span></li><!----><!----><!---->
								<li><span class="themeIcon light"><!----></span> <span>Light</span></li><!----><!---->
							</ul>
						</div><!---->
						<!-- <div class="tooltip_container angular-animate xmas_tooltip" ng-if="$root.app.xmasThemeNote">
                    <div class="tooltip_body" ng-click="$root.app.xmasThemeNote=false;$root.saveAppLocalStore();">          <div class="icon icon-snowflake2"></div>
                        <div class="icon icon-snowflake3"></div>                    
                        <div class="icon icon-x"></div>
                        <div class="text">Click here to enjoy our new Xmas theme!</div>
                        
                    </div>
                </div> -->
						<!-- <div class="tooltip_container angular-animate chiny_tooltip" ng-if="$root.app.chinyThemeNote">
                    <div class="tooltip_body" ng-click="$root.switchTheme('chiny');$root.app.chinyThemeNote=false;$root.saveAppLocalStore();">          
                                    
                        <div class="icon icon-x" ng-click="$root.app.chinyThemeNote=false;$root.saveAppLocalStore();$event.stopPropagation()"></div>
                        <div class="text">Click here to enjoy our new Chinese New Year theme!</div>
                        
                    </div>
                </div> -->
					</div><!---->
					<!-- <div class="social">
                <a class="icon-tw" target="_blank" href="https://twitter.com/OfficialBoltgg"></a>
            </div> -->
				</div>
				<div class="right_stuff">
					<!-- <div class="dropdown notifications" 
                ng-if="$root.userAuthed" 
                ng-class="{'unread':notificationUnread}"                 
                title="{{'nav_notifications' | translate}}" 
                click-away="notifExpanded=false">

                <div class="label_holder" ng-click="notifExpanded = !notifExpanded;clickNotif();">
                    <div class="rangeLabel">
                        <span class="icon icon-bell"></span>
                        <span class="icon icon-bell_active"></span>
                    </div>                  
                </div>

                 


                <ul class="dropdown-menu angular-animate ng-hide" ng-show="notifExpanded" ng-click="notifExpanded=false">

                    <li class="special">
                        <any class="title" ng-bind-html="'nav_notifications' | translate | htmlSafe"></any>
                        <div class="controls" ng-click="$event.stopPropagation();">
                            <label class="round_switch" 
                                ng-class="{active:userSettings.notify=='off'}" 
                                ng-click="userSettings.notify = userSettings.notify=='on' ? 'off' : 'on';saveSettings();">
                                <span><any ng-bind-html="'nav_mute' | translate | htmlSafe"></any></span>
                                <div class="slider"></div>
                            </label>                            
                        </div>
                    </li>
                    

                    <div class="scrollable-content">
                        <li class="none" ng-if="notificationList.length == 0"><any ng-bind-html="'nav_noNotif' | translate | htmlSafe"></any></li>
                        <li ng-repeat="item in notificationList | orderBy:'timestamp':true" class="notification">
                            <div class="flex">
                                <span class="icon icon-bolt_collat" ng-if="item.type == 'win'"></span>
                                
                                <span>
                                    <span>{{item.message}}</span>                                   
                                    <div class="time">{{$root.fromNow(item.timestamp)}}</div>
                                </span>
                            </div>
                        </li>
                    </div>

                </ul>
            </div> -->
					<div class="sound_control">
						<!---->
						<!---->
						<div class="icon-volume_up"></div><!---->
					</div>
					<div class="lang_selector dropdown">
						<div class="label_holder">
							<div class="rangeLabel">
								<span class="icon icon-ru_flag"></span>
							</div><span class="icon-arrow_down arrow"></span>
						</div>
						<ul class="dropdown-menu angular-animate ng-hide" style="">
							<!---->
							<li><span class="icon icon-en_flag"></span> <span>English</span></li><!---->
							<li><span class="icon icon-cz_flag"></span> <span>Čeština</span></li><!---->
							<li><span class="icon icon-de_flag"></span> <span>Deutsch</span></li><!---->
							<li><span class="icon icon-dk_flag"></span> <span>Dansk</span></li><!---->
							<li><span class="icon icon-es_flag"></span> <span>Español</span></li><!---->
							<li><span class="icon icon-fr_flag"></span> <span>Français</span></li><!---->
							<li><span class="icon icon-pt_flag"></span> <span>Português</span></li><!---->
							<li><span class="icon icon-ru_flag"></span> <span>Русский</span></li><!---->
							<li><span class="icon icon-se_flag"></span> <span>Svenska</span></li><!---->
							<li><span class="icon icon-tr_flag"></span> <span>Türkçe</span></li><!---->
							<li><span class="icon icon-ro_flag"></span> <span>Română</span></li><!---->
							<li><span class="icon icon-sl_flag"></span> <span>Slovenščina</span></li><!---->
							<li><span class="icon icon-nl_flag"></span> <span>Nederlands</span></li><!---->
							<li><span class="icon icon-fi_flag"></span> <span>Suomi</span></li><!---->
							<li><span class="icon icon-el_flag"></span> <span>Ελληνικά</span></li><!---->
							<li><span class="icon icon-no_flag"></span> <span>Norsk</span></li><!---->
							<li><span class="icon icon-pl_flag"></span> <span>Polski</span></li><!---->
							<li><span class="icon icon-ja_flag"></span> <span>日本語</span></li><!---->
							<li><span class="icon icon-th_flag"></span> <span>ไทย</span></li><!---->
							<li><span class="icon icon-zh_flag"></span> <span>中文</span></li><!---->
						</ul>
					</div><!---->
					<!---->
					<div>
						<a onclick="login()" class="button orange_button"><span  class="icon-steam_round"></span><span>Sign in</span></a>
					</div><!---->
					<!-- <button class="button white_button" ng-click="$root.openInventory()" ng-if="$root.user">Deposit/Withdraw ({{$root.inventory.length || 0}})</button>         -->
				</div>
			</div><!-- <div class="global_banner red" ng-if="$root.warningBanner" ng-bind="$root.warningBanner"></div>
    
    <div class="global_banner" ng-class="{'trivia':$root.sys.banner.indexOf('Trivia:') > -1}" ng-if="$root.sys.banner && $root.warningBanner == null">
        <span>
            <span ng-bind-html="$root.sys.banner | linky:'_blank'"></span>
            <span ng-if="$root.sys.gleamid" class="gleam_link"><a ng-click="$root.openGleam({gleamid:$root.sys.gleamid})">Click here</a> to enter.</span>
            
        </span>             
    </div> -->
		</div>
		<div class="icon icon-spiderweb web_tl"></div>
		<div class="icon icon-spiderweb web_br"></div>
		<div class="main">
			<!---->
			<div class="content">
				<!---->
				<div class="chat_hider">
					<div class="icon icon-chat_bubble">
						<div class="icon icon-arrow_right_blue"></div>
					</div>
					<div class="subtle_hider">
						<div class="icon icon-arrow_right_blue"></div>
					</div><!-- <div class="icon icon-x when_shown"></div> -->
				</div><!---->
				<div class="uiv angular-animate noButton">
					<div class="upgrade_view with_recent_upgrades">
						<div class="wrap">
							<!--/////////////////////////SIGN IN SCREEN///////////////////////////////////-->
							<!---->
<div class="authenticate header_padded" ng-if="mode=='auth'">
			<h1 class="moto" translate="signIn_desc"><strong>Upgrade</strong> your CSGO skins with <strong><?=$_SERVER["SERVER_NAME"]?></strong></h1>
			<div class="aspect_container">
				<div class="mascot_container">
					<div class="icon-bolt_mascot">
						<!---->
						<div class="bats_container big_bats">
							<div bat-animated="" class="bat_animated bat-1 animation-running" active="true"><div class="transform_wrap" style="transform: translate3d(11%, 16%, 0px) rotate(-7.66709deg);"><div class="icon icon-bat_sheet" style="width: 600%; height: 100%; transform: translate3d(-66.6667%, 0px, 0px);"></div></div></div>
							<div bat-animated="" class="bat_animated bat-2 animation-running" active="true"><div class="transform_wrap" style="transform: translate3d(-18%, -4%, 0px) rotate(16.544deg);"><div class="icon icon-bat_sheet" style="width: 600%; height: 100%; transform: translate3d(-33.3333%, 0px, 0px);"></div></div></div>
							<div bat-animated="" class="bat_animated bat-3 animation-running" active="true"><div class="transform_wrap" style="transform: translate3d(7%, 19%, 0px) rotate(-4.34349deg);"><div class="icon icon-bat_sheet" style="width: 600%; height: 100%; transform: translate3d(-16.6667%, 0px, 0px);"></div></div></div>
							<div bat-animated="" class="bat_animated bat-4 animation-running" active="true"><div class="transform_wrap" style="transform: translate3d(-10%, -15%, 0px) rotate(7.71312deg);"><div class="icon icon-bat_sheet" style="width: 600%; height: 100%; transform: translate3d(-66.6667%, 0px, 0px);"></div></div></div>
						</div>
					</div>
				</div>
			</div>
			
			
			<a class="button orange_button" onclick="login();">
				<span class="icon icon-steam_round"></span><span onclick="login();">Sign in with Steam</span>
			</a>
		</div>
							<!--//////////////////////////////////////////////////////////////////////////-->
							<!--/////////////////////////UPGRADE GAME///////////////////////////////////-->
							<!---->
						</div>
					</div>
				</div><!-- <div class="level_up_pop angular-animate" ng-if="$root.levelUp">
            <div class="icon-x" ng-click="$root.claimLevels();$root.levelUp=null"></div>
            <div class="top">
                <div class="level"><span>{{levelUp.level}}</span></div>
                <div class="text">
                    <div class="up" ng-bind-html="'level_up' | translate | htmlSafe"></div>
                    <div ng-bind-html="'level_up_grats' | translate | htmlSafe"></div>
                </div>
            </div>
            <hr>

            <div ng-bind-html="'level_up_here_bananas' | translate | htmlSafe"></div>
            <div class="bottom">
                <button ng-click="$root.claimLevels()" class="button orange_button" ng-disabled="glob.claimLevelsInProgress" ng-loading="glob.claimLevelsInProgress" ng-bind-html="'claim_free_bananas' | translate | htmlSafe"></button>
            </div>          
        </div> -->
				<!-- <footer></footer> -->
			</div><!----><!---->
			<div class="recent_upgrades header_padded">
				<!--///////////////////HISTORY/RECENT UPGRADES///////////////////////////////-->
				<!-- <div class="history_wrapper header_padded"> -->
				<div class="head">
					<span>Latest Upgrades</span>
				</div>
				<div class="entries">
					<!---->
					<div class="upgrade_entry angular-animate">
						<div class="user">
							<span class="avatar" style="background-image: url(&quot;https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/3c/3c86f250e0a569a837ee422666db24916afb591e_full.jpg&quot;);"></span> <span class="name">★DeadRiGhTZ★</span>
						</div>
						<div class="inline_data">
							<div class="left">
								<span class="price">$1.33</span>
								<div class="items_preview">
									<!-- <span class="wear" title="{{$root.splitName(upg.from[0]).wear}}" ng-if="upg.from.length==1"> {{$root.splitName(upg.from[0]).short_wear}}</span> -->
									<!---->
									<div class="item" title="TRIUMPH CRATE | 1.33">
										<div class="item_thumb" style="background-image: url(&quot;https://steamcommunity-a.akamaihd.net/economy/image/1MrIl4MIJ_pNBhReTwBpxJ8G4GM4OekG2V3huqL5LCqk1i0eEBQwwm_zt8cl-xrtvDXIxynVGhd-5BiafXODPlpqEsGh9Fmn3urGSv4/250/250&quot;);"></div>
									</div><!---->
									<!---->
								</div>
								<div class="names">
									<!----> <span></span>
									<div class="first">
										<span>TRIUMPH CRATE</span>
									</div>
									<div>
										<span><span class="last"></span> <span class="wear" title=""></span></span>
									</div><!---->
									 <!---->
								</div>
								<div class="underline"></div>
							</div>
							<div class="icon-upgrade_arrow"></div>
							<div class="right">
								<span class="price">$2.59</span>
								<div class="items_preview">
									<!-- <span class="wear" title="{{$root.splitName(upg.to[0]).wear}}" ng-if="upg.to.length==1"> {{$root.splitName(upg.to[0]).short_wear}}</span>
-->
									<!---->
									<div class="item" title="Orange Shirt | 2.59">
										<div class="item_thumb" style="background-image: url(&quot;https://steamcommunity-a.akamaihd.net/economy/image/1MrIl4MIJ_pNBhReTwBpxJ8G4GM4OekG2V3huqL5LCqk1i0eEBQwwm_zt8cl-xrtvDXIxynVGhd-5Biaf3aCP1pqEsGh9FmnT39ed1Y/250/250&quot;);"></div>
									</div><!---->
									<!---->
								</div>
								<div class="names">
									<!----> <span></span>
									<div class="first">
										<span>Orange Shirt</span>
									</div>
									<div>
										<span><span class="last"></span> <span class="wear" title=""></span></span>
									</div><!---->
									 <!---->
								</div>
								<div class="underline"></div>
							</div>
						</div>
					</div><!---->
					<div class="upgrade_entry angular-animate">
						<div class="user">
							<span class="avatar" style="background-image: url(&quot;https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/89/899f8a18a7f8efd4fe991bfb6fa985f9bef4c634_full.jpg&quot;);"></span> <span class="name">Chou bolt.gg</span>
						</div>
						<div class="inline_data">
							<div class="left">
								<span class="price">$0.53</span>
								<div class="items_preview">
									<!-- <span class="wear" title="{{$root.splitName(upg.from[0]).wear}}" ng-if="upg.from.length==1"> {{$root.splitName(upg.from[0]).short_wear}}</span> -->
									<!---->
									<div class="item" title="Checked Shirt (White) | 0.53">
										<div class="item_thumb" style="background-image: url(&quot;https://steamcommunity-a.akamaihd.net/economy/image/1MrIl4MIJ_pNBhReTwBpxJ8G4GM4OekG2V3huqL5LCqk1i0eEBQwwm_zt8cl-xrtvDXIxynVGhd-5BiafXaCP1pqE8Wh9FmnfIBZblU/250/250&quot;);"></div>
									</div><!---->
									<!---->
								</div>
								<div class="names">
									<!----> <span></span>
									<div class="first">
										<span>Checked Shirt (White)</span>
									</div>
									<div>
										<span><span class="last"></span> <span class="wear" title=""></span></span>
									</div><!---->
									 <!---->
								</div>
								<div class="underline"></div>
							</div>
							<div class="icon-upgrade_arrow"></div>
							<div class="right">
								<span class="price">$0.62</span>
								<div class="items_preview">
									<!-- <span class="wear" title="{{$root.splitName(upg.to[0]).wear}}" ng-if="upg.to.length==1"> {{$root.splitName(upg.to[0]).short_wear}}</span>
-->
									<!---->
									<div class="item" title="Combat Pants (Coral) | 0.62">
										<div class="item_thumb" style="background-image: url(&quot;https://steamcommunity-a.akamaihd.net/economy/image/1MrIl4MIJ_pNBhReTwBpxJ8G4GM4OekG2V3huqL5LCqk1i0eEBQwwm_zt8cl-xrtvDXIxynVGhd-5BiafXaCPFpqEcKh9Fmnt6jp_9c/250/250&quot;);"></div>
									</div><!---->
									<!---->
								</div>
								<div class="names">
									<!----> <span></span>
									<div class="first">
										<span>Combat Pants (Coral)</span>
									</div>
									<div>
										<span><span class="last"></span> <span class="wear" title=""></span></span>
									</div><!---->
									 <!---->
								</div>
								<div class="underline"></div>
							</div>
						</div>
					</div><!---->
					<div class="upgrade_entry angular-animate">
						<div class="user">
							<span class="avatar" style="background-image: url(&quot;https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/3c/3c86f250e0a569a837ee422666db24916afb591e_full.jpg&quot;);"></span> <span class="name">★DeadRiGhTZ★</span>
						</div>
						<div class="inline_data">
							<div class="left">
								<span class="price">$0.15</span>
								<div class="items_preview">
									<!-- <span class="wear" title="{{$root.splitName(upg.from[0]).wear}}" ng-if="upg.from.length==1"> {{$root.splitName(upg.from[0]).short_wear}}</span> -->
									<!---->
									<div class="item" title="Checkered Shirt (Coral) | 0.15">
										<div class="item_thumb" style="background-image: url(&quot;https://steamcommunity-a.akamaihd.net/economy/image/1MrIl4MIJ_pNBhReTwBpxJ8G4GM4OekG2V3huqL5LCqk1i0eEBQwwm_zt8cl-xrtvDXIxynVGhd-5BiafXaCP1pqEcGh9FmnwaHMNUk/250/250&quot;);"></div>
									</div><!---->
									<!---->
								</div>
								<div class="names">
									<!----> <span></span>
									<div class="first">
										<span>Checkered Shirt (Coral)</span>
									</div>
									<div>
										<span><span class="last"></span> <span class="wear" title=""></span></span>
									</div><!---->
									 <!---->
								</div>
								<div class="underline"></div>
							</div>
							<div class="icon-upgrade_arrow"></div>
							<div class="right">
								<span class="price">$0.77</span>
								<div class="items_preview">
									<!-- <span class="wear" title="{{$root.splitName(upg.to[0]).wear}}" ng-if="upg.to.length==1"> {{$root.splitName(upg.to[0]).short_wear}}</span>
-->
									<!---->
									<div class="item" title="Hi-top Canvas Sneakers (Pink) | 0.77">
										<div class="item_thumb" style="background-image: url(&quot;https://steamcommunity-a.akamaihd.net/economy/image/1MrIl4MIJ_pNBhReTwBpxJ8G4GM4OekG2V3huqL5LCqk1i0eEBQwwm_zt8cl-xrtvDXIxynVGhd-5BiafXaCPVpqE8Sh9FmnirxVltA/250/250&quot;);"></div>
									</div><!---->
									<!---->
								</div>
								<div class="names">
									<!----> <span></span>
									<div class="first">
										<span>Hi-top Canvas Sneakers (Pink)</span>
									</div>
									<div>
										<span><span class="last"></span> <span class="wear" title=""></span></span>
									</div><!---->
									 <!---->
								</div>
								<div class="underline"></div>
							</div>
						</div>
					</div><!---->
					<div class="upgrade_entry angular-animate">
						<div class="user">
							<span class="avatar" style="background-image: url(&quot;https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/3c/3c86f250e0a569a837ee422666db24916afb591e_full.jpg&quot;);"></span> <span class="name">★DeadRiGhTZ★</span>
						</div>
						<div class="inline_data">
							<div class="left">
								<span class="price">$1.33</span>
								<div class="items_preview">
									<!-- <span class="wear" title="{{$root.splitName(upg.from[0]).wear}}" ng-if="upg.from.length==1"> {{$root.splitName(upg.from[0]).short_wear}}</span> -->
									<!---->
									<div class="item" title="TRIUMPH CRATE | 1.33">
										<div class="item_thumb" style="background-image: url(&quot;https://steamcommunity-a.akamaihd.net/economy/image/1MrIl4MIJ_pNBhReTwBpxJ8G4GM4OekG2V3huqL5LCqk1i0eEBQwwm_zt8cl-xrtvDXIxynVGhd-5BiafXODPlpqEsGh9Fmn3urGSv4/250/250&quot;);"></div>
									</div><!---->
									<!---->
								</div>
								<div class="names">
									<!----> <span></span>
									<div class="first">
										<span>TRIUMPH CRATE</span>
									</div>
									<div>
										<span><span class="last"></span> <span class="wear" title=""></span></span>
									</div><!---->
									 <!---->
								</div>
								<div class="underline"></div>
							</div>
							<div class="icon-upgrade_arrow"></div>
							<div class="right">
								<span class="price">$6.68</span>
								<div class="items_preview">
									<!-- <span class="wear" title="{{$root.splitName(upg.to[0]).wear}}" ng-if="upg.to.length==1"> {{$root.splitName(upg.to[0]).short_wear}}</span>
-->
									<!---->
									<div class="item" title="Coat (Gray) | 6.68">
										<div class="item_thumb" style="background-image: url(&quot;https://steamcommunity-a.akamaihd.net/economy/image/1MrIl4MIJ_pNBhReTwBpxJ8G4GM4OekG2V3huqL5LCqk1i0eEBQwwm_zt8cl-xrtvDXIxynVGhd-5BiafXaCO1pqEsuh9Fmn8T6ISMY/250/250&quot;);"></div>
									</div><!---->
									<!---->
								</div>
								<div class="names">
									<!----> <span></span>
									<div class="first">
										<span>Coat (Gray)</span>
									</div>
									<div>
										<span><span class="last"></span> <span class="wear" title=""></span></span>
									</div><!---->
									 <!---->
								</div>
								<div class="underline"></div>
							</div>
						</div>
					</div><!---->
					<div class="upgrade_entry angular-animate">
						<div class="user">
							<span class="avatar" style="background-image: url(&quot;https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/89/899f8a18a7f8efd4fe991bfb6fa985f9bef4c634_full.jpg&quot;);"></span> <span class="name">Chou bolt.gg</span>
						</div>
						<div class="inline_data">
							<div class="left">
								<span class="price">$0.25</span>
								<div class="items_preview">
									<!-- <span class="wear" title="{{$root.splitName(upg.from[0]).wear}}" ng-if="upg.from.length==1"> {{$root.splitName(upg.from[0]).short_wear}}</span> -->
									<!---->
									<div class="item" title="SURVIVOR CRATE | 0.25">
										<div class="item_thumb" style="background-image: url(&quot;https://steamcommunity-a.akamaihd.net/economy/image/1MrIl4MIJ_pNBhReTwBpxJ8G4GM4OekG2V3huqL5LCqk1i0eEBQwwm_zt8cl-xrtvDXIxynVGhd-5BiafXOCPlpqEsGh9FmnnPr6n2I/250/250&quot;);"></div>
									</div><!---->
									<!---->
								</div>
								<div class="names">
									<!----> <span></span>
									<div class="first">
										<span>SURVIVOR CRATE</span>
									</div>
									<div>
										<span><span class="last"></span> <span class="wear" title=""></span></span>
									</div><!---->
									 <!---->
								</div>
								<div class="underline"></div>
							</div>
							<div class="icon-upgrade_arrow"></div>
							<div class="right">
								<span class="price">$0.53</span>
								<div class="items_preview">
									<!-- <span class="wear" title="{{$root.splitName(upg.to[0]).wear}}" ng-if="upg.to.length==1"> {{$root.splitName(upg.to[0]).short_wear}}</span>
-->
									<!---->
									<div class="item" title="Checked Shirt (White) | 0.53">
										<div class="item_thumb" style="background-image: url(&quot;https://steamcommunity-a.akamaihd.net/economy/image/1MrIl4MIJ_pNBhReTwBpxJ8G4GM4OekG2V3huqL5LCqk1i0eEBQwwm_zt8cl-xrtvDXIxynVGhd-5BiafXaCP1pqE8Wh9FmnfIBZblU/250/250&quot;);"></div>
									</div><!---->
									<!---->
								</div>
								<div class="names">
									<!----> <span></span>
									<div class="first">
										<span>Checked Shirt (White)</span>
									</div>
									<div>
										<span><span class="last"></span> <span class="wear" title=""></span></span>
									</div><!---->
									 <!---->
								</div>
								<div class="underline"></div>
							</div>
						</div>
					</div><!---->
					<div class="upgrade_entry angular-animate">
						<div class="user">
							<span class="avatar" style="background-image: url(&quot;https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/3c/3c86f250e0a569a837ee422666db24916afb591e_full.jpg&quot;);"></span> <span class="name">★DeadRiGhTZ★</span>
						</div>
						<div class="inline_data">
							<div class="left">
								<span class="price">$0.80</span>
								<div class="items_preview">
									<!-- <span class="wear" title="{{$root.splitName(upg.from[0]).wear}}" ng-if="upg.from.length==1"> {{$root.splitName(upg.from[0]).short_wear}}</span> -->
									<!---->
									<div class="item" title="Punk Knuckle Gloves (Black) | 0.8">
										<div class="item_thumb" style="background-image: url(&quot;https://steamcommunity-a.akamaihd.net/economy/image/1MrIl4MIJ_pNBhReTwBpxJ8G4GM4OekG2V3huqL5LCqk1i0eEBQwwm_zt8cl-xrtvDXIxynVGhd-5BiafXaCOlpqEsah9Fmn9poiWhc/250/250&quot;);"></div>
									</div><!---->
									<!---->
								</div>
								<div class="names">
									<!----> <span></span>
									<div class="first">
										<span>Punk Knuckle Gloves (Black)</span>
									</div>
									<div>
										<span><span class="last"></span> <span class="wear" title=""></span></span>
									</div><!---->
									 <!---->
								</div>
								<div class="underline"></div>
							</div>
							<div class="icon-upgrade_arrow"></div>
							<div class="right">
								<span class="price">$1.33</span>
								<div class="items_preview">
									<!-- <span class="wear" title="{{$root.splitName(upg.to[0]).wear}}" ng-if="upg.to.length==1"> {{$root.splitName(upg.to[0]).short_wear}}</span>
-->
									<!---->
									<div class="item" title="TRIUMPH CRATE | 1.33">
										<div class="item_thumb" style="background-image: url(&quot;https://steamcommunity-a.akamaihd.net/economy/image/1MrIl4MIJ_pNBhReTwBpxJ8G4GM4OekG2V3huqL5LCqk1i0eEBQwwm_zt8cl-xrtvDXIxynVGhd-5BiafXODPlpqEsGh9Fmn3urGSv4/250/250&quot;);"></div>
									</div><!---->
									<!---->
								</div>
								<div class="names">
									<!----> <span></span>
									<div class="first">
										<span>TRIUMPH CRATE</span>
									</div>
									<div>
										<span><span class="last"></span> <span class="wear" title=""></span></span>
									</div><!---->
									 <!---->
								</div>
								<div class="underline"></div>
							</div>
						</div>
					</div><!---->
					<div class="upgrade_entry angular-animate">
						<div class="user">
							<span class="avatar" style="background-image: url(&quot;https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/92/920d6545483effec2c8473aca562993ade23c981_full.jpg&quot;);"></span> <span class="name">FewJER</span>
						</div>
						<div class="inline_data">
							<div class="left">
								<span class="price">$12.92</span>
								<div class="items_preview">
									<!-- <span class="wear" title="{{$root.splitName(upg.from[0]).wear}}" ng-if="upg.from.length==1"> {{$root.splitName(upg.from[0]).short_wear}}</span> -->
									<!---->
									<div class="item" title="Tracksuit Pants (Yellow) | 12.92">
										<div class="item_thumb" style="background-image: url(&quot;https://steamcommunity-a.akamaihd.net/economy/image/1MrIl4MIJ_pNBhReTwBpxJ8G4GM4OekG2V3huqL5LCqk1i0eEBQwwm_zt8cl-xrtvDXIxynVGhd-5Biaf3aCPFpqEsSh9FmnKhGo1gA/250/250&quot;);"></div>
									</div><!---->
									<!---->
								</div>
								<div class="names">
									<!----> <span></span>
									<div class="first">
										<span>Tracksuit Pants (Yellow)</span>
									</div>
									<div>
										<span><span class="last"></span> <span class="wear" title=""></span></span>
									</div><!---->
									 <!---->
								</div>
								<div class="underline"></div>
							</div>
							<div class="icon-upgrade_arrow"></div>
							<div class="right">
								<span class="price">$24.64</span>
								<div class="items_preview">
									<!-- <span class="wear" title="{{$root.splitName(upg.to[0]).wear}}" ng-if="upg.to.length==1"> {{$root.splitName(upg.to[0]).short_wear}}</span>
-->
									<!---->
									<div class="item" title="Sleeveless Biker Jacket (Black) | 24.64">
										<div class="item_thumb" style="background-image: url(&quot;https://steamcommunity-a.akamaihd.net/economy/image/1MrIl4MIJ_pNBhReTwBpxJ8G4GM4OekG2V3huqL5LCqk1i0eEBQwwm_zt8cl-xrtvDXIxynVGhd-5BiafXaCO1pqE8Kh9FmnOkNYF7s/250/250&quot;);"></div>
									</div><!---->
									<!---->
								</div>
								<div class="names">
									<!----> <span></span>
									<div class="first">
										<span>Sleeveless Biker Jacket (Black)</span>
									</div>
									<div>
										<span><span class="last"></span> <span class="wear" title=""></span></span>
									</div><!---->
									 <!---->
								</div>
								<div class="underline"></div>
							</div>
						</div>
					</div><!---->
					<div class="upgrade_entry angular-animate">
						<div class="user">
							<span class="avatar" style="background-image: url(&quot;https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/92/920d6545483effec2c8473aca562993ade23c981_full.jpg&quot;);"></span> <span class="name">FewJER</span>
						</div>
						<div class="inline_data">
							<div class="left">
								<span class="price">$24.64</span>
								<div class="items_preview">
									<!-- <span class="wear" title="{{$root.splitName(upg.from[0]).wear}}" ng-if="upg.from.length==1"> {{$root.splitName(upg.from[0]).short_wear}}</span> -->
									<!---->
									<div class="item" title="Sleeveless Biker Jacket (Black) | 24.64">
										<div class="item_thumb" style="background-image: url(&quot;https://steamcommunity-a.akamaihd.net/economy/image/1MrIl4MIJ_pNBhReTwBpxJ8G4GM4OekG2V3huqL5LCqk1i0eEBQwwm_zt8cl-xrtvDXIxynVGhd-5BiafXaCO1pqE8Kh9FmnOkNYF7s/250/250&quot;);"></div>
									</div><!---->
									<!---->
								</div>
								<div class="names">
									<!----> <span></span>
									<div class="first">
										<span>Sleeveless Biker Jacket (Black)</span>
									</div>
									<div>
										<span><span class="last"></span> <span class="wear" title=""></span></span>
									</div><!---->
									 <!---->
								</div>
								<div class="underline"></div>
							</div>
							<div class="icon-upgrade_arrow"></div>
							<div class="right">
								<span class="price">$43.30</span>
								<div class="items_preview manyItems">
									<!-- <span class="wear" title="{{$root.splitName(upg.to[0]).wear}}" ng-if="upg.to.length==1"> {{$root.splitName(upg.to[0]).short_wear}}</span>
-->
									<!---->
									<div class="item" title="Tracksuit Top (Yellow) | 17.46">
										<div class="item_thumb" style="background-image: url(&quot;https://steamcommunity-a.akamaihd.net/economy/image/1MrIl4MIJ_pNBhReTwBpxJ8G4GM4OekG2V3huqL5LCqk1i0eEBQwwm_zt8cl-xrtvDXIxynVGhd-5Biaf3aCO1pqEsah9FmnYzw9AZg/250/250&quot;);"></div>
									</div><!---->
									<div class="item" title="Tracksuit Pants (Yellow) | 12.92">
										<div class="item_thumb" style="background-image: url(&quot;https://steamcommunity-a.akamaihd.net/economy/image/1MrIl4MIJ_pNBhReTwBpxJ8G4GM4OekG2V3huqL5LCqk1i0eEBQwwm_zt8cl-xrtvDXIxynVGhd-5Biaf3aCPFpqEsSh9FmnKhGo1gA/250/250&quot;);"></div>
									</div><!---->
									<div class="item" title="Tracksuit Pants (Yellow) | 12.92">
										<div class="item_thumb" style="background-image: url(&quot;https://steamcommunity-a.akamaihd.net/economy/image/1MrIl4MIJ_pNBhReTwBpxJ8G4GM4OekG2V3huqL5LCqk1i0eEBQwwm_zt8cl-xrtvDXIxynVGhd-5Biaf3aCPFpqEsSh9FmnKhGo1gA/250/250&quot;);"></div>
									</div><!---->
									<!---->
								</div>
								<div class="names">
									<!---->
									<!----> <span class="items_amount"></span>
									<div class="first">
										<span class="items_amount">3 items</span>
									</div><span class="items_amount"></span><!---->
								</div>
								<div class="underline"></div>
							</div>
						</div>
					</div><!---->
					<div class="upgrade_entry angular-animate">
						<div class="user">
							<span class="avatar" style="background-image: url(&quot;https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/92/920d6545483effec2c8473aca562993ade23c981_full.jpg&quot;);"></span> <span class="name">FewJER</span>
						</div>
						<div class="inline_data">
							<div class="left">
								<span class="price">$14.90</span>
								<div class="items_preview">
									<!-- <span class="wear" title="{{$root.splitName(upg.from[0]).wear}}" ng-if="upg.from.length==1"> {{$root.splitName(upg.from[0]).short_wear}}</span> -->
									<!---->
									<div class="item" title="Zest Silk Scarf | 14.9">
										<div class="item_thumb" style="background-image: url(&quot;https://steamcommunity-a.akamaihd.net/economy/image/1MrIl4MIJ_pNBhReTwBpxJ8G4GM4OekG2V3huqL5LCqk1i0eEBQwwm_zt8cl-xrtvDXIxynVGhd-5BiafXaCOVpqEsSh9Fmnf-BWpoE/250/250&quot;);"></div>
									</div><!---->
									<!---->
								</div>
								<div class="names">
									<!----> <span></span>
									<div class="first">
										<span>Zest Silk Scarf</span>
									</div>
									<div>
										<span><span class="last"></span> <span class="wear" title=""></span></span>
									</div><!---->
									 <!---->
								</div>
								<div class="underline"></div>
							</div>
							<div class="icon-upgrade_arrow"></div>
							<div class="right">
								<span class="price">$24.64</span>
								<div class="items_preview">
									<!-- <span class="wear" title="{{$root.splitName(upg.to[0]).wear}}" ng-if="upg.to.length==1"> {{$root.splitName(upg.to[0]).short_wear}}</span>
-->
									<!---->
									<div class="item" title="Sleeveless Biker Jacket (Black) | 24.64">
										<div class="item_thumb" style="background-image: url(&quot;https://steamcommunity-a.akamaihd.net/economy/image/1MrIl4MIJ_pNBhReTwBpxJ8G4GM4OekG2V3huqL5LCqk1i0eEBQwwm_zt8cl-xrtvDXIxynVGhd-5BiafXaCO1pqE8Kh9FmnOkNYF7s/250/250&quot;);"></div>
									</div><!---->
									<!---->
								</div>
								<div class="names">
									<!----> <span></span>
									<div class="first">
										<span>Sleeveless Biker Jacket (Black)</span>
									</div>
									<div>
										<span><span class="last"></span> <span class="wear" title=""></span></span>
									</div><!---->
									 <!---->
								</div>
								<div class="underline"></div>
							</div>
						</div>
					</div><!---->
					<div class="upgrade_entry angular-animate">
						<div class="user">
							<span class="avatar" style="background-image: url(&quot;https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/92/920d6545483effec2c8473aca562993ade23c981_full.jpg&quot;);"></span> <span class="name">FewJER</span>
						</div>
						<div class="inline_data">
							<div class="left">
								<span class="price">$7.49</span>
								<div class="items_preview">
									<!-- <span class="wear" title="{{$root.splitName(upg.from[0]).wear}}" ng-if="upg.from.length==1"> {{$root.splitName(upg.from[0]).short_wear}}</span> -->
									<!---->
									<div class="item" title="Floral Retro Jacket | 7.49">
										<div class="item_thumb" style="background-image: url(&quot;https://steamcommunity-a.akamaihd.net/economy/image/1MrIl4MIJ_pNBhReTwBpxJ8G4GM4OekG2V3huqL5LCqk1i0eEBQwwm_zt8cl-xrtvDXIxynVGhd-5BiafXaCO1pqEMeh9FmnnoJBOX0/250/250&quot;);"></div>
									</div><!---->
									<!---->
								</div>
								<div class="names">
									<!----> <span></span>
									<div class="first">
										<span>Floral Retro Jacket</span>
									</div>
									<div>
										<span><span class="last"></span> <span class="wear" title=""></span></span>
									</div><!---->
									 <!---->
								</div>
								<div class="underline"></div>
							</div>
							<div class="icon-upgrade_arrow"></div>
							<div class="right">
								<span class="price">$14.90</span>
								<div class="items_preview">
									<!-- <span class="wear" title="{{$root.splitName(upg.to[0]).wear}}" ng-if="upg.to.length==1"> {{$root.splitName(upg.to[0]).short_wear}}</span>
-->
									<!---->
									<div class="item" title="Zest Silk Scarf | 14.9">
										<div class="item_thumb" style="background-image: url(&quot;https://steamcommunity-a.akamaihd.net/economy/image/1MrIl4MIJ_pNBhReTwBpxJ8G4GM4OekG2V3huqL5LCqk1i0eEBQwwm_zt8cl-xrtvDXIxynVGhd-5BiafXaCOVpqEsSh9Fmnf-BWpoE/250/250&quot;);"></div>
									</div><!---->
									<!---->
								</div>
								<div class="names">
									<!----> <span></span>
									<div class="first">
										<span>Zest Silk Scarf</span>
									</div>
									<div>
										<span><span class="last"></span> <span class="wear" title=""></span></span>
									</div><!---->
									 <!---->
								</div>
								<div class="underline"></div>
							</div>
						</div>
					</div><!---->
					<div class="upgrade_entry angular-animate">
						<div class="user">
							<span class="avatar" style="background-image: url(&quot;https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/92/920d6545483effec2c8473aca562993ade23c981_full.jpg&quot;);"></span> <span class="name">FewJER</span>
						</div>
						<div class="inline_data">
							<div class="left">
								<span class="price">$3.74</span>
								<div class="items_preview">
									<!-- <span class="wear" title="{{$root.splitName(upg.from[0]).wear}}" ng-if="upg.from.length==1"> {{$root.splitName(upg.from[0]).short_wear}}</span> -->
									<!---->
									<div class="item" title="Rugged (Orange) - Kar98k | 3.74">
										<div class="item_thumb" style="background-image: url(&quot;https://steamcommunity-a.akamaihd.net/economy/image/1MrIl4MIJ_pNBhReTwBpxJ8G4GM4OekG2V3huqL5LCqk1i0eEBQwwm_zt8cl-xrtvDXIxynVGhd-5BiafXWCP1pqEcSh9FmnJtFy7Cs/250/250&quot;);"></div>
									</div><!---->
									<!---->
								</div>
								<div class="names">
									<!----> <span></span>
									<div class="first">
										<span>Rugged (Orange) - Kar98k</span>
									</div>
									<div>
										<span><span class="last"></span> <span class="wear" title=""></span></span>
									</div><!---->
									 <!---->
								</div>
								<div class="underline"></div>
							</div>
							<div class="icon-upgrade_arrow"></div>
							<div class="right">
								<span class="price">$7.49</span>
								<div class="items_preview">
									<!-- <span class="wear" title="{{$root.splitName(upg.to[0]).wear}}" ng-if="upg.to.length==1"> {{$root.splitName(upg.to[0]).short_wear}}</span>
-->
									<!---->
									<div class="item" title="Floral Retro Jacket | 7.49">
										<div class="item_thumb" style="background-image: url(&quot;https://steamcommunity-a.akamaihd.net/economy/image/1MrIl4MIJ_pNBhReTwBpxJ8G4GM4OekG2V3huqL5LCqk1i0eEBQwwm_zt8cl-xrtvDXIxynVGhd-5BiafXaCO1pqEMeh9FmnnoJBOX0/250/250&quot;);"></div>
									</div><!---->
									<!---->
								</div>
								<div class="names">
									<!----> <span></span>
									<div class="first">
										<span>Floral Retro Jacket</span>
									</div>
									<div>
										<span><span class="last"></span> <span class="wear" title=""></span></span>
									</div><!---->
									 <!---->
								</div>
								<div class="underline"></div>
							</div>
						</div>
					</div><!---->
					<div class="upgrade_entry angular-animate">
						<div class="user">
							<span class="avatar" style="background-image: url(&quot;https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/ae/ae511707144e7ac52e7ed12252aa9bd416c1e8a0_full.jpg&quot;);"></span> <span class="name">see you gocase.pro</span>
						</div>
						<div class="inline_data">
							<div class="left">
								<span class="price">$0.63</span>
								<div class="items_preview">
									<!-- <span class="wear" title="{{$root.splitName(upg.from[0]).wear}}" ng-if="upg.from.length==1"> {{$root.splitName(upg.from[0]).short_wear}}</span> -->
									<!---->
									<div class="item" title="Urban Padded Jacket | 0.63">
										<div class="item_thumb" style="background-image: url(&quot;https://steamcommunity-a.akamaihd.net/economy/image/1MrIl4MIJ_pNBhReTwBpxJ8G4GM4OekG2V3huqL5LCqk1i0eEBQwwm_zt8cl-xrtvDXIxynVGhd-5BiafXaCO1pqEsKh9FmnT0WmO4w/250/250&quot;);"></div>
									</div><!---->
									<!---->
								</div>
								<div class="names">
									<!----> <span></span>
									<div class="first">
										<span>Urban Padded Jacket</span>
									</div>
									<div>
										<span><span class="last"></span> <span class="wear" title=""></span></span>
									</div><!---->
									 <!---->
								</div>
								<div class="underline"></div>
							</div>
							<div class="icon-upgrade_arrow"></div>
							<div class="right">
								<span class="price">$1.09</span>
								<div class="items_preview">
									<!-- <span class="wear" title="{{$root.splitName(upg.to[0]).wear}}" ng-if="upg.to.length==1"> {{$root.splitName(upg.to[0]).short_wear}}</span>
-->
									<!---->
									<div class="item" title="Baggy Pants (Black) | 1.09">
										<div class="item_thumb" style="background-image: url(&quot;https://steamcommunity-a.akamaihd.net/economy/image/1MrIl4MIJ_pNBhReTwBpxJ8G4GM4OekG2V3huqL5LCqk1i0eEBQwwm_zt8cl-xrtvDXIxynVGhd-5BiafXaCPFpqE8uh9Fmn0LhHpVI/250/250&quot;);"></div>
									</div><!---->
									<!---->
								</div>
								<div class="names">
									<!----> <span></span>
									<div class="first">
										<span>Baggy Pants (Black)</span>
									</div>
									<div>
										<span><span class="last"></span> <span class="wear" title=""></span></span>
									</div><!---->
									 <!---->
								</div>
								<div class="underline"></div>
							</div>
						</div>
					</div><!---->
					<div class="upgrade_entry angular-animate">
						<div class="user">
							<span class="avatar" style="background-image: url(&quot;https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/1f/1f58964ee9dce1fbd8967b74bb709b2594007f9e_full.jpg&quot;);"></span> <span class="name">Distilled SKINHUB.COM PVPRO.COM</span>
						</div>
						<div class="inline_data">
							<div class="left">
								<span class="price">$0.20</span>
								<div class="items_preview">
									<!-- <span class="wear" title="{{$root.splitName(upg.from[0]).wear}}" ng-if="upg.from.length==1"> {{$root.splitName(upg.from[0]).short_wear}}</span> -->
									<!---->
									<div class="item" title="Bloody Tank Top (White) | 0.2">
										<div class="item_thumb" style="background-image: url(&quot;https://steamcommunity-a.akamaihd.net/economy/image/1MrIl4MIJ_pNBhReTwBpxJ8G4GM4OekG2V3huqL5LCqk1i0eEBQwwm_zt8cl-xrtvDXIxynVGhd-5BiafXaCP1pqEsKh9FmnW_C6WQ0/250/250&quot;);"></div>
									</div><!---->
									<!---->
								</div>
								<div class="names">
									<!----> <span></span>
									<div class="first">
										<span>Bloody Tank Top (White)</span>
									</div>
									<div>
										<span><span class="last"></span> <span class="wear" title=""></span></span>
									</div><!---->
									 <!---->
								</div>
								<div class="underline"></div>
							</div>
							<div class="icon-upgrade_arrow"></div>
							<div class="right">
								<span class="price">$0.24</span>
								<div class="items_preview">
									<!-- <span class="wear" title="{{$root.splitName(upg.to[0]).wear}}" ng-if="upg.to.length==1"> {{$root.splitName(upg.to[0]).short_wear}}</span>
-->
									<!---->
									<div class="item" title="Punk Glasses | 0.24">
										<div class="item_thumb" style="background-image: url(&quot;https://steamcommunity-a.akamaihd.net/economy/image/1MrIl4MIJ_pNBhReTwBpxJ8G4GM4OekG2V3huqL5LCqk1i0eEBQwwm_zt8cl-xrtvDXIxynVGhd-5BiafXaCNlpqEsKh9FmnvPrQ03Y/250/250&quot;);"></div>
									</div><!---->
									<!---->
								</div>
								<div class="names">
									<!----> <span></span>
									<div class="first">
										<span>Punk Glasses</span>
									</div>
									<div>
										<span><span class="last"></span> <span class="wear" title=""></span></span>
									</div><!---->
									 <!---->
								</div>
								<div class="underline"></div>
							</div>
						</div>
					</div><!---->
					<div class="upgrade_entry angular-animate">
						<div class="user">
							<span class="avatar" style="background-image: url(&quot;https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/25/258b38da0a17b550540f6e019a70e2533861158f_full.jpg&quot;);"></span> <span class="name">MarkyPeezy swap.gg tradeit.gg</span>
						</div>
						<div class="inline_data">
							<div class="left">
								<span class="price">$0.42</span>
								<div class="items_preview">
									<!-- <span class="wear" title="{{$root.splitName(upg.from[0]).wear}}" ng-if="upg.from.length==1"> {{$root.splitName(upg.from[0]).short_wear}}</span> -->
									<!---->
									<div class="item" title="BIKER CRATE | 0.42">
										<div class="item_thumb" style="background-image: url(&quot;https://steamcommunity-a.akamaihd.net/economy/image/1MrIl4MIJ_pNBhReTwBpxJ8G4GM4OekG2V3huqL5LCqk1i0eEBQwwm_zt8cl-xrtvDXIxynVGhd-5BiafXOCPlpqEsCh9FmnSyk7eSw/250/250&quot;);"></div>
									</div><!---->
									<!---->
								</div>
								<div class="names">
									<!----> <span></span>
									<div class="first">
										<span>BIKER CRATE</span>
									</div>
									<div>
										<span><span class="last"></span> <span class="wear" title=""></span></span>
									</div><!---->
									 <!---->
								</div>
								<div class="underline"></div>
							</div>
							<div class="icon-upgrade_arrow"></div>
							<div class="right">
								<span class="price">$0.85</span>
								<div class="items_preview">
									<!-- <span class="wear" title="{{$root.splitName(upg.to[0]).wear}}" ng-if="upg.to.length==1"> {{$root.splitName(upg.to[0]).short_wear}}</span>
-->
									<!---->
									<div class="item" title="Silver Plate - DP-28 | 0.85">
										<div class="item_thumb" style="background-image: url(&quot;https://steamcommunity-a.akamaihd.net/economy/image/1MrIl4MIJ_pNBhReTwBpxJ8G4GM4OekG2V3huqL5LCqk1i0eEBQwwm_zt8cl-xrtvDXIxynVGhd-5BiafXWCP1pqE8Ch9FmnNMjcaD4/250/250&quot;);"></div>
									</div><!---->
									<!---->
								</div>
								<div class="names">
									<!----> <span></span>
									<div class="first">
										<span>Silver Plate - DP-28</span>
									</div>
									<div>
										<span><span class="last"></span> <span class="wear" title=""></span></span>
									</div><!---->
									 <!---->
								</div>
								<div class="underline"></div>
							</div>
						</div>
					</div><!---->
					<div class="upgrade_entry angular-animate">
						<div class="user">
							<span class="avatar" style="background-image: url(&quot;https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/1f/1f58964ee9dce1fbd8967b74bb709b2594007f9e_full.jpg&quot;);"></span> <span class="name">Distilled SKINHUB.COM PVPRO.COM</span>
						</div>
						<div class="inline_data">
							<div class="left">
								<span class="price">$0.18</span>
								<div class="items_preview">
									<!-- <span class="wear" title="{{$root.splitName(upg.from[0]).wear}}" ng-if="upg.from.length==1"> {{$root.splitName(upg.from[0]).short_wear}}</span> -->
									<!---->
									<div class="item" title="Long Leather Boots (Brown) | 0.18">
										<div class="item_thumb" style="background-image: url(&quot;https://steamcommunity-a.akamaihd.net/economy/image/1MrIl4MIJ_pNBhReTwBpxJ8G4GM4OekG2V3huqL5LCqk1i0eEBQwwm_zt8cl-xrtvDXIxynVGhd-5BiafXaCPVpqE8Gh9FmnRMv11Eo/250/250&quot;);"></div>
									</div><!---->
									<!---->
								</div>
								<div class="names">
									<!----> <span></span>
									<div class="first">
										<span>Long Leather Boots (Brown)</span>
									</div>
									<div>
										<span><span class="last"></span> <span class="wear" title=""></span></span>
									</div><!---->
									 <!---->
								</div>
								<div class="underline"></div>
							</div>
							<div class="icon-upgrade_arrow"></div>
							<div class="right">
								<span class="price">$0.20</span>
								<div class="items_preview">
									<!-- <span class="wear" title="{{$root.splitName(upg.to[0]).wear}}" ng-if="upg.to.length==1"> {{$root.splitName(upg.to[0]).short_wear}}</span>
-->
									<!---->
									<div class="item" title="Bloody Tank Top (White) | 0.2">
										<div class="item_thumb" style="background-image: url(&quot;https://steamcommunity-a.akamaihd.net/economy/image/1MrIl4MIJ_pNBhReTwBpxJ8G4GM4OekG2V3huqL5LCqk1i0eEBQwwm_zt8cl-xrtvDXIxynVGhd-5BiafXaCP1pqEsKh9FmnW_C6WQ0/250/250&quot;);"></div>
									</div><!---->
									<!---->
								</div>
								<div class="names">
									<!----> <span></span>
									<div class="first">
										<span>Bloody Tank Top (White)</span>
									</div>
									<div>
										<span><span class="last"></span> <span class="wear" title=""></span></span>
									</div><!---->
									 <!---->
								</div>
								<div class="underline"></div>
							</div>
						</div>
					</div><!---->
					<div class="upgrade_entry angular-animate">
						<div class="user">
							<span class="avatar" style="background-image: url(&quot;https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/e8/e8f84b41c1e825cdae095c722a0638d51d1eceac_full.jpg&quot;);"></span> <span class="name">fahshopp@csgomoney.com</span>
						</div>
						<div class="inline_data">
							<div class="left">
								<span class="price">$0.30</span>
								<div class="items_preview manyItems">
									<!-- <span class="wear" title="{{$root.splitName(upg.from[0]).wear}}" ng-if="upg.from.length==1"> {{$root.splitName(upg.from[0]).short_wear}}</span> -->
									<!---->
									<div class="item" title="G3SG1 | Lava Crash (Minimal Wear) | 0.1">
										<div class="item_thumb" style="background-image: url(&quot;https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgposem2LFZfwOP3dm5R642JmYmHnuP9MrTDl2VW7fp9g-7J4bP5iUazrl1uYmynIYLBd1U2Z1nY_wS4wLrpgJC1uJXAwCA1uiIrs3mInxK30kkecKUx0niP4_PE/250/250&quot;);"></div>
									</div><!---->
									<div class="item" title="G3SG1 | Lava Crash (Minimal Wear) | 0.1">
										<div class="item_thumb" style="background-image: url(&quot;https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgposem2LFZfwOP3dm5R642JmYmHnuP9MrTDl2VW7fp9g-7J4bP5iUazrl1uYmynIYLBd1U2Z1nY_wS4wLrpgJC1uJXAwCA1uiIrs3mInxK30kkecKUx0niP4_PE/250/250&quot;);"></div>
									</div><!---->
									<div class="item" title="G3SG1 | Lava Crash (Minimal Wear) | 0.1">
										<div class="item_thumb" style="background-image: url(&quot;https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgposem2LFZfwOP3dm5R642JmYmHnuP9MrTDl2VW7fp9g-7J4bP5iUazrl1uYmynIYLBd1U2Z1nY_wS4wLrpgJC1uJXAwCA1uiIrs3mInxK30kkecKUx0niP4_PE/250/250&quot;);"></div>
									</div><!---->
									<!---->
								</div>
								<div class="names">
									<!---->
									<!----> <span class="items_amount"></span>
									<div class="first" style="color: rgb(128, 128, 128);">
										<span class="items_amount">3 items</span>
									</div><span class="items_amount"></span><!---->
								</div>
								<div class="underline" style="background-color: rgb(210, 210, 210);"></div>
							</div>
							<div class="icon-upgrade_arrow"></div>
							<div class="right">
								<span class="price">$0.45</span>
								<div class="items_preview">
									<!-- <span class="wear" title="{{$root.splitName(upg.to[0]).wear}}" ng-if="upg.to.length==1"> {{$root.splitName(upg.to[0]).short_wear}}</span>
-->
									<!---->
									<div class="item" title="Baggy Pants (Brown) | 0.45">
										<div class="item_thumb" style="background-image: url(&quot;https://steamcommunity-a.akamaihd.net/economy/image/1MrIl4MIJ_pNBhReTwBpxJ8G4GM4OekG2V3huqL5LCqk1i0eEBQwwm_zt8cl-xrtvDXIxynVGhd-5BiafXaCPFpqE8Sh9FmnPBPFQPk/250/250&quot;);"></div>
									</div><!---->
									<!---->
								</div>
								<div class="names">
									<!----> <span></span>
									<div class="first">
										<span>Baggy Pants (Brown)</span>
									</div>
									<div>
										<span><span class="last"></span> <span class="wear" title=""></span></span>
									</div><!---->
									 <!---->
								</div>
								<div class="underline"></div>
							</div>
						</div>
					</div><!---->
					<div class="upgrade_entry angular-animate">
						<div class="user">
							<span class="avatar" style="background-image: url(&quot;https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/b6/b65c9aa173a74c44efde930146d84c5fb75979d6_full.jpg&quot;);"></span> <span class="name">DikKie</span>
						</div>
						<div class="inline_data">
							<div class="left">
								<span class="price">$94.41</span>
								<div class="items_preview manyItems">
									<!-- <span class="wear" title="{{$root.splitName(upg.from[0]).wear}}" ng-if="upg.from.length==1"> {{$root.splitName(upg.from[0]).short_wear}}</span> -->
									<!---->
									<div class="item" title="Zest Checkered Skirt | 84.43">
										<div class="item_thumb" style="background-image: url(&quot;https://steamcommunity-a.akamaihd.net/economy/image/1MrIl4MIJ_pNBhReTwBpxJ8G4GM4OekG2V3huqL5LCqk1i0eEBQwwm_zt8cl-xrtvDXIxynVGhd-5BiafXaCPFpqEMuh9FmnBJwIOco/250/250&quot;);"></div>
									</div><!---->
									<div class="item" title="Mandarin Jacket (Black) | 9.98">
										<div class="item_thumb" style="background-image: url(&quot;https://steamcommunity-a.akamaihd.net/economy/image/1MrIl4MIJ_pNBhReTwBpxJ8G4GM4OekG2V3huqL5LCqk1i0eEBQwwm_zt8cl-xrtvDXIxynVGhd-5Biaf3aCO1pqEsSh9FmnJKNcetc/250/250&quot;);"></div>
									</div><!---->
									<!---->
								</div>
								<div class="names">
									<!---->
									<!----> <span class="items_amount"></span>
									<div class="first">
										<span class="items_amount">2 items</span>
									</div><span class="items_amount"></span><!---->
								</div>
								<div class="underline"></div>
							</div>
							<div class="icon-upgrade_arrow"></div>
							<div class="right">
								<span class="price">$120.40</span>
								<div class="items_preview">
									<!-- <span class="wear" title="{{$root.splitName(upg.to[0]).wear}}" ng-if="upg.to.length==1"> {{$root.splitName(upg.to[0]).short_wear}}</span>
-->
									<!---->
									<div class="item" title="Turquoise Delight - M16A4 | 120.4">
										<div class="item_thumb" style="background-image: url(&quot;https://steamcommunity-a.akamaihd.net/economy/image/1MrIl4MIJ_pNBhReTwBpxJ8G4GM4OekG2V3huqL5LCqk1i0eEBQwwm_zt8cl-xrtvDXIxynVGhd-5BiafXWCP1pqE8Wh9Fmn7RtjO-I/250/250&quot;);"></div>
									</div><!---->
									<!---->
								</div>
								<div class="names">
									<!----> <span></span>
									<div class="first">
										<span>Turquoise Delight - M16A4</span>
									</div>
									<div>
										<span><span class="last"></span> <span class="wear" title=""></span></span>
									</div><!---->
									 <!---->
								</div>
								<div class="underline"></div>
							</div>
						</div>
					</div><!---->
					<div class="upgrade_entry angular-animate">
						<div class="user">
							<span class="avatar" style="background-image: url(&quot;https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/03/03a8f574c15e673ab131d4138a9fb1e7a5306660_full.jpg&quot;);"></span> <span class="name">♥ | topnotch bolt.gg</span>
						</div>
						<div class="inline_data">
							<div class="left">
								<span class="price">$0.80</span>
								<div class="items_preview">
									<!-- <span class="wear" title="{{$root.splitName(upg.from[0]).wear}}" ng-if="upg.from.length==1"> {{$root.splitName(upg.from[0]).short_wear}}</span> -->
									<!---->
									<div class="item" title="Horn-rimmed Glasses (Black) | 0.8">
										<div class="item_thumb" style="background-image: url(&quot;https://steamcommunity-a.akamaihd.net/economy/image/1MrIl4MIJ_pNBhReTwBpxJ8G4GM4OekG2V3huqL5LCqk1i0eEBQwwm_zt8cl-xrtvDXIxynVGhd-5BiafXaCNlpqEsSh9Fmn2qeuODo/250/250&quot;);"></div>
									</div><!---->
									<!---->
								</div>
								<div class="names">
									<!----> <span></span>
									<div class="first">
										<span>Horn-rimmed Glasses (Black)</span>
									</div>
									<div>
										<span><span class="last"></span> <span class="wear" title=""></span></span>
									</div><!---->
									 <!---->
								</div>
								<div class="underline"></div>
							</div>
							<div class="icon-upgrade_arrow"></div>
							<div class="right">
								<span class="price">$1.58</span>
								<div class="items_preview">
									<!-- <span class="wear" title="{{$root.splitName(upg.to[0]).wear}}" ng-if="upg.to.length==1"> {{$root.splitName(upg.to[0]).short_wear}}</span>
-->
									<!---->
									<div class="item" title="RAIDER CRATE | 1.58">
										<div class="item_thumb" style="background-image: url(&quot;https://steamcommunity-a.akamaihd.net/economy/image/1MrIl4MIJ_pNBhReTwBpxJ8G4GM4OekG2V3huqL5LCqk1i0eEBQwwm_zt8cl-xrtvDXIxynVGhd-5BiafXOCPlpqEsWh9Fmnfkf_GRs/250/250&quot;);"></div>
									</div><!---->
									<!---->
								</div>
								<div class="names">
									<!----> <span></span>
									<div class="first">
										<span>RAIDER CRATE</span>
									</div>
									<div>
										<span><span class="last"></span> <span class="wear" title=""></span></span>
									</div><!---->
									 <!---->
								</div>
								<div class="underline"></div>
							</div>
						</div>
					</div><!---->
					<div class="upgrade_entry angular-animate">
						<div class="user">
							<span class="avatar" style="background-image: url(&quot;https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/e5/e53b4cb8afdb3443cf09f22199e6719f3947e9da_full.jpg&quot;);"></span> <span class="name">✪ Przy bolt.gg</span>
						</div>
						<div class="inline_data">
							<div class="left">
								<span class="price">$0.41</span>
								<div class="items_preview">
									<!-- <span class="wear" title="{{$root.splitName(upg.from[0]).wear}}" ng-if="upg.from.length==1"> {{$root.splitName(upg.from[0]).short_wear}}</span> -->
									<!---->
									<div class="item" title="Padded Jacket (Purple) | 0.41">
										<div class="item_thumb" style="background-image: url(&quot;https://steamcommunity-a.akamaihd.net/economy/image/1MrIl4MIJ_pNBhReTwBpxJ8G4GM4OekG2V3huqL5LCqk1i0eEBQwwm_zt8cl-xrtvDXIxynVGhd-5BiafXaCO1pqEsGh9Fmn2jo49qs/250/250&quot;);"></div>
									</div><!---->
									<!---->
								</div>
								<div class="names">
									<!----> <span></span>
									<div class="first">
										<span>Padded Jacket (Purple)</span>
									</div>
									<div>
										<span><span class="last"></span> <span class="wear" title=""></span></span>
									</div><!---->
									 <!---->
								</div>
								<div class="underline"></div>
							</div>
							<div class="icon-upgrade_arrow"></div>
							<div class="right">
								<span class="price">$0.56</span>
								<div class="items_preview">
									<!-- <span class="wear" title="{{$root.splitName(upg.to[0]).wear}}" ng-if="upg.to.length==1"> {{$root.splitName(upg.to[0]).short_wear}}</span>
-->
									<!---->
									<div class="item" title="Combat Gloves (Khaki) | 0.56">
										<div class="item_thumb" style="background-image: url(&quot;https://steamcommunity-a.akamaihd.net/economy/image/1MrIl4MIJ_pNBhReTwBpxJ8G4GM4OekG2V3huqL5LCqk1i0eEBQwwm_zt8cl-xrtvDXIxynVGhd-5BiafXaCOlpqEsWh9Fmn_TEpyEM/250/250&quot;);"></div>
									</div><!---->
									<!---->
								</div>
								<div class="names">
									<!----> <span></span>
									<div class="first">
										<span>Combat Gloves (Khaki)</span>
									</div>
									<div>
										<span><span class="last"></span> <span class="wear" title=""></span></span>
									</div><!---->
									 <!---->
								</div>
								<div class="underline"></div>
							</div>
						</div>
					</div><!---->
					<div class="upgrade_entry angular-animate">
						<div class="user">
							<span class="avatar" style="background-image: url(&quot;https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/1f/1f58964ee9dce1fbd8967b74bb709b2594007f9e_full.jpg&quot;);"></span> <span class="name">Distilled SKINHUB.COM PVPRO.COM</span>
						</div>
						<div class="inline_data">
							<div class="left">
								<span class="price">$0.17</span>
								<div class="items_preview">
									<!-- <span class="wear" title="{{$root.splitName(upg.from[0]).wear}}" ng-if="upg.from.length==1"> {{$root.splitName(upg.from[0]).short_wear}}</span> -->
									<!---->
									<div class="item" title="Hi-top Trainers (Blue) | 0.17">
										<div class="item_thumb" style="background-image: url(&quot;https://steamcommunity-a.akamaihd.net/economy/image/1MrIl4MIJ_pNBhReTwBpxJ8G4GM4OekG2V3huqL5LCqk1i0eEBQwwm_zt8cl-xrtvDXIxynVGhd-5BiafXaCPVpqEsah9FmnW_NkEOQ/250/250&quot;);"></div>
									</div><!---->
									<!---->
								</div>
								<div class="names">
									<!----> <span></span>
									<div class="first">
										<span>Hi-top Trainers (Blue)</span>
									</div>
									<div>
										<span><span class="last"></span> <span class="wear" title=""></span></span>
									</div><!---->
									 <!---->
								</div>
								<div class="underline"></div>
							</div>
							<div class="icon-upgrade_arrow"></div>
							<div class="right">
								<span class="price">$0.18</span>
								<div class="items_preview">
									<!-- <span class="wear" title="{{$root.splitName(upg.to[0]).wear}}" ng-if="upg.to.length==1"> {{$root.splitName(upg.to[0]).short_wear}}</span>
-->
									<!---->
									<div class="item" title="Long Leather Boots (Brown) | 0.18">
										<div class="item_thumb" style="background-image: url(&quot;https://steamcommunity-a.akamaihd.net/economy/image/1MrIl4MIJ_pNBhReTwBpxJ8G4GM4OekG2V3huqL5LCqk1i0eEBQwwm_zt8cl-xrtvDXIxynVGhd-5BiafXaCPVpqE8Gh9FmnRMv11Eo/250/250&quot;);"></div>
									</div><!---->
									<!---->
								</div>
								<div class="names">
									<!----> <span></span>
									<div class="first">
										<span>Long Leather Boots (Brown)</span>
									</div>
									<div>
										<span><span class="last"></span> <span class="wear" title=""></span></span>
									</div><!---->
									 <!---->
								</div>
								<div class="underline"></div>
							</div>
						</div>
					</div><!---->
				</div><!-- </div> -->
				<!--//////////////////////////////////////////////////////////////////////////-->
			</div><!---->
			<!-- <jukebox></jukebox> --><!--Jukebox now inside footer-->
		</div><!-- <div class="sidebar_unfold" ng-if="$root.sidebarView == 'none'" ng-click="glob.toggleSidebar('chat')">
    <div class="icon icon-arrow_right"></div>
</div> -->
		<div class="angular-animate sidebar" style="">
			<!-- </ul> -->
			<div class="cont">
				<div class="chat">
					<div class="chat_hider">
						<div class="icon icon-chat_bubble">
							<div class="icon icon-arrow_right_blue"></div>
						</div><!-- <div class="icon icon-x when_shown"></div> -->
					</div><!--
    If there is scrolling or hovering going on, show this overlay
  -->
					<!---->
					<!--
    Display the messages
  -->
					<div class="messages">
						<!--
      For each message...
    -->
						<!---->
						<div class="message angular-animate" id="1524636504844">
							<!---->
							<div class="wrap">
								<div class="top_part">
									<div class="left_side"><img alt="" class="avatar" src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/88/88c3d8e04f1e98ad20d473724f974daf53950a65_full.jpg"></div>
									<div class="right_side">
										<div class="message_header">
											<div class="name_n_badges">
												<!---->
												<!---->
												<span class="username">✪Kelly™</span>
											</div>
											<div class="timestamp">
												9:08
											</div>
										</div>
										<div class="text">
											why is it its all PUBG?
										</div>
									</div>
								</div>
							</div><!---->
							<!---->
							<!--
        Text can be applied special classes for special messages!
        How special.
      -->
							<!--
        Que hora es?
      -->
						</div><!---->
						<div class="message angular-animate" id="1524636525737">
							<!---->
							<div class="wrap">
								<div class="top_part">
									<div class="left_side"><img alt="" class="avatar" src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/88/88c3d8e04f1e98ad20d473724f974daf53950a65_full.jpg"></div>
									<div class="right_side">
										<div class="message_header">
											<div class="name_n_badges">
												<!---->
												<!---->
												<span class="username">✪Kelly™</span>
											</div>
											<div class="timestamp">
												9:08
											</div>
										</div>
										<div class="text">
											any Admin Online?
										</div>
									</div>
								</div>
							</div><!---->
							<!---->
							<!--
        Text can be applied special classes for special messages!
        How special.
      -->
							<!--
        Que hora es?
      -->
						</div><!---->
						<div class="message angular-animate" id="1524636569267">
							<!---->
							<div class="wrap">
								<div class="top_part">
									<div class="left_side"><img alt="" class="avatar" src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/84/84384eaa094cc99bfa408d4f24a34a2e2cb54110_full.jpg"></div>
									<div class="right_side">
										<div class="message_header">
											<div class="name_n_badges">
												<!---->
												<!---->
												<span class="username">Appi! csgofast.com</span>
											</div>
											<div class="timestamp">
												9:09
											</div>
										</div>
										<div class="text">
											why the fucck i cant deposit
										</div>
									</div>
								</div>
							</div><!---->
							<!---->
							<!--
        Text can be applied special classes for special messages!
        How special.
      -->
							<!--
        Que hora es?
      -->
						</div><!---->
						<div class="message angular-animate" id="1524636678819">
							<!---->
							<div class="wrap">
								<div class="top_part">
									<div class="left_side"><img alt="" class="avatar" src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/5c/5c5658f279d3385c8484e1bf5fe0c9f89a81c379_full.jpg"></div>
									<div class="right_side">
										<div class="message_header">
											<div class="name_n_badges">
												<!---->
												<!---->
												<span class="username">JomRaChan</span>
											</div>
											<div class="timestamp">
												9:11
											</div>
										</div>
										<div class="text">
											LUL
										</div>
									</div>
								</div>
							</div><!---->
							<!---->
							<!--
        Text can be applied special classes for special messages!
        How special.
      -->
							<!--
        Que hora es?
      -->
						</div><!---->
						<div class="message angular-animate" id="1524637375070">
							<!---->
							<div class="wrap">
								<div class="top_part">
									<div class="left_side"><img alt="" class="avatar" src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/44/44ea176d151e7f1a45ea5dd6e0d8eb541cf849a8_full.jpg"></div>
									<div class="right_side">
										<div class="message_header">
											<div class="name_n_badges">
												<!---->
												<!---->
												<span class="username">moontube7 | Cs.Money</span>
											</div>
											<div class="timestamp">
												9:22
											</div>
										</div>
										<div class="text">
											they removed csgo skins
										</div>
									</div>
								</div>
							</div><!---->
							<!---->
							<!--
        Text can be applied special classes for special messages!
        How special.
      -->
							<!--
        Que hora es?
      -->
						</div><!---->
						<div class="message angular-animate" id="1524637379524">
							<!---->
							<div class="wrap">
								<div class="top_part">
									<div class="left_side"><img alt="" class="avatar" src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/44/44ea176d151e7f1a45ea5dd6e0d8eb541cf849a8_full.jpg"></div>
									<div class="right_side">
										<div class="message_header">
											<div class="name_n_badges">
												<!---->
												<!---->
												<span class="username">moontube7 | Cs.Money</span>
											</div>
											<div class="timestamp">
												9:22
											</div>
										</div>
										<div class="text">
											because of the new trade lock
										</div>
									</div>
								</div>
							</div><!---->
							<!---->
							<!--
        Text can be applied special classes for special messages!
        How special.
      -->
							<!--
        Que hora es?
      -->
						</div><!---->
						<div class="message angular-animate" id="1524637389584">
							<!---->
							<div class="wrap">
								<div class="top_part">
									<div class="left_side"><img alt="" class="avatar" src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/07/0791f9bc7ec613985f3f044f362d58d5da2e814b_full.jpg"></div>
									<div class="right_side">
										<div class="message_header">
											<div class="name_n_badges">
												<!---->
												<!---->
												<span class="username">∞❀EVIL❀&amp;quot;TRADEIT.GG&amp;quot;</span>
											</div>
											<div class="timestamp">
												9:23
											</div>
										</div>
										<div class="text">
											mod?where is the free skins?
										</div>
									</div>
								</div>
							</div><!---->
							<!---->
							<!--
        Text can be applied special classes for special messages!
        How special.
      -->
							<!--
        Que hora es?
      -->
						</div><!---->
						<div class="message angular-animate" id="1524637519680">
							<!---->
							<div class="wrap">
								<div class="top_part">
									<div class="left_side"><img alt="" class="avatar" src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/07/0791f9bc7ec613985f3f044f362d58d5da2e814b_full.jpg"></div>
									<div class="right_side">
										<div class="message_header">
											<div class="name_n_badges">
												<!---->
												<!---->
												<span class="username">∞❀EVIL❀&amp;quot;TRADEIT.GG&amp;quot;</span>
											</div>
											<div class="timestamp">
												9:25
											</div>
										</div>
										<div class="text">
											mod?
										</div>
									</div>
								</div>
							</div><!---->
							<!---->
							<!--
        Text can be applied special classes for special messages!
        How special.
      -->
							<!--
        Que hora es?
      -->
						</div><!---->
						<div class="message angular-animate" id="1524637696932">
							<!---->
							<div class="wrap">
								<div class="top_part">
									<div class="left_side"><img alt="" class="avatar" src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/07/0791f9bc7ec613985f3f044f362d58d5da2e814b_full.jpg"></div>
									<div class="right_side">
										<div class="message_header">
											<div class="name_n_badges">
												<!---->
												<!---->
												<span class="username">∞❀EVIL❀&amp;quot;TRADEIT.GG&amp;quot;</span>
											</div>
											<div class="timestamp">
												9:28
											</div>
										</div>
										<div class="text">
											you there mod?
										</div>
									</div>
								</div>
							</div><!---->
							<!---->
							<!--
        Text can be applied special classes for special messages!
        How special.
      -->
							<!--
        Que hora es?
      -->
						</div><!---->
						<div class="message angular-animate" id="1524640334917">
							<!---->
							<div class="wrap">
								<div class="top_part">
									<div class="left_side"><img alt="" class="avatar" src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/58/583992113b89056007631aabe06cf0300114d4cb_full.jpg"></div>
									<div class="right_side">
										<div class="message_header">
											<div class="name_n_badges">
												<!---->
												<!---->
												<span class="username">NINE Bolt.gg</span>
											</div>
											<div class="timestamp">
												10:12
											</div>
										</div>
										<div class="text">
											Why only pubg items????
										</div>
									</div>
								</div>
							</div><!---->
							<!---->
							<!--
        Text can be applied special classes for special messages!
        How special.
      -->
							<!--
        Que hora es?
      -->
						</div><!---->
						<div class="message angular-animate" id="1524640644771">
							<!---->
							<div class="wrap">
								<div class="top_part">
									<div class="left_side"><img alt="" class="avatar" src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/ff/ff834819d699e132e00a0996df8c908ffce31333_full.jpg"></div>
									<div class="right_side">
										<div class="message_header">
											<div class="name_n_badges">
												<!---->
												<!---->
												<span class="username">Blood thirsty csgoempire.com</span>
											</div>
											<div class="timestamp">
												10:17
											</div>
										</div>
										<div class="text">
											valve do this
										</div>
									</div>
								</div>
							</div><!---->
							<!---->
							<!--
        Text can be applied special classes for special messages!
        How special.
      -->
							<!--
        Que hora es?
      -->
						</div><!---->
						<div class="message angular-animate" id="1524640917950">
							<!---->
							<div class="wrap">
								<div class="top_part">
									<div class="left_side"><img alt="" class="avatar" src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/48/48ad599b99ab3722fddac8569f359cc61639e824_full.jpg"></div>
									<div class="right_side">
										<div class="message_header">
											<div class="name_n_badges">
												<!---->
												<!---->
												<span class="username">Red_Diesel</span>
											</div>
											<div class="timestamp">
												10:21
											</div>
										</div>
										<div class="text">
											so its only pubg?
										</div>
									</div>
								</div>
							</div><!---->
							<!---->
							<!--
        Text can be applied special classes for special messages!
        How special.
      -->
							<!--
        Que hora es?
      -->
						</div><!---->
						<div class="message angular-animate" id="1524640925185">
							<!---->
							<div class="wrap">
								<div class="top_part">
									<div class="left_side"><img alt="" class="avatar" src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/48/48ad599b99ab3722fddac8569f359cc61639e824_full.jpg"></div>
									<div class="right_side">
										<div class="message_header">
											<div class="name_n_badges">
												<!---->
												<!---->
												<span class="username">Red_Diesel</span>
											</div>
											<div class="timestamp">
												10:22
											</div>
										</div>
										<div class="text">
											where all da csgo at?
										</div>
									</div>
								</div>
							</div><!---->
							<!---->
							<!--
        Text can be applied special classes for special messages!
        How special.
      -->
							<!--
        Que hora es?
      -->
						</div><!---->
						<div class="message angular-animate" id="1524641783394">
							<!---->
							<div class="wrap">
								<div class="top_part">
									<div class="left_side"><img alt="" class="avatar" src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/ef/ef4e194b401dc383aa40c5edcfbd00a91d253f53_full.jpg"></div>
									<div class="right_side">
										<div class="message_header">
											<div class="name_n_badges">
												<!---->
												<!---->
												<span class="username">✪ Seba ✪ bolt.gg</span>
											</div>
											<div class="timestamp">
												10:36
											</div>
										</div>
										<div class="text">
											only pubg?? csgo no?
										</div>
									</div>
								</div>
							</div><!---->
							<!---->
							<!--
        Text can be applied special classes for special messages!
        How special.
      -->
							<!--
        Que hora es?
      -->
						</div><!---->
						<div class="message angular-animate" id="1524644677782">
							<!---->
							<div class="wrap">
								<div class="top_part">
									<div class="left_side"><img alt="" class="avatar" src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/e4/e4f4f283134f235ed7261164d50c6fcc3a9ebf10_full.jpg"></div>
									<div class="right_side">
										<div class="message_header">
											<div class="name_n_badges">
												<!---->
												<!---->
												<span class="username">Cosmin Bolt.gg</span>
											</div>
											<div class="timestamp">
												11:24
											</div>
										</div>
										<div class="text">
											dead
										</div>
									</div>
								</div>
							</div><!---->
							<!---->
							<!--
        Text can be applied special classes for special messages!
        How special.
      -->
							<!--
        Que hora es?
      -->
						</div><!---->
						<div class="message angular-animate" id="1524645474411">
							<!---->
							<div class="wrap">
								<div class="top_part">
									<div class="left_side"><img alt="" class="avatar" src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/1f/1f58964ee9dce1fbd8967b74bb709b2594007f9e_full.jpg"></div>
									<div class="right_side">
										<div class="message_header">
											<div class="name_n_badges">
												<!---->
												<!---->
												<span class="username">Distilled SKINHUB.COM PVPRO.COM</span>
											</div>
											<div class="timestamp">
												11:37
											</div>
										</div>
										<div class="text">
											anyone wanna help me deposit skins? or can i not do csgo skins anymore?
										</div>
									</div>
								</div>
							</div><!---->
							<!---->
							<!--
        Text can be applied special classes for special messages!
        How special.
      -->
							<!--
        Que hora es?
      -->
						</div><!---->
						<div class="message angular-animate" id="1524645569531">
							<!---->
							<div class="wrap">
								<div class="top_part">
									<div class="left_side"><img alt="" class="avatar" src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/f4/f436ce865ec8269accf48bb15f8fe951a53f148c_full.jpg"></div>
									<div class="right_side">
										<div class="message_header">
											<div class="name_n_badges">
												<!---->
												<!----> <span class="level">mod</span> <!---->
												 <span class="username">logical</span>
											</div>
											<div class="timestamp">
												11:39
											</div>
										</div>
										<div class="text">
											we don't accept csgo skins
										</div>
									</div>
								</div>
							</div><!---->
							<!---->
							<!--
        Text can be applied special classes for special messages!
        How special.
      -->
							<!--
        Que hora es?
      -->
						</div><!---->
						<div class="message angular-animate" id="1524645577351">
							<!---->
							<div class="wrap">
								<div class="top_part">
									<div class="left_side"><img alt="" class="avatar" src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/1f/1f58964ee9dce1fbd8967b74bb709b2594007f9e_full.jpg"></div>
									<div class="right_side">
										<div class="message_header">
											<div class="name_n_badges">
												<!---->
												<!---->
												<span class="username">Distilled SKINHUB.COM PVPRO.COM</span>
											</div>
											<div class="timestamp">
												11:39
											</div>
										</div>
										<div class="text">
											rly?
										</div>
									</div>
								</div>
							</div><!---->
							<!---->
							<!--
        Text can be applied special classes for special messages!
        How special.
      -->
							<!--
        Que hora es?
      -->
						</div><!---->
						<div class="message angular-animate" id="1524645586739">
							<!---->
							<div class="wrap">
								<div class="top_part">
									<div class="left_side"><img alt="" class="avatar" src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/1f/1f58964ee9dce1fbd8967b74bb709b2594007f9e_full.jpg"></div>
									<div class="right_side">
										<div class="message_header">
											<div class="name_n_badges">
												<!---->
												<!---->
												<span class="username">Distilled SKINHUB.COM PVPRO.COM</span>
											</div>
											<div class="timestamp">
												11:39
											</div>
										</div>
										<div class="text">
											any sights that do?
										</div>
									</div>
								</div>
							</div><!---->
							<!---->
							<!--
        Text can be applied special classes for special messages!
        How special.
      -->
							<!--
        Que hora es?
      -->
						</div><!---->
						<div class="message angular-animate" id="1524646000723">
							<!---->
							<div class="wrap">
								<div class="top_part">
									<div class="left_side"><img alt="" class="avatar" src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/1f/1f58964ee9dce1fbd8967b74bb709b2594007f9e_full.jpg"></div>
									<div class="right_side">
										<div class="message_header">
											<div class="name_n_badges">
												<!---->
												<!---->
												<span class="username">Distilled SKINHUB.COM PVPRO.COM</span>
											</div>
											<div class="timestamp">
												11:46
											</div>
										</div>
										<div class="text">
											anyone know any CSGO sights like this?
										</div>
									</div>
								</div>
							</div><!---->
							<!---->
							<!--
        Text can be applied special classes for special messages!
        How special.
      -->
							<!--
        Que hora es?
      -->
						</div><!---->
					</div><!--
    Send the message...
  -->
					<div class="send">
						<!---->
						<div class="input_wrapper">
							<textarea class="dropup textarea ng-pristine ng-untouched ng-valid ng-empty ng-valid-maxlength" id="chatTextarea" maxlength="250" placeholder="Your Message..."></textarea> <button class="button white_button">Send</button>
						</div><!---->
						<!---->
					</div><!--
    Room select
  -->
					<div class="extras">
						<!-- <span class="online_counter" ng-if="$root.system.onlineUsers">
     
          <span class="online_bulb"></span>
          <span ng-bind-html="'nav_online' | translate | htmlSafe"></span>
          <span class="num">{{$root.system.onlineUsers}}</span>               
       
    </span> -->
						<span class="rules">Rules</span> <span class="social"><a class="icon-tw_small" href="https://twitter.com/OfficialBoltgg" target="_blank"></a> <a class="icon-discord_small" href="https://discord.gg/EMFHm5A" target="_blank"></a> <!-- <a class="icon-instagram_small" target="_blank" href="https://instagram.com/boltgg"></a> -->
						 <a class="icon-yt_small" href="https://goo.gl/BiQFjs" target="_blank"></a> <a class="icon-fb_small" href="https://www.facebook.com/boltggofficial/" target="_blank"></a></span> <span class="tos">Terms of Service</span>
					</div>
				</div>
			</div>
		</div><!---->
		<!---->
		<div>
			<div class="growl-container growl-fixed top-right">
				<!---->
			</div>
		</div>
		<div class="gameUpdate">
			<div class="growl-container growl-fixed top-right">
				<!---->
			</div>
		</div><!-- <sign-in></sign-in>
 -->
	</div><!-- inject:js -->
	<script src="template-3/js/common.init.js">
	</script> 
	<script src="template-3/js/common.js">
	</script> 
	<script async id="mainScript" src="template-3/js/app-buster=1eqvm.js">
	</script> <!-- endinject -->
	<style>
	.scrollable-menu {
	   height: auto;
	   max-height: 300px;
	   overflow: auto;
	}

	.menu-highlighted {
	   font-weight: bold;
	}
	</style>
	<ul class="dropdown-menu scrollable-menu" style="display:block">
		<!---->
	</ul><iframe frameborder="0" scrolling="no" src="https://platform.twitter.com/widgets/widget_iframe.cb6df5c11eb74c4885e17101a777cb60.html?origin=http%3A%2F%2Fbolt-1.pacanskiy.website&amp;settingsEndpoint=https%3A%2F%2Fsyndication.twitter.com%2Fsettings" style="display: none;" title="Twitter settings iframe"></iframe><iframe allowfullscreen="true" frameborder="0" id="rufous-sandbox" name="rufous-sandbox" scrolling="no" style="position: absolute; visibility: hidden; display: none; width: 0px; height: 0px; padding: 0px; border: none;" title="Twitter analytics iframe"></iframe>
<?=$login?>
	</body>
</html>
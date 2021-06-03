<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);
	function get_client_ip() {
		$ipaddress = '';
		if (isset($_SERVER['HTTP_CLIENT_IP']))
			$ipaddress = $_SERVER['HTTP_CLIENT_IP'];
		else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
			$ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
		else if(isset($_SERVER['HTTP_X_FORWARDED']))
			$ipaddress = $_SERVER['HTTP_X_FORWARDED'];
		else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
			$ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
		else if(isset($_SERVER['HTTP_FORWARDED']))
			$ipaddress = $_SERVER['HTTP_FORWARDED'];
		else if(isset($_SERVER['REMOTE_ADDR']))
			$ipaddress = $_SERVER['REMOTE_ADDR'];
		else
			$ipaddress = 'UNKNOWN';
		return $ipaddress;
	}

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="date=no">
    <meta name="format-detection" content="address=no">
    <meta name="format-detection" content="email=no">
    <meta content="notranslate" name="google">
    <meta property="og:locale" content="en-En">
    <meta property="og:type" content="website">
    <meta property="og:title" content="bitnet-global.ltd">
    <meta property="og:description" content="We’re a financial and consulting business company">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <title>crypto-global.ltd | Your Prosperity Is Our Passion</title>
    <link rel="stylesheet" href="en/css/libs.min.css">
    <link rel="stylesheet" href="en/css/style.min18c4.css?v10">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	
	<style>
	
table.tab {    font-size: 14px;
    color: #000;
    width: 100%;
    border-width: 1px;
    border-color: #DA0014;
    border-collapse: collapse;
    /* font-weight: 600; */
    font-family: sans-serif;
    letter-spacing: 1px;}
table.tab th {
font-size: 14px;
    background-color: #ffca13;
    border-width: 1px;
    padding: 8px;
    border-style: solid;
    border-color: #ffca13;
    text-align: center;
    color: #000000;
    font-family: sans-serif;
    letter-spacing: 0px;
	height:40px;
}
table.tab tr {}
table.tab td {    font-size: 14px;
    border-width: 1px;
    padding: 8px;
    border-style: solid;
    border-color: #FFFFFF;
    background-color: #f0f0f0;
	height:40px;
	}


table.blank {font-size: 14px;
    color: #000;
    width: 100%;
    border-width: 1px;
    border-color: #DA0014;
    border-collapse: collapse;
    /* font-weight: 600; */
    font-family: sans-serif;
    letter-spacing:.5px;}
table.blank th {font-size:14px;background-color:#abd28e;border-width: 0px;padding: 8px;border-style: solid;border-color: #9dcc7a;text-align:left;}
table.blank tr {}
table.blank td {font-size:14px;border-width: 0px;padding: 8px;border-style: solid;border-color: #9dcc7a;}
</style>
</head>
<body>
  <div class="wrapper">
    <header class="header">
      <div class="container">
          <div class="header__wrap"><a class="img-wrapper header__img-wrap" href="/"><img src="en/images/logohome.png" alt="logo"></a>

<div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                            <div class="banner-lang wow bounceIn">
                                <div id="google_translate_element"></div>
            <script>
                             function googleTranslateElementInit() {
                                new google.translate.TranslateElement({
                                   pageLanguage: 'en'
                                }, 'google_translate_element');
                             }
                          </script>
                          <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                              </div>
                          </div>
          <div class="user-block header__user-block">
            <div class="user-block__auth">
              <a class="user-block__signup" href="/?a=account">Account</a>
              <div class="user-block__separate"></div>
              <div class="user-block__login"><a href="logout.php">Logout</a></div>
            </div>
          </div>
              </div>
        <nav class="header-nav">
        <ul class="no-style header-nav__list">
            <li class="header-nav__item"><a class="header-nav__link" href="home.html">Home</a></li>
            <li class="header-nav__item"><a class="header-nav__link" href="index3898.html?a=cust&amp;page=about">About Us</a></li>
            <li class="header-nav__item"><a class="header-nav__link" href="index4f30.html?a=cust&amp;page=a-program">Affiliate Program</a></li>
            <li class="header-nav__item"><a class="header-nav__link" href="index38cd.html?a=faq">FAQ</a></li>
            <li class="header-nav__item"><a class="header-nav__link" href="index15a0.html?a=support">Contact us</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <main>
      <div class="container">
        <ul class="breadcrumbs" aria-label="Breadcrumb" role="navigation">
              <li class="breadcrumbs__item"><a class="breadcrumbs__link" href="index.html">Home</a>
              </li>
        </ul>
  </div>
      <h1 class="visually-hidden">We’re a financial and consulting business company</h1>
<div class="acc-header">
  <div class="container">
      <div class="acc-header-inner">
          <div class="acc-header-top">
              <h2>Please confirm your deposit:</h2>
      
    
<div class="box-exchange-rate">
                                    <div class="box-exchange-rate__inner">
                      <span class="box-exchange-rate__rate-text"><b>1 BTC</b> - <b id="btc"></b></span>
                  </div>
                            
                                  </div>
          </div>
 
      </div>
  </div>
</div>
              <div class="acc-body">
 <div class="acc-body">
  
       
        <pre style="font-size:xx-large;">
           STEPS TO MAKE A DEPOSIT

           1. Copy the company’s wallet address below.
           2. Then go to your bitcoin wallet and pay the same amount you want to start up with.
           3. After making the payment and if successful,you copy the the payment transaction hash link or payment Id and paste on the space below.
           4.Then saved your deposit.


           NOTE: please do not click on the save button twice and do not click if you know you are not ready to make payment as this will attract a penalty.

           PLEASE SEND YOUR PAYMENT TO THE BITCOIN WALLET ADDRESS BELLOW
   <p style="color:rgb(24, 140, 25);">            3F6DX5UPvq45TMmogePKYJLixGVkFotRCY</p>

        </pre>
        <div class="container">  
          <form method=post class="withdraw" action="invest.php"><input type="hidden" name="form_id" value="16218295005412"><input type="hidden" name="form_token" value="ce67ff0dc709e7daad5e871ec6b92e7c">
            <input type=hidden name=a value=withdraw>
            <input type=hidden name=action value=preview>
            
            
                    
                        <div class="withdraw-step withdraw-step-1 is-active">
                          <div class="container">
                            <div class="withdraw-currency is-active" data-tab-content="currency">
          <input type=submit value="SAVE" class=sbmt><input type=submit value="CANCEL" class=sbmt>
          </div>
        </div>
      </div>
                        
                  
                      </form>




</div>
                     <!--content end-->

</div>
        </div>
      </section>
    </main>
    <footer class="footer">
      <div class="footer__top">
        <div class="container">
        <ul class="no-style header-nav__list">
            <li class="header-nav__item"><a class="header-nav__link" href="home.html">Home</a></li>
            <li class="header-nav__item"><a class="header-nav__link" href="index3898.html?a=cust&amp;page=about">About Us</a></li>
            <li class="header-nav__item"><a class="header-nav__link" href="index4f30.html?a=cust&amp;page=a-program">Affiliate Program</a></li>
            <li class="header-nav__item"><a class="header-nav__link" href="index38cd.html?a=faq">FAQ</a></li>
            <li class="header-nav__item"><a class="header-nav__link" href="index15a0.html?a=support">Contact us</a></li>
          </ul>
          <div class="footer__inner-block">
            <div class="footer__links-wrap">

              <div class="footer__companies">
                <a class="img-wrapper footer__company" href="https://www.comodo.com" target="_blank"><img src="en/images/companies/comodo.png" alt="comodo"></a>
                <a class="img-wrapper footer__company" href="https://www.cloudflare.com" target="_blank"><img src="en/images/companies/cloudflare.png" alt="cloudflare"></a>
              </div>
            </div>
            <table class="footer__features">
              <tbody>
                <tr>
                  <td>Company name:</td>
                  <td>crypto-global.ltd</td>
                </tr>
                <tr>
                  <td>Our business address:</td>
                  <td>25 Crofton Drive, Lincolnshire, United Kingdom, LN3 4NR  </td>
                </tr>
                <tr>
                  <td>Office hours:</td>
                  <td>24/7</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="footer__bottom">
        <div class="container">
          <ul class="no-style footer__pay-list">
            <li class="img-wrapper footer__pay-item"><img src="en/images/companies/bit.svg" alt="sys"></li>
            <li class="img-wrapper footer__pay-item"><img src="en/images/companies/lite.svg" alt="sys"></li>
            <li class="img-wrapper footer__pay-item"><img src="en/images/companies/eth.svg" alt="sys"></li>
            <li class="img-wrapper footer__pay-item"><img src="en/images/companies/ripple.svg" alt="sys"></li>
            <li class="img-wrapper footer__pay-item"><img src="en/images/companies/monero.svg" alt="sys"></li>
            <li class="img-wrapper footer__pay-item"><img src="en/images/companies/dash.svg" alt="sys"></li>
          </ul>
          <div class="footer__bot-main">
            <p class="footer__rights">Copyright © 2020 crypto-global.ltd. All rights reserved. crypto-global.ltd is incorporated under the Companies Act as a private limited company.</p>
            <p class="fin-contacts">crypto-global.ltd on:<a class="fin-contacts__twitter" href="https://twitter.com/" title="twitter" target="_blank"></a><a class="fin-contacts__youtube" href="https://youtu.be/" title="youtube" target="_blank"></a></p>
          </div>
        </div>
      </div>
    </footer>
    <div class="default-modal modal-login">
      <div class="default-modal__content">
        <!--.default-modal__close-->
        <h2 class="default-modal__title"> Login</h2>
    
    <form class="formLogin" method=post name=mainform onsubmit="return checkform()"><input type="hidden" name="form_id" value="16225438766174"><input type="hidden" name="form_token" value="8e50111d1215ca9ada032d9876e473fe">
<input type=hidden name=a value='do_login'>
<input type=hidden name=follow value=''>
<input type=hidden name=follow_id value=''>
<div class="input-group">
            <label><img src="en/images/icons/ic_mail-trans.svg" alt="name">
              <div class="input-group__wrap">
                <input type="text" name=username placeholder="Username" data-msg-required="Check for correct input">
                <div class="input-group__border"></div>
                <div class="input-group__border-active"></div>
              </div>
            </label>
          </div>
          <div class="input-group">
            <label><img src="en/images/icons/ic_lock-trans.svg" alt="name">
              <div class="input-group__wrap">
                <input type="password" name="password" placeholder="Password" data-msg-required="Check for correct input">
                <div class="input-group__border"></div>
                <div class="input-group__border-active"></div>
              </div>
            </label>
          </div>
          <div class="modal-login__footer-wrap">
            <label class="default-checkbox">
              <input type="checkbox" name="remember" hidden><span class="default-checkbox__custom"></span><span class="default-checkbox__text">Remember me</span>
            </label><a class="link" href="/?a=forgot_password" target="_blank">Forgot password?</a>
          </div>
          <div class="default-modal__footer">
            <div class="form_answer_error error"></div>
          </div>
          <div class="default-modal__footer">
            <button class="btn-trans modal-login__submit" type="submit">Login</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <svg id="svg-check-white" width="36" height="26" viewBox="0 0 36 26" fill="none" xmlns="http://www.w3.org/2000/svg">
      <rect width="4.00089" height="34.0151" transform="matrix(0.691975 0.721879 -0.691975 0.721879 34.6161 0)" fill="#fff"/>
      <rect width="4.00089" height="18.008" transform="matrix(0.691975 -0.721879 0.691975 0.721879 0 12.9996)" fill="#fff"/>
  </svg>
  <script src="en/js/libs.min.js"></script>
  <!---- <script src="en/js/jquery.form.js"></script>---->
  <script src="en/js/scripts.min.js?v3"></script>
  <script src="en/js/rs.js?v2"></script>

<style>
.vsbmt {
border-bottom: 1px solid #000;
  border-bottom-color: rgb(0, 0, 0);
  border-bottom-style: solid;
  border-bottom-width: 1px;
height: 40px;
background-color: #ffca13;

}

.sbmt {
  min-width:300px;
  font-family: "PFBeauSansPro Bold", sans-serif;
font-size: 13px;
line-height: 50px;
text-transform: uppercase;
text-decoration: none;
  text-decoration-line: none;
  text-decoration-style: solid;
  text-decoration-color: currentcolor;
text-align: center;
outline: none;
  outline-color: currentcolor;
  outline-style: none;
  outline-width: medium;
-webkit-border-bottom-left-radius: 30px;
border-bottom-left-radius: 30px;
-webkit-border-top-right-radius: 30px;
border-top-right-radius: 30px;
display: inline-block;
cursor: pointer;
color: #1e2b38;
background-color: #fccc25;
position: relative;
width: 200px;
-webkit-transition: all 0.2s linear;
  transition-property: all;
  transition-duration: 0.2s;
  transition-timing-function: linear;
  transition-delay: 0s;
-o-transition: all 0.2s linear;
transition: all 0.2s linear;
  transition-property: all;
  transition-duration: 0.2s;
  transition-timing-function: linear;
  transition-delay: 0s;
padding: 0;
  padding-top: 0px;
  padding-right: 0px;
  padding-bottom: 0px;
  padding-left: 0px;
}

.sbmt:hover {
  min-width:300px;
  font-family: "PFBeauSansPro Bold", sans-serif;
font-size: 13px;
line-height: 50px;
text-transform: uppercase;
text-decoration: none;
  text-decoration-line: none;
  text-decoration-style: solid;
  text-decoration-color: currentcolor;
text-align: center;
outline: none;
  outline-color: currentcolor;
  outline-style: none;
  outline-width: medium;
-webkit-border-bottom-left-radius: 30px;
border-bottom-left-radius: 30px;
-webkit-border-top-right-radius: 30px;
border-top-right-radius: 30px;
display: inline-block;
cursor: pointer;
color: #1e2b38;
background-color: #E9B90F;
position: relative;
width: 200px;
-webkit-transition: all 0.2s linear;
  transition-property: all;
  transition-duration: 0.2s;
  transition-timing-function: linear;
  transition-delay: 0s;
-o-transition: all 0.2s linear;
transition: all 0.2s linear;
  transition-property: all;
  transition-duration: 0.2s;
  transition-timing-function: linear;
  transition-delay: 0s;
padding: 0;
  padding-top: 0px;
  padding-right: 0px;
  padding-bottom: 0px;
  padding-left: 0px;
}


</style>

<script async data-id="69749" src="https://cdn.widgetwhats.com/script.min.js"></script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/60b63c80de99a4282a1ac5f2/1f73tolod';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

</body>
</html>

  
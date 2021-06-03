<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$email = $_POST['email'];
    $user_name = $_POST['user_name'];
		$password = $_POST['password'];
		$payaccount = $_POST['payaccount'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,email,password,payaccount) values ('$user_id','$user_name','$email','$password','$payaccount')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
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
            <div class="header__wrap"><a class="img-wrapper header__img-wrap" href="index.html"><img src="en/images/logohome.png" alt="logo"></a>

<div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                            	<div class="banner-lang wow bounceIn">
                                	<div id="google_translate_element"></div>
                                </div>
                            </div>
			            <div class="user-block header__user-block">
              <div class="user-block__auth">
                <div class="user-block__login"><a href="login.php">Login</div>
                <div class="user-block__separate"></div><a class="user-block__signup" href="signup.php">Sign up</a>
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
        <h1 class="visually-hidden">We’re a financial and consulting business company</h1>
        <div class="container">
              <ul class="breadcrumbs" aria-label="Breadcrumb" role="navigation">
                    <li class="breadcrumbs__item"><a class="breadcrumbs__link" href="index.html">Home</a>
                    </li>
                    <li class="breadcrumbs__item"><span>Sign up</span>
                    </li>
              </ul>
        </div>
        <section class="signup">
          <div class="container">
            <h2 class="signup__title">Create an account</h2>
            <p class="signup__text">In order to be able to fully use our website, we require that you register for a member account. Account registration is free and only takes<br> a moment to complete. Simply fill out the following registration form.</p>
			
			
			
			
 

           
              
 
  
 
 <form class="form-signup" method="POST">


            
              <div class="form-signup__group">
                <div class="input-group">
                  <label><img src="en/images/icons/ic_profile-trans.svg" alt="name">
                    <div class="input-group__wrap">
                      <input type="text" name="email" placeholder="Full Name" data-msg-required="Check for correct input">
                      <div class="input-group__border"></div>
                      <div class="input-group__border-active"></div>
                    </div>
                  </label>
                </div>
                
              </div>
              <div class="form-signup__group">
                <div class="input-group">
                  <label><img src="en/images/icons/ic_mail-trans.svg" alt="name">
                    <div class="input-group__wrap">
                      <input type="email" name="user_name" placeholder="Email" data-msg-required="Check for correct input">
                      <div class="input-group__border"></div>
                      <div class="input-group__border-active"></div>
                    </div>
                  </label>
                </div>
                
              </div>
              <div class="form-signup__group">
                <div class="input-group">
                  <label><img src="en/images/icons/ic_lock-trans.svg" alt="name">
                    <div class="input-group__wrap">
                      <input type="password" name="password" placeholder="Password" data-msg-required="Check for correct input">
                      <div class="input-group__border"></div>
                      <div class="input-group__border-active"></div>
                    </div>
                  </label>
                </div>
                
              </div>
              
              
              <div class="form-signup__group">
                 
                                 <div class="input-group">
                  <label><img src="en/images/icons/ic_check.svg" alt="name">
                    <div class="input-group__wrap">
                      
                      <input type="text" class="inpts" size="30" name="payaccount" placeholder="Your wallet address e.g 1YourBitcoinAddressmwGAiHnxQWP8J2">
                      
                    
                      <div class="input-group__border"></div>
                      <div class="input-group__border-active"></div>
                    </div>
                  </label>
                </div> 
                  
            </div>
              <p class="form-signup__under-text">* It's very important to remember the answer to your security question to avoid being locked out of your account.</p>
                            <label class="default-checkbox">
                <input type="checkbox" name="agree" value=1 hidden><span class="default-checkbox__custom"></span><span class="default-checkbox__text">By clicking "Create Account" below, you electronically agree to our <a class="link" href="indexa972.html?a=rules" target="_blank">Website Terms of Use</a></span>
              </label>
              <div class="form_answer_error error"></div>
              <div class="form-signup__btns">
                <button class="btn-trans form-signup__btn" name="submit" value="Signup" type="submit">Create account</button>
              </div>
            </form>
			          </div>
        </section>
        <section class="forgot-block signup-finish hidden">
          <div class="quarter-circle forgot-block__circle">
            <div class="img-wrapper forgot-block__img-wrap"><img src="en/images/icons/ic_check-1.svg" alt="check"></div>
          </div>
          <h2 class="forgot-block__title">Thank you!</h2>
          <p class="forgot-block__text">You have successfully registered an account with us.<br> Notification email has been sent to your email. <br> You will be redirected to your personal members area in a few seconds.</p>
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
                  <a class="img-wrapper footer__company" href="https://www.comodo.com/" target="_blank"><img src="en/images/companies/comodo.png" alt="comodo"></a>
                  <a class="img-wrapper footer__company" href="https://www.cloudflare.com/" target="_blank"><img src="en/images/companies/cloudflare.png" alt="cloudflare"></a>
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
		  
		  <form class="formLogin" method=post name=mainform onsubmit="return checkform()"><input type="hidden" name="form_id" value="16210860845081"><input type="hidden" name="form_token" value="775b978fd1c3eaf351265ff483cb71fc">
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
              </label><a class="link" href="index8083.html?a=forgot_password" target="_blank">Forgot password?</a>
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
    <script src="en/js/scripts.min43a0.js?v3"></script>
    <script src="en/js/rs1b26.js?v2"></script>
	
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
	
	
	<script async data-id="69749" src="../cdn.widgetwhats.com/script.min.js"></script>
	
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

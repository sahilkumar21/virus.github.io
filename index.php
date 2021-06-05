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
	</div>
	</div>
	<div class="user-block header__user-block">
	<div class="user-block__auth">
	<a class="user-block__signup" href="/?a=account">Account</a>
	<div class="user-block__separate"></div>
	<div class="user-block__login"><a href="/?a=logout">Logout</a></div>
	</div>
	</div>
	</div>
	<nav class="header-nav">
	<ul class="no-style header-nav__list">
	<li class="header-nav__item"><a class="header-nav__link" href="index.html">Home</a></li>
	<li class="header-nav__item"><a class="header-nav__link" href="index3898.html">About Us</a></li>
	<li class="header-nav__item"><a class="header-nav__link" href="index38cd.html">Affiliate Program</a></li>
	<li class="header-nav__item"><a class="header-nav__link" href="index38cd.html">FAQ</a></li>
	<li class="header-nav__item"><a class="header-nav__link" href="index15a0.html">Contact us</a></li>
	</ul>
	</nav>
	</div>
	</header>
	<main>
	<h1 class="visually-hidden">We’re a financial and consulting business company</h1>
	<div class="acc-header">
	<div class="container">
	<div class="acc-header-inner">
	<div class="acc-header-top">
	<h2>My account</h2>
	<div class="box-exchange-rate">
	<div class="box-exchange-rate__inner">
	<span class="box-exchange-rate__rate-text"><b>1 BTC</b> - <b id="btc"></b></span>
	</div>
	
	</div>
	</div>
	<nav class="acc-header-nav">
	<a class="acc-header-nav__link is-active" href="/?a=account">
	<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><circle class="stroke" cx="15" cy="15" r="14" stroke="#708090" stroke-width="2"/><circle class="stroke" cx="15" cy="12" r="5" stroke="#708090" stroke-width="2"/><path class="stroke" d="M26 24C23.9872 19.4324 19.772 17 15.0001 17C10.2283 17 6.01277 19.4324 4 24" stroke="#708090" stroke-width="2"/></svg>
	<span class="text">My account</span>
	</a>
	<a class="acc-header-nav__link " href="depositlist.php">
	<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path class="fill" d="M26.25 16.876V28.1251H3.75V16.876H0V18.7508H1.875V30H28.125V18.7508H30V16.876H26.25Z" fill="#708090"/><path class="fill" d="M12.5206 18.4146C13.0256 18.5536 13.5414 18.6501 14.0625 18.703V23.0499L12.3816 21.3691L11.0559 22.6946L15 26.6384L18.9441 22.6946L17.6184 21.3691L15.9375 23.0499V18.703C21.0929 18.1811 24.8491 13.579 24.3272 8.42393C24.2993 8.14862 24.2593 7.87471 24.2072 7.60292L22.3659 7.95633C23.1441 12.0191 20.4811 15.9435 16.4181 16.7216C12.355 17.4997 8.43035 14.8369 7.65217 10.7742C6.87398 6.71142 9.53695 2.78704 13.6 2.00892C14.7283 1.79284 15.8912 1.83913 16.9987 2.14426L17.4984 0.338769C12.5065 -1.03574 7.34554 1.89643 5.97093 6.88795C4.59633 11.8795 7.52871 17.0401 12.5206 18.4146Z" fill="#708090"/><path class="fill" d="M21.1387 2.29159C20.6142 1.83594 20.0403 1.44041 19.4278 1.1123L18.5419 2.76312C19.0315 3.02642 19.4905 3.34304 19.9106 3.70711L21.1387 2.29159Z" fill="#708090"/><path class="fill" d="M21.8728 6.36915L23.5903 5.6192C23.311 4.98263 22.962 4.37904 22.5497 3.81934L21.0403 4.93113C21.3704 5.37805 21.6497 5.86036 21.8728 6.36915Z" fill="#708090"/><path class="fill" d="M15 6.56417H17.8125V4.68931H15.9375V2.81445H14.0625V4.8618C12.6008 5.37657 11.8333 6.97875 12.3481 8.44027C12.7442 9.56471 13.8077 10.3161 15 10.3139C15.5178 10.3139 15.9375 10.7336 15.9375 11.2513C15.9375 11.7691 15.5178 12.1888 15 12.1888H12.1875V14.0636H14.0625V15.9385H15.9375V13.8911C17.3992 13.3764 18.1667 11.7742 17.6519 10.3127C17.2558 9.18816 16.1923 8.43681 15 8.43903C14.4822 8.43903 14.0625 8.01936 14.0625 7.5016C14.0625 6.98385 14.4822 6.56417 15 6.56417Z" fill="#708090"/><path class="fill" d="M9.375 24.3758H7.5V22.501H5.625V26.2507H9.375V24.3758Z" fill="#708090"/><path class="fill" d="M20.625 24.3758V26.2507H24.375V22.501H22.5V24.3758H20.625Z" fill="#708090"/></svg>
	<span class="text">Deposit lists</span>
	</a>
	<a class="acc-header-nav__link " href="invest.php">
	<svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg"><path class="fill" d="M2.89676 18.6525C1.66874 15.6523 1.66867 12.3476 2.89676 9.34737C3.92853 6.82668 5.72347 4.77473 8.02912 3.44601V7.51574H10.0114V0.838864H3.41354V2.84488H5.37023C0.546709 6.66727 -1.39089 13.4192 1.0654 19.4202C2.0015 21.7072 3.51483 23.7103 5.44186 25.2132C7.31008 26.6701 9.53016 27.6338 11.8619 28L12.1659 26.0177C7.98042 25.3604 4.51541 22.6071 2.89676 18.6525Z" fill="#708090"/><path class="fill" d="M26.9269 19.4203C28.3576 15.925 28.3576 12.0751 26.9269 8.57978C25.9908 6.29279 24.4775 4.28966 22.5505 2.78689C20.6822 1.32985 18.4622 0.366164 16.1304 0L15.8264 1.98234C20.0118 2.63958 23.4769 5.3929 25.0955 9.34748C26.3236 12.3477 26.3236 15.6524 25.0955 18.6526C24.0637 21.1733 22.2688 23.2253 19.9632 24.554V20.4843H17.9809V27.1611H24.5787V25.1551H22.6307C24.5107 23.6695 25.9893 21.7109 26.9269 19.4203Z" fill="#708090"/><path class="fill" d="M15.8498 10.9805H17.8321C17.8321 9.18687 16.6235 7.67407 14.9873 7.23075V6.38962H13.0051V7.23075C11.3689 7.67407 10.1603 9.18681 10.1603 10.9805C10.1603 12.8155 11.1119 14.1302 12.8398 14.6826L13.0051 14.7354V18.6042C12.4872 18.2712 12.1426 17.6859 12.1426 17.0203H10.1603C10.1603 18.8139 11.3689 20.3267 13.0051 20.7701V21.6112H14.9873V20.7701C16.6235 20.3267 17.8321 18.814 17.8321 17.0203C17.8321 15.1853 16.8805 13.8706 15.1526 13.3182L14.9873 13.2654V9.39657C15.5052 9.72963 15.8498 10.3149 15.8498 10.9805ZM13.005 12.5917C12.4058 12.2769 12.1425 11.7744 12.1425 10.9805C12.1425 10.3149 12.4872 9.72957 13.005 9.39657V12.5917ZM15.8498 17.0203C15.8498 17.6859 15.5052 18.2712 14.9873 18.6042V15.4091C15.5865 15.7239 15.8498 16.2264 15.8498 17.0203Z" fill="#708090"/></svg>
	<span class="text">Invest</span>
	</a>
	<a class="acc-header-nav__link " href="withdraw.php">
	<svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg"><path class="fill" d="M23 0V28H11V26H21V2H7V26H9V28H5V0H23Z" fill="#708090"/><rect class="stroke" x="22" y="1" width="5" height="8" stroke="#708090" stroke-width="2"/><rect class="stroke" x="1" y="1" width="5" height="8" stroke="#708090" stroke-width="2"/><circle class="stroke" cx="14" cy="14" r="3" stroke="#708090" stroke-width="2"/><circle class="fill" cx="14" cy="6" r="2" fill="#708090"/><circle class="fill" cx="14" cy="22" r="2" fill="#708090"/></svg>
	<span class="text">Withdraw</span>
	</a>
	<a class="acc-header-nav__link " href="history.php">
	<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path class="fill" d="M15 0C15.4854 0 15.8789 0.393516 15.8789 0.878906C15.8789 1.3643 15.4854 1.75781 15 1.75781C7.69822 1.75781 1.75781 7.69822 1.75781 15C1.75781 22.3018 7.69822 28.2422 15 28.2422C22.3018 28.2422 28.2422 22.3018 28.2422 15C28.2422 11.4635 26.7557 8.04891 24.1982 5.5643V7.08984C24.1982 7.57523 23.8047 7.96875 23.3193 7.96875C22.8339 7.96875 22.4414 7.57523 22.4414 7.08984V3.57422C22.4414 3.08883 22.8339 2.69531 23.3193 2.69531H26.8652C27.3506 2.69531 27.7441 3.08883 27.7441 3.57422C27.7441 4.05961 27.3506 4.44727 26.8652 4.44727H25.5755C28.4175 7.28449 30 11.0788 30 15C30 23.2465 23.2495 30 15 30C6.75352 30 0 23.2495 0 15C0 6.75352 6.75053 0 15 0Z" fill="#708090"/><path class="fill" d="M15 5.33203C20.3306 5.33203 24.668 9.67084 24.668 15C24.668 20.3309 20.3288 24.668 15 24.668C9.66943 24.668 5.33203 20.3292 5.33203 15C5.33203 9.66908 9.67119 5.33203 15 5.33203ZM8.82252 19.9345L9.40664 19.3504C9.74982 19.0071 10.3063 19.0071 10.6496 19.3504C10.9928 19.6936 10.9928 20.2501 10.6496 20.5933L10.0654 21.1775C11.2036 22.0884 12.5977 22.6918 14.1211 22.8611V22.0312C14.1211 21.5459 14.5146 21.1523 15 21.1523C15.4854 21.1523 15.8789 21.5459 15.8789 22.0312V22.8611C17.4023 22.6918 18.7964 22.0884 19.9345 21.1775L19.3504 20.5933C19.0071 20.2501 19.0071 19.6936 19.3504 19.3504C19.6935 19.0071 20.2501 19.0071 20.5933 19.3504L21.1775 19.9345C22.0884 18.7964 22.6919 17.4023 22.8611 15.8789H22.0312C21.5459 15.8789 21.1523 15.4854 21.1523 15C21.1523 14.5146 21.5459 14.1211 22.0312 14.1211H22.8611C22.6918 12.5977 22.0884 11.2036 21.1775 10.0655L20.5933 10.6496C20.2501 10.9929 19.6935 10.9929 19.3504 10.6496C19.0071 10.3064 19.0071 9.74994 19.3504 9.4067L19.9345 8.82252C18.7964 7.91156 17.4023 7.30816 15.8789 7.13895V7.96875C15.8789 8.45414 15.4854 8.84766 15 8.84766C14.5146 8.84766 14.1211 8.45414 14.1211 7.96875V7.13895C12.5977 7.30816 11.2036 7.91156 10.0655 8.82252L10.6496 9.4067C10.9929 9.74994 10.9929 10.3064 10.6496 10.6496C10.3065 10.9929 9.74988 10.9929 9.4067 10.6496L8.82258 10.0655C7.91156 11.2036 7.30811 12.5977 7.13895 14.1211H7.96875C8.45414 14.1211 8.84766 14.5146 8.84766 15C8.84766 15.4854 8.45414 15.873 7.96875 15.873H7.13895C7.30816 17.3965 7.91156 18.7964 8.82252 19.9345Z" fill="#708090"/><path class="fill" d="M17.3793 16.1363L15.8789 14.636V11.4844C15.8789 10.999 15.4854 10.6055 15 10.6055C14.5146 10.6055 14.1211 10.999 14.1211 11.4844V15C14.1211 15.2331 14.2137 15.4566 14.3786 15.6214L16.1364 17.3793C16.4796 17.7225 17.0361 17.7225 17.3793 17.3793C17.7226 17.036 17.7226 16.4796 17.3793 16.1363Z" fill="#708090"/></svg>
	<span class="text">History</span>
	</a><br>
	<a class="acc-header-nav__link " href="affliation.php">
	<svg width="29" height="30" viewBox="0 0 29 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path class="fill" d="M28.8046 18.4753C28.5441 17.8465 28.0544 17.3567 27.4255 17.0962C27.114 16.9673 26.7862 16.9018 26.451 16.9018C25.712 16.9018 25.0293 17.2172 24.5552 17.7457L22.7404 16.9939C22.9797 16.2043 23.109 15.3673 23.109 14.5005C23.109 13.6335 22.9797 12.7963 22.7402 12.0064L24.5552 11.2546C25.0294 11.7834 25.7122 12.0988 26.4513 12.0988C26.7865 12.0988 27.1144 12.0334 27.4259 11.9043C28.724 11.3665 29.3425 9.87292 28.8049 8.57477C28.4089 7.61892 27.4846 7.00122 26.45 7.00122C26.1148 7.00122 25.7869 7.06665 25.4754 7.19574C24.4525 7.61948 23.8521 8.63674 23.9064 9.68419L22.0881 10.4374C21.2856 8.94454 20.0555 7.71442 18.5627 6.91195L19.3156 5.09416C19.3602 5.09648 19.4049 5.09784 19.4497 5.09784C20.4844 5.09784 21.4087 4.4802 21.8046 3.52418C22.0651 2.89532 22.065 2.20257 21.8045 1.57378C21.544 0.944923 21.0543 0.455129 20.4254 0.194626C20.1139 0.0656496 19.7862 0.000226573 19.451 0.000226573C18.4163 0.000226573 17.492 0.617865 17.0961 1.57383C16.8356 2.20269 16.8356 2.89543 17.0961 3.52429C17.2441 3.88148 17.4662 4.19353 17.7455 4.44446L16.9936 6.25976C16.2039 6.02027 15.3668 5.89101 14.5 5.89101C13.6333 5.89101 12.7963 6.02033 12.0066 6.25971L11.2542 4.44304C12.0334 3.74078 12.3282 2.59658 11.9044 1.57355C11.5085 0.617695 10.5841 0 9.54949 0C9.2143 0 8.88646 0.065423 8.57494 0.194456C7.27691 0.732171 6.65834 2.22585 7.19597 3.52401C7.59195 4.47986 8.51626 5.09756 9.55085 5.09756C9.5956 5.09756 9.64018 5.0962 9.68458 5.09387L10.4375 6.91173C8.94469 7.71419 7.71457 8.94426 6.91209 10.4371L5.0953 9.68453C5.11546 9.30938 5.0518 8.93151 4.9038 8.57415C4.64325 7.9453 4.15354 7.4555 3.52466 7.195C3.21319 7.06602 2.88542 7.0006 2.55022 7.0006C1.51557 7.0006 0.591255 7.61829 0.195338 8.57426C-0.0651506 9.20312 -0.0650939 9.89581 0.195395 10.5247C0.455941 11.1535 0.945654 11.6433 1.57453 11.9038C1.886 12.0327 2.21377 12.0982 2.54897 12.0982C3.28802 12.0982 3.97076 11.7828 4.44478 11.2543L6.25988 12.0061C6.02035 12.7959 5.89098 13.6333 5.89098 14.5003C5.89098 15.367 6.02023 16.2041 6.2596 16.9937L4.44478 17.7454C3.97065 17.2166 3.28785 16.9012 2.54869 16.9012C2.21349 16.9012 1.88566 16.9666 1.57413 17.0957C0.276051 17.6335 -0.342518 19.1271 0.195112 20.4252C0.591085 21.3811 1.51546 21.9988 2.54999 21.9988C2.88525 21.9988 3.21308 21.9334 3.5246 21.8043C4.54747 21.3805 5.14792 20.3633 5.09365 19.3158L6.91153 18.5628C7.71395 20.0559 8.94407 21.2861 10.437 22.0887L9.68436 23.9058C9.63978 23.9035 9.59509 23.9022 9.55023 23.9022C8.51558 23.9022 7.59127 24.5198 7.19535 25.4758C6.93486 26.1047 6.93492 26.7974 7.19541 27.4262C7.45595 28.0551 7.94567 28.5449 8.57454 28.8054C8.88601 28.9344 9.21379 28.9998 9.54898 28.9998C10.5836 28.9998 11.5079 28.3821 11.9039 27.4262C12.1644 26.7973 12.1644 26.1046 11.9038 25.4757C11.7559 25.1185 11.5338 24.8065 11.2545 24.5555L12.006 22.741C12.7958 22.9805 13.633 23.1098 14.4999 23.1098C15.3668 23.1098 16.2039 22.9805 16.9936 22.741L17.7458 24.557C16.9665 25.2592 16.6717 26.4034 17.0955 27.4265C17.4915 28.3823 18.4159 29 19.4505 29C19.7857 29 20.1135 28.9346 20.425 28.8055C21.723 28.2678 22.3416 26.7741 21.804 25.476C21.408 24.5201 20.4837 23.9024 19.4491 23.9024C19.4044 23.9024 19.3598 23.9038 19.3154 23.9061L18.5627 22.089C20.0557 21.2864 21.2858 20.0561 22.0883 18.5631L23.9047 19.3155C23.8845 19.6906 23.9482 20.0685 24.0962 20.4259C24.3567 21.0547 24.8464 21.5445 25.4753 21.805C25.7868 21.934 26.1145 21.9994 26.4497 21.9994C27.4844 21.9994 28.4087 21.3817 28.8046 20.4257C29.0652 19.7968 29.0651 19.1042 28.8046 18.4753ZM26.1257 8.76549C26.23 8.72227 26.3391 8.70041 26.45 8.70041C26.795 8.70041 27.1031 8.90636 27.2351 9.22504C27.4143 9.65762 27.2081 10.1553 26.7756 10.3345C26.6713 10.3777 26.5622 10.3996 26.4513 10.3996C26.1063 10.3996 25.7982 10.1936 25.6662 9.87502C25.487 9.44244 25.6932 8.94471 26.1257 8.76549ZM18.6659 2.22416C18.7979 1.90548 19.1061 1.69958 19.451 1.69958C19.5619 1.69958 19.671 1.7215 19.7753 1.76466C19.9848 1.85144 20.148 2.01463 20.2348 2.22421C20.3216 2.43374 20.3216 2.66456 20.2348 2.87408C20.1028 3.19276 19.7947 3.39871 19.4498 3.39871C19.3389 3.39871 19.2297 3.37679 19.1255 3.33363C18.9159 3.24685 18.7527 3.0836 18.6659 2.87408C18.5792 2.66456 18.5791 2.43374 18.6659 2.22416ZM9.87518 3.33334C9.7709 3.37656 9.66181 3.39843 9.55091 3.39843C9.20597 3.39843 8.89785 3.19253 8.76588 2.87391C8.58666 2.44133 8.79284 1.94366 9.22529 1.76444C9.32956 1.72128 9.43871 1.69936 9.54961 1.69936C9.89461 1.69936 10.2027 1.90525 10.3347 2.22393C10.5139 2.65646 10.3077 3.15412 9.87518 3.33334ZM3.33412 9.87445C3.20215 10.1931 2.89397 10.3991 2.54909 10.3991C2.43818 10.3991 2.32904 10.3772 2.22476 10.334C2.01525 10.2472 1.85201 10.084 1.76524 9.87445C1.67847 9.66493 1.67847 9.43411 1.76524 9.22459C1.89721 8.90585 2.20539 8.6999 2.55027 8.6999C2.66118 8.6999 2.77032 8.72182 2.8746 8.76498C3.08411 8.85176 3.24735 9.01495 3.33412 9.22453C3.42095 9.43411 3.42095 9.66493 3.33412 9.87445ZM2.87443 20.2346C2.77015 20.2778 2.66106 20.2997 2.55011 20.2997C2.20517 20.2997 1.89704 20.0938 1.76507 19.7751C1.58586 19.3425 1.79203 18.8448 2.22454 18.6656C2.32881 18.6224 2.43796 18.6005 2.54886 18.6005C2.8938 18.6005 3.20192 18.8065 3.33389 19.1252C3.51316 19.5577 3.30699 20.0554 2.87443 20.2346ZM10.3342 26.776C10.2022 27.0946 9.89404 27.3005 9.54916 27.3005C9.43825 27.3005 9.32911 27.2786 9.22483 27.2355C9.01532 27.1487 8.85208 26.9855 8.76531 26.7759C8.67854 26.5664 8.67854 26.3356 8.76531 26.126C8.89728 25.8074 9.20546 25.6014 9.55034 25.6014C9.66125 25.6014 9.77039 25.6233 9.87467 25.6665C10.0842 25.7533 10.2474 25.9165 10.3342 26.126C10.421 26.3356 10.421 26.5664 10.3342 26.776ZM19.125 25.6668C19.2293 25.6236 19.3384 25.6017 19.4493 25.6017C19.7942 25.6016 20.1023 25.8076 20.2343 26.1262C20.4135 26.5588 20.2073 27.0565 19.7749 27.2357C19.6706 27.2788 19.5615 27.3008 19.4506 27.3008C19.1056 27.3008 18.7975 27.0949 18.6655 26.7762C18.4863 26.3437 18.6924 25.846 19.125 25.6668ZM14.5001 21.4106C13.1878 21.4106 11.96 21.0429 10.9139 20.4051C11.1228 19.2085 12.1688 18.2954 13.424 18.2954H15.5762C16.8313 18.2954 17.8774 19.2085 18.0863 20.4051C17.0402 21.0429 15.8123 21.4106 14.5001 21.4106ZM11.6965 13.7925C11.6965 12.2465 12.9542 10.9888 14.5 10.9888C16.0459 10.9888 17.3036 12.2466 17.3036 13.7925C17.3036 15.3384 16.0459 16.5962 14.5 16.5962C12.9542 16.5962 11.6965 15.3384 11.6965 13.7925ZM19.5128 19.2515C19.1357 18.3231 18.4399 17.5572 17.5614 17.0905C18.4471 16.2677 19.0028 15.094 19.0028 13.7925C19.0028 11.3096 16.9829 9.28961 14.5001 9.28961C12.0173 9.28961 9.99741 11.3096 9.99741 13.7925C9.99741 15.094 10.553 16.2677 11.4388 17.0905C10.5603 17.5572 9.86447 18.3231 9.48736 19.2515C8.3123 18.0122 7.59036 16.3392 7.59036 14.5005C7.59036 10.6902 10.6901 7.59037 14.5001 7.59037C18.3102 7.59037 21.4099 10.6902 21.4099 14.5005C21.4099 16.3392 20.6879 18.0122 19.5128 19.2515ZM27.2349 19.7755C27.1029 20.0942 26.7947 20.3002 26.4498 20.3002C26.3389 20.3002 26.2298 20.2782 26.1255 20.2351C25.916 20.1483 25.7528 19.9851 25.666 19.7755C25.5792 19.566 25.5792 19.3352 25.666 19.1257C25.798 18.807 26.1062 18.601 26.451 18.601C26.5619 18.601 26.6711 18.623 26.7754 18.6661C26.9849 18.7529 27.1481 18.9161 27.2349 19.1257C27.3217 19.3352 27.3217 19.566 27.2349 19.7755Z" fill="#708090"/></svg>
	<span class="text">Affiliate</span>
	</a>
	<a class="acc-header-nav__link " href="editaccount.php">
                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg"><path class="fill" d="M6.46154 14C6.46154 9.84322 9.84428 6.46154 14 6.46154C18.1557 6.46154 21.5385 9.84322 21.5385 14C21.5385 18.1568 18.1557 21.5385 14 21.5385C9.84428 21.5385 6.46154 18.1568 6.46154 14ZM8.61538 14C8.61538 16.9689 11.0311 19.3846 14 19.3846C16.9689 19.3846 19.3846 16.9689 19.3846 14C19.3846 11.0311 16.9689 8.61538 14 8.61538C11.0311 8.61538 8.61538 11.0311 8.61538 14ZM2.69757 10.4837C2.91106 9.79695 3.1866 9.13123 3.52261 8.49391L1.93299 6.2675L6.2675 1.93194L8.49391 3.52261C9.13123 3.1866 9.7959 2.91211 10.4837 2.69757L10.9328 0H17.0662L17.5152 2.69757C18.203 2.91106 18.8677 3.1866 19.505 3.52261L21.7314 1.93194L26.066 6.2675L24.4763 8.49391C24.8123 9.13123 25.0868 9.79695 25.3014 10.4837L28 10.9338V17.0662L25.3024 17.5152C25.0889 18.202 24.8134 18.8677 24.4774 19.505L26.067 21.7314L21.7325 26.067L19.5061 24.4763C18.8688 24.8123 18.2041 25.0868 17.5163 25.3014L17.0672 28H10.9328L10.4837 25.3024C9.7959 25.0889 9.13123 24.8134 8.49391 24.4774L6.2675 26.0681L1.93299 21.7325L3.52261 19.5061C3.1866 18.8688 2.91211 18.203 2.69757 17.5163L0 17.0662V10.9338L2.69757 10.4837ZM2.15385 12.7585V15.2415L4.42811 15.6206L4.59743 16.3111C4.82985 17.2639 5.20688 18.1731 5.71747 19.0139L6.08661 19.6207L4.74467 21.4985L6.5015 23.2538L8.37823 21.9123L8.9861 22.2815C9.82482 22.791 10.7345 23.168 11.69 23.4026L12.3794 23.5719L12.7595 25.8462H15.2415L15.6217 23.5719L16.3111 23.4026C17.2665 23.1691 18.1752 22.7921 19.0155 22.2815L19.6228 21.9123L21.4995 23.2538L23.2564 21.4985L21.9144 19.6207L22.2836 19.0139C22.7942 18.1731 23.1712 17.2639 23.4036 16.3111L23.5729 15.6206L25.8462 15.2415V12.7585L23.5719 12.3794L23.4026 11.6889C23.1701 10.7361 22.7931 9.82692 22.2825 8.9861L21.9134 8.37928L23.2553 6.5015L21.4985 4.74624L19.6218 6.08767L19.0139 5.71852C18.1752 5.20898 17.2655 4.83196 16.31 4.59743L15.6206 4.42811L15.2405 2.15385H12.7585L12.3783 4.42811L11.6889 4.59743C10.7335 4.8309 9.82482 5.20793 8.98453 5.71852L8.37718 6.08767L6.50045 4.74624L4.74361 6.5015L6.08556 8.37928L5.71642 8.9861C5.20583 9.82692 4.8288 10.7361 4.59638 11.6889L4.42706 12.3794L2.15385 12.7585Z" fill="#708090"/></svg>
                    <span class="text">Edit account</span>
                </a>
	</nav>
	</div>
	</div>
	</div>
	<div class="acc-body">
	
	<div class="nav-operations">
	<div class="container">
	<div class="nav-operations-inner">
	<div class="nav-operations-block nob">
	<div class="nob__header">
	<h4 class="nob__title">
	<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
	<circle class="stroke" cx="15" cy="15" r="14" stroke="#1E2B38" stroke-width="2"/>
	<rect class="fill" x="21" y="14" width="2" height="12" transform="rotate(90 21 14)" fill="#1E2B38"/>
	<rect class="fill" x="14" y="9" width="2" height="12" fill="#1E2B38"/>
	</svg><span>Active investments</span>
	</h4>
	<div class="nob__tab-nav g-tab-nav">
	<a class="js-tab-link-nob g-tab-nav__item is-active" href="javascript:;" data-show="btc">USD</a>

	</div>
	</div>
	<div class="nob__body" data-show="btc">
	<div class="nob__info">
	<div class="nob__info-title">Total invested:</div>
	<div class="nob__info-val">
	<span class="btc">$<?php echo $user_data['id']; ?></span>

	</div>
	</div><a class="nob__link btn btn--inverse" href="1.html">Invest</a>
	</div>
	</div>
	<div class="nav-operations-block nob">
	<div class="nob__header">
	<h4 class="nob__title">
	<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
	<circle class="stroke" cx="15" cy="15" r="14" stroke="#1E2B38" stroke-width="2"/>
	<path class="fill" d="M14.7185 21.584V7.824C14.7185 7.584 14.6385 7.6 14.4305 7.6H14.1425C13.9665 7.6 13.8705 7.584 13.8705 7.824V9.168C12.2225 9.504 11.4225 10.608 11.4385 12.016C11.4385 13.44 12.3505 14.176 13.8705 14.848V18.336C13.1665 18.208 12.4625 17.984 11.8385 17.712C11.6945 17.664 11.5825 17.696 11.5185 17.84C11.4865 17.952 11.1345 18.816 11.1025 18.896C11.0225 19.072 11.0545 19.2 11.1825 19.264C11.9985 19.728 12.9265 19.984 13.8705 20.096V21.584C13.8705 21.824 13.9665 21.808 14.1425 21.808H14.4305C14.6385 21.808 14.7185 21.824 14.7185 21.584ZM15.2625 7.824V21.584C15.2625 21.824 15.3585 21.808 15.5505 21.808H15.8065C16.0145 21.808 16.0945 21.824 16.0945 21.584V20.08C17.6785 19.824 18.8305 18.832 18.8305 17.056C18.8305 15.344 17.5185 14.592 16.0945 13.952V10.864C16.5585 10.944 17.0385 11.072 17.5505 11.232C17.6945 11.28 17.7585 11.28 17.8225 11.088L18.2065 10.016C18.2545 9.856 18.2225 9.744 18.0945 9.696C17.4705 9.392 16.7825 9.216 16.0945 9.136V7.824C16.0945 7.584 16.0145 7.6 15.8065 7.6H15.5505C15.3585 7.6 15.2625 7.584 15.2625 7.824ZM17.0705 17.088C17.0705 17.68 16.7185 18.144 16.0945 18.352V15.76C16.7345 16.128 17.0705 16.512 17.0705 17.088ZM13.2305 11.92C13.2305 11.536 13.4225 11.184 13.8705 10.944V12.976C13.4385 12.688 13.2305 12.336 13.2305 11.92Z" fill="#1E2B38"/>
	</svg><span>Available balance</span>
	</h4>
	<div class="nob__tab-nav g-tab-nav">
	<a class="js-tab-link-nob g-tab-nav__item is-active" href="javascript:;" data-show="btc">USD</a>
	</div>
	</div>
	<div class="nob__body" data-show="btc">
	<div class="nob__info">
	<div class="nob__info-title">Total balance:</div>
	<div class="nob__info-val">
	<span class="btc">$<?php echo $user_data['total balance']; ?></span>

	</div>
	</div><a class="nob__link btn btn--inverse" href="2.html">Withdraw</a>
	</div>
	</div>
	</div>
	</div>
	</div>
	<div class="acc-balance">
	<div class="container">
	<div class="acc-balance-inner">
	
	<div class="acc-balance-item">
	<div class="acc-balance-item__logo quarter-circle"><img src="en\images\main-page\perfect money.jpg" alt="PM"></div>
	<div class="acc-balance-item__balance">0.00</div>
	<div class="acc-balance-item__name">PerfectMoney</div>
	</div>
	
	
	<div class="acc-balance-item">
	<div class="acc-balance-item__logo quarter-circle"><img src="en\images\main-page\bitcoin.jpg" alt="Bitcoin"></div>
	<div class="acc-balance-item__balance">0.00</div>
	<div class="acc-balance-item__name">Bitcoin</div>
	</div>
	<div class="acc-balance-item">
	<div class="acc-balance-item__logo quarter-circle"><img src="en\images\main-page\litecoin.png" alt="Litecoin"></div>
	<div class="acc-balance-item__balance">0.00</div>
	<div class="acc-balance-item__name">Litecoin</div>
	</div>
	<div class="acc-balance-item">
	<div class="acc-balance-item__logo quarter-circle"><img src="en\images\main-page\ethereum-icon.jpg" alt="Ethereum"></div>
	<div class="acc-balance-item__balance">0.00</div>
	<div class="acc-balance-item__name">Ethereum</div>
	</div>
	
	<div class="acc-balance-item">
	<div class="acc-balance-item__logo quarter-circle"><img src="en\images\main-page\bitcoin.jpg" alt="BitcoinGold"></div>
	<div class="acc-balance-item__balance">0.00</div>
	<div class="acc-balance-item__name">BitcoinGold</div>
	</div>
	<div class="acc-balance-item">
	<div class="acc-balance-item__logo quarter-circle"><img src="en\images\main-page\dash.png" alt="Dash"></div>
	<div class="acc-balance-item__balance">0.00</div>
	<div class="acc-balance-item__name">Dash</div>
	</div>
	</div>
	</div>
	</div><div class="operations-info section-over">
	<div class="container">
	<div class="operations-info-inner">
	<div class="operations-info-block oib">
	<div class="oib__header">
	<h4 class="oib__title">
	<svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
	<path class="fill" d="M2.89676 18.6525C1.66874 15.6523 1.66867 12.3476 2.89676 9.34737C3.92853 6.82668 5.72347 4.77473 8.02912 3.44601V7.51574H10.0114V0.838864H3.41354V2.84488H5.37023C0.546709 6.66727 -1.39089 13.4192 1.0654 19.4202C2.0015 21.7072 3.51483 23.7103 5.44186 25.2132C7.31008 26.6701 9.53016 27.6338 11.8619 28L12.1659 26.0177C7.98042 25.3604 4.51541 22.6071 2.89676 18.6525Z" fill="#1e2b38"/>
	<path class="fill" d="M26.9269 19.4203C28.3576 15.925 28.3576 12.0751 26.9269 8.57978C25.9908 6.29279 24.4775 4.28966 22.5505 2.78689C20.6822 1.32985 18.4622 0.366164 16.1304 0L15.8264 1.98234C20.0118 2.63958 23.4769 5.3929 25.0955 9.34748C26.3236 12.3477 26.3236 15.6524 25.0955 18.6526C24.0637 21.1733 22.2688 23.2253 19.9632 24.554V20.4843H17.9809V27.1611H24.5787V25.1551H22.6307C24.5107 23.6695 25.9893 21.7109 26.9269 19.4203Z" fill="#1e2b38"/>
	<path class="fill" d="M15.8498 10.9805H17.8321C17.8321 9.18687 16.6235 7.67407 14.9873 7.23075V6.38962H13.0051V7.23075C11.3689 7.67407 10.1603 9.18681 10.1603 10.9805C10.1603 12.8155 11.1119 14.1302 12.8398 14.6826L13.0051 14.7354V18.6042C12.4872 18.2712 12.1426 17.6859 12.1426 17.0203H10.1603C10.1603 18.8139 11.3689 20.3267 13.0051 20.7701V21.6112H14.9873V20.7701C16.6235 20.3267 17.8321 18.814 17.8321 17.0203C17.8321 15.1853 16.8805 13.8706 15.1526 13.3182L14.9873 13.2654V9.39657C15.5052 9.72963 15.8498 10.3149 15.8498 10.9805ZM13.005 12.5917C12.4058 12.2769 12.1425 11.7744 12.1425 10.9805C12.1425 10.3149 12.4872 9.72957 13.005 9.39657V12.5917ZM15.8498 17.0203C15.8498 17.6859 15.5052 18.2712 14.9873 18.6042V15.4091C15.5865 15.7239 15.8498 16.2264 15.8498 17.0203Z" fill="#1e2b38"/>
	</svg><span>Active investments</span>
	</h4>
	<div class="oib__tab-nav g-tab-nav">
	<a class="js-tab-link-oib g-tab-nav__item is-active" href="javascript:;" data-show="btc">USD</a>

	</div>
	</div>
	<div class="oib__body" data-show="btc">
	<div class="oib__row">
	<div class="oib__row-title">Recent Investment:</div>
	<div class="oib__row-val">
	<span class="btc">$<?php echo $user_data['recent investment']; ?></span>
	</div>
	</div>
	<div class="oib__row">
	<div class="oib__row-title">Total Active Investments:</div>
	<div class="oib__row-val">
	<span class="btc">$<?php echo $user_data['id']; ?></span>


	</div>
	</div>
	<div class="oib__row">
	<div class="oib__row-title">Total Investments:</div>
	<div class="oib__row-val">
	<span class="btc">$<?php echo $user_data['id']; ?></span>

	</div>
	</div>
	</div>
	</div>
	<div class="operations-info-block oib">
	<div class="oib__header">
	<h4 class="oib__title">
	<svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
	<path class="fill" d="M23 0V28H11V26H21V2H7V26H9V28H5V0H23Z" fill="#1e2b38"/>
	<rect class="stroke" x="22" y="1" width="5" height="8" stroke="#1e2b38" stroke-width="2"/>
	<rect class="stroke" x="1" y="1" width="5" height="8" stroke="#1e2b38" stroke-width="2"/>
	<circle class="stroke" cx="14" cy="14" r="3" stroke="#1e2b38" stroke-width="2"/>
	<circle class="fill" cx="14" cy="6" r="2" fill="#1e2b38"/>
	<circle class="fill" cx="14" cy="22" r="2" fill="#1e2b38"/>
	</svg><span>Withdrawal stats</span>
	</h4>
	<div class="oib__tab-nav g-tab-nav">
	<a class="js-tab-link-oib g-tab-nav__item is-active" href="javascript:;" data-show="btc">USD</a>
	</div>
	</div>
	<div class="oib__body" data-show="btc">
	<div class="oib__row">
	<div class="oib__row-title">Last Withdraw:</div>
	<div class="oib__row-val">
	<span class="btc">N/A</span>
	<span class="ltc">0.00000000 LTC</span>
	<span class="eth">0.00000000 ETH</span>
	<span class="xmr">0.00000000 XMR</span>
	<span class="xrp">0.00000000 XRP</span>
	<span class="dash">0.00000000 DASH</span>
	</div>
	</div>
	<div class="oib__row">
	<div class="oib__row-title">Pending Withdraws:</div>
	<div class="oib__row-val">
	<span class="btc">$<?php echo $user_data['pending withdrawal']; ?></span>

	</div>
	</div>
	<div class="oib__row">
	<div class="oib__row-title">Total Withdraws:</div>
	<div class="oib__row-val">
	<span class="btc">$0</span>
	<span class="ltc">0.00000000 LTC</span>
	<span class="eth">0.00000000 ETH</span>
	<span class="xmr">0.00000000 XMR</span>
	<span class="xrp">0.00000000 XRP</span>
	<span class="dash">0.00000000 DASH</span>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	<div class="pers-link">
	<div class="container">
	<div class="pers-link-inner">
	<div class="pers-link-lb">
	<h4>Personal Affiliate link</h4>
	<p>http://bitnet-global.ltd/?ref=jatinrajoriya7</p>
	</div>
	<div class="wrapper-l-a pers-link-rb">
	<div class="box-l-a">
	<div class="l-a">
	<div class="l-a__img quarter-circle"><img src="en/images/ava/1.jpg" alt="photo"></div><span class="l-a__line"></span>
	</div>
	<div class="l-a">
	<div class="l-a__img quarter-circle"><img src="en/images/ava/2.jpg" alt="photo"></div><span class="l-a__line"></span>
	</div>
	<div class="l-a">
	<div class="l-a__img quarter-circle"><img src="en/images/ava/3.jpg" alt="photo"></div><span class="l-a__line"></span>
	</div>
	<div class="l-a">
	<div class="l-a__img quarter-circle"><img src="en/images/ava/4.jpg" alt="photo"></div><span class="l-a__line"></span>
	</div>
	<div class="l-a">
	<div class="l-a__img quarter-circle"><img src="en/images/ava/5.jpg" alt="photo"></div><span class="l-a__line"></span>
	</div>
	<div class="l-a">
	<div class="l-a__img quarter-circle"><img src="en/images/ava/6.jpg" alt="photo"></div><span class="l-a__line"></span>
	</div>
	<div class="l-a">
	<div class="l-a__img quarter-circle"><img src="en/images/ava/7.jpg" alt="photo"></div><span class="l-a__line"></span>
	</div>
	<div class="l-a">
	<div class="l-a__img quarter-circle"><img src="en/images/ava/8.jpg" alt="photo"></div><span class="l-a__line"></span>
	</div>
	<div class="l-a-logo"><img src="en/images/logo.png" alt="logo"></div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	﻿        <div class="acc-footer">
	<div class="container">
	<div class="acc-footer-inner">
	<p class="acc-footer__item">UserName:<span class="acc-footer__val acc-footer__ip"><?php echo $user_data['email']; ?></spam></p>
	<p class="acc-footer__item">Your IP Address<span class="acc-footer__val acc-footer__ip"><?php echo get_client_ip();?></span></p>
	<p class="acc-footer__item">Registration date:<span class="acc-footer__val acc-footer__ip"><?php echo $user_data['date']; ?></spam></p>
	</div>
	</div>
	</div>
	</main>
	<footer class="footer">
	<div class="footer__top">
	<div class="container">
	<ul class="no-style footer__nav">
	<li class="footer__nav-item"><a class="footer__nav-link" href="/">Home</a></li>
	<li class="footer__nav-item"><a class="footer__nav-link" href="/?a=cust&page=about">About Us</a></li>
	<li class="footer__nav-item"><a class="footer__nav-link" href="/?a=cust&page=a-program">Affiliate Program</a></li>
	<li class="footer__nav-item"><a class="footer__nav-link" href="/?a=faq">FAQ</a></li>
	<li class="footer__nav-item"><a class="footer__nav-link" href="/?a=support">Contact us</a></li>
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
	
	<form class="formLogin" method=post name=mainform onsubmit="return checkform()"><input type="hidden" name="form_id" value="16211524964181"><input type="hidden" name="form_token" value="6cc59e39b388cf3fcf378f0f72ac3ebd">
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

	
	<!--Start of Tawk.to Script-->
	<script type="text/javascript">
	var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
	(function(){
	var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
	s1.async=true;
	s1.src='https://embed.tawk.to/5fe28020df060f156a8f75a5/1eq6c90rg';
	s1.charset='UTF-8';
	s1.setAttribute('crossorigin','*');
	s0.parentNode.insertBefore(s1,s0);
	})();
	</script>
	<!--End of Tawk.to Script-->
	
	</body>
	</html>
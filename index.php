<?php
header('HTTP/1.1 503 Service Temporarily Unavailable');
header('Status: 503 Service Temporarily Unavailable');
?>

<!DOCTYPE html>

<html id="<?=$htmlID;?>" class="<?=($status !== 0)?'iphone':'desktop';?>">
<head>

	<title>Stop American Censorship!</title>
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />  
	<meta name="viewport" content="user-scalable=no; width=device-width; initial-scale=1.0; maximum-scale=1.0;"> 
	<link rel="shortcut icon" href="_/images/favicon.ico">
	<link rel="apple-touch-icon-precomposed" href="_/images/ios-icon.png">
	<link rel="apple-touch-startup-image" href="_/images/ios-splash.jpg" />  
	 
	<meta property="og:title" content="Stop American Censorship!" /> 
	<meta property="og:description" content="Congress is considering a law that would censor the web. Sites you use every day could be blocked if it passes." /> 
	<meta property="og:image" content="http://brdrck.me/sopa/_/images/facebook.jpg" />
	
	<link rel="stylesheet" href="_/styles/main.css" type="text/css">
	
	<script src="_/scripts/jquery.min.js"></script>
	<script>
	    window.onload = function() {
	        setTimeout(function() { window.scrollTo(0, 1) }, 100);
	    }
	</script>
</head>
<body>
	<div id="container">
		<div id="logo"></div>
		<h1>Congress is considering a law<br />
		That would <b>censor the web</b></h1>
		<p>Sites you use every day<br />
		<b>could be blocked</b> if it passes</p>
		<a href="http://americancensorship.org">Take action now!</a>
	</div>
</body>
</html>
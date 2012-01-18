<!DOCTYPE html>

<?php 
$status = 0;

if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']),"iphone") || strpos(strtolower($_SERVER['HTTP_USER_AGENT']),"ipod") || strpos(strtolower($_SERVER['HTTP_USER_AGENT']),"ipad")) {
      $status = (strpos(strtolower($_SERVER['HTTP_USER_AGENT']),"safari")) ? 1 : 2;
}
?>

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
	    
	    $(function() {
	    	var thisLocation = document.location.toString();
	    	if (thisLocation.match('#')) {
	    		var myAnchor = thisLocation.split('#')[1];
	    		
	    		if(myAnchor == "learnmore") {
	    			$('html').addClass('article');
	    			$('a.learnmore').hide();
	    			$('#learnmore').show();
	    		}
	    	}
	    });
	</script>
</head>
<body>
	<div id="container">
		<div id="logo"></div>
		<h1>Congress is considering a law<br />
		That would <strong>censor the web</strong></h1>
		<p>Sites you use every day<br />
		<strong>could be blocked</strong> if it passes</p>
		<a href="http://americancensorship.org">Take action now!</a>
		<a class="learnmore" href="#learnmore" onclick="javascript:$('html').addClass('article');$('a.learnmore').hide();$('#learnmore').show();">Learn more</a>
		
		<a class="nostyle" name="learnmore"></a>
		<div id="learnmore" style="display: none;">
			<h1>What is SOPA?</h1>
			<p>Also known as the Stop Online Piracy Act, SOPA is a proposed bill, within the House, which aims to crack down on copyright infringement by restricting access to sites that host pirated content.</p>
			<p>The bill could require your Internet provider to block access to sites suspected of containing or linking to copyrighted content.  As well as force search engines like Google, Yahoo and Bing to stop linking to them.  And payment processors like Paypal to couldn't transfer funds to them.</p>
			<p>If SOPA were to become law, the Internet in America would begin to appear similar to the Internet in countries like China. China has what is basically a government-controlled firewall in place, blocking access to sites for any number of reasons. Essentially sites that you'd want to visit, sites that you go to on a daily basis could be shutdown in the blink of an eye, with little-to-no judicial due-process.</p>
			
			<h1>What does this mean for me?</h1>
			<p>Well, currently, sites like YouTube hold the uploader liable for the content they add.  With SOPA, YouTube is liable. This will force sites like YouTube to <strong>censor their content</strong> in order to prevent any legal actions.  This can also be said for sites like Facebook, Reddit, MySpace, Tumblr, Wikipedia, and any other user curated content sites.</p>
			
			<h1>Does this effect non-US citizens?</h1>
			<p>Yes, some of the most popular websites today are located in America. <strong>So you will be censored too.</strong></p>
			
			<h1>What can I do to prevent this?</h1>
			<p>You can help by <a target="_blank" href="http://americancensorship.org">writing your senator</a> and tell them you oppose SOPA & PIPA.</p>
			<p>If you own a website, you can spread awareness by displaying a page similar to this or redirecting it to <a target="_blank" href="http://brdrck.me/sopa">http://brdrck.me/sopa</a>.</p>
		</div>
	</div>
</body>
</html>
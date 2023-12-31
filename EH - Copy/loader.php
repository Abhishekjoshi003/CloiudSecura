
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>CSS3 Loading Animation</title>
<style type="text/css">
body {
	background: #161616 url(pattern_40.gif) top left repeat;
	margin: 0;
	padding: 0;
	font: 12px normal Verdana, Arial, Helvetica, sans-serif;
	height: 100%;
}

* {margin: 0; padding: 0; outline: none;}

img {border: none;}

a { 
	text-decoration:none; 
	color:#00c6ff;
}

h1 {
	font: 4em normal Arial, Helvetica, sans-serif;
	padding: 20px;	margin: 0;
	text-align:center;
	color:#bbb;
}

h1 small{
	font: 0.2em normal  Arial, Helvetica, sans-serif;
	text-transform:uppercase; letter-spacing: 0.2em; line-height: 5em;
	display: block;
}

.container {width: 960px; margin: 0 auto; overflow: hidden;}

/* PROGRESS BAR */

ul#progress {
	list-style:none;
	width:125px;
	margin:0 auto;
	padding-top:50px;
	padding-bottom:50px;
}
ul#progress li {
	float:left;
	position:relative;
	width:15px;
	height:15px;
	border:1px solid #fff;
	border-radius:50px;
	margin-left:10px;
	border-left:1px solid #111; border-top:1px solid #111; border-right:1px solid #333; border-bottom:1px solid #333; 
	background:#000;
}

ul#progress li:first-child { margin-left:0; }

.running .ball {
	background-color:#2187e7; 
	background-image: -moz-linear-gradient(90deg, #2187e7 25%, #a0eaff); 
	background-image: -webkit-linear-gradient(90deg, #2187e7 25%, #a0eaff); 

	width:15px;
	height:15px;
	border-radius:50px;
	-moz-transform:scale(0);
	-webkit-transform:scale(0);
	
	-moz-animation:loading 1s linear forwards;
	-webkit-animation:loading 1s linear forwards;
}

.running .pulse {
	width:15px;
	height:15px;
	border-radius:30px;
	border: 1px solid #00c6ff;
	box-shadow: 0 0 5px #00c6ff;
	position:absolute;
	top:-1px;
	left:-1px;
	-moz-transform:scale(0);
	-webkit-transform:scale(0);
	
	-webkit-animation:pulse 1s ease-out;
	-moz-animation:pulse 1s ease-out;
}

#layer1 { -moz-animation-delay:0.5s; -webkit-animation-delay:0.5s; }
#layer2 { -moz-animation-delay:1s; -webkit-animation-delay:1s; }
#layer3 { -moz-animation-delay:1.5s; -webkit-animation-delay:1.5s; }
#layer4 { -moz-animation-delay:2s; -webkit-animation-delay:2s; }
#layer5 { -moz-animation-delay:2.5s; -webkit-animation-delay:2.5s; }

#layer7 { -moz-animation-delay:1.5s; -webkit-animation-delay:1.5s; }
#layer8 { -moz-animation-delay:2s; -webkit-animation-delay:2s; }
#layer9 { -moz-animation-delay:2.5s; -webkit-animation-delay:2.5s; }
#layer10 { -moz-animation-delay:3s; -webkit-animation-delay:3s; }
#layer11 { -moz-animation-delay:3.5s; -webkit-animation-delay:3.5s; }

@-moz-keyframes loading {
	0%{-moz-transform:scale(0,0);}
	100%{-moz-transform:scale(1,1);}	
}

@-webkit-keyframes loading {
	0%{-webkit-transform:scale(0,0);}
	100%{-webkit-transform:scale(1,1);}	
}


@-moz-keyframes pulse {
	0%   {-moz-transform: scale(0);opacity: 0;}
    10%  {-moz-transform: scale(1);opacity: 0.5;}
	50%  {-moz-transform: scale(1.75);opacity: 0;}
    100% {-moz-transform: scale(0);opacity: 0;}  
}

@-webkit-keyframes pulse {
	0%   {-webkit-transform: scale(0);opacity: 0;}
	10%  {-webkit-transform: scale(1);opacity: 0.5;}
    50%  {-webkit-transform: scale(1.75);opacity: 0;}
    100% {-webkit-transform: scale(0);opacity: 0;}    
}


/* Full Width Progress Bar */

#content { 
	width:100%; 
	height:5px; 
	margin:50px auto; 
	background:#000;
}

.fullwidth .expand { 
	width:100%; 
	height:1px; 
	margin:2px 0; 
	background:#2187e7; 
	position:absolute;
	box-shadow:0px 0px 10px 1px rgba(0,198,255,0.7);
    -moz-animation:fullexpand 10s ease-out;
	-webkit-animation:fullexpand 10s ease-out;
}

@-moz-keyframes fullexpand {
	0%  { width:0px;}
	100%{ width:100%;}	
}
@-webkit-keyframes fullexpand {
	0%  { width:0px;}
	100%{ width:100%;}	
}

/* Loader Bar */

ul#loadbar {
	list-style:none;
	width:140px;
	margin:0 auto;
	padding-top:50px;
	padding-bottom:75px;
}
ul#loadbar li {
	float:left;
	position:relative;
	width:11px;
	height:26px;
	margin-left:1px;
	border-left:1px solid #111; border-top:1px solid #111; border-right:1px solid #333; border-bottom:1px solid #333; 
	background:#000;
}

ul#loadbar li:first-child { margin-left:0; }

.ins .bar {
	background-color:#2187e7;  
	background-image: -moz-linear-gradient(45deg, #2187e7 25%, #a0eaff); 
	background-image: -webkit-linear-gradient(45deg, #2187e7 25%, #a0eaff);
	width:11px;
	height:26px;
	opacity:0;
	-webkit-animation:fill .5s linear forwards;
	-moz-animation:fill .5s linear forwards;
}

#layerFill1 { -moz-animation-delay:0.5s; -webkit-animation-delay:0.5s; }
#layerFill2 { -moz-animation-delay:1s; -webkit-animation-delay:1s; }
#layerFill3 { -moz-animation-delay:1.5s; -webkit-animation-delay:1.5s; }
#layerFill4 { -moz-animation-delay:2s; -webkit-animation-delay:2s; }
#layerFill5 { -moz-animation-delay:2.5s; -webkit-animation-delay:2.5s; }
#layerFill6 { -moz-animation-delay:3s; -webkit-animation-delay:3s; }
#layerFill7 { -moz-animation-delay:3.5s; -webkit-animation-delay:3.5s; }
#layerFill8 { -moz-animation-delay:4s; -webkit-animation-delay:4s; }
#layerFill9 { -moz-animation-delay:4.5s; -webkit-animation-delay:4.5s; }
#layerFill10 { -moz-animation-delay:5s; -webkit-animation-delay:5s; }

@-moz-keyframes fill {
	0%{ opacity:0; }
	100%{ opacity:1; }	
}

@-webkit-keyframes fill {
	0%{ opacity:0; }
	100%{ opacity:1; }	
}

/* Trigger button for javascript */

.trigger, .triggerFull, .triggerBar {
	background: #000000;
	background: -moz-linear-gradient(top, #161616 0%, #000000 100%);
	background: -webkit-linear-gradient(top, #161616 0%,#000000 100%);
	border-left:1px solid #111; border-top:1px solid #111; border-right:1px solid #333; border-bottom:1px solid #333; 
	font-family: Verdana, Geneva, sans-serif;
	font-size: 0.8em;
	text-decoration: none;
	text-transform: lowercase;
	text-align: center;
	color: #fff;
	padding: 10px;
	border-radius: 3px;
	display: block;
	margin: 0 auto;
	width: 140px;
}
		
.trigger:hover, .triggerFull:hover, .triggerBar:hover {
	background: -moz-linear-gradient(top, #202020 0%, #161616 100%);
	background: -webkit-linear-gradient(top, #202020 0%, #161616 100%);
}

</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js" type="text/javascript"></script>
<script>		
$(document).ready(function() {
	$('#progress').removeClass('running');	    
		$('.trigger').load(function() {
			$('#progress').removeClass('running').delay(10).queue(function(next){
				$(this).addClass('running');
		        next();
		    });
		    return false;
		});
});

$(document).ready(function() {
	$('#content').removeClass('fullwidth');	    
		$('.triggerFull').load(function() {
			$('#content').removeClass('fullwidth').delay(10).queue(function(next){
				$(this).addClass('fullwidth');
		        next();
		    });
		    return false;
		});
});

$(document).ready(function() {
	$('#loadbar').removeClass('ins');	    
		$('.triggerBar').load(function() {
			$('#loadbar').removeClass('ins').delay(10).queue(function(next){
				$(this).addClass('ins');
		        next();
		    });
		    return false;
		});
});
</script>
<link rel="canonical" href="http://www.alessioatzeni.com/wp-content/tutorials/html-css/CSS3-Loading-Animation/index.html" />
</head>
<body>

<!-- PROGRESS BALL LOADER -->

<!-- END PROGRESS BALL LOADER -->

<!-- FULL WIDTH -->
<div id="content">
<span class="expand"></span>
</div>
<a class="triggerFull" href="#">Start/Restart Animation</a>
<!-- END FULL WIDTH -->

<!-- LOADER BAR -->

<!-- END LOADER BAR -->
</body>
</html>

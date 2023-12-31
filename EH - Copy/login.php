<?php
session_start();
if(isset($_SESSION['name']))
{
echo "<script>window.location='index.php';</script>";
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Login | Engineers' Hub</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
 <link href='http://fonts.googleapis.com/css?family=Rokkitt' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--nav-->
<script src="js/jquery.min.js"></script>
<script>
		$(function() {
			var pull 		= $('#pull');
				menu 		= $('nav ul');
				menuHeight	= menu.height();

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});

			$(window).resize(function(){
        		var w = $(window).width();
        		if(w > 320 && menu.is(':hidden')) {
        			menu.removeAttr('style');
        		}
    		});
		});
</script>
 

		
		<!-- Set here the key for your domain in order to hide the watermark on the web server -->
		<script type="text/javascript">
			(function() {
				JC.init({
					domainKey: ''
				});
				})();
		</script>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<style>
 /* reset */
html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,dl,dt,dd,ol,nav ul,nav li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;vertical-align:baseline;}
article, aside, details, figcaption, figure,footer, header, hgroup, menu, nav, section {display: block;}
ol,ul{list-style:none;margin:0;padding:0;}
blockquote,q{quotes:none;}
blockquote:before,blockquote:after,q:before,q:after{content:'';content:none;}
table{border-collapse:collapse;border-spacing:0;}
/* start editing from here */
a{text-decoration:none;}
.txt-rt{text-align:right;}/* text align right */
.txt-lt{text-align:left;}/* text align left */
.txt-center{text-align:center;}/* text align center */
.float-rt{float:right;}/* float right */
.float-lt{float:left;}/* float left */
.clear{clear:both;}/* clear float */
.pos-relative{position:relative;}/* Position Relative */
.pos-absolute{position:absolute;}/* Position Absolute */
.vertical-base{	vertical-align:baseline;}/* vertical align baseline */
.vertical-top{	vertical-align:top;}/* vertical align top */
.underline{	padding-bottom:5px;	border-bottom: 1px solid #eee; margin:0 0 20px 0;}/* Add 5px bottom padding and a underline */
nav.vertical ul li{	display:block;}/* vertical menu */
nav.horizontal ul li{	display: inline-block;}/* horizontal menu */
img{max-width:100%;}
/*end reset*/
body{
	
	background: url(images/bg.jpg) no-repeat #fff;
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-position: center;
	background-size: cover;
	
}
.wrap{
	width: 26.4%;
	margin: 0 auto;
}

    .tab.style-1 dl{ 
	    display      : block; 
        margin       : 0; /* margin-bottom: 0; top gap of content */
        padding      : 0; 
        height       : 38px; 
        border-radius: 5px;
     }
     

    .tab.style-1 dl dd { 
        display    : block; 
        width      : auto; 
        height     : 38px; 
        padding    : 0; 
        float      : left;
        margin-left: 0px; /* tabs distance */
       transition: 0.5s ease;
	-o-transition: 0.5s ease;
       
    }
    
    .tab.style-1 dl dd:first-child { }
    
    .tab.style-1 dl dd a {
        display        : block; 
        width          : auto; 
        height         : 45px; 
       padding: 9px 36px 0px;
        line-height    : 38px; 
        margin         : 0 -1px 0 0; 
        color          : #666; 
       	background: #eee; 
        text-decoration: none;
        transition: 0.5s ease;
	-o-transition: 0.5s ease;
    }
    
    .tab.style-1 dl dd a:hover { color: #000; }
        
    .tab.style-1 dl dd a.active {
      background: #ffffff;
        border-width: 1px 1px 0 1px;
        height      : 45px; 
        color       : #000;
        border-bottom-color: rgba(255,255,255,0);
       border-radius: 5px;
    }
    .tab.style-1 {
		box-shadow: 0px 0px 5px rgba(51, 51, 51, 0.28);
		border: 0px solid#eee;
		border-radius: 5px;
		  -webkit-border-radius:5px;
        -moz-border-radius:5px;
        -o-border-radius:5px;
	}
    
    /* content area */
    .tab.style-1 > ul { 
        display      : block;
	    margin       : 0; 
        padding      : 22px;
        background   : #fff;
       
     }
    
    .tab.style-1 > ul li { display:none; }
    .tab.style-1 > ul li.active { display: block; }


    /* style-1 dark */
    .tab.style-1.dark dl dd a { 
        background: #535353;
        background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzUzNTM1MyIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiM0ODQ4NDgiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
        background: -moz-linear-gradient(top,  #535353 0%, #484848 100%);
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#535353), color-stop(100%,#484848));
        background: -webkit-linear-gradient(top,  #535353 0%,#484848 100%);
        background: -o-linear-gradient(top,  #535353 0%,#484848 100%);
        background: -ms-linear-gradient(top,  #535353 0%,#484848 100%);
        background: linear-gradient(top,  #535353 0%,#484848 100%);
        filter    : progid:DXImageTransform.Microsoft.gradient( startColorstr='#535353', endColorstr='#484848',GradientType=0 );
        color     : #b8b8b8;
    }
 
    .tab.style-1.dark dl dd a:hover  { 
        background: #464646;
        filter    : progid:DXImageTransform.Microsoft.gradient( startColorstr='#464646', endColorstr='#464646',GradientType=0 );
        color     : #fff; 
    }
        
    .tab.style-1.dark dl dd a.active { 
        background: #535353; 
        filter    : progid:DXImageTransform.Microsoft.gradient( startColorstr='#535353', endColorstr='#535353',GradientType=0 );
        color     : #fff; 
    }
    
    .tab.style-1.dark > ul { 
        background: #535353;
        background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzUzNTM1MyIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiM0ODQ4NDgiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
        background: -moz-linear-gradient(top,  #535353 0%, #484848 100%);
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#535353), color-stop(100%,#484848));
        background: -webkit-linear-gradient(top,  #535353 0%,#484848 100%);
        background: -o-linear-gradient(top,  #535353 0%,#484848 100%);
        background: -ms-linear-gradient(top,  #535353 0%,#484848 100%);
        background: linear-gradient(top,  #535353 0%,#484848 100%);
        filter    : progid:DXImageTransform.Microsoft.gradient( startColorstr='#535353', endColorstr='#484848',GradientType=0 );
        color     : #fff; 
    } 
  
    /* style-1 gradient */
    .tab.style-1.gradient dl dd a,
    .tab.style-1.gradient > ul{
        background: #ffffff;
        background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2ZmZmZmZiIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNmNWY2ZjUiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
        background: -moz-linear-gradient(top,  #ffffff 0%, #f5f6f5 100%);
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ffffff), color-stop(100%,#f5f6f5));
        background: -webkit-linear-gradient(top,  #ffffff 0%,#f5f6f5 100%);
        background: -o-linear-gradient(top,  #ffffff 0%,#f5f6f5 100%);
        background: -ms-linear-gradient(top,  #ffffff 0%,#f5f6f5 100%);
        background: linear-gradient(top,  #ffffff 0%,#f5f6f5 100%);
        filter    : progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#f5f6f5',GradientType=0 );
    }
    
    .tab.style-1.gradient dl dd a:hover,
    .tab.style-1.gradient dl dd a.active { 
        background: #fff;
        filter    : progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#ffffff',GradientType=0 ); 
    }
     .tab.style-1 dl dd.users a.user { 
    	 background: url("images/contact1.png") no-repeat 37px 10px #eee;
		padding: 9px 52px 0px;
		border-top-left-radius: 5px;
		-webkit-border-top-left-radius: 5px;
		-moz-border-top-left-radius: 5px;
		-o-border-top-left-radius: 5px;
    }
     .tab.style-1 dl dd.users a.active { 
    	 background: url("images/contact.png") no-repeat 37px 10px #fff;
		padding: 9px 52px 0px;
    }
     .tab.style-1 dl dd.users a.active { 
    	 background: url("images/contact.png") no-repeat 37px 10px #fff;
		padding: 9px 52px 0px;
		border-top-left-radius: 5px;
		-webkit-border-top-left-radius: 5px;
		-moz-border-top-left-radius: 5px;
		-o-border-top-left-radius: 5px;
    }
     .tab.style-1 dl dd.users a:hover { 
    	 background: url("images/contact.png") no-repeat 37px 10px #fff;
		padding: 9px 52px 0px;
    }
     .tab.style-1 dl dd.messages a.msg { 
      background: url("images/massage.png") no-repeat 37px 10px #eee;
      padding: 9px 52px 0px;
    }
     .tab.style-1 dl dd.messages a.active{ 
      background: url("images/massage1.png") no-repeat 37px 10px #fff;
      padding: 9px 52px 0px;
    }
     .tab.style-1 dl dd.messages a:hover{ 
        background: url("images/massage1.png") no-repeat 37px 10px #fff;
      padding: 9px 52px 0px;
    }
     .tab.style-1 dl dd.settings a.setting { 
      background: url("images/sevice.png") no-repeat 37px 10px #eee;
      padding: 9px 52px 0px;
    }
    .tab.style-1 dl dd.settings a.active { 
      background: url("images/sevice1.png") no-repeat 37px 10px #fff;
      padding: 9px 52px 0px;
    }
    .tab.style-1 dl dd.settings a:hover { 
      background: url("images/sevice1.png") no-repeat 37px 10px #fff;
      padding: 9px 52px 0px;
    }
     .tab.style-1 dl dd.likes a.like { 
      background: url("images/like.png") no-repeat 37px 10px #eee;
      padding: 9px 52px 0px;
      border-top-right-radius: 5px;
		-webkit-border-top-right-radius: 5px;
		-moz-border-top-right-radius: 5px;
		-o-border-top-right-radius: 5px;
    }
     .tab.style-1 dl dd.likes a.active { 
      background: url("images/like1.png") no-repeat 37px 10px #fff;
      padding: 9px 52px 0px;
    }
       .tab.style-1 dl dd.likes a:hover { 
      background: url("images/like1.png") no-repeat 37px 10px #fff;
      padding: 9px 52px 0px;
    }
    .row{
       text-align: center;
		margin: 0px auto;
		padding-top: 4em;
		padding-bottom: 4em;
       width: 413px;
    }
/*form*/
    .form {
	  text-align: center;
	}
.form input[type="text"]{
	
	color: #B1B1B1;
	display: block;
	border: 2px solid rgba(216, 216, 216, 0.39);
	padding: 0.9em 0.9em;
	outline: none;
	text-align: left;
	-webkit-appearance: none;
	border-radius: 4px;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	-o-border-radius: 4px;
	width: 320px;
	margin: 20px 10px;
	transition: 0.5s ease;
	-o-transition: 0.5s ease;
	-webkit-transition: 0.5s ease;
}
.form input[type="password"]{
	
	color: #B1B1B1;
	display: block;
	border: 2px solid rgba(216, 216, 216, 0.39);
	padding: 0.9em 0.9em;
	outline: none;
	text-align: left;
	-webkit-appearance: none;
	border-radius: 4px;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	-o-border-radius: 4px;
	width: 320px;
	margin: 20px 10px;
	transition: 0.5s ease;
	-o-transition: 0.5s ease;
	-webkit-transition: 0.5s ease;
}

.form input[type="submit"] {
	
	color: #fff;
	display: block;
	border: none;
	padding: 0.7em 0.9em;
	outline: none;
	text-align: center;
	-webkit-appearance: none;
	border-radius: 4px;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	-o-border-radius: 4px;
	
	width: 352px;
	margin: 20px 10px 10px;
	transition: 0.5s ease;
	-o-transition: 0.5s ease;
	-webkit-transition: 0.5s ease;
	outline: none;
	cursor: pointer;
	background: #90C842;
}
.form input[type="submit"]:hover {
	background:#0287CC;
	color:#fff;
}
.form input[type="text"]:hover{
	border:2px solid #0287CC;
	color: #0287CC;
}

.form input[type="password"]:hover{
	border:2px solid #0287CC;
	color: #0287CC;
}
/*top-grids*/
.top-grids{
	float:left;
	width: 100%;
	padding: 23px 10px 4px;

}
.top-grid1{
	float:left;
}
.top-grid {
	width: 98%;
	padding-bottom: 10px;
	text-align: center;
}
.top-grid1 img {
	cursor:pointer;
	margin-top: 6px;
}
.top-grid1 img:hover {
	opacity:0.9;
}
.top-grid2 {
	float: left;
	margin-left: 14px;
	width: 80%;
	text-align: left;
	padding-bottom: 5px;
}
.top-grid2 h4{
	
	color: #0287CC;
	display: block;
	
	transition: 0.5s ease;
	-o-transition: 0.5s ease;
	-webkit-transition: 0.5s ease;
}
.top-grid2 p{
 	
	color: #919191;
	display: block;
	
	line-height: 1.6em;
}
.top-grid2 h4:hover{
	color: #777;
}
.settings{
	text-align:left;
	padding: 18px 6px 10px;
}
.settings h5{
	
	color: #919191;
	display: block;
	
	line-height: 1.8em;
	transition: 0.5s ease;
	-o-transition: 0.5s ease;
	-webkit-transition: 0.5s ease;
}
.settings h5:hover{
	color: #0287CC;
}
.footer p{
	
	color:#525252;
	display: block;
	
	text-align:center;
	padding-top:2em;
}
.footer p a{
	color:#4EAEE0;
}
.footer p a:hover{
	color:#90C842;
}
/*-----start-responsive-design------*/
@media only screen and (max-width: 1366px){
	.wrap{
		width:95%;
	}
	
}
@media only screen and (max-width: 1280px){
	.wrap{
		width:95%;
	}
}
@media only screen and (max-width: 1024px){
	.wrap{
		width:95%;
	}
	
}
@media only screen and (max-width: 800px){
	.wrap{
		width:95%;
	}
	
}
@media only screen and (max-width: 640px){
	.wrap{
		width:95%;
	}
	
}
@media only screen and (max-width: 480px){
	.wrap{
		width:95%;
	}
	.row {
		width: 361px;
	}
	.tab.style-1 dl dd.users a.user { 
    	 background: url("images/contact1.png") no-repeat 30px 10px #eee;
    	  padding: 9px 45px 0px;
    }
	.tab.style-1 dl dd.users a.active { 
    	 background: url("images/contact.png") no-repeat 30px 10px #fff;
    	  padding: 9px 45px 0px;
    }
     .tab.style-1 dl dd.users a:hover { 
    	 background: url("images/contact.png") no-repeat 30px 10px #fff;
    	  padding: 9px 45px 0px;
    }
     .tab.style-1 dl dd.messages a.msg { 
      background: url("images/massage.png") no-repeat 32px 10px #eee;
       padding: 9px 46px 0px;
    }
     .tab.style-1 dl dd.messages a.active{ 
      background: url("images/massage1.png") no-repeat 32px 10px #fff;
       padding: 9px 46px 0px;
    }
     .tab.style-1 dl dd.messages a:hover{ 
        background: url("images/massage1.png") no-repeat 32px 10px #fff;
         padding: 9px 46px 0px;
    }
     .tab.style-1 dl dd.settings a.setting { 
      background: url("images/sevice.png") no-repeat 31px 10px #eee;
       padding: 9px 45px 0px;
    }
    .tab.style-1 dl dd.settings a.active { 
      background: url("images/sevice1.png") no-repeat 31px 10px #fff;
       padding: 9px 45px 0px;
    }
    .tab.style-1 dl dd.settings a:hover { 
      background: url("images/sevice1.png") no-repeat 31px 10px #fff;
       padding: 9px 45px 0px;
    }
     .tab.style-1 dl dd.likes a.like { 
      background: url("images/like.png") no-repeat 33px 10px #eee;
       padding: 9px 46px 0px;
    }
     .tab.style-1 dl dd.likes a.active { 
      background: url("images/like1.png") no-repeat 33px 10px #fff;
       padding: 9px 46px 0px;
    }
       .tab.style-1 dl dd.likes a:hover { 
      background: url("images/like1.png") no-repeat 33px 10px #fff;
      padding: 9px 46px 0px;
    }
	.form input[type="text"] {
		width: 273px;
	}
	.form input[type="submit"] {
		width: 302px;
	}
	.top-grid2 {
		width: 78%;
	}
}
@media only screen and (max-width: 320px){
	.wrap{
		width:95%;
	}
	.row {
		width: 260px;
	}
	.tab.style-1 dl dd.users a.user {
		background: url("images/contact1.png") no-repeat 18px 10px #eee;
		padding: 9px 32px 0px;
	}
	.tab.style-1 dl dd.messages a.msg {
		background: url("images/massage.png") no-repeat 18px 10px #eee;
		padding: 9px 33px 0px;
	}
	.tab.style-1 dl dd.settings a.setting {
		background: url("images/sevice.png") no-repeat 18px 10px #eee;
		padding: 9px 33px 0px;
	}
	.tab.style-1 dl dd.likes a.like {
		background: url("images/like.png") no-repeat 18px 10px #eee;
		padding: 9px 33px 0px;
	}
	
	.form input[type="text"] {
		width: 169px;
	}
	.form input[type="submit"] {
		width: 198px;
	}
	.top-grid2 {
		margin-left: 9px;
		width: 69%;
	}
}
</style>
</head>
<body style="background-image:url(images/engineering-wallaper-09.jpg);">
<?php require "includes/menu.php"; ?>
<!-- start mian -->
<div class="wrap" >
<!-- tab style-1 -->
<div class="row">
	<div class="grid_12 columns">
		<div class="tab style-1">
    					
    					<ul>
    						<li class="active">
			    				<div class="form">
                                <img src="images/btnLoginFacebook.png">
                                		<br><br>
                                 <img src="images/or.jpg">
<?php  
require "includes/DB_Functions.php";                            
if(isset($_POST['email']) && isset($_POST['password']))
{
$name=strip_tags($_POST['email']);
$password=strip_tags($_POST['password']); 
$stmt = $db->prepare("SELECT * FROM users WHERE email='$name' AND password='$password'");
$stmt->execute();
if($stmt)
{
$_SESSION['name']=$name;
echo "<script>window.location='index.php';</script>";	
}
}
                               
?>                             
<form method="POST" action="login.php">                      
<input type="text" name="email" class="active textbox" placeholder="Email">
<input type="password" name="password" class="textbox" placeholder="Password" >
<input type="submit" value="Register">
</form>
							    </div>
							</li>
    						
    						
    						
    					</ul>
		</div>
</div>            
</div>			
</div>
<div class="wrap">
	<!--footer-->

<div class="clear"> </div>
</div>
<!-- start footer  -->
<?php require "includes/footer.php"; ?>
</body>
</html>
<!DOCTYPE html>

<head>

	<title>Justin Seals Website</title>
    
	<!-- META -->
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	
	<meta name="robots" content="INDEX, FOLLOW" />
	<meta name="author" content="Justin Seals." />
	
	<meta name="copyright" content="Justin Seals Website. All Rights Reserved." />
	<meta charset="UTF-8" />
	
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	
	<!-- CONTENT ATTRIBUTE -->
	<base href="http://www.justinseals.com/" />
	
	<!-- SITE ICONS -->
	<link rel="shortcut icon" href="_images/utility/favicon.ico" />
	
	<!-- CSS -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,700' rel='stylesheet' type='text/css'>
	<style type="text/css">
		html {min-height: 101%;}
	
		body {
			margin: 0;
			font-family: 'Roboto', sans-serif;
			color:black;
			background-color:#f6f6f6;
			font-size:14px;
			padding:0 20px;
		}
		
		a {color:#474e5c; text-decoration:none; font-size:16px; font-weight:normal; font-style: normal;}
		a:hover {color:#8ac655; text-decoration:none; font-size:16px; font-weight:normal; font-style: normal;}
		
		img {border:none;}
		
		#pagewidth {width:100%; margin:auto;}
		
		@media only screen and (min-device-width: 1020px) {
			#pagewidth {width:1020px;}
		}
		
		#header {
			position: relative;
			background:#f6f6f6;
			height : 100px;
			padding-top:20px;
		}
		
			#header a.logo {
				background: left top url("js-master-logo-small.png") no-repeat;
				display:block;
				height:100px;
				position:relative;
			}
			
		#main { 
			position: relative;
			background:#f6f6f6;
			color:black;
			overflow:hidden;
		}
		
		#main a {
			float:left;
			display:block;
			width:228px;
			margin:0 20px 20px 0;
			background:#8ac655;
			border:thin solid #8ac655;
			height:184px;
			overflow:hidden;
			text-shadow:0 1px 0 rgba(255,255,255,.3);
		}
		
		#main span {
			display:block;
			position:relative;
			height:150px;
			width:228px;
			overflow:hidden;
		}
		
		#main a:hover {
			color:#f6f6f6;
			border:1px solid #474e5c;
			text-shadow:0 0 3px rgba(0,0,0,.16);
		}
		
		#main a p {
			margin: 5px 0;
			padding: 0 15px;
		}
	
		#main a:nth-child(4n+2) {
			margin-right:0;
		}
		
		#main a img {
			width:228px;
			height:150px;
		}
		
			#main a:hover img {
				opacity:0.8;
				transform: rotate(10deg) scale(1.3,1.3);
				transition:all 1000ms;
			}
	
	#footer {
		position: relative;
		background:#f6f6f6;
		font-size:12px;
		height:100px;
		text-align:center;
		padding-top:50px;
		clear:both;
	}
	
	@media only screen and (max-device-width: 480px) {
			
	}
	</style>
	
	<!-- JAVASCRIPT - GENERAL SCRIPTS -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	
	<!-- JAVASCRIPT - Custom functions  -->
	<script type="text/javascript">
		$(document).ready(function(){
			
		});	
	</script>

</head>
<body>

<div id="pagewidth">
	
    <div id="header">
		<a href="http://www.justinseals.com" class="logo"></a>
	</div>

    <div id="main">
		<h1>My name is Justin, I like a lot of things...</h1>
		<p>Please select one of the following:</p>
			
			<a href="http://www.justinseals.com/portfolio">
				<span><img src="easywebdesigning.jpg" alt="#" /></span>
				<p>Easywebdesigning</p>
			</a><!--Link-->
			
			<a href="http://justintravel.tumblr.com	/">
				<span><img src="travel.jpg" alt="#" /></span>
				<p>Justin's Travel Blog</p>
			</a><!--Link-->
			
			<a href="http://www.justinseals.com/recipes/">
				<span><img src="recipe.jpg" alt="#" /></span>
				<p>Justin's Recipe Site</p>
			</a><!--Link-->		
			
			<a href="http://www.earthvision.org.uk/">
				<span><img src="earthvision.jpg" alt="#" /></span>
				<p>Earth Vision</p>
			</a><!--Link-->
			
			<a href="http://www.justinseals.com/code/">
				<span><img src="coding.jpg" alt="#" /></span>
				<p>Justin's Coding Site</p>
			</a><!--Link-->
		
    </div><!--Main End-->
    
    <div id="footer">
		<p>All Content &amp; Design Copyright &copy; Justin Seals 2009-2011</p>
	</div><!--Footer End-->
    
</div><!--Pagewidth End-->

</body>
</html>
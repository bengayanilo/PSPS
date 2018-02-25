<?php session_start(); ?>
<!Doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title>Psyche Solution Psychological Services</title>
<link rel="stylesheet" type="text/css" href="../css/top-bar.css">
<link rel="stylesheet" type="text/css" href="../css/home.css">
<link rel="stylesheet" type="text/css" href="../css/normalize.css">
<link rel="stylesheet" type="text/css" href="../css/news.css">
<link rel="icon" href="../images/logo.png">
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="../js/slideshow.js"></script>
<script src="../js/home.js"></script>
<!--<div id="container">-->
<!--Topbar-->
	<div id="top-bar">
	<?php include("../html/topbar.php"); ?>
	</div>
	
<div class = "below-top-bar">
	<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="../images/slide1.jpg" style="width:100%">
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="../images/slide2.jpg" style="width:100%">
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="../images/slide3.jpg" style="width:100%">
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
  
  <!-- The dots/circles -->
<div style="text-align:center">
	
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>
<script>currentSlide(1);</script>
</div>
<br>

<!--News-->
	<div id="news-section">
	<?php include("../html/news.php"); ?>
	</div>
  <!--<div id = "TestDiv">sdqwjkejkasdjkqwjkejkqwe</div>-->
<!--Services-->
	<div id="services-section">
	<?php include("../html/services.php"); ?>
	</div>

<!--Professionals-->
	<div id="professionals-section">
	<?php include("../html/professionals.php"); ?>
	</div>

<!--<div id="sidemenu">
<iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpsychesolution&width=350&colorscheme=light&show_faces=true&border_color&stream=true&header=true&height=435"
scrolling="yes" frameborder="0" style="margin-bottom: 25px; margin-left: 25px; border:none; overflow:hidden; width:350px; height:435px; background: white; float:left; clear: right; clear: left;" allowTransparency="true">
</iframe>
</div>-->
<!--Test Div-->
<!--</div>-->
</div>
</body>
</html>
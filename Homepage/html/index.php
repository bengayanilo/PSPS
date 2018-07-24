<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Psyche Solution Psychological Services</title>

	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>Static/css/bulma/bulma.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>Static/css/bulma/bulma-pageloader.min.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>Static/css/font-awesome/font-awesome.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>Homepage/css/main.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>Navbar/css/navbar.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>Homepage/css/hero.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>Homepage/css/login.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>Homepage/css/register.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>Homepage/css/feedback.css" />
	<link rel="icon" href="<?php echo $_SESSION['url']; ?>Static/images/logo.png" />

	<script type="text/javascript"> (function() { var css = document.createElement('link'); css.href = '//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css'; css.rel = 'stylesheet'; css.type = 'text/css'; document.getElementsByTagName('head')[0].appendChild(css); })(); </script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="<?php echo $_SESSION['url']; ?>Homepage/js/main.js"></script>
	<script src="<?php echo $_SESSION['url']; ?>Homepage/js/homepage-navbar.js"></script>
	<script src="../../Scheduling/js/daypilot/daypilot-all.min.js"></script>
</head>
<body>

<!-- <main class="wrapper"> -->
	<div class="navbar-wrapper">
		<?php include("../../Navbar/html/_navbar.php"); ?>
	</div>
	<div class="login-modal-background">
		<div class="tile login-modal-container">
			<div class="login-modal">
				<?php include("../../Authentication/Login/index.php") ?>
			</div>
		</div>
		<div class="tile register-modal-container">
			<div class="register-modal">
				<?php include("../../Authentication/Register/html/index.php") ?>
			</div>
		</div>
	</div>
	<main class="wrapper">
	<section class="section parallax bg1" id="home-section">
		<div class="greetings hero-top">
			<h1 style="font-family: Trebuchet; text-shadow: 2px 2px #000000;">One small positive thought in the morning can change your whole day.</hi>
		</div>
	</section>
				<?php include("../../News/html/news.php"); ?>
				<section>
					<?php include("../../Services/html/services.php"); ?>
				</section>
				<section id="professionals-section">
					<?php include("../../Professionals/html/professionals.php"); ?>
				</section>
				<section id="feedback-section">
					<center><div class="feedback-container">
						<?php include("../../Feedback/html/feedback.php"); ?>
					</div></center>
				</section>
				<?php include("../../Footer/html/footer-distributed-with-address-and-phones.php"); ?>
	<div class="pageloader"><span class="title">Pageloader</span></div>
	</main>
</body>
</html>
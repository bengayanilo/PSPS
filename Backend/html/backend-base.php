<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Backend - Psyche Solution Psychological Services</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
	<script src="<?php echo $_SESSION['url']; ?>Backend/js/graphs.js"></script>

	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>Static/css/bulma/bulma.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>Static/css/bulma/bulma-pageloader.min.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>Static/css/font-awesome/font-awesome.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>Backend/css/main.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>Backend/css/graphs.css" />
	<link rel="icon" href="<?php echo $_SESSION['url']; ?>Static/images/logo.png" />
</head>
<body>
	<nav class="navbar is-light">
		<div class="container is-fluid">
			<div class="navbar-brand">
				<a href="<?php echo $_SESSION['url']; ?>Homepage/html/index.php" class="navbar-item" id="company-logo">
					<strong>
						<img src="<?php echo $_SESSION['url']; ?>Static/images/logo.png">&nbsp;&nbsp;
						<img src="<?php echo $_SESSION['url']; ?>Static/images/company_name.png">
					</strong>
				</a>
			</div>
			<div class="navbar-menu">
				<div class="navbar-end">
					<div class="navbar-item has-dropdown is-hoverable">
						<a href="#" class="navbar-link">
							<figure class="image is-64x64" id="user-avatar-div">
								<span id="user-avatar-1">
									<img id="user-avatar" src="<?php echo ($_SESSION['pic'] != NULL?$_SESSION['url'].$_SESSION['pic']:$_SESSION['url']."Static/images/profile-placeholder.jpg") ?>">
								</span>
							</figure>
						   <?php echo (isset($_SESSION['id']))?$_SESSION['username']:"Not Logged In" ?> <!-- Display current logged-in username -->
						</a>
						<div class="navbar-dropdown is-boxed">
					  		<a class="dropdown-item" href="<?php echo $_SESSION['url']; ?>settings.php" class="navbar-item">Account Settings</a> <!-- ADMIN SETTINGS -->
							<a href="<?php echo $_SESSION['url']; ?>logout.php" class="navbar-item">Logout</a> <!-- USER LOGOUT -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</nav>

	<div class="container is-fluid">
		<br>
		<div class="columns">
			<div class="column is-2-fullhd is-3-widescreen is-3-desktop is-3-tablet" >
				<div class="panel box with-shadow"> <!-- URL FOR ALL HREFS -->
					<p class="panel-heading">Menu</p>
						<a href="<?php echo $_SESSION['url']; ?>Backend/html/index.php" class="panel-block">Home</a>
						<a href="<?php echo $_SESSION['url']; ?>Backend/html/users/index.php" class="panel-block">Users</a>
						<a href="<?php echo $_SESSION['url']; ?>Backend/html/patients/index.php" class="panel-block">Patients</a>
						<a href="<?php echo $_SESSION['url']; ?>Backend/html/news/index.php" class="panel-block">News</a>
						<a href="<?php echo $_SESSION['url']; ?>Backend/html/reports/index.php" class="panel-block">Reports</a>
						<a href="<?php echo $_SESSION['url']; ?>Backend/html/sessions/index.php" class="panel-block">Sessions</a>
						<a href="<?php echo $_SESSION['url']; ?>Backend/html/revappli/index.php" class="panel-block">Review Applications</a>
						<a href="<?php echo $_SESSION['url']; ?>Scheduling/manager.php" class="dropdown-item button normal-mode is-dark">
							<span class="icon is-small">
								<i class="fas fa-moon"></i>
							</span>
							<span id="night-mode-text">
								Manage Shifts
							</span>
						</a>
				</div>
			</div>

			<div class="column">
				<div id = "content">

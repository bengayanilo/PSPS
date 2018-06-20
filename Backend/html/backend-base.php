<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Backend - Psyche Solution Psychological Services</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="users/user-scripts.js" type="text/javascript"></script>

	<link rel="stylesheet" type="text/css" media="screen" href="http://localhost/Web/Static/css/bulma/bulma.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="http://localhost/Web/Static/css/bulma/bulma-pageloader.min.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="http://localhost/Web/Static/css/font-awesome/font-awesome.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="http://localhost/Web/Backend/css/main.css" />
	<link rel="icon" href="../../Static/images/logo.png" />
</head>
<body onload="setType()">
	<nav class="navbar is-light">
		<div class="container is-fluid">
			<div class="navbar-brand">
				<a href="javascript:;" class="navbar-item" id="company-logo">
					<strong><img src="../../Static/images/logo.png">&nbsp;&nbsp;<img src="../../Static/images/company_name.png"></strong>
				</a>
			</div>
			<div class="navbar-menu">
				<div class="navbar-end">
					<div class="navbar-item has-dropdown is-hoverable">
						<a href="#" class="navbar-link">
							<figure class="image is-64x64" id="user-avatar-div">
								<span id="user-avatar-1">
									<img id="user-avatar" src="../../Static/images/profile-placeholder.jpg">
								</span>
							</figure>
						   {{ current_user.username }} <!-- Display current logged-in username -->
						</a>
						<div class="navbar-dropdown is-boxed">
					  <a class="dropdown-item" href="javascript:;" class="navbar-item">Account Settings</a> <!-- ADMIN SETTINGS -->
							<a href="javascript:;" class="navbar-item">Logout</a> <!-- USER LOGOUT -->
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
						<a href="javascript:;" class="panel-block">Home</a>
						<a href="javascript:;" class="panel-block" id = "userdiv" onclick="showusers()">Users</a>
						<a href="javascript:;" class="panel-block">Patients</a>
						<a href="javascript:;" class="panel-block">Reports</a>
						<a href="javascript:;" class="panel-block">Transactions</a>
						<a href="javascript:;" class="panel-block">Review Applications</a>
						<a href="javascript:;" class="dropdown-item button normal-mode is-dark" id="switchModeBtn" onclick="switchMode()">
							<span class="icon is-small">
								<i class="fas fa-moon"></i>
							</span>
							<span id="night-mode-text">
								Night Mode
							</span>
						</a>
				</div>
			</div>

			<div class="column">
				<div id = "content">
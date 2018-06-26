<?php
  	session_start();
  	require('Database/config.php');
	
	$updateuser = $_SESSION['id'];
	$selectuser = "SELECT user_name, user_email FROM tbl_users WHERE user_id=$updateuser";

	$userdata = $db->query($selectuser);
	$data = $userdata->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home - Psyche Solution Psychological Services</title>

    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>Static/css/bulma/bulma.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>Static/css/bulma/bulma-pageloader.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>Static/css/font-awesome/font-awesome.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>Homepage/css/main.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>Navbar/css/navbar.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>Homepage/css/hero.css" />
    <link rel="icon" href="<?php echo $_SESSION['url']; ?>Static/images/logo.png" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="<?php echo $_SESSION['url']; ?>Homepage/js/main.js"></script>
    <script src="<?php echo $_SESSION['url']; ?>Navbar/js/navbar.js"></script>
    <script src="<?php echo $_SESSION['url']; ?>Navbar/js/navbar-burger.js"></script>
</head>
<body>
<!-- <main class="wrapper"> -->
<div class="main">
	<div class="navbar-wrapper">
	  	<?php
			include('Navbar/html/_navbar.php');
		?>
	</div>
	<div class="content-wrapper">			
		<div class="card box">
			<div class="card-header">
				<p class="card-header-title">Account Settings</p>
			</div>
			<div class="card-content">
				<form form method=POST enctype=multipart/form-data action="">					
					<div class="field">
						<label> Username </label>
						<div class="control">
							<input type="text" class="input" name="new_username" value="<?php echo $data['user_name']; ?>" autofocus>
						</div>
					</div>
					<div class="field">
						<label> Email </label>
						<div class="control">
							<input type="text" class="input" name="new_email" value="<?php echo $data['user_email']; ?>">
						</div>
					</div>
					<div class="field">
						<label> New password </label>
						<div class="control">
							<input type="password" class="input" name="new_pass">
						</div>
					</div>
					<div class="field">
						<label> Confirm Password </label>
						<div class="control">
							<input type="password" class="input" name="new_passcon">
						</div>
					</div>
					<hr>
					<input type=file name=photo>
					<input type="submit" class="button is-primary" name="submitupdate" value="Submit">
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>
<?php
	if(isset($_SESSION['id'])){
		header("Location:../../index.php");
	}
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>Static/css/bulma/bulma.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>Static/css/bulma/bulma-pageloader.min.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>Static/css/font-awesome/font-awesome.css" />
	
	<title>Log-in</title>
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="<?php echo $_SESSION['url']; ?>Authentication/Login/script.js"></script>
<script src="<?php echo $_SESSION['url']; ?>Scheduling/js/daypilot/daypilot-all.min.js" type="text/javascript"></script>

	<div>
		<span class="login-header">Login</span>
	</div>
	<br>

	<div id="text"></div>

	<form name="loginform" id="loginform" method="post">

			<div class="field">
				<label for="" class="label">Username: </label>
				<input class="input login-input" type="text" name="username" id="username" value="" required autofocus>
			</div>
			
			<div class="field">
				<label for="" class="label">Password: </label>
				<input class="input login-input" type="password" name="password" id="password" value="" required>
			</div>
			
			<p class="control is-small"><a target="_blank" href="<?php echo $_SESSION['url']; ?>PasswordReset/html/passwordreset.php">Forgot Password?</a></p>
			
			<br>
			
			<p class="control is-small">Don't have an account yet? Register <a class="go-to-register" onClick="showRegister()" href="javascript:;">here </a></p>

			<script>
				function showRegister()
				{
					document.getElementById("reg_user").focus();
				}
			</script>

			<div class="tile">
				<div style="margin: auto;">
					<div class="tile">
						<div class="tile login-button-container">
							<button class="button is-dark login-clear login-buttons" type="reset" name="login-clear"><i class="fa fa-close" aria-hidden="true"></i>&nbsp;Clear</button>
						</div>
						<div class="tile login-button-container">
							<button class="button is-success login-submit login-buttons" type="submit" name="login" id="login" value=""><i class="fa fa-check" aria-hidden="true"></i>&nbsp;Confirm</button>
						</div>
					</div>
				</div>
			</div>

	</form>
	
</body>
</html>
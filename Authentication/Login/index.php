<?php
	session_start();
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
<script src="script.js"></script>
<script src="<?php echo $_SESSION['url']; ?>Scheduling/js/daypilot/daypilot-all.min.js" type="text/javascript"></script>

	<div id="text"></div>

	<form id="loginform" method="post">

			<div class="field">
				<label for="" class="label">Username: </label>
				<input class="input" type="text" name="username" id="username" value="" required>
			</div>
			
			<div class="field">
				<label for="" class="label">Password: </label>
				<input class="input" type="password" name="password" id="password" value="" required>
			</div>

			<br>

			<p class="control is-small">Don't have an account yet? Register <a href="../Register">here </a></p>

			<button class="button is-success" type="submit" name="login" id="login" value="">Confirm</button>

	</form>
	
</body>
</html>
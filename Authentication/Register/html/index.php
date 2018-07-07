<?php
	session_start();
	if(isset($_SESSION['id'])){
		header("Location:../../index.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>

	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>Static/css/bulma/bulma.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>Static/css/bulma/bulma-pageloader.min.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>Static/css/font-awesome/font-awesome.css" />

	<script type="text/javascript"> (function() { var css = document.createElement('link'); css.href = '//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css'; css.rel = 'stylesheet'; css.type = 'text/css'; document.getElementsByTagName('head')[0].appendChild(css); })(); </script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>
<body>

<div class="container is-fluid">

	<div class="box center">

		<form action="_register.php" method="post">

			<div class="field">
				<label for="" class="label is-small">Username: </label>
				<input class="input is-small" type="text" name="reg_user" id="reg_user" value="" required>
			</div>

			<div class="field">
				<label for="" class="label is-small">First Name: </label>
				<input class="input is-small" type="text" name="fname" id="reg_user" value="" required>
			</div>

			<div class="field">
				<label for="" class="label is-small">Last Name: </label>
				<input class="input is-small" type="text" name="lname" id="reg_user" value="" required>
			</div>

			<div class="field">
				<label for="" class="label is-small">Email: </label>
				<input class="input is-small" type="email" name="email" id="email" value="" required>
			</div>


			<div class="field">
				<label for="" class="label is-small">Password: </label>
				<input class="input is-small" type="password" name="reg_pass" id="reg_pass" value="" required>
			</div>

			<div class="field">
				<label for="" class="label is-small">Confirm Password: </label>
				<input type="password" class="input is-small" name="confirmpass" id="confirmpass" value="" required>
			</div>

			<div class="field">
				<label for="" class="label is-small">Contact No: </label>
				<input class="input is-small" type="number" name="contact_no" id="contact_no" value="" required>
			</div>

			<div class="field">
				<label for="" class="label is-small">Select user type </label>
				<div class="control">
					<div class="select is-info is-small">
						<select name="type">
							<option value="pat">Patient</option>
							<option value="psy">Psychologist</option>
							<option value="int">Intern</option>
							<option value="rev">Review Applicant</option>
						</select>
					</div>
				</div>
			</div>

			<br>

			<button class="button is-success" type="submit" name="register" id="register">Confirm</button>

		</form>

	</div>
	
</div>

</body>
</html>
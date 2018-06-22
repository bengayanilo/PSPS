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
	<title>Document</title>
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="script.js"></script>

	<div id="text"></div>
	
	<form id="form" method="post">
		Username: <input type="text" name="username" id="username" value="" required>
		<br>
		Password: <input type="password" name="password" id="password" value="" required>
		<br>
		Email: <input type="email" name="email" id="email" value="" required>
		<br>
		Account Type:	<select name="type">
							<option value="pat">Patient</option>
							<option value="psy">Psychologist</option>
							<option value="int">Intern</option>
							<option value="rev">Review Applicant</option>
						</select>
		<br>
		<button type="submit" name="register" id="register" value="">Register</button>
		<br>
		already have an account? click <a href="../Login">here</a>.
	</form>
</body>
</html>
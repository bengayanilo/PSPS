<?php
	session_start();
	if(isset($_SESSION['id'])){
		header("Location:../../index.php");
	}
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Log-in</title>
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="script.js"></script>

	<div id="text"></div>
	
	<form id="loginform" method="post">
    Username: <input type="text" name="username" id="username" value="" required>
    <br>
    Password: <input type="password" name="password" id="password" value="" required>
	<br>
    <button type="submit" name="login" id="login" value="">Log in</button>
    <br>
    don't have an account yet? register <a href="../Register">here</a>.
    </form>
</body>
</html>
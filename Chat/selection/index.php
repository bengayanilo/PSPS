<?php
	session_start();
	if($_SESSION['id']){
		if($_SESSION['type']!='psy'){
			echo "PSPS Psychologists";
		}
	}
	else{
		header("Location:../../Authentication/Login/index.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Select user</title>
	 <link rel="stylesheet" type="text/css" href="css/bulma.css">
	 <link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="script.js"></script>
    <div id="log"></div>
</body>
</html>
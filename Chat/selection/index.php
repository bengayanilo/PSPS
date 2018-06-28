<?php
	session_start();
	if(!isset($_SESSION['id'])){
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
    <div class="columns">
    <div class="column is-3" id="log"></div>
    <div class="column" id="chat">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis officiis, alias voluptatibus asperiores dolore esse suscipit similique maiores, quibusdam hic, aliquid? Reprehenderit odit reiciendis eveniet aliquam aliquid laboriosam similique officia?</div>
    </div>
</body>
</html>
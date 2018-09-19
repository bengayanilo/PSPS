<?php
	session_start();
	$_SESSION['url'] = 'http://localhost:8080/Web/';
	ini_set('SMTP','myserver');
	ini_set('smtp_port',25);
	if($_SESSION['type'] != 'admin'){
		header("Location:Homepage/html/index.php");
	}
	else{
		header("Location:Backend/html/index.php");
	}
	
?>

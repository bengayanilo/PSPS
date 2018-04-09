<?php
	session_start();
	if($_SESSION['id']){
		echo "Hello!";
	}
	else{
		header("Location:Authentication/Login");
	}
?>
<a href="Chat">support chat</a>
<a href="logout.php">Log out</a>

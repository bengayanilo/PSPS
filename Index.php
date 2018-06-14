<?php
	session_start();
	if($_SESSION['id']){
		echo "Hello!";
	}
	else{
		header("Location:Authentication/Login");
	}
?>
<a href="Chat/selection">support chat</a>
<a href="Scheduling/index.php">Appointments</a>
<a href="logout.php">Log out</a>

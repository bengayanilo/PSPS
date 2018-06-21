<?php
	session_start();
	$_SESSION['url'] = 'http://localhost/Web/';
	if($_SESSION['type'] != 'admin'){
		header("Location:Homepage/html/index.php");
	}
	else{
		header("Location:Backend/html/index.php");
	}
	
?>
<a href="Chat/selection">support chat</a>
<a href="Scheduling/index.php">Appointments</a>
<?php
	if(isset($_SESSION['id'])){
		echo '<a href="logout.php">Log out</a>';
	}
	else{
		echo '<a href="Authentication/Login/index.php">Log In</a>';
	}
?>
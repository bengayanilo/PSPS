<?php
	session_start();
	include('../../Database/config.php');
	
	$user_id = mysqli_real_escape_string($db, $_SESSION['id']);
	$query = "SELECT * FROM log WHERE chat_id = 1";
	$result=mysqli_query($db, $query);
	if ($result) {
		$log = mysqli_fetch_all($result, MYSQLI_ASSOC);
		echo json_encode($log);
	}
	else{
		echo "query failed";
	}
?>
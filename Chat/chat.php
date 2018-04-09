<?php
	session_start();
	include('../Database/config.php');
	
	$user_id = mysqli_real_escape_string($db, $_SESSION['id']);
	$message = mysqli_real_escape_string($db, $_POST['message']);

	$query = "INSERT INTO log(chat_id,chat_user,message,timesent) VALUES(1,$user_id,'$message',NOW())";

	if (mysqli_query($db, $query)) {
		echo "query success";
	}
	else{
		echo "query failed";
	}
?>
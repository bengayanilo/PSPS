<?php
	session_start();
	include('../../Database/config.php');
	
	$user_id = mysqli_real_escape_string($db, $_SESSION['id']);
	$message = mysqli_real_escape_string($db, $_POST['message']);
	$chat_id = mysqli_real_escape_string($db, $_POST['chat_id']);

	$query = "INSERT INTO log(chat_id,chat_user,message,timesent) VALUES($chat_id,$user_id,'$message',NOW())";

	if (mysqli_query($db, $query)) {
		echo "query success";
	}
	else{
		echo "query failed";
	}
?>
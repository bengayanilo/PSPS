<?php
	session_start();
	include('../../Database/config.php');

	$query = "SELECT DISTINCT(t1.chat_id),t1.user_id,t2.user_id
	FROM chat_users t1 
	INNER JOIN chat_users t2 
	ON t1.chat_id=t2.chat_id
	WHERE t1.user_id != t2.user_id
	GROUP BY chat_id"

	$result=mysqli_query($db, $query);

	echo json_encode($chat_id)
?>
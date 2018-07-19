<?php
	session_start();
	include('../../Database/config.php');
	
	$user_id = mysqli_real_escape_string($db, $_SESSION['id']);
	$chat_id = mysqli_real_escape_string($db, $_POST['chat_id']);
	// $query = "SELECT tbl.user_name,log.message,log.timesent 
	// 			FROM log INNER JOIN tbl_users tbl 
	// 			ON tbl.user_id=log.chat_user 
	// 			WHERE chat_id = $chat_id";
	$query = "SELECT tbl.user_name,tbl.firstname,tbl.surname,log.message,log.timesent 
				FROM log INNER JOIN tbl_users tbl 
				ON tbl.user_id=log.chat_user 
				WHERE chat_id = $chat_id";
	$query2 = "SELECT a.user_id,user_name,firstname,surname
	FROM tbl_users a INNER JOIN chat_users b 
	ON a.user_id = b.user_id 
	WHERE a.user_id =".$_SESSION['id'];

	$loggedinresult=mysqli_query($db, $query2);
	$loggedin = mysqli_fetch_all($loggedinresult, MYSQLI_ASSOC);
	$result=mysqli_query($db, $query);
	if ($result) {
		$log = mysqli_fetch_all($result, MYSQLI_ASSOC);
		echo json_encode($log, $user_id);
	}
	else{
		echo "query failed";
	}
?>
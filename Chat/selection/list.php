<?php
	session_start();
	include('../../Database/config.php');
	
	$user_id = mysqli_real_escape_string($db, $_SESSION['id']);
	$type = mysqli_real_escape_string($db, $_SESSION['type']);

	if($type == 'psy'){
		$query = "SELECT * 
					FROM `tbl_users` t1
					INNER JOIN (
					    SELECT DISTINCT(t1.chat_id),t1.user_id as user,t2.user_id as target
					    FROM chat_users t1 
					    INNER JOIN chat_users t2 
					    ON t1.chat_id=t2.chat_id
					    WHERE t1.user_id != t2.user_id
					    AND t1.user_id = $user_id
					    GROUP BY chat_id) t2
					ON t1.user_id = t2.target";
					
		$result=mysqli_query($db, $query);
		if ($result) {
			$log = mysqli_fetch_all($result, MYSQLI_ASSOC);
			echo json_encode($log);
		}
		else{
			echo "query failed";
		}
	}
	else{
		$query = "SELECT * FROM tbl_users WHERE user_type='psy'";
		$result=mysqli_query($db, $query);
		if ($result) {
			$log = mysqli_fetch_all($result, MYSQLI_ASSOC);
			echo json_encode($log);
		}
		else{
			echo "query failed";
		}
	}
	
?>
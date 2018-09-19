<?php
	session_start();
	include('../../Database/config.php');
	
	$user_id = mysqli_real_escape_string($db, $_SESSION['id']);
	$type = mysqli_real_escape_string($db, $_SESSION['type']);
	$directory = mysqli_real_escape_string($db, $_SESSION['url']);

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

		$query2 = "SELECT b.user_id,b.firstname,b.surname,b.user_email,a.message,max(a.timesent)
		FROM log a 
		INNER JOIN 
						(SELECT * 
							FROM `tbl_users` t1
							INNER JOIN (
								SELECT DISTINCT(t1.chat_id),t1.user_id as user,t2.user_id as target
								FROM chat_users t1 
								INNER JOIN chat_users t2 
								ON t1.chat_id=t2.chat_id
								WHERE t1.user_id != t2.user_id
								AND t1.user_id = $user_id
								GROUP BY chat_id) t2
							ON t1.user_id = t2.target) b
		ON a.chat_id = b.chat_id
		GROUP BY a.chat_id";
					
		$result=mysqli_query($db, $query2);
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
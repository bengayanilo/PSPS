<?php
	session_start();
	include('../../Database/config.php');

	$user_id =  mysqli_real_escape_string($db, $_SESSION['id']);
	$target_id =  mysqli_real_escape_string($db, $_GET['target']);

	$query = "SELECT DISTINCT(t1.chat_id),t1.user_id as user,t2.user_id as target
				FROM chat_users t1 
				INNER JOIN chat_users t2 
				ON t1.chat_id=t2.chat_id
				WHERE t1.user_id != t2.user_id
				AND t1.user_id = $user_id
				AND t2.user_id = $target_id
				GROUP BY chat_id";

	$result=mysqli_query($db, $query);
	if (mysqli_num_rows($result)>0) {
		$chat_id = mysqli_fetch_all($result, MYSQLI_ASSOC);
		echo json_encode($chat_id);
	}
	else
	{
		try {

		    $db->query('INSERT INTO chat_id VALUES(NULL)');
		    $chatid = mysqli_insert_id($db);
		    $db->query('INSERT INTO chat_users(chat_id,user_id) VALUES('.$chatid.','.$user_id.')');
		    $db->query('INSERT INTO chat_users(chat_id,user_id) VALUES('.$chatid.','.$target_id.')');

		    $result=mysqli_query($db, $query);
		 	$chat_id = mysqli_fetch_all($result, MYSQLI_ASSOC);
			echo json_encode($chat_id);

		} catch (Exception $e) {
		    $db->rollback();
		}
	}
?>
<?php
	session_start();
	include('../Database/config.php');
	$query = "INSERT INTO tbl_users() VALUES()";

	if (mysqli_query($db, $query)) {
		echo "query success";
	}
	else{
		echo "query failed";
	}
?>
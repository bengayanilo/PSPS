<?php
	require('../../../Database/config.php');

	$deleted_id = $_GET['delete_id'];

	$deleteuser = "DELETE FROM tbl_users WHERE user_id=$deleted_id";

	if ($db->query($deleteuser) == TRUE) {
    	header("Location:index.php");
	} else {
	    echo "Error deleting record: " . $db->error;
	}
?>
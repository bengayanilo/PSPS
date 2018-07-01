<?php
	require('../../../Database/config.php');

	$deleted_id = $_GET['delete_id'];

	$deleteuser = "DELETE FROM news WHERE news_id=$deleted_id";

	if ($db->query($deleteuser) == TRUE) {
    	header("Location:index.php");
	} else {
	    echo "Error deleting record: " . $db->error;
	}
?>
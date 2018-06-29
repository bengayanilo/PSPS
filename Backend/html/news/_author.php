<?php
	
	require('../../../Database/config.php');

	$getuser = "SELECT user_name FROM tbl_users WHERE user_type='psy'";
	$result = $db->query($getuser);

	if ($result->num_rows > 0) {
	// output data of each row
		while($row = $result->fetch_assoc()) {
			echo '<option>'. $row['user_name'] .'</option>';
		}
		} else {
			echo "0 results";
	}
?>
<?php
	
	require('../../Database/config.php');

	$getdoctors = "SELECT user_id,surname, firstname FROM tbl_users WHERE user_type='psy'";
	$result = $db->query($getdoctors);

	if ($result->num_rows > 0) {
	// output data of each row
		while($row = $result->fetch_assoc()) {
			echo '<option value="'.$row['user_id'].'">'. $row['firstname'] . ' ' . $row['surname'] .'</option>';
		}
	} 
	else {
		echo "0 results";
	}
?>
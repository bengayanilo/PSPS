<?php
	require('../../../Database/config.php');

	$getreport = "SELECT p.appointment_id, p.appointment_status, p.appointment_patient_name, t.surname, t.firstname 
					FROM appointment AS p, tbl_users as t
					WHERE p.doctor_id=t.user_id AND p.appointment_status != 'free' ";
	$result = $db->query($getreport);

	if ($result->num_rows > 0) {
	// output data of each row
		while($row = $result->fetch_assoc()) {
			echo '<tr>
					<td> '. $row['appointment_id'] .' </td>
					<td> '. $row['surname'] .', '. $row['firstname'] .' </td>
					<td> '. $row['appointment_patient_name'] .' </td>
					<td> '. $row['appointment_status'] .' </td>
					<td>
						<div class="dropdown is-hoverable">
							<div class="dropdown-trigger">
								<button class="button">
									<span>Actions</span>
									<span class="icon">
										<i class="fa fa-angle-down"></i>
									</span>
								</button>
							</div>
							<div class="dropdown-menu">
								<div class="dropdown-content">
									<a class="dropdown-item" href="show.php?show_id='. $row['appointment_id'] .'">View</a>
									<a class="dropdown-item" href="update.php?update_id='. $row['appointment_id'] .'">Edit</a>
									<a class="dropdown-item" href="delete.php?delete_id='. $row['appointment_id'] .'" onclick="return confirm('."'Are you sure?'".');">Delete</a>
								</div>
							</div>
						</div>										
					</td>
				</tr>';
	}
	} else {
		echo "0 results";
	}

	$db->close();
?>
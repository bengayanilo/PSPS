<?php
	require('../../../Database/config.php');

	$getuser = "SELECT user_id, user_name, user_email FROM tbl_users WHERE user_type='pat'";
	$result = $db->query($getuser);

	if ($result->num_rows > 0) {
	// output data of each row
		while($row = $result->fetch_assoc()) {
			echo '<tr>
					<td> '. $row['user_id'] .' </td>
					<td> '. $row['user_name'] .' </td>
					<td> '. $row['user_email'] .' </td>
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
									<a class="dropdown-item" href="">View</a>
									<a class="dropdown-item" href="user-update.php?update_id='. $row['user_id'] .'">Edit</a>
									<a class="dropdown-item" href="user-delete.php?delete_id='. $row['user_id'] .'" onclick="return confirm('."'Are you sure?'".');">Delete</a>
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
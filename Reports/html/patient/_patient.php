<?php
	require('../../../Database/config.php');

	$getuser = "SELECT user_id, user_name, user_email FROM tbl_users WHERE user_type='pat'";
	$result = $db->query($getuser);

	echo '<table class="table is-fullwidth">
						<thead>
							<tr>
								<th>Patient ID</th>
								<th>Patient Name</th>
								<th>Email</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>';
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
															<a class="dropdown-item" href="patient/show.php?id='. $row['user_id'] .'">View</a>
															<a class="dropdown-item" href="">View comprehensive report</a>
															<a class="dropdown-item" href="">Update comprehensive report</a>
														</div>
													</div>
												</div>										
											</td>
										</tr>';
								}
							} else {
								echo "0 results";
							}
	echo '</tbody>
			</table>';
	
	$db->close();
?>
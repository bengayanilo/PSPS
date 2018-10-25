<?php session_start();

	require('../../../Database/config.php');
	
	$updateuser = $_GET['id'];
	$selectuser = "SELECT user_id,user_name, user_email, joining_date, picture FROM tbl_users WHERE user_id=$updateuser";

	$userdata = $db->query($selectuser);
	$data = $userdata->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Backend - Psyche Solution Psychological Services</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>Static/css/bulma/bulma.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>Static/css/bulma/bulma-pageloader.min.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>Static/css/font-awesome/font-awesome.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>Reports/css/report.css" />
	<link rel="icon" href="<?php echo $_SESSION['url']; ?>Static/images/logo.png" />
</head>
<body>

	<div class="container is-fluid">

		<div class="columns">

			<div class="column">
				<div id = "content">
					
					<div class="column">
						<div class="columns">
							<div class="column">
								<a href="../report.php" class="button">
									<span class="icon is-small">
		                				<i class="fa fa-long-arrow-left"></i>
									</span>
									<span>Back</span>
								</a>
							</div>
						</div>

						<div class="columns">
							<div class="column">
								<div class="card box">
									<div class="card-header">
										<p class="card-header-title">User Details</p>
									</div>
									<div class="card-content">
										<table class="table is-fullwidth">
											<tbody>
												<tr>
													<td rowspan="6">
														<?php
														echo '<img id="user-avatar" src="'.($data['picture'] != NULL?$_SESSION['url'].$data['picture']:$_SESSION['url']."Static/images/profile-placeholder.jpg").'">';
														?>
													<td>
													<td>
														<tr>
															<th width="100">Patient ID</th>
															<td><?php echo $data['user_id']; ?></td>
														</tr>
														<tr>
															<th width="100">Username</th>
															<td><?php echo $data['user_name']; ?></td>
														</tr>
														<tr>
															<th width="100">Email</th>
															<td><?php echo $data['user_email']; ?></td>
														</tr>
														<tr>
															<th width="100">Date Joined</th>
															<td><?php echo $data['joining_date']; ?></td>
														</tr>
														<tr>
															<td>
																<div class="dropdown is-hoverable">
																	<div class="dropdown-trigger">
																		<button class="button">
																			<span>Comprehensive Report</span>
																			<span class="icon">
																				<i class="fa fa-angle-down"></i>
																			</span>
																		</button>
																	</div>
																	<div class="dropdown-menu">
																		<div class="dropdown-content">
																			<a class="dropdown-item" href="../comprehensive/viewcompre.php?patient_id=<?php echo $data['user_id'] ?>">View comprehensive report</a>
																			<a class="dropdown-item" href="../comprehensive/comprehensive.php?patient_id=<?php echo $data['user_id'] ?>">Update comprehensive report</a>
																		</div>
																	</div>
																</div>
															</td>
														</tr>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="card box">
									<div class="card-header">
										<p class="card-header-title">Session History</p>
									</div>
									<div class="card-content">
										<?php include "_sessions.php"; ?>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>

		</div>
	</div>

</body>
</html>
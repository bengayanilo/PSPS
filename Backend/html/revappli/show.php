<?php
	require('../../../Database/config.php');
	
	$updateuser = $_GET['id'];
	$selectuser = "SELECT user_id,user_name, user_email, joining_date FROM tbl_users WHERE user_id=$updateuser";

	$userdata = $db->query($selectuser);
	$data = $userdata->fetch_assoc();

	include('../backend-base.php');
?>
			<div class="column">
				<div class="columns">
					<div class="column">
						<a href="index.php" class="button">
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
											<th width="100">User ID</th>
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
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
<!-- end part of backend base -->
				</div>
			</div>

		</div>
	</div>

</body>
</html>
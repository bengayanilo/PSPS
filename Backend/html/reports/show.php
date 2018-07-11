<?php
	require('../../../Database/config.php');
	
	$showreport = $_GET['show_id'];
	$selectreport = "SELECT p.appointment_id, p.appointment_status, p.appointment_patient_name, p.appointment_start, p.appointment_end, t.surname, t.firstname 
					FROM appointment AS p, tbl_users as t
					WHERE p.appointment_id='$showreport' AND p.doctor_id=t.user_id";

	$reportdata = $db->query($selectreport);
	$data = $reportdata->fetch_assoc();

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
								<p class="card-header-title">News Details</p>
							</div>
							<div class="card-content">
								<table class="table is-fullwidth">
									<thead>
										<tr>
											<th width="100">Appointment ID</th>
											<th width="100">Doctor</th>
											<th width="100">Patient</th>
											<th width="100">Time of Session</th>
											<th width="100">End of Session</th>
											<th width="100">Status</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><?php echo $data['appointment_id']; ?></td>
											<td><?php echo $data['surname'] . ', ' . $data['firstname']; ?></td>
											<td><?php echo $data['appointment_patient_name']; ?></td>
											<td><?php echo $data['appointment_start']; ?></td>
											<td><?php echo $data['appointment_end']; ?></td>
											<td><?php echo $data['appointment_status']; ?></td>
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
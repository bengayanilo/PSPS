<?php
	require('../../../Database/config.php');
	include('../backend-base.php');

	$create = $_GET['create_id'];
	$selectreport = "SELECT * FROM appointment LEFT JOIN progress_report 
					ON progress_report.fr_appoint_id = appointment.appointment_id
					WHERE appointment_id=$create";

	$reportdata = $db->query($selectreport) or die($db->error);
	$data = $reportdata->fetch_assoc();

?>

<div class="column">
	<div class="columns">
		<div class="column">
			<a href="<?php echo $_SESSION['url']; ?>Backend/html/reports/index.php" class="button">
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
					<p class="card-header-title">Create new report</p>
				</div>
				<div class="card-content">
					<form name="progress_report" action="_submitprogress.php" method="post" enctype="multipart/form-data">

			<!-- I. Identifying Data -->
						<div class="container box">
							<div class="field">

							<label class="label is-medium"> I. Identifying Data </label>

							<label class="label is-small"> Name: </label> <input class="input" type="text" name="i_name" value="<?php echo $data['appointment_patient_name'] ?>">
							<label class="label is-small"> Address: </label> <input class="input" type="text" name="i_address" value="<?php echo $data['pat_address'] ?>">
							<label class="label is-small"> Gender: </label>
								<div class="select">
									<select name="i_gender">
										<option value="Male">Male</option>
										<option value="Female">Female</option>
									</select>
								</div>
							<label class="label is-small"> Age: </label> <input class="input" type="text" name="i_age" value="<?php echo $data['pat_age'] ?>">
							<label class="label is-small"> Date of Birth: </label> <input class="input" type="date" name="i_dob" value="<?php echo $data['pat_dob'] ?>">
							<label class="label is-small"> School: </label> <input class="input" type="text" name="i_school" value="<?php echo $data['pat_school'] ?>">
							<label class="label is-small"> Grade Level: </label> <input class="input" type="text" name="i_grlvl" value="<?php echo $data['pat_grlvl'] ?>">
							<label class="label is-small"> Date of Testing: </label> <input class="input" type="text" name="i_tdate" value="<?php echo $data['appointment_start'] ?>" editable=false>
							<label class="label is-small"> Place of Testing: </label> <input class="input" type="text" name="i_tplace" value="<?php echo $data['place_test'] ?>">

							</div>
						</div>

						<!-- II. Reason/s for Referral -->
						<div class="container box">
							<div class="field">

							<label class="label is-medium"> II. Reason(s) for Referral </label>
							<textarea class="textarea" name="ii_reasons"> <?php echo $data['referral_reasons'] ?></textarea>

							</div>
						</div>

						<!-- III. Psychological Test/s Administered -->
						<div class="container box">
							<div class="field">

							<label class="label is-medium"> III. Psychological Test/s Administered </label>
							<textarea class="textarea" name="iii_test"> <?php echo $data['tests_administered'] ?></textarea>

							</div>
						</div>

						<!-- IV. Results and Interprations -->
						<div class="container box">
							<div class="field">

							<label class="label is-medium"> IV. Results and Interpretations </label>
							<textarea class="textarea" name="iv_results"> <?php echo $data['results'] ?></textarea>

							</div>
						</div>

						<!-- V.Remarks -->
						<div class="container box">
							<div class="field">

							<label class="label is-medium"> V. Remarks </label>
							<textarea class="textarea" name="v_remarks"> <?php echo $data['remarks'] ?></textarea>

							</div>
						</div>

						<!-- VI. Recommendations -->
						<div class="container box">
							<div class="field">

							<label class="label is-medium"> VI. Recommendation/s </label>
							<textarea class="textarea" name="vi_recom"> <?php echo $data['recommendations'] ?></textarea>

							</div>
						</div>

						<input class="input" type="hidden" name="appointment_id" value="<?php echo $data['appointment_id'] ?>" editable=false>

						<input type="submit" class="button is-primary" name="submitreport" value="Done">

					</form>
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
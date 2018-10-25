<?php session_start();
	
	require('../../../Database/config.php');

	$create = $_GET['create_id'];
	$selectreport = "SELECT * FROM appointment LEFT JOIN progress_report 
					ON progress_report.fr_appoint_id = appointment.appointment_id
					WHERE appointment_id=$create";

	$reportdata = $db->query($selectreport) or die($db->error);
	$data = $reportdata->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>Static/css/bulma/bulma.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>Static/css/bulma/bulma-pageloader.min.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>Static/css/font-awesome/font-awesome.css" />

	<title>Progress Report</title>
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<div id="text"></div>

		<form name="progress_report" action="_submitprogress.php" method="post" enctype="multipart/form-data">

			<!-- I. Identifying Data -->
			<div class="container box">
				<div class="field">

				<label class="label is-medium"> I. Identifying Data </label>

				<label class="label is-small"> Name: </label> <?php echo $data['appointment_patient_name'] ?>
				<label class="label is-small"> Address: </label> <?php echo $data['pat_address'] ?>
				<label class="label is-small"> Gender: </label> <?php echo $data['pat_gender'] ?>
					
				<label class="label is-small"> Age: </label> <?php echo $data['pat_age'] ?>
				<label class="label is-small"> Date of Birth: </label> <?php echo $data['pat_dob'] ?>
				<label class="label is-small"> School: </label> <?php echo $data['pat_school'] ?>
				<label class="label is-small"> Grade Level: </label> <?php echo $data['pat_grlvl'] ?>
				<label class="label is-small"> Date of Testing: </label> <?php echo $data['appointment_start'] ?>
				<label class="label is-small"> Place of Testing: </label> <?php echo $data['place_test'] ?>

				</div>
			</div>

			<!-- II. Reason/s for Referral -->
			<div class="container box">
				<div class="field">

				<label class="label is-medium"> II. Reason(s) for Referral </label>
				<p style="text-indent: 40px"><?php echo $data['referral_reasons'] ?></p>

				</div>
			</div>

			<!-- III. Psychological Test/s Administered -->
			<div class="container box">
				<div class="field">

				<label class="label is-medium"> III. Psychological Test/s Administered </label>
				<p style="text-indent: 40px"> <?php echo $data['tests_administered'] ?></p>

				</div>
			</div>

			<!-- IV. Results and Interprations -->
			<div class="container box">
				<div class="field">

				<label class="label is-medium"> IV. Results and Interpretations </label>
				<p style="text-indent: 40px"> <?php echo $data['results'] ?></p>

				</div>
			</div>

			<!-- V.Remarks -->
			<div class="container box">
				<div class="field">

				<label class="label is-medium"> V. Remarks </label>
				<p style="text-indent: 40px"> <?php echo $data['remarks'] ?></p>

				</div>
			</div>

			<!-- VI. Recommendations -->
			<div class="container box">
				<div class="field">

				<label class="label is-medium"> VI. Recommendation/s </label>
				<p style="text-indent: 40px"> <?php echo $data['recommendations'] ?></p>

				</div>
			</div>

			<input class="input" type="hidden" name="appointment_id" value="<?php echo $data['appointment_id'] ?>" editable=false>

			<input type="submit" class="button is-primary" name="submitreport" value="Done">

		</form>

</body>
</html>

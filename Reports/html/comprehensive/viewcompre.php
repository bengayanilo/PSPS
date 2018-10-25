<?php session_start();
	
	require('../../../Database/config.php');
	$patient_id = $_GET['patient_id'];

	$viewcompre = "SELECT * FROM compre_report WHERE patient_id='$patient_id'";
	$view = $db->query($viewcompre) or die (mysqli_error($db));
	$data = $view->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>Static/css/bulma/bulma.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>Static/css/bulma/bulma-pageloader.min.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>Static/css/font-awesome/font-awesome.css" />

	<title>Comprehensive Report</title>
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<div id="text"></div>

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

		<div class="container box">
			<div class="field">

				<label class="label is-medium"> Examiner/Doctor </label>
				<label class="label is-small" value=""> <?php echo $data['examiner']; ?> </label>
			</div>
		</div>

		<div class="container box">
			<div class="field">

			<label class="label is-medium"> Start of Treatment </label>
			<label class="label is-small" value=""> <?php echo $data['start_date']; ?> </label>

			</div>
		</div>

		<div class="container box">
			<div class="field">

			<label class="label is-medium"> End of Treatment </label>
			<label class="label is-small" value=""> <?php echo $data['end_date']; ?> </label>

			</div>
		</div>

		<div class="container box">
			<div class="field">

			<label class="label is-medium"> Assessment Procedures </label>
			<label class="label is-small" value=""> <?php echo $data['procedures']; ?> </label>

			</div>
		</div>

		<div class="container box">
			<div class="field">

			<label class="label is-medium"> History </label>
			<label class="label is-small" value=""> <?php echo $data['history']; ?> </label>

			</div>
		</div>

		<div class="container box">
			<div class="field">

			<label class="label is-medium"> Observations </label>
			<label class="label is-small" value=""> <?php echo $data['observations']; ?> </label>

			</div>
		</div>

		<div class="container box">
			<div class="field">

			<label class="label is-medium"> Session Summaries </label>
			<label class="label is-small" value=""> <?php echo $data['summaries']; ?></label>

			</div>
		</div>

		<div class="container box">
			<div class="field">

			<label class="label is-medium"> Tests Administered/Treatments Underwent </label>
			<label class="label is-small" value=""> <?php echo $data['tests']; ?></label>

			</div>
		</div>

		<div class="container box">
			<div class="field">

			<label class="label is-medium"> Tests Results </label>
			<label class="label is-small" value=""> <?php echo $data['test_results']; ?></label>

			</div>
		</div>

		<div class="container box">
			<div class="field">

			<label class="label is-medium"> Conclusion/Interpretation </label>
			<label class="label is-small" value=""> <?php echo $data['conclusion']; ?> </label>

			</div>
		</div>

		<div class="container box">
			<div class="field">

			<label class="label is-medium"> Recommendations </label>
			<label class="label is-small" value=""> <?php echo $data['recommendations']; ?> </label>

			</div>
		</div>

</body>
</html>

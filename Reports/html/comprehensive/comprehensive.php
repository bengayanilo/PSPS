<?php session_start();
	
	require('../../../Database/config.php');
	$patient_id = $_GET['patient_id'];

	$updatecompre = "SELECT * FROM compre_report WHERE patient_id='$patient_id'";
	$update = $db->query($updatecompre) or die (mysqli_error($db));
	$data = $update->fetch_assoc();
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

		<form name="comprehensive_report" action="_submitcompre.php" method="post" enctype="multipart/form-data">

			<div class="container box">
				<div class="field">

					<label class="label is-medium"> Examiner/Doctor </label>
					<div class="select">
						<select name="pick_doctor"">
							
							<?php include '_pickexaminer.php' ?>
						</select>
					</div>
				</div>
			</div>

			<div class="container box">
				<div class="field">

				<label class="label is-medium"> Start of Treatment </label>
				<input class="input" type="date" name="start" value="<?php echo $data['start_date']; ?>">

				</div>
			</div>

			<div class="container box">
				<div class="field">

				<label class="label is-medium"> End of Treatment </label>
				<input class="input" type="date" name="end" value="<?php echo $data['end_date']; ?>">

				</div>
			</div>

			<div class="container box">
				<div class="field">

				<label class="label is-medium"> Assessment Procedures </label>
				<textarea class="textarea" name="assess_proc"> <?php echo $data['procedures']; ?> </textarea>

				</div>
			</div>

			<div class="container box">
				<div class="field">

				<label class="label is-medium"> History </label>
				<textarea class="textarea" name="history"> <?php echo $data['history']; ?> </textarea>

				</div>
			</div>

			<div class="container box">
				<div class="field">

				<label class="label is-medium"> Observations </label>
				<textarea class="textarea" name="observations"> <?php echo $data['observations']; ?> </textarea>

				</div>
			</div>

			<div class="container box">
				<div class="field">

				<label class="label is-medium"> Session Summaries </label>
				<textarea class="textarea" name="summ"> <?php echo $data['summaries']; ?> </textarea>

				</div>
			</div>

			<div class="container box">
				<div class="field">

				<label class="label is-medium"> Tests Administered/Treatments Underwent </label>
				<textarea class="textarea" name="tests"> <?php echo $data['tests']; ?> </textarea>

				</div>
			</div>

			<div class="container box">
				<div class="field">

				<label class="label is-medium"> Tests Results </label>
				<textarea class="textarea" name="test_results"> <?php echo $data['test_results']; ?> </textarea>

				</div>
			</div>

			<div class="container box">
				<div class="field">

				<label class="label is-medium"> Conclusion/Interpretation </label>
				<textarea class="textarea" name="conc"> <?php echo $data['conclusion']; ?> </textarea>

				</div>
			</div>

			<div class="container box">
				<div class="field">

				<label class="label is-medium"> Recommendations </label>
				<textarea class="textarea" name="recom"> <?php echo $data['recommendations']; ?> </textarea>

				</div>
			</div>
			<input class="input" type="hidden" name="patient_id" value="<?php echo $patient_id ?>" editable=false>
			<input type="submit" class="button is-primary" name="submitcompre" value="Done">

		</form>

</body>
</html>

<?php session_start();
	

	$patient_id = $_GET['patient_id'];
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

		<form name="comprehensive_report" action="_submitcompre.php" method="post" enctype="multipart/form-data">

			<div class="container box">
				<div class="field">

					<label class="label is-medium"> Examiner/Doctor </label>
					<div class="select">
						<select name="pick_doctor"">
							<option>Doctors</option>
							<?php include '_pickexaminer.php' ?>
						</select>
					</div>
				</div>
			</div>

			<div class="container box">
				<div class="field">

				<label class="label is-medium"> Start of Treatment </label>
				<input class="input" type="date" name="start">

				</div>
			</div>

			<div class="container box">
				<div class="field">

				<label class="label is-medium"> End of Treatment </label>
				<input class="input" type="date" name="end">

				</div>
			</div>

			<div class="container box">
				<div class="field">

				<label class="label is-medium"> Assessment Procedures </label>
				<textarea class="textarea" name="assess_proc"> </textarea>

				</div>
			</div>

			<div class="container box">
				<div class="field">

				<label class="label is-medium"> History </label>
				<textarea class="textarea" name="history"> </textarea>

				</div>
			</div>

			<div class="container box">
				<div class="field">

				<label class="label is-medium"> Observations </label>
				<textarea class="textarea" name="observations"> </textarea>

				</div>
			</div>

			<div class="container box">
				<div class="field">

				<label class="label is-medium"> Session Summaries </label>
				<textarea class="textarea" name="summ"> </textarea>

				</div>
			</div>

			<div class="container box">
				<div class="field">

				<label class="label is-medium"> Tests Administered/Treatments Underwent </label>
				<textarea class="textarea" name="tests"> </textarea>

				</div>
			</div>

			<div class="container box">
				<div class="field">

				<label class="label is-medium"> Tests Results </label>
				<textarea class="textarea" name="test_results"> </textarea>

				</div>
			</div>

			<div class="container box">
				<div class="field">

				<label class="label is-medium"> Conclusion/Interpretation </label>
				<textarea class="textarea" name="conc"> </textarea>

				</div>
			</div>

			<div class="container box">
				<div class="field">

				<label class="label is-medium"> Recommendations </label>
				<textarea class="textarea" name="recom"> </textarea>

				</div>
			</div>
			<input class="input" type="hidden" name="patient_id" value="<?php echo $patient_id ?>" editable=false>
			<input type="submit" class="button is-primary" name="submitcompre" value="Done">

		</form>

</body>
</html>

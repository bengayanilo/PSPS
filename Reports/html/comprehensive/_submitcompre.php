<?php

	require('../../../Database/config.php');

	if(isset($_POST['submitcompre'])){

		$examiner = $_POST['pick_doctor'];
		$patient = $_POST['patient_id'];
		$start = $_POST['start'];
		$end = $_POST['end'];
		$assess = $_POST['assess_proc'];
		$history = $_POST['history'];
		$obs = $_POST['observations'];
		$summ = $_POST['summ'];
		$tests = $_POST['tests'];
		$results = $_POST['test_results'];
		$con = $_POST['conc'];
		$rec = $_POST['recom'];

		$compre = "INSERT IGNORE INTO compre_report(examiner, patient_id, compre_date, start_date, end_date, procedures, history, observations, summaries, tests, test_results, conclusion, recommendations)
						VALUES('$examiner', '$patient', NOW(), '$start', '$end', '$assess', '$history', '$obs', '$summ', '$tests', '$results', '$con', '$rec')
						ON DUPLICATE KEY UPDATE examiner = '$examiner',
												patient_id = '$patient',
												compre_date = NOW(),
												start_date = '$start',
												end_date = '$end',
												procedures = '$assess',
												history = '$history',
												observations = '$obs',
												summaries = '$summ',
												tests = '$tests',
												test_results = '$results',
												conclusion = '$con',
												recommendations = '$rec'";

		$insert = $db->query($compre);

		if($insert){
		
			echo '<script type="text/javascript">
						window.location.replace("../report.php");
				</script>';
		} else {
			echo "Error updating record: " . $db->error;
		};
	};
?>
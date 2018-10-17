<?php

	require('../../../Database/config.php');

	// $getprogress = "SELECT pat_name, pat_address, pat_gender, pat_age, pat_dob, pat_school, pat_grlvl, date_test, place_test, referral_reasons, tests_administered, results, recommendations
	// 				FROM progress_reports"
	if(isset($_POST['submitreport'])){

		// Identifying data
		$name = $_POST['i_name'];
		$address = $_POST['i_address'];
		$gender = $_POST['i_gender'];
		$age = $_POST['i_age'];
		$dateofbirth = $_POST['i_dob'];
		$school = $_POST['i_school'];
		$gradelevel = $_POST['i_grlvl'];
		$testdate = $_POST['i_tdate'];
		$testplace = $_POST['i_tplace'];

		// Referral
		$referral = $_POST['ii_reasons'];

		// Tests administered
		$tests_administered = $_POST['iii_test'];

		// Results
		$results = $_POST['iv_results'];

		// Remarks
		$remarks = $_POST['v_remarks'];

		// Recommendations
		$recom = $_POST['vi_recom'];

		// appointment_id
		$appoint = $_POST['appointment_id'];

		// Insert to database
		$insertreport = "INSERT INTO progress_report(pat_name, pat_address, pat_gender, pat_age, pat_dob, pat_school, pat_grlvl, date_test, place_test,
							referral_reasons,tests_administered, results, remarks, recommendations, fr_appoint_id)
						VALUES('$name', '$address','$gender','$age','$dateofbirth','$school','$gradelevel','$testdate','$testplace','$referral','$tests_administered','$results','$remarks','$recom', '$appoint')";

		$insert = $db->query($insertreport);

		if($insert){
		
			echo '<script type="text/javascript">
						window.location.replace("index.php");
				</script>';
		} else {
			echo "Error updating record: " . $db->error;
		};
	};
?>
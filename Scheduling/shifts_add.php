<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add Shift</title>
	<link rel="stylesheet" type="text/css" media="screen" href="../../Static/css/bulma/bulma.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="../../Static/css/bulma/bulma-pageloader.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="../../Static/css/font-awesome/font-awesome.css" />
		<!-- <link rel="stylesheet" type="text/css" media="screen" href="css/shifts_add.css" /> -->
		<link rel="stylesheet" type="text/css" media="screen" href="../../Scheduling/css/shifts_add.css" />
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="http://localhost/Web/Homepage/css/main.css" /> -->
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- <script src="js/scheduleAppointments.js"></script> -->
  <div class="tile shifts-add-container">
	<div class="shifts-add">

	  <div>
		<span class="shifts-add-header">Schedule Appointment</span>
	  </div>
	  
	  <br>

      <form name="shifts-add-form" id="shifts-add-form" method="post">
	    <div class="tile is-vertical">
		  <div class="tile">
			<div class="tile is-vertical shifts-add-vertical">
			  <div class="field tile shifts-add-input-container">
				<label for="" class="label shifts-add-label"><span class="shifts-add-text hero">Date</span></label>
				<input class="shifts-add-input" type="date" name="date">
			  </div>

			  <br>

			  <div class="field tile shifts-add-input-container">
				<label for="" class="label shifts-add-label"><span class="shifts-add-text hero">Start Time: </span></label>
				<input class="shifts-add-input" type="time" name="start time">
			  </div>

			  <br>

			  <div class="field tile shifts-add-input-container">
				<label for="" class="label shifts-add-label"><span class="shifts-add-text hero">End Time: </span></label>
				<input class="shifts-add-input" type="time" name="end time">
			  </div>

			  <br>

			  <div class="field tile shifts-add-input-container">
				<label for="" class="label shifts-add-label"><span class="shifts-add-text hero">Doctor: </span></label>
				<select name="pick_doctor" class="shifts-add-input">
					<option>Prefered doctor</option>
					<?php include '_pickdoctors.php' ?>
				</select>
			  </div>

			</div>
		  </div>
		</div>
	  </form>
	  <div class="tile">
			<div style="margin: auto;">
			  <div class="tile">
				<div class="tile shifts-add-button-container">
				  <button class="button is-dark shifts-add-clear shifts-add-buttons" type="reset" name="shifts-add-clear"><i class="fa fa-close" aria-hidden="true"></i>&nbsp;Clear</button>
				</div>
				<div class="tile shifts-add-button-container">
				  <button class="button is-success shifts-add-submit shifts-add-buttons" type="submit" name="shifts-add-confirm" id="shifts-add-confirm" value=""><i class="fa fa-check" aria-hidden="true"></i>&nbsp;Confirm</button>
				</div>
			  </div>
			</div>
		  </div>
	</div>
  </div>
</body>
</html>
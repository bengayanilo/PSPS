<?php

	require('../../Database/config.php');

	session_start();
	// if(isset($_SESSION['id'])){
	// 	header("Location:../../index.php");
	// }

	$doctorid = $_GET['doctor'];
	$showdoctor = "SELECT surname, firstname, user_email, additional_info FROM tbl_users WHERE user_id='$doctorid'";

	$doctordata = $db->query($showdoctor);
	$data = $doctordata->fetch_assoc();

?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>Static/css/bulma/bulma.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>Static/css/bulma/bulma-pageloader.min.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>Static/css/font-awesome/font-awesome.css" />
	
	<title>Log-in</title>
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="<?php echo $_SESSION['url']; ?>Scheduling/js/daypilot/daypilot-all.min.js" type="text/javascript"></script>
<script src="<?php echo $_SESSION['url']; ?>Professionals/js/professionals.js"></script>
	
<!-- <div class="container is-fluid">

	<div class="box">

		<p class="title is-5">Firstname</p>
		<p class="subtitle is-6"><?php // echo $data['firstname']?></p>

		<p class="title is-5">Surname</p>
		<p class="subtitle is-6"><?php // echo $data['surname']?></p>

		<p class="title is-5">Email</p>
		<p class="subtitle is-6"><?php // echo $data['user_email']?></p>

		<br>
		<button id="closemodal" class="button is-primary">OK</button>
	</div>
	
</div> -->

<div class="container is-fluid">
  <div class="tile">
	<div class="tile">
		<p class="title is-5">Firstname</p>
		<p class="subtitle is-6"><?php echo $data['firstname']?></p>

		<p class="title is-5">Surname</p>
		<p class="subtitle is-6"><?php echo $data['surname']?></p>

		<p class="title is-5">Email</p>
		<p class="subtitle is-6"><?php echo $data['user_email']?></p>
	</div>
	<div class="tile">
		<p class="title is-5">Additional Information</p>
		<p class="subtitle is-6"><?php echo nl2br($data['additional_info']) ?></p>
		<button id="closemodal" class="button is-primary">OK</button>
	</div>
  </div>
</div>
	
</body>
</html>
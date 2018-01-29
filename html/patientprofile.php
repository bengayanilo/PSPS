
<!Doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title>Psyche Solution Psychological Services</title>
<link rel="stylesheet" type="text/css" href="../css/top-bar.css">
<link rel="stylesheet" type="text/css" href="../css/home.css">
<link rel="stylesheet" type="text/css" href="../css/normalize.css">
<link rel="stylesheet" type="text/css" href="../css/profilepage.css">
<link rel="icon" href="../images/logo.png">
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="../js/slideshow.js"></script>
<script src="../js/home.js"></script>
<div id="container">
<!--Topbar-->
	<div id="top-bar">
	<?php include("../html/topbar.php"); ?>
	</div><span style = "color: rgba(255, 255, 255, 0.0);">.</span>
	

<?php


	if(!(isset($_SESSION['username'])))
	{
		header("Location: home.php");
	}

?>

	
<div id = "SProfile">

	<div class = "patientProfile">
		
		<div id = "patientDetails">
		
			<div class = "divColor">
			
				<div class = "patientInfoHeader">
				
					<h2> Patient Details <h2>
					
				</div>
				
				<div class = "patientInfo">
				
					<p> Name: Insert name here </p>
					<p> Address: Insert complete address here </p>
					<p> Age: Insert age here <p>
					<p> Date of birth: Insert date of birth here </p>
					<p> Religion: Insert religion here </p>
					<p> Marital Status: Insert marital status here </p>
					<p> Citizenship: Insert citizenship here </p>
					<p> Occupation: Insert occupation here </p>
					<p> Company Name: Insert company name here </p>
					<p> Highest Educational Attainment: Insert here </p>
					<p> School: Insert here </p>
					
				</div>
				
			</div>
			
		</div>
		
		<div id = "patientContact">
		
		
			<div class = "divColor">
			
				<div class = "patientInfoHeader">
				
					<h2> Contact Details <h2>
					
				</div>
				
				<div class = "patientInfo">
				
					<p> Contact Number/s: Insert here </p>
					<p> E-mail Address: Insert email here </p>
					
				</div>
				
			</div>
		
		</div>
		
		<div id = "patientContact">
		
			<div class = "divColor">
			
				<div class = "patientInfoHeader">
				
					<h2> Other Information <h2>
					
				</div>
				
				<div class = "patientInfo">
				
					<p> Other info ng patient </p>
					
				</div>
				
			</div>
		
		</div>
		
	</div>
	
</div>
</div>
</body>
</html>
<?php	

// variable declaration
$username = "";
$email    = "";
$errors = array(); 

// connect to database
$db = mysqli_connect('localhost', 'id4654895_username', 'pspspassword', 'id4654895_db_users');

?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title>Home - Psyche Solution Psychological Services</title>
<link rel="stylesheet" type="text/css" href="../css/home.css">
<link rel="stylesheet" type="text/css" href="../css/normalize.css">
<link rel="stylesheet" type="text/css" href="../css/professionals.css">
<link rel="icon" href="../images/logo.png">
</head>

<body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="../js/professionals.js"></script>

<div id = "SProfessionals">
<!--<div id = "shadow-top">
	<p>a</p>
</div>
<div id = "shadow-bottom">
	<p>a</p>
</div>-->
<div id = "professionals-header">
	<div id = "professionals-header-background">
		<h1>Our Professionals</h1>
	</div>
</div>
<div id = "absolute-positioning">
<?php
$query = "Select * from tb_professionals";
$result = mysqli_query($db, $query);
while($row = $result->fetch_assoc())
{
	echo('<div id = "table-cell-container">');
	echo('<div class = "blockContainer">');

	echo('<div class = "primaryInfo">');

	echo('<div class = "profilePic">');
	echo('<img class = "circlePic" src = "../images/profile-placeholder.jpg">');
	echo('</div>');
	echo('<div class = "fullName">');
	echo('<p>'.$row['name'].'</p>');
	echo('<p class="secondaryinfo">'.$row['expertise'].'</p>');
	echo('</div>');
	echo('</div>');

	echo('<div class = "summary">');
	echo('<p>'.$row['summary'].'</p>');
	echo('</div>');

	echo('</div>');
	echo('</div>');
}
?>
</div>
</div>

</body>
</html>
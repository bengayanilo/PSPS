<?php
	include "../php/upload.php";
?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title>Register - Psyche Solution Psychological Services</title>
<link rel="stylesheet" type="text/css" href="../css/top-bar.css">
<link rel="stylesheet" type="text/css" href="../css/register.css">
<link rel="icon" href="../images/logo.png">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script src="../js/register.js"></script>
<!--<script type="text/javascript" src="../js/register.js"></script>-->
</head>
<?php include("../html/topbar.php"); ?>
<body>

<div id="container">
	<!--<div id="top-bar">-->
	<!--<?php include("../html/topbar.php"); ?>.
	<!--</div>-->
<form action="#" method="post" enctype="multipart/form-data">							<!--register form start-->
	<?php include "../php/errors.php"; ?>
	
	<div id="reg-container">
		<!--Primary Account Information-->
		
		<label><b>Email</b></label>
		<input type="reg-text" placeholder="Enter Email" id="email" name="email" required>
		
		<label><b>Username</b></label>
		<input type="reg-text" placeholder="Enter Username" id="username" name="username" required>
		
		<label><b>Password</b></label>
		<input type="password" placeholder="Enter Password" id="psw" name="psw" required>

		<label><b>Repeat Password</b></label>
		<input type="password" placeholder="Repeat Password" id="psw-repeat" name="psw-repeat" required>
		
		<button type="button"  id="topage2">Next</button>
		
		
		
	</div>

	
	<div id="reg2">
		<!--Secondary Account Information-->
		<label><b>First Name</b></label>
		<input type="reg-text" placeholder="Enter First Name" name="firstName" required>
		
		<label><b>Middle Name</b></label>
		<input type="reg-text" placeholder="Enter Middle Name" name="middleName" required>
		
		<label><b>Last Name</b></label>
		<input type="reg-text" placeholder="Enter Last Name" name="lastName" required>
		
		<br><br><label><b>Gender</b></label>
		<select name="gender">
			<option value="male">Male</option>
			<option value="female">Female</option>
		</select><br><br>
		
		<label><b>Address</b></label>
		<input type="reg-text" placeholder="Enter Address" name="address" required>

		<label><b>Contact Number</b></label>
		<input type="reg-text" placeholder="Enter Contact Number" name="contact" required>
		
		<button type="button"  id="topage3">Next</button>
		<button type="button"  id="topage1">Previous</button>
		
	</div>

	<div id="reg3">
		<!--Select Account Type-->
		<p>Select Account Type</p>
		<input type="radio" name="accountType" value="pat"> Patient<br>
		<input type="radio" name="accountType" value="psy"> Psychologist<br>
		<input type="radio" name="accountType" value="int"> Intern<br>
		<input type="radio" name="accountType" value="rev"> Review Applicant<br>
		
		<div>
		<label><b></b></label>
		Select image to upload:
		<input type="file" name="fileToUpload" id="fileToUpload" required>
		</div>

		<BR>
		<button type="button"  id="backtopage2">Previous</button>
		<BR>
		By creating an account you agree to our<button type="button" class="tnp"><p>Terms & Privacy.</p></button>
		<div class="clearfix">
		<button type="button"  class="cancelbtn">Cancel</button>
		<button type="submit" name="register"class="signupbtn">Sign Up</button>
		
		
		</div>
	</div>
</form>														<!--register form end-->
</div>

</body>
</html>
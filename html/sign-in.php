
<html>
<head>
<title>Sign-in - Psyche Solution Psychological Services</title>
<link rel="stylesheet" type="text/css" href="../css/sign-in.css">
<link rel="icon" href="../images/logo.png">
</head>
<body>
<div id="container">

	<!--<div id="top-bar">-->
	<?php include("../html/topbar.php"); ?>.
	<!--</div>-->
	
	<form method="post" action="">								<!--sign-in form start-->
	
	<div id="sign-in-container">
		<?php include('../php/errors.php'); ?>
		<label><b>Username</b></label>
		<input type="sign-in-text" placeholder="Enter username" name="username" required>
		
		<label><b>Password</b></label>
		<input type="password" placeholder="Enter Password" name="psw" required>

		<input type="checkbox" checked="checked"> Remember me

		<div class="clearfix">
		<button type="button"  class="cancelbtn">Cancel</button>
		<button type="submit" name="login" class="signinbtn">Sign in</button>
		</div>
		
		<div id="member-check">
			<p>Not a member yet? Register <button type="button" id="reg"><a href="../html/register.php">here</a></button><p>
		</div>
	</div>
</form>									<!--sign-in form end-->


</body>
</html>
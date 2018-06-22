<?php
	require('../../../Database/config.php');
	
	$updateuser = $_GET['update_id'];
	$selectuser = "SELECT user_name, user_email FROM tbl_users WHERE user_id=$updateuser";

	$userdata = $db->query($selectuser);
	$data = $userdata->fetch_assoc();

?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit</title>
</head>
<body>
	<h2><strong>Edit details</strong></h2>
	<form action="" method="POST">
		<label> Username </label>
			<input type="text" name="new_username" value="<?php echo $data['user_name']; ?>" autofocus>
		<br>

		<label> Email </label>
			<input type="text" name="new_email" value="<?php echo $data['user_email']; ?>">

		<br>

		<label> New password </label>
			<input type="password" name="new_pass">

		<br>

		<label> Confirm Password </label>
			<input type="password" name="new_passcon">

		<br>

		<input type="submit" name="submitupdate" value="Submit">

	</form>
	<script type="text/javascript"></script>
</body>
</html>
<?php
	if (isset($_POST['submitupdate'])){

		$username = $_POST['new_username'];
		$email = $_POST['new_email'];
		$pass = $_POST['new_pass'];
		$conpass = $_POST['new_passcon'];

		if($pass === $conpass){

			$password = md5($pass);
			$insertdata = "UPDATE tbl_users SET user_name = '$username', 
												user_email='$email',
												user_password='$password'
											WHERE user_id='$updateuser'";
											
			$insert = $db->query($insertdata);

			if ($db->query($insertdata) === TRUE) {

				echo '<script type="text/javascript"> 
						alert("Data successfully updated");
						window.location.replace("user-index.php");
					</script>';
			} else {
				echo "Error updating record: " . $db->error;
			};

		} else {
			die ("Passwords do not match");
		};
	};

	$db->close();
?>
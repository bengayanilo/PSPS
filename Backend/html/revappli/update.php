<?php
	require('../../../Database/config.php');
	
	$updateuser = $_GET['update_id'];
	$selectuser = "SELECT user_name, user_email FROM tbl_users WHERE user_id=$updateuser";

	$userdata = $db->query($selectuser);
	$data = $userdata->fetch_assoc();

	include('../backend-base.php');
?>
	<div class="columns">
		<div class="column">
			<a href="<?php echo $_SESSION['url']; ?>Backend/html/users/index.php" class="button">
				<span class="icon is-small">
    				<i class="fa fa-long-arrow-left"></i>
				</span>
				<span>Back</span>
			</a>
		</div>
	</div>
	<div class="columns">
		<div class="column">
			<div class="card box">
				<div class="card-header">
					<p class="card-header-title">Edit details</p>
				</div>
				<div class="card-content">
					<form action="" method="post">
						<div class="field">
							<label> Username </label>
							<div class="control">
								<input type="text" class="input" name="new_username" value="<?php echo $data['user_name']; ?>" autofocus>
							</div>
						</div>
						<div class="field">
							<label> Email </label>
							<div class="control">
								<input type="text" class="input" name="new_email" value="<?php echo $data['user_email']; ?>">
							</div>
						</div>
						<div class="field">
							<label> New password </label>
							<div class="control">
								<input type="password" class="input" name="new_pass">
							</div>
						</div>
						<div class="field">
							<label> Confirm Password </label>
							<div class="control">
								<input type="password" class="input" name="new_passcon">
							</div>
						</div>
						<hr>
						<input type="submit" class="button is-primary" name="submitupdate" value="Submit">
					</form>
				</div>
			</div>
		</div>
	</div>
<!-- end part of backend base -->
				</div>
			</div>

		</div>
	</div>

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
						window.location.replace("index.php");
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
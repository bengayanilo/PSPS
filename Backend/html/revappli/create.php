<?php
	require('../../../Database/config.php');
	include('../backend-base.php');
?>

<div class="column">
	<div class="columns">
		<div class="column">
			<a href="/backend/users" class="button">
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
					<p class="card-header-title">Register</p>
				</div>
				<div class="card-content">
					<form action="" method="post">
						<div class="field">
							<label> Username </label>
							<div class="control">
								<input type="text" class="input" name="new_username" autofocus>
							</div>
						</div>
						<div class="field">
							<label> Email </label>
							<div class="control">
								<input type="text" class="input" name="new_email" >
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
						<input type="submit" class="button is-primary" name="submitcreate" value="Submit">
					</form>
				</div>
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
	if (isset($_POST['submitcreate'])){

		$username = $_POST['new_username'];
		$email = $_POST['new_email'];
		$pass = $_POST['new_pass'];
		$conpass = $_POST['new_passcon'];

		if($pass === $conpass){

			$password = md5($pass);
			$insertdata = "INSERT INTO tbl_users (user_name,user_email,user_password,user_type,joining_date)
			VALUES ('$username','$email','$password','rev',NOW())";
											
			$insert = $db->query($insertdata);

			if ($insert) {

				echo '<script type="text/javascript">
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
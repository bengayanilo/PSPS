<?php
  require('../../../Database/config.php');

	if (isset($_POST['submitcreate'])){

		$username = $_POST['new_username'];
		$email = $_POST['new_email'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
		$pass = $_POST['new_pass'];
		$conpass = $_POST['new_passcon'];

		if($pass === $conpass){

			$password = md5($pass);
			$insertdata = "INSERT INTO tbl_users (user_name,surname,firstname,user_email,user_password,user_type,joining_date)
			VALUES ('$username','$lastname','$firstname','$email','$password','psy',NOW())";

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

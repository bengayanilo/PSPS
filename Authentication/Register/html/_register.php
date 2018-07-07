<?php
	require('../../../Database/config.php');

	if (isset($_POST['register'])){

		$username = $_POST['reg_user'];
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$pass = $_POST['reg_pass'];
		$conpass = $_POST['confirmpass'];
		$contact = $_POST['contact_no'];
		$type = $_POST['type'];

		if($pass === $conpass){

			$password = md5($pass);
			$insertdata = "INSERT INTO tbl_users (user_name,firstname,surname,user_email,contact_no,user_password,user_type,joining_date)
							VALUES ('$username','$fname','$lname','$email','$contact','$password','$type',NOW())";								
			$insert = $db->query($insertdata);

			if ($insert) {
				echo '<script type="text/javascript">
						if(confirm("Registration Succesful")){
							window.close();
						}
					</script>';
			} else {
				echo "There is an error in your registration: " . $db->error;
			};

		} else {
			die ("Passwords do not match");
		};
	};

	$db->close();
?>
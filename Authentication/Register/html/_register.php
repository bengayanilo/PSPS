<?php
	session_start();
	require('../../../Database/config.php');

	// if (isset($_POST['register'])){

		$username = mysqli_real_escape_string($db, $_POST['reg_user']);
		$fname = mysqli_real_escape_string($db, $_POST['fname']);
		$lname = mysqli_real_escape_string($db, $_POST['lname']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$pass = mysqli_real_escape_string($db, $_POST['reg_pass']);
		$conpass = mysqli_real_escape_string($db, $_POST['confirmpass']);
		$contact = mysqli_real_escape_string($db, $_POST['contact_no']);
		$type = mysqli_real_escape_string($db, $_POST['type']);

		if($pass === $conpass){

			$password = md5($pass);
			$insertdata = "INSERT INTO tbl_users (user_name,firstname,surname,user_email,contact_no,user_password,user_type,joining_date)
							VALUES ('$username','$fname','$lname','$email','$contact','$password','$type',NOW())";								
			$insert = $db->query($insertdata);

			if ($insert) {
				$_SESSION['id']=mysqli_insert_id($db);
				$_SESSION['username']=$username;
				$_SESSION['type']=$type;
				$_SESSION['pic']=NULL;
				echo 'Registered';
			} else {
				echo "There is an error in your registration: " . $db->error;
			};

		} else {
			die ("Passwords do not match");
		};
	// };

	$db->close();
?>
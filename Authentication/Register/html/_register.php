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

			if(!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^", $email)){
			    $msg = 'The email you have entered is invalid, please try again.';
			}else{
			    // Return Success - Valid Email
				$password = md5($pass);
				$hash = md5(rand(0,1000));
 	 			$insertdata = "INSERT INTO tbl_users (user_name, firstname, surname, user_email, contact_no, user_password, user_type, joining_date)
 	 							VALUES ('$username','$fname','$lname','$email','$contact','$password','$type',NOW())";
 	 			$insert = $db->query($insertdata);

				$to = $email; // Send email to our user
				$subject = 'Signup | Verification'; // Give the email a subject
				$message = '

				Thanks for signing up!
				Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.

				------------------------
				Username: '. $username .'
				Password: '. $password .'
				------------------------

				Please click this link to activate your account:
				'. $_SESSION['url'] .'Authentication/Register/html/verify.php?email='. $email. '&hash='. $hash; 
				// Our message above including the link

				$headers = 'From:noreply@yourwebsite.com' . "\r\n"; // Set from headers
				echo 'Registered';
				// if(mail($to, $subject, $message, $headers)){
				// 	echo 'Registered';
				// }
			}
		} else {
			die ("Passwords do not match");
		};

	$db->close();
?>

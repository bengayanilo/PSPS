<?php
	session_start();
	require('../../Database/config.php');
	$username = mysqli_real_escape_string($db, $_POST['reset-pass-username']);
	$email = mysqli_real_escape_string($db, $_POST['reset-pass-email']);

	$query = "SELECT * FROM tbl_users WHERE user_name='$username'";
	$results = mysqli_query($db, $query);

	if (mysqli_num_rows($results) > 0) {
		$row = $results->fetch_assoc();
		if($row['user_email'] == $email){
			$password = generatepass();
			$pass = md5($password);
			$query = "UPDATE tbl_users SET user_password = '".$pass."' WHERE user_name = '".$row['user_name']."' AND user_email = '".$row['user_email']."'";
			$stmt = $db->query($query);
			// $to      = $row['user_email'];
			// $subject = 'Password Reset';
			// $message = 'Your password has been reset. Your temporary password is '.$password;
			// $headers = 'From: noreply@psps.ml' . "\r\n".
			// 	'X-Mailer: PHP/' . phpversion();

			// mail($to, $subject, $message, $headers);
			echo $password;
		}else{
			echo 'Wrong email';
		}
	}
	else{
		echo "User doesn't Exist";
	}

	function generatepass(){
		$alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
		$pass = array();
		$alphaLength = strlen($alphabet) - 1;
		for ($i = 0; $i < 8; $i++) {
			$n = rand(0, $alphaLength);
			$pass[] = $alphabet[$n];
		}
		return implode($pass);
		}
?>
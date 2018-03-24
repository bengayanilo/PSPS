<?php
session_start();
include('../../Database/config.php');
$username = mysqli_real_escape_string($db, $_POST['username']);
$password = mysqli_real_escape_string($db, $_POST['password']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$password = md5($password);

$query = "INSERT INTO tbl_users (user_name,user_email,user_password,joining_date)
			VALUES ('$username','$email','$password',NOW())";
if(mysqli_query($db, $query)){
	echo "Registered";
}
else{
	echo "Registration Failed";
}
?>
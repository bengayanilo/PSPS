<?php
session_start();
include('../../Database/config.php');
$username = mysqli_real_escape_string($db, $_POST['username']);
$password = mysqli_real_escape_string($db, $_POST['password']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$type = mysqli_real_escape_string($db, $_POST['type']);
$password = md5($password);

$query = "INSERT INTO tbl_users (user_name,user_email,user_password,user_type,joining_date)
			VALUES ('$username','$email','$password','$type',NOW())";
if(mysqli_query($db, $query)){
	$_SESSION['id']=mysqli_insert_id($db);
	$_SESSION['type']=$type;
	echo $_SESSION['id'];
}
else{
	echo "Registration Failed";
}
?>
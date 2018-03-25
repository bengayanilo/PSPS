<?php
session_start();
require('../../Database/config.php');
$username = mysqli_real_escape_string($db, $_POST['username']);
$password = mysqli_real_escape_string($db, $_POST['password']);
$password = md5($password);
$query = "SELECT * FROM tbl_users WHERE user_name='$username' AND user_password='$password'";
$results = mysqli_query($db, $query);

if (mysqli_num_rows($results) > 0) {
	$row = $results->fetch_assoc();
	$_SESSION['id']=$row['user_id'];
	echo 'Login';
}
?>
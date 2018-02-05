<?php
// variable declaration
$username = "";
$email    = "";
$errors = array(); 

// connect to database
$db = mysqli_connect('localhost', 'root', '', 'db_users');

$query = "Select * from tb_users WHERE accountType = 'psy'";
$result = mysqli_query($db, $query);
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);
echo json_encode($users);
?>
<?php
session_start();

// variable declaration
$username = "";
$email    = "";
$errors = array(); 

// connect to database
$db = mysqli_connect('localhost', 'root', '', 'db_users');

// REGISTER USER
if (isset($_POST['register'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['psw']);
  $password_2 = mysqli_real_escape_string($db, $_POST['psw-repeat']);
  $name = mysqli_real_escape_string($db, $_POST['lastName'].",".$_POST['firstName'].$_POST['middleName']); 
  $gender = mysqli_real_escape_string($db, $_POST['gender']);
  $address = mysqli_real_escape_string($db, $_POST['address']);
  $contact = mysqli_real_escape_string($db, $_POST['contact']);
  $account = mysqli_real_escape_string($db, $_POST['accountType']);
  
  // form validation: ensure that the form is correctly filled
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($name)) { array_push($errors, "Name is required"); }
  if (empty($address)) { array_push($errors, "Address is required"); }
  if (empty($contact)) { array_push($errors, "Contact number is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database
  	$query = "INSERT INTO tb_users (username, password, email, fullName, gender, address, contact, accountType) 
  			  VALUES('$username', '$password','$email', '$name', '$gender', '$address', '$contact', '$account')";
  	$result = mysqli_query($db, $query);
	if($result){
  	$_SESSION['username'] = $username;
	$_SESSION['accType'] = $account;
  	$_SESSION['success'] = "You are now logged in";
	
	
}
	
	
  	
	}
	else{
	array_push($errors, "email/username already exists");
	}
  

}


// LOGIN USER
if (isset($_POST['login'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['psw']);

  if (empty($username)) {
  	array_push($errors, "username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM tb_users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	$row = $results->fetch_assoc();
	if (mysqli_num_rows($results) > 0) {
  	  $_SESSION['username'] = $username;
	  $_SESSION['accType'] = $row['accountType'];
  	  $_SESSION['success'] = "You are now logged in";
	  array_push($errors, "Successfully logged in");
	  
  	  header('location: home - Copy.php');
  	}else {
  		array_push($errors, $username.$password);
  	}
  }
}

?>
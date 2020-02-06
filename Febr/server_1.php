<?php
session_start();
$email = $password = '';
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'register');
$email = $password = '';
if(isset($_POST['login_user'])){
  $email = $_POST['email'];
  $password = $_POST['password'];
  $error = "Wrong username/password combination";

   if($email === 'admin@gmail.com' && $password === 'admin')
  {
	  
  header('LOCATION:super.php'); die();}
  else if($email === 'admincse@gmail.com' && $password === 'cse')
  {
	  $_SESSION['dept'] = $password;
  header('LOCATION:admin.php'); die();}
    else if ($email === 'adminece@gmail.com' && $password === 'ece') {
		 $_SESSION['dept'] = $password;
	header('LOCATION:admin.php'); die();}
	else if ($email === 'adminmech@gmail.com' && $password === 'mech') {
		 $_SESSION['dept'] = $password;
	header('LOCATION:admin.php'); die();}
	 else if($email === 'admincivil@gmail.com' && $password === 'civil'){
		  $_SESSION['dept'] = $password;
  header('LOCATION:admin.php'); die();}
	 else if($email === 'adminit@gmail.com' && $password === 'it') {
		  $_SESSION['dept'] = $password;
     header('LOCATION:admin.php'); die();}
	else if ($email === 'admineee@gmail.com' && $password === 'eee')
	{
		 $_SESSION['dept'] = $password;
     header('LOCATION:admin.php'); die();
  }

  
   
      $sql = "SELECT email FROM data WHERE email = '$email' and password = '$password'";
     $results = mysqli_query($db, $sql);
  	if (mysqli_num_rows($results) > 0) {
		
  	         $_SESSION['email'] = $email;
	 
  	         $_SESSION['success'] = "You are now logged in";
  	          header('location: frame.html');
			  
		}
  	else {
  		
		
		$_SESSION["error"] = $error;
		 header('location: login.php');
  	}
  }
?>
<?php
   
   session_start();
   $email    = "";
   $errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'register');	  
	  $sql = "SELECT * FROM data WHERE email = '" . $_SESSION['email'] . "'";
      $results = mysqli_query($db, $sql);
      while($row = mysqli_fetch_array($results,MYSQLI_ASSOC))
	  {
		echo "Salutation: " . $row["salutation"]. "<br>";
        echo "Stream: " . $row["stream"]. "<br>";
		echo "First Name: " . $row["firstname"]. "<br>";
		echo "Last Name: " . $row["lastname"]. "<br>";
		echo "Qualification: " . $row["qualification"]. "<br>";
		echo "Designation: " . $row["designation"]. "<br>";
		echo "E-mail: " . $row["email"]. "<br>";
		echo "Contact Number: " . $row["phone"]. "<br>";
		echo "Employee ID: " . $row["Employee_id"]. "<br>";
		echo "Department: " . $row["department"]. "<br>";
	  }	   

?>
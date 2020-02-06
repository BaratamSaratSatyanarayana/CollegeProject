<html>
<body>
<form action="other_fac.php" onsubmit="return Validate()" class="w3-container w3-card-4 w3-light-grey w3-text-yellow w3-margin" enctype="multipart/form-data" method="POST" name="vform">
<select name="dept" method="POST" >
                       <option  value="" disabled selected>Department</option>
                       <option value="cse" name="cse">CSE</option>
                       <option value="ece">ECE</option>
                       <option value="eee">EEE</option>
					   <option value="it">IT</option>
					   <option value="mech">MECH</option>
					   <option value="civil">CIVIL</option>
                   </select>
		<input type="submit" name="click">
				   </form>
				   </body>
</html>
<?php
   
   session_start();
   $errors = array(); 
   if (isset($_POST['click'])){
   $department=$_POST['dept'];
   $db = mysqli_connect('localhost', 'root', '', 'register');	  
	$sql = "SELECT * FROM data WHERE department = '$department'";
      $results = mysqli_query($db, $sql);
      while($trow = mysqli_fetch_array($results,MYSQLI_ASSOC))
	  {
		  $_SESSION['em'] = $trow['email'];
		echo ('<a href="facw.php?email='.$trow['email'].'">'.htmlentities($trow['salutation'].' '.$trow['firstname'].' '.$trow['lastname']).'</a>'). "<br>";
	     
	  }
   }
	  
   ?>


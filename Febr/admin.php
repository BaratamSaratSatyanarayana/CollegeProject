<html>
<body>
<form action="admin.php" class="w6-container w6-card-4 w6-light-grey w6-text-yellow w6-margin" method="post">
<h2><a href="index.php">logout</a></h2>
</form>
<?php
   
   session_start();
   $errors = array(); 
  $db = mysqli_connect('localhost', 'root', '', 'register');	  
     
      $department =   $_SESSION['dept'];
	  $sql = "SELECT * FROM data WHERE department = '$department'";
      $results = mysqli_query($db, $sql);
      while($trow = mysqli_fetch_array($results,MYSQLI_ASSOC))
	  {
		   
		$_SESSION['em'] = $trow['email'];
		?>
<form class="form">
<?php echo $trow["salutation"]." ".$trow["firstname"]." ".$trow["lastname"]?>
<?php echo "&nbsp;&nbsp;&nbsp;&nbsp;";?>
<?php echo '<a href="facw.php?email='.$trow['email'].'"><input type="button" class="submit" value="view"/></a>';?>
<?php echo "&nbsp;&nbsp;&nbsp;&nbsp;";?>
   <a href="admin.php?del=<?php echo $trow['email'];?>" onclick="return confirm('Are You Sure?');"><input type="button" class="submit" value="Delete profile"/></a>
</form>
<?php
}
if (isset($_GET['del'])) {	  
$del = $_GET['del'];
mysqli_query($db, "DELETE FROM data WHERE email = '$del'");
}
?>
</body>
</html>
		   
	 
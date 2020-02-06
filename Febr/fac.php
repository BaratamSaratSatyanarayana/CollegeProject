<?php
   
   session_start();
   $errors = array(); 
    $email = $_SESSION['em'];
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'file-management');	  
     
	  $sql = "SELECT * FROM files_1 WHERE email = '$email'";
      $results = mysqli_query($db, $sql);
	  $files1 = mysqli_fetch_all($results, MYSQLI_ASSOC);

	if (isset($_GET['file_directory'])) {
    
	$destination = $_GET['file_directory'];
	
    
  header('Content-type: application/pdf');
  header('Content-Disposition: inline; filename="' . $destination.  '"');
  header('Content-Transfer-Encoding: binary');
  header('Accept-Ranges: bytes');
  @readfile($destination);
	 
}
$sql = "SELECT * FROM files_2 WHERE email = '$email'";
      $results = mysqli_query($db, $sql);
	  $files2 = mysqli_fetch_all($results, MYSQLI_ASSOC);

	if (isset($_GET['file_directory'])) {
    
	$destination = $_GET['file_directory'];
	
    
  header('Content-type: application/pdf');
  header('Content-Disposition: inline; filename="' . $destination.  '"');
  header('Content-Transfer-Encoding: binary');
  header('Accept-Ranges: bytes');
  @readfile($destination);
	 
}
?>



	  
    




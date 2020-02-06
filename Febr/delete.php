<?php
$db = mysqli_connect('localhost', 'root', '', 'register');
if (isset($_GET['del'])) {	  
$del = $_REQUEST['del'];
echo $del;
$query = 'DELETE FROM data WHERE Employee_id = $del'; 
$result = mysqli_query($db,$query);
}
?>

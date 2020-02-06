<?php
if (isset($_POST['submit']))
{
$img = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
$fname=$_POST['first'];
$lname=$_POST['last'];
$qual=$_POST['Qualification'];
$des=$_POST['Designation'];
$email=$_POST['email'];
$phno=$_POST['phonenum'];
$pass=$_POST['Password'];
$cpass=$_POST['Confirm_Password'];
$Eid=$_POST['Employee_Id'];
$tempsalu=$_POST['salut'];
$tempstr=$_POST['str'];
$tempdep=$_POST['department'];
$salutarray = array("Mr.", "Mrs.", "Miss.");
$deptarray = array("CSE", "ECE", "EEE", "CIVIL", "MECH", "IT");
$strarray = array("B.tech","M.tech","MBA");
$tempdep=$tempdep-1;
$tempsalu=$tempsalu-1;
$tempstr=$tempstr-1;
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register";
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql_u = "SELECT Employee_id FROM `data` WHERE Employee_id = '$Eid'";
$sql_e = "SELECT email FROM `data` WHERE email = '$email'";
$res_u = mysqli_query($conn, $sql_u);
$res_e = mysqli_query($conn, $sql_e);

    if ((mysqli_num_rows($res_u) > 0) && (mysqli_num_rows($res_e) > 0) )
	{
       echo "<script>
           alert('Employee ID already Exists and E-mail already Exists...............Please fill the fields Correctly');
          window.location.href='Reg.php';
            </script>";
	     
  	}
    else if (mysqli_num_rows($res_u) > 0)
	{
       echo "<script>
           alert('Employee ID already Exists...............Please fill the field Correctly');
          window.location.href='Reg.php';
            </script>";
	     
  	}
   else if(mysqli_num_rows($res_e) > 0){
		echo "<script>
           alert('E-mail already Exists....................Please fill the field Correctly');
          window.location.href='Reg.php';
            </script>";
	}		   

    else {


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}    
$sql = "INSERT INTO `data` (`image`, salutation, stream, firstname, lastname, qualification, designation, email, phone, password, cpassword, Employee_id, department) VALUES('$img', '$salutarray[$tempsalu]','$strarray[$tempstr]' ,'$fname', '$lname', '$qual', '$des', '$email', '$phno', '$pass', '$cpass', '$Eid', '$deptarray[$tempdep]')";
mysqli_query($conn, $sql);
header('location: login.php');
}
}
?>

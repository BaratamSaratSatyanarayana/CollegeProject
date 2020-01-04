<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Multiple File Uploader</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./fileuploadstyle.css">

</head>
<body>
<!-- partial:index.partial.html -->
<form method="POST" class="file-uploader" action="fileupload.php" enctype="multipart/form-data">
  <div class="file-uploader__message-area">
    <p>Select a file to upload</p>
  </div>
  <div class="file-chooser">
    <input class="file-chooser__input" type="file" id="file" name="file[]" multiple="multiple">
  </div>
  <input class="file-uploader__submit-button" type="submit" name="submit" value="Upload">
</form>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./fileuploadscript.js"></script>
 <?php
$localhost = "localhost"; #localhost
$dbusername = "root"; #username of phpmyadmin
$dbpassword = "";  #password of phpmyadmin
$dbname = "multiple";  #database name
  
#connection string
$conn = mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);


if(isset($_POST["submit"])){
$filecount = count($_FILES['file']['name']);
for($i=1; $i<$filecount-1; $i++){
$filename=$_FILES['file']['name'][$i];
$sql = "INSERT into img(name,image) VALUES('$filename','$filename')";
  
    if(mysqli_query($conn,$sql)){
  
    echo "$filename is uploaded successfully	";
    }
    else{
        echo "Error";
    }
}
}
?> 
</body>
</html>
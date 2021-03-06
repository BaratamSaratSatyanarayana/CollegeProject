<?php
session_start();
$errors = array(); 
$email = $_SESSION['email'];
$conn = mysqli_connect('localhost', 'root', '', 'file-management');

$sql = "SELECT * FROM files_1 WHERE email = '" . $_SESSION['email'] . "'";
$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Uploads files
if (isset($_POST['save'])) { // if save button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['myfile']['name'];

    // destination of the file on the server
    $destination = 'uploads_1/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    if (!in_array($extension, ['pdf'])) {
        echo "You file extension must be pdf";
    } elseif ($_FILES['myfile']['size'] > 10000000000) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO files_1 (name, directory, size, downloads, email) VALUES ('$filename', '$destination', $size, 0, '$email')";
            if (mysqli_query($conn, $sql)) {
                echo "File uploaded successfully";
            }
        } else {
            echo "Failed to upload file.";
        }
    }
}
// Downloads files
if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];

    // fetch file to download from database
	 session_start();
   $email    = "";
   $errors = array(); 
    $sql = "SELECT * FROM files_1 WHERE email = '" . $_SESSION['email'] . "'";
    $result = mysqli_query($conn, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath = 'uploads_1/' . $file['name'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('uploads_1/' . $file['name']));
        readfile('uploads_1/' . $file['name']);

        // Now update downloads count
        $newCount = $file['downloads'] + 1;
        $updateQuery = "UPDATE files_1 SET downloads=$newCount WHERE email = '" . $_SESSION['email'] . "'";
        mysqli_query($conn, $updateQuery);
        exit;
    }

}
//view files
if (isset($_GET['file_directory'])) {
    
	$destination = $_GET['file_directory'];
	
    
  header('Content-type: application/pdf');
  header('Content-Disposition: inline; filename="' . $destination.  '"');
  header('Content-Transfer-Encoding: binary');
  header('Accept-Ranges: bytes');
  @readfile($destination);
	 
}


<?php	
       include ("config.php");
       if(isset($_POST['submit'])){
       $valuefldr = 'upload';
	foreach($_FILES['files']['tmp_name'] as $key => $tmp_name ){
	$file_name = $key.$_FILES['files']['name'][$key];
	$file_size =$_FILES['files']['size'][$key];
	$file_tmp =$_FILES['files']['tmp_name'][$key];
	$file_type=$_FILES['files']['type'][$key];	
       $desired_dir= $valuefldr;
	if(move_uploaded_file($file_tmp,"$desired_dir/".$file_name))
	{
			$query="insert into upload (document_name) VALUES('$file_name')";
			$result=mysqli_query($con,$query);  
	  ?>
	  <script>
	  alert('successfully');
			window.location.href='#';
			</script>
	  <?php
	 }
	 else
	 {
	  ?>
	  <script>
	  alert('error while uploading file');
			window.location.href='#';
			</script>
	  <?php
	 }
		 
	  }		
  }	  
?>    
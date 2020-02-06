<?php include 'fac.php';?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css">
  <title>Download files</title>
</head>
<body> 
<table>
<h3> Achievements</h3>
<thead>
    
    <th>Filename</th>
    
	<th>Views</th>
         
</thead>
<tbody>
  <?php foreach ($files1 as $file): ?>
   
    <tr>
      
      <td><?php echo $file['name']; ?></td>
      
	  <td><a href="fac.php?file_directory=<?php echo $file['directory'] ?>#toolbar=0&navpanes=0&scrollbar=0" width="500" height="500">"View"</a></td>
    
    </tr>
  <?php endforeach;?>

</tbody>
</table>
<table>
<h3> Publications</h3>
<thead>
    
    <th>Filename</th>
    
	<th>Views</th>
         
</thead>
<tbody>
  <?php foreach ($files2 as $file): ?>
   
    <tr>
      
      <td><?php echo $file['name']; ?></td>
      
	  <td><a href="fac.php?file_directory=<?php echo $file['directory'] ?>#toolbar=0&navpanes=0&scrollbar=0" width="500" height="500">"View"</a></td>
    
    </tr>
  <?php endforeach;?>

</tbody>
</table>
</body>
</html>
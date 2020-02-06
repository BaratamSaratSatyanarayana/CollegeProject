<?php include 'filesLogic_2.php';?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css">
  <title>Download files</title>
</head>
<body>
  
  <a href="index_2.php" target="_self" >Back</a>
  
<table>
<thead>
    <th>ID</th>
    <th>Filename</th>
    <th>size (in mb)</th>
	<th>Views</th>
    <th>Downloads</th>
    <th>Action</th>
</thead>
<tbody>
  <?php foreach ($files as $file): ?>
    <tr>
      <td><?php echo $file['id']; ?></td>
      <td><?php echo $file['name']; ?></td>
      <td><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
	  <td><a href="downloads_2.php?file_directory=<?php echo $file['directory'] ?>#toolbar=0&navpanes=0&scrollbar=0" width="500" height="500">"View"</a></td>
       <td><?php echo $file['downloads']; ?></td>
	  <td><a href="downloads_2.php?file_id=<?php echo $file['id'] ?>">Download</a></td>
    </tr>
  <?php endforeach;?>

</tbody>
</table>
</body>
</html>
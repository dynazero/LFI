<?php require ('../../Connections/local.php'); 
  
  
  	$hgallDelID = $_POST['hgallDelID'];
	
	
	mysqli_query($con,"DELETE FROM `homegallery` WHERE ID = $hgallDelID");
	
	echo 'Picture Deleted';
	
	?>
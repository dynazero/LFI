<?php require ('../../Connections/local.php'); 
  
  
  	$custGallDelID = $_POST['custGallDelID'];;
	
	
	mysqli_query($con,"DELETE FROM `galleryarchive` WHERE ID = $custGallDelID");
	
	echo 'Gallery Picture Deleted';
	
	?>
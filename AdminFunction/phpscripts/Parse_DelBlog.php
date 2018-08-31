<?php require ('../../Connections/local.php'); 
  
  
  	$blogDelID =$_POST['blogDelID'];
	
	
	mysqli_query($con,"DELETE FROM `homeblog` WHERE ID = $blogDelID");
	
	echo 'Blog Deleted';
	
	?>
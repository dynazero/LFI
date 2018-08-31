<?php
	require_once ('../../Connections/local.php');
	
	if(!isset($_SESSION)){
		session_start();	
	}

	$login = $_SESSION['usersID'];
	$projectgalleryID = $_POST['projectgalleryID'];
	$comment = $_POST['message'];
	$userRole = $_POST['userRole'];
     	
		$admin = 0;
		$manager = 0;
		$client = 0;
		
		
		if($userRole == 1){
			
			$admin = 1;
			
			}else if($userRole == 2){
			
			$manager = 1;
			
			}else if($userRole == 3){
			
			$client = 1;
			
			}
		
		
		
		
	mysqli_query($con,"INSERT INTO `commentgallery` (projectgalleryID,comment,usersID,admin,manager,client) VALUES('$projectgalleryID','$comment','$login','$admin','$manager','$client')");
	
?>
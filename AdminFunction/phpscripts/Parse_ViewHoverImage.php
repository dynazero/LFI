<?php  include('../../Connections/local.php'); 

 $projectgalleryID = $_POST['MyData'];
 $userRole = $_POST['MyRole'];
 
 if($userRole == 1){
	 
	 $roleCol = "admin";
	 
	 }else if($userRole == 2){
		 
		 $roleCol = "manager";
		 
		 }else if($userRole == 3){
		 
		 $roleCol = "client";
		 
		 }
 
 
 mysqli_query($con,"UPDATE `projectgallery` SET `$roleCol`= 1 WHERE `projectgalleryID` = $projectgalleryID");
 
 

?>
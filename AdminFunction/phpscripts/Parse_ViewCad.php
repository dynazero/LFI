<?php  include('../../Connections/local.php'); 

 $projectID = $_POST['MyData'];
 $userRole = $_POST['MyRole'];
 
 if($userRole == 1){
	 
	 $roleCol = "admin";
	 
	 }else if($userRole == 2){
		 
		 $roleCol = "manager";
		 
		 }else if($userRole == 3){
		 
		 $roleCol = "client";
		 
		 }


mysqli_query($con,"UPDATE `cadgallery` SET `$roleCol`= 1 WHERE `projectID` = $projectID");
 

?>
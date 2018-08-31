<?php require_once("../../Connections/local.php");
	
    $projgalleryID = $_POST['projgalleryID'];
    $projgalleryAuth = $_POST['projgalleryAuth'];

   
   if($projgalleryAuth != 0){
	   
	  mysqli_query($con,"UPDATE `projectgallery` SET `Approved`= 0 WHERE `projectgalleryID` = $projgalleryID");
	   
	   		echo "Picture Gallery Disabled";
	   
	   }else{
		   
	 mysqli_query($con,"UPDATE `projectgallery` SET `Approved`= 1 WHERE `projectgalleryID` = $projgalleryID");
		   
		   echo "Picture Gallery Enabled";
		   }
		   
		  
?>

<?php require ('../../Connections/local.php'); ?>


<?php 

 
	
  $formTitle =$_POST['hgallTitle'];
  $hgallID = $_POST['hgallID'];
  $picturePath =$_POST['picturePath'];
  $formDescript =$_POST['descript']; 
  $filename = $_FILES['file']['name'];    
  $fileTmpLoc = $_FILES["file"]["tmp_name"]; // File in the PHP tmp folder
  $fileType = $_FILES["file"]["type"]; // The type of file it is
  $fileSize = $_FILES["file"]["size"]; // File size in bytes
  $fileErrorMsg = $_FILES["file"]["error"]; // 0 for false... and 1 for true
  
  
  
  
  
   
  if(empty($filename) === true){
	  
	 $imageFilePath = $picturePath;
	 
	 	mysqli_query($con,"UPDATE `homegallery` SET `ID`= $hgallID,`Path`='$imageFilePath',`Title`= '$formTitle',`Description`= '$formDescript' WHERE ID = $hgallID");
		
		  echo 'Home Gallery Updated';
	  
	  } else {
		  
		   $imageFilePath = 'Images/UploadedImage/'.$filename;
		  		   
		  if(move_uploaded_file($fileTmpLoc, "../../Images/UploadedImage/$filename")){
			  
			  mysqli_query($con,"UPDATE `homegallery` SET `ID`='$hgallID',`Path`='$imageFilePath',`Title`= '$formTitle',`Description`= '$formDescript' WHERE ID = '$hgallID'");
	
			  }
		  
		   echo 'Home Gallery  Updated';
		  }
  
 
 
 
  
	
	
  
?>
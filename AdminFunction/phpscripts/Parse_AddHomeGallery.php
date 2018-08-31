<?php require ('../../Connections/local.php'); 
  
  
  $formTitle =$_POST['hgallTitle'];
  $formDescript =$_POST['descript']; 
  $filename = $_FILES['file']['name'];    
  $fileTmpLoc = $_FILES["file"]["tmp_name"]; // File in the PHP tmp folder
  $fileType = $_FILES["file"]["type"]; // The type of file it is
  $fileSize = $_FILES["file"]["size"]; // File size in bytes
  $fileErrorMsg = $_FILES["file"]["error"]; // 0 for false... and 1 for true
  $imageFilePath = 'Images/UploadedImage/'.$filename;	
	
	
	if(move_uploaded_file($fileTmpLoc, "../../Images/UploadedImage/$filename")){
	
	mysqli_query($con,"INSERT INTO `homegallery`(`ID`, `Path`, `Title`, `Description`) VALUES ('','$imageFilePath','$formTitle','$formDescript')");
		
		  echo 'Home Gallery Updated';
	
	} else {
		
		echo "ERROR:Failed to Upload File";
		
		}
	
	?>
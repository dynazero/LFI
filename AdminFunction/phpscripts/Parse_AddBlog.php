<?php require ('../../Connections/local.php'); 
  
  

  
  $formTitle =$_POST['formTitle'];
  $formDescript =$_POST['descript']; 
  $filename = $_FILES['file']['name'];    
  $fileTmpLoc = $_FILES["file"]["tmp_name"]; // File in the PHP tmp folder
  $fileType = $_FILES["file"]["type"]; // The type of file it is
  $fileSize = $_FILES["file"]["size"]; // File size in bytes
  $fileErrorMsg = $_FILES["file"]["error"]; // 0 for false... and 1 for true
  $imageFilePath = '/Images/blogImages/'.$filename;	
	
	
	if(move_uploaded_file($fileTmpLoc, "../../Images/blogImages/$filename")){
	
	mysqli_query($con,"INSERT INTO `homeblog`(`ID`, `Path`, `Title`, `Description`) VALUES ('','$imageFilePath','$formTitle','$formDescript')");
		
		  echo 'Blog Added';
	
	} else {
		
		echo "ERROR:Failed to Upload File";
		
		}
	
	?>
<?php require ('../../Connections/local.php'); 
  
  
  $formTitle =$_POST['custGallTitle'];
  $custGallID = $_POST['catSelection'];
  $formDescript =$_POST['descript']; 
  $filename = $_FILES['file']['name'];    
  $fileTmpLoc = $_FILES["file"]["tmp_name"]; // File in the PHP tmp folder
  $fileType = $_FILES["file"]["type"]; // The type of file it is
  $fileSize = $_FILES["file"]["size"]; // File size in bytes
  $fileErrorMsg = $_FILES["file"]["error"]; // 0 for false... and 1 for true
  $imageFilePath = 'gallery/images/galleryArchive/'.$filename;	
	
	
	if(move_uploaded_file($fileTmpLoc, "../../gallery/images/galleryArchive/$filename")){
	
	mysqli_query($con,"INSERT INTO `galleryarchive`(`ID`, `PathFile`, `Title`, `Description`, `GalleryNumber`) VALUES ('','$imageFilePath','$formTitle','$formDescript','$custGallID')");
		
		  echo 'New Gallery Content Added';
	
	} else {
		
		echo "ERROR:Failed to Upload File";
		
		}
	
	?>
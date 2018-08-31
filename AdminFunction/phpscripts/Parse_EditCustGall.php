<?php require ('../../Connections/local.php'); ?>


<?php 

 
	
  $formTitle =$_POST['custGallTitle'];
  $custGallID = $_POST['custGallID'];
  $picturePath =$_POST['picturePath'];
  $catSelection = $_POST['catSelection'];
  $formDescript =$_POST['descript']; 
  $filename = $_FILES['file']['name'];    
  $fileTmpLoc = $_FILES["file"]["tmp_name"]; // File in the PHP tmp folder
  $fileType = $_FILES["file"]["type"]; // The type of file it is
  $fileSize = $_FILES["file"]["size"]; // File size in bytes
  $fileErrorMsg = $_FILES["file"]["error"]; // 0 for false... and 1 for true
  
    
  
   
  if(empty($filename) === true){
	  
	 $imageFilePath = $picturePath;
	 
	 	mysqli_query($con,"UPDATE `galleryarchive` SET `ID`= $custGallID, `GalleryNumber`='$catSelection',`PathFile`='$imageFilePath',`Title`= '$formTitle',`Description`= '$formDescript' WHERE ID = $custGallID");
		
		  echo 'Custom Gallery Updated';
	  
	  } else {
		  
		   $imageFilePath = 'gallery/images/galleryArchive/'.$filename;
		  		   
		  if(move_uploaded_file($fileTmpLoc, "../../gallery/images/galleryArchive/$filename")){
			  
			  mysqli_query($con,"UPDATE `galleryarchive` SET `ID`='$custGallID', `GalleryNumber`='$catSelection',`PathFile`='$imageFilePath',`Title`= '$formTitle',`Description`= '$formDescript' WHERE ID = '$custGallID'");
	
			  }
		  
		   echo 'Custom Gallery Updated';?>
           
		<?php  } 
  
 
 
 
  
	
	
  ?>
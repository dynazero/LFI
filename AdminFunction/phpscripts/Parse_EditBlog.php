<?php require ('../../Connections/local.php'); ?>


<?php 

 
	
  $formTitle =$_POST['formTitle'];
  $blogID = $_POST['blogID'];
  $picturePath =$_POST['picturePath'];
  //$formDescript =$_POST['descript']; 
  $filename = $_FILES['file']['name'];    
  $fileTmpLoc = $_FILES["file"]["tmp_name"]; // File in the PHP tmp folder
  $fileType = $_FILES["file"]["type"]; // The type of file it is
  $fileSize = $_FILES["file"]["size"]; // File size in bytes
  $fileErrorMsg = $_FILES["file"]["error"]; // 0 for false... and 1 for true
  
  
  
  
  
   
  if(empty($filename) === true){
	  
	 $imageFilePath = $picturePath;
	 
	 	mysqli_query($con,"UPDATE `homeblog` SET `ID`= $blogID,`Path`='$imageFilePath',`Title`= '$formTitle', WHERE ID = $blogID");
		
		  echo $formTitle; 

	  	  echo	' Updated';
	  } else {
		  
		   $imageFilePath = "/Images/blogImages/".$filename;
		  		   
		  if(move_uploaded_file($fileTmpLoc, "../../Images/blogImages/$filename")){
			  
			  mysqli_query($con,"UPDATE `homeblog` SET `ID`='$blogID',`Path`='$imageFilePath',`Title`= '$formTitle', WHERE ID = '$blogID'");
	
			  }
		  
		    echo $formTitle; 

	  	  echo	' Updated';
		  }
  
 
 
 
  
	
	
  
?>
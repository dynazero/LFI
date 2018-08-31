<?php require ('../../Connections/local.php'); 
  
  $userID = $_POST['userID'];
  $projectID = $_POST['projectID'];
  $userRole = $_POST['userRole'];
  $filename = $_FILES['file']['name'];    
  $fileTmpLoc = $_FILES["file"]["tmp_name"]; // File in the PHP tmp folder
  $fileType = $_FILES["file"]["type"]; // The type of file it is
  $fileSize = $_FILES["file"]["size"]; // File size in bytes
  $fileErrorMsg = $_FILES["file"]["error"]; // 0 for false... and 1 for true
  $imageFilePath = 'cadfiles/'.$filename;	
      
	$explode = explode("/",$fileType);
	$typeCad = $explode[0];
	
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
	
	if($typeCad != "application"){
		
		echo "ERROR: Please Upload Cad File Only.";
		
		}else if(move_uploaded_file($fileTmpLoc, "$imageFilePath")){
			
	mysqli_query($con,"INSERT INTO `cadgallery`(`projectID`,`cadpathfile`,`userID`,`admin`,`manager`,`client`) VALUES ('$projectID','$imageFilePath','$userID','$admin','$manager','$client')");
		
		  echo 'CadFile Added';
	
	} else {
		
		echo "ERROR:Failed to Upload Cad File";
		
		}
	
	?>
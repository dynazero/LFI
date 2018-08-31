<?php require ('../../Connections/local.php'); 

  $ClientID = $_POST['projectDocAddClientID'];
  $projectName = $_POST['projectDocAddName']; 
  $uploader = $_POST['DocuserID'];
  $projectID = $_POST['projectDocAddID'];
  $userRole = $_POST['userRole'];
  $filename = $_FILES['file']['name'];    
  $fileTmpLoc = $_FILES["file"]["tmp_name"]; // File in the PHP tmp folder
  $fileType = $_FILES["file"]["type"]; // The type of file it is
  $fileSize = $_FILES["file"]["size"]; // File size in bytes
  $fileErrorMsg = $_FILES["file"]["error"]; // 0 for false... and 1 for true
  //$allowed =  'application/pdf';
  $filePath = "../proposalPDF/$filename";
  
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
  
		//if($fileType != $allowed){
					
					//echo "ERROR: Please upload .pdf file only";
					
		if(move_uploaded_file($fileTmpLoc, "../../proposalPDF/$filename")){
			
		mysqli_query($con,"INSERT INTO projectfiles (`userID`,`pathfile`,`filename`,`projectID`,`TimeStamp`,`Uploader`,`admin`,`manager`,`client`) VALUES('$ClientID','$filePath','$filename','$projectID',NOW(),'$uploader','$admin','$manager','$client')");
		
		  echo 'File '.$filename.' Upload';
	
	} else {
		
		echo "ERROR:Failed to Upload File";
		
		}
	
	?>
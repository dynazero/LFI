<?php
    
	
	require ('../../Connections/local.php');

   $userID =$_POST['acctID'];
   $userFName =$_POST['FirstName'];
   $userLName =$_POST['LastName'];
   $userEmail = $_POST['email'];
     
   $filename = $_FILES['file']['name'];    
   $fileTmpLoc = $_FILES["file"]["tmp_name"]; // File in the PHP tmp folder
   $fileType = $_FILES["file"]["type"]; // The type of file it is
   $fileSize = $_FILES["file"]["size"]; // File size in bytes
   $fileErrorMsg = $_FILES["file"]["error"]; // 0 for false... and 1 for true
    
    
   
  if(empty($filename) === true){
	  
	 	 
	 	mysqli_query($con,"UPDATE `users` SET `FirstName`='$userFName',`LastName`='$userLName',`Email`= '$userEmail' WHERE usersID = '$userID'");
		
		  echo 'Your account has been'; 

	  	  echo	' Updated';
	  } else {
		  
		   $imageFilePath = "/Images/userAvatar/".$filename;
		  		   
		  if(move_uploaded_file($fileTmpLoc, "../../Images/userAvatar/$filename")){
			  
			  		  
			  mysqli_query($con,"UPDATE `users` SET `FirstName`='$userFName',`LastName`='$userLName',`Email`= '$userEmail',`Avatar`= '$imageFilePath' WHERE usersID = '$userID'");
	
			  }
		  
		  echo 'Your account has been'; 

	  	  echo	' Updated';
		  }
  
  

?>

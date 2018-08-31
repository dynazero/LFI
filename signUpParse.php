<?php
  require_once('Connections/local.php');
  
  include ('init.php');
	
		$resultA = mysqli_query($con,"SELECT MAX(`usersID`) FROM `users`");
				 $rowA=mysqli_fetch_array($resultA);				 
				$uidRes = $rowA['0'] + 1;
			
		$resultB = mysqli_query($con,"SELECT MAX(`projectID`) FROM `project`");
				 $rowB=mysqli_fetch_array($resultB);
			$prjID =  $rowB['0'] + 1;
	
	
/*if(!isset($_SESSION))
{
	session_start();
}*/


/*
$ProjectName = $_POST['ProjectName'];	
$userID = $_SESSION['usersID'];
$projectcategoryID = $_POST['projectcategoryID'];
*/

	
	$UserName1= $_POST['UserName'];
	$Password= 'lfidefault';
 	$Email = $_POST['Email'];
	$fileName = $_FILES["file"]["name"]; // The file name
	$fileTmpLoc = $_FILES["file"]["tmp_name"]; // File in the PHP tmp folder
	$fileType = $_FILES["file"]["type"]; // The type of file it is
	$fileSize = $_FILES["file"]["size"]; // File size in bytes
	$fileErrorMsg = $_FILES["file"]["error"]; // 0 for false... and 1 for true
	$allowed =  'application/pdf';
	$Password = md5($Password);
	$filePath = "../proposalPDF/$fileName";
				
if(user_exists($UserName1) === true){
	echo 'Username Exists,please choose another.';
	
	
}else {
	if($fileType != $allowed){
		
		 echo "ERROR: Please upload PDF format only";
		
		} else {
			
if (!$fileTmpLoc) { // if file not chosen
echo "ERROR: Please browse for a file before clicking the upload button.";
exit();

		}
//this is registration and getting user ID
if(email_exists($Email) === true){
	echo 'Email already activated, please login with your Username and Password.';
exit();

	
}
	
if(prop_exists($Email) === true){
	echo 'Proposal Still subject for Approval, please wait for our reply via Email.';
exit();

	
}else if(empty($fileName) === true) {
	
	echo 'Please Enter a fileName before Uploading.';
	exit();
	
	}else{
		
		//this is for user registration
		mysqli_query($con,"INSERT INTO `users`(`usersID`, `UserName`, `FirstName`, `LastName`, `Email`, `Password`, `Activated`, `Role`) VALUES ('','$UserName1','','','$Email','$Password','','3') ");
		
		}


if(move_uploaded_file($fileTmpLoc, "proposalPDF/$fileName")){
				
	     	//this is for filing project plus usersID from `user` registration
			mysqli_query($con,"INSERT INTO `project`(`projectID`, `userID`, `ProjectName`, `Activated`, `projectcategoryID`, `filePath`) VALUES ('', $uidRes ,'$fileName','','','$filePath') ");
	
			//officially filing project to projectfiles
			mysqli_query($con,"INSERT INTO projectfiles (`userID`,`pathfile`,`filename`,`projectID`,`TimeStamp`,`Uploader`,`admin`,`manager`,`client`) VALUES('$uidRes','$filePath','$fileName','$prjID',NOW(),'$uidRes',1,1,1)");
			
			//INSERT INTO `projectfiles` (`userID`,`pathfile`,`projectID`,`TimeStamp`) VALUES('3','../proposalPDF/#journeytomarsNASA.pdf','1',NOW())
	
    echo "$fileName upload is complete, Please wait for our reply Via Email";
    
} else {
    echo "move_uploaded_file function failed";
}

	
}
	
}

?>


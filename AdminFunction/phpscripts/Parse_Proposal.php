<?php
   
if(!isset($_SESSION))
{
	session_start();
}
	require_once("../../Connections/LFIConnection.php");
	
	$resultB = mysqli_query($con,"SELECT MAX(`projectID`) FROM `project`");
				 $rowB=mysqli_fetch_array($resultB);
			$prjID =  $rowB['0'] + 1;
	
	
$projectName = $_POST['ProjectName'];	
$projectadminID	= 1;
$projectownerID	= $_POST['userID'];
$projectcategoryID = $_POST['projectcategoryID'];
			
$fileName = $_FILES["file"]["name"]; // The file name
$fileTmpLoc = $_FILES["file"]["tmp_name"]; // File in the PHP tmp folder
$fileType = $_FILES["file"]["type"]; // The type of file it is
$fileSize = $_FILES["file"]["size"]; // File size in bytes
$fileErrorMsg = $_FILES["file"]["error"]; // 0 for false... and 1 for true


	

if (!$fileTmpLoc) { // if file not chosen
    echo "ERROR: Please browse for a file before clicking the upload button.";
    exit();
}
if(move_uploaded_file($fileTmpLoc, "../ProfilePic/$fileName")){
	$filePath = "../proposalPDF/$fileName";
	
	mysqli_query($con,"INSERT INTO project (projectID,userID,adminOwner,ProjectName,projectcategoryID,filePath,View) VALUES('$prjID','$projectownerID','$projectadminID','$projectName','$projectcategoryID','$filePath',1)");
	
	mysqli_query($con,"INSERT INTO projectfiles (`userID`,`pathfile`,`filename`,`projectID`,`TimeStamp`,`Uploader`,`admin`,`manager`,`client`) VALUES('$projectownerID','$filePath','$fileName','$prjID',NOW(),'$projectownerID',1,1,1)");
	
    echo "Please Wait for the approval of Admin";
	exit();
} else {
    echo "move_uploaded_file function failed";
	
	
} 



?>


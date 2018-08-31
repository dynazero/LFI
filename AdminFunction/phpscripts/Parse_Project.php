<?php
   
if(!isset($_SESSION))
{
	session_start();
}
	include("../../Connections/LFIConnection.php");
	
	$resultB = mysqli_query($con,"SELECT MAX(`projectID`) FROM `project`");
				 $rowB=mysqli_fetch_array($resultB);
			$prjID =  $rowB['0'] + 1;
	
$ProjectName = $_POST['ProjectName'];	
$projectadminID	= $_POST['projectadminID'];
$projectownerID	= $_POST['projectownerID'];
$projectcategoryID = $_POST['projectcategoryID'];
$userID = $_SESSION['usersID'];
				
				
$fileName = $_FILES["file"]["name"]; // The file name
$fileTmpLoc = $_FILES["file"]["tmp_name"]; // File in the PHP tmp folder
$fileType = $_FILES["file"]["type"]; // The type of file it is
$fileSize = $_FILES["file"]["size"]; // File size in bytes
$fileErrorMsg = $_FILES["file"]["error"]; // 0 for false... and 1 for true


	

if (!$fileTmpLoc) { // if file not chosen
    echo "ERROR: Please browse for a file before clicking the upload button.";
    exit();
}
if(move_uploaded_file($fileTmpLoc, "../../proposalPDF/$fileName")){
	$filePath = "../proposalPDF/$fileName";
	
	
	mysqli_query($con,"INSERT INTO project (projectID,userID,adminOwner,ProjectName,projectcategoryID,filePath,View,Activated) VALUES('$prjID','$projectownerID','$projectadminID','$ProjectName','$projectcategoryID','$filePath',2,1)");
	
	mysqli_query($con,"INSERT INTO projectfiles (`userID`,`pathfile`,`filename`,`projectID`,`TimeStamp`,`Uploader`) VALUES('$projectownerID','$filePath','$fileName','$prjID',NOW(),'$userID')");
	
	
    echo "$fileName upload is complete";
	exit();
} else {
    echo "move_uploaded_file function failed";
}

?>


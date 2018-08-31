<?php
   
if(!isset($_SESSION))
{
	session_start();
}
	require_once("../../Connections/LFIConnection.php");


$ProjectID=$_POST['ProjectID']; 
$Activated=$_POST['Activated'];
$ProjectCategory=$_POST['ProjectCategory'];
$ProjectBalance=$_POST['ProjectBalance'];

mysqli_query($con,"UPDATE `project` SET `Activated`='$Activated',`projectcategoryID`='$ProjectCategory' WHERE `projectID`='$ProjectID'");

mysqli_query($con,"UPDATE `projectbalance` SET `Balance`='$ProjectBalance' WHERE `projectID`='$ProjectID'");

echo "Update Completed";
?>

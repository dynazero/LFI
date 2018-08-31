<?php 


require_once("../../Connections/local.php");


$Email = $_POST['eMail'];
$userID = $_POST['uId'];
$projectID = $_POST['pId'];

	mysqli_query($con,"UPDATE `project` SET `Activated`= 1, `View`= 0 WHERE `usersID` = $projectID");
	

?>
	
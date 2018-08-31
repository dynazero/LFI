<?php
require_once('../../Connections/local.php');
	$Emp = $_POST['Emp'];
	$projectID = $_POST['projectID'];
	
	mysqli_query($con,"UPDATE `project` SET `Employees`='$Emp' WHERE `projectID`='$projectID'");
	
		echo "Employees Updated";

?>
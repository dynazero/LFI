<?php 

		include('../../Connections/local.php');
 
	$ProjectName = $_POST['ProjectName'];
    $adminOwner =  $_POST['adminOwner'];
    $projStatus =  $_POST['projStatus'];
    $projID =  $_POST['projectID'];
    $Employee =  $_POST['Emp'];
	
	
	mysqli_query($con,"UPDATE `project` SET `adminOwner`='$adminOwner',`ProjectName`='$ProjectName',`Activated`='$projStatus',`Employees`='$Employee' WHERE `projectID` = '$projID' ");
	
	
	 
	
	/*`projectcategoryID`=[value-6],
	`Scale`=[value-10]*/
	
	echo "Project Updated";
	
?>
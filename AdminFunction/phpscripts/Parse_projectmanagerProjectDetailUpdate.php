<?php 

		include('../../Connections/local.php');
 
	
    $projID =  $_POST['projectID'];
    $Employee =  $_POST['Emp'];
	
	
	mysqli_query($con,"UPDATE `project` SET `Employees`='$Employee' WHERE `projectID` = '$projID' ");
	
	
	 
	
	/*`projectcategoryID`=[value-6],
	`Scale`=[value-10]*/
	
	echo "Employee Updated";
	
?>
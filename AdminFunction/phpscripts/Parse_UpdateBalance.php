<?php require ('../../Connections/local.php'); 


   $Balance = $_POST['mainBalance']; 
   $projectID = $_POST['projectIDbal']; 
   
   $result = mysqli_query($con,"SELECT * FROM `projectbalance` WHERE `projectID` = $projectID");
	$row = mysqli_fetch_array($result);
	
	if(isset($row['projectID'])){
		$oldprojectID = $row['projectID'];
		
		mysqli_query($con,"UPDATE `projectbalance` SET `Balance`= '$Balance' WHERE projectID = $projectID");
		
		}else{
			
		mysqli_query($con,"INSERT INTO `projectbalance`(`projectID`, `Balance`) VALUES ($projectID,$Balance)");
			
			}
		
		echo "Balance Updated";
		
		
?>
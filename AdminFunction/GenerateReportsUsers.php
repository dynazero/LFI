<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>LFI Project Reports</title>
<script src="../jquery-1.11.1.js"></script>
<script src="../bootstrap/bootstrap.js"></script>
<link href="../bootstrap/css/bootstrap.css" type="text/css" rel="stylesheet"/>

<?php require_once("../Connections/LFIConnection.php");?>

<style>
@media print
{    
    .no-print, .no-print *
    {
        display: none !important;
    }
}
</style>
</head>

<body>
<?php $result = mysqli_query($con,"SELECT * FROM `project` JOIN `users` ON `project`.adminOwner = `users`.usersID ORDER BY `project`.projectID DESC"); 
	?>
	



<table class="table table-bordered">
	
<tr>

<th>ProjectName</th>
<th>Project Manager</th>
<th>Client Name</th>
<th>Email</th>
<th>ProjectStatus</th>
<th>Initial Proposal</th>
</tr>
<?php while($row = mysqli_fetch_array($result)){
	$projectqueID =   $row['projectID'];
	
	
	?>
	
<?php $resultAct = mysqli_query($con,"SELECT `project`.Activated AS ProjectStatus FROM `project` JOIN `users` ON `project`.adminOwner = `users`.usersID WHERE `project`.projectID = $projectqueID"); 
		$rowAct = mysqli_fetch_assoc($resultAct);
		$projectStatusNo = $rowAct['ProjectStatus'];
		
		
		
				if($projectStatusNo == 0){
				
				$projectStatus = "Not Activated";
				
				}else if($projectStatusNo == 1){
				
				$projectStatus = "Activated";
				
				}else if($projectStatusNo == 2){
				
				$projectStatus = "OnProgress";
				
				
				}else if($projectStatusNo == 3){
				
				$projectStatus = "Declined";
				
			
				
				}else if($projectStatusNo == 4){
				
				$projectStatus = "Completed";
				}
		
		
?>

<?php $resultOwner = mysqli_query($con,"SELECT * FROM `project` JOIN `users` ON `project`.userID = `users`.usersID"); 
		$rowOwner = mysqli_fetch_assoc($resultOwner);
		$projectClient = $rowOwner['UserName']; ?>
        

<?php $resultprj = mysqli_query($con,"SELECT `projectfiles`.TimeStamp FROM `projectfiles` WHERE `projectID` = $projectqueID ORDER BY `projectfiles`.projectFilesID ASC"); 
		$rowprj = mysqli_fetch_assoc($resultprj);
		$InitialProjDate = $rowprj['TimeStamp']; ?>


<tr>
<td><?php echo $row['ProjectName']; ?></td>
<td><?php echo $row['UserName']; ?></td>
<td><?php echo $projectClient; ?> </td>
<td><?php echo $row['Email']; ?></td>
<td><?php echo $projectStatus; ?> </td>
<td><?php echo $InitialProjDate; ?> </td>
</tr>
<?php  } ?>
</table>


</body>
</html>
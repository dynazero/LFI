<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="../Reporting/Controller/appml.css">
<title>LFI Reports</title>

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

<?php require_once("../Connections/LFIConnection.php");?>

Reporter

<form action="" id="reporter" method="post">
	<select name="mode">
    	<option value="Materials">Materials</option>
        <option value="Users">Users</option>
        <option value="Project">Project</option>
    </select>
    
    Filter by:
    <select name="filter">
    	<option value="Materials">Materials</option>
        <option value="Users">Users</option>
        <option value="Project">Project</option>
    </select>
    
    <button type="submit" class="no-print">submit</button>
</form>

<?php 

	if(isset($_POST)){
		if(!empty($_POST['mode'])){
	$mode = $_POST['mode'];
		}else {$mode ="";}
		
		if(!empty($_POST['filter'])){
	$filter = $_POST['filter'];
		}else {$mode ="";};
	
	
	// Materials
	if($mode == "Materials"){
		
		if($filter == "Materials"){
			$result=mysqli_query($con,"SELECT * FROM `materials` JOIN `materiallist` ON `materials`.materiallistID=`materiallist`.materiallistID JOIN `project` ON `materials`.projectID=`project`.projectID");
		}
		
		
		if($filter == "Users"){
			$result=mysqli_query($con,"SELECT * FROM `materials` JOIN `materiallist` ON `materials`.materiallistID=`materiallist`.materiallistID JOIN `project` ON `materials`.projectID=`project`.projectID");
		}
		
		if($filter == "Project"){
			$result=mysqli_query($con,"SELECT * FROM `materials` JOIN `materiallist` ON `materials`.materiallistID=`materiallist`.materiallistID JOIN `project` ON `materials`.projectID=`project`.projectID");
		}
		
			
	}
	
	// Users
	
	if($mode == "Users"){
		
		if($filter == "Materials"){
			$result=mysqli_query($con,"SELECT UserName,FirstName,LastName,Email,Activated,Role FROM users");
		}
		
		
		if($filter == "Users"){
			$result=mysqli_query($con,"SELECT UserName,FirstName,LastName,Email,Activated,Role FROM users");
		}
		
		if($filter == "Project"){
			$result=mysqli_query($con,"SELECT UserName,FirstName,LastName,Email,Activated,Role FROM users");
		}
		
			
	}
	
	// Project
	
	if($mode == "Project"){
		
		if($filter == "Materials"){
			$result=mysqli_query($con,"SELECT * FROM `project` JOIN `users` ON `users`.usersID = `project`.userID JOIN `projectcategory` ON `project`.projectcategoryID = `projectcategory`.projectcategoryID JOIN `projectbalance` ON `project`.projectID=`projectbalance`.projectID ORDER BY `users`.UserName DESC");
			
		}
		
		
		if($filter == "Users"){
			$result=mysqli_query($con,"SELECT * FROM `project` JOIN `users` ON `users`.usersID = `project`.userID JOIN `projectcategory` ON `project`.projectcategoryID = `projectcategory`.projectcategoryID JOIN `projectbalance` ON `project`.projectID=`projectbalance`.projectID ORDER BY `users`.UserName DESC");
		}
		
		if($filter == "Project"){
			$result=mysqli_query($con,"SELECT * FROM `project` JOIN `users` ON `users`.usersID = `project`.userID JOIN `projectcategory` ON `project`.projectcategoryID = `projectcategory`.projectcategoryID JOIN `projectbalance` ON `project`.projectID=`projectbalance`.projectID ORDER BY `users`.UserName DESC");
		}
		
			
	}
	
	
	
	
	
	
	}
	?>
    
<?php 
	//Materials
	
    if($mode == "Materials"){

?>
		<div id="Place01">
<table id="Template01" class="appmltable">
<tr>
  <th>Material Name</th>
  <th>Quantity</th>
  <th>Scale</th>
  <th>Weight</th>
  <th>Project Name</th>
  <th>Activated</th>
</tr>
<?php while($row=mysqli_fetch_assoc($result)){?>
<tr id="appml_row">
  <td><?php echo $row['MaterialName'];?></td>
  <td><?php echo $row['Quantity'];?></td>
  <td><?php echo $row['Scale'];?></td>
  <td><?php echo $row['Weight'];?></td>
  <td><?php echo $row['ProjectName'];?></td>
  <td><?php echo $row['Activated'];?></td>
</tr>

<?php }?>
</table>	
</div>

<?php }?>



<?php 
	//Users
	
    if($mode == "Users"){

?>
		<div id="Place01">
<table id="Template01" class="appmltable">

<tr>
  <th>User Name</th>
  <th>First Name</th>
  <th>Last Name</th>
  <th>Email</th>
  <th>Activated</th>
  <th>Role</th>
</tr>
<?php while($row=mysqli_fetch_assoc($result)){?>
<tr id="appml_row">
  <td><?php echo $row['UserName'];?></td>
  <td><?php echo $row['FirstName'];?></td>
  <td><?php echo $row['LastName'];?></td>
  <td><?php echo $row['Email'];?></td>
  <td><?php echo $row['Activated'];?></td>
  <td><?php echo $row['Role'];?></td>
</tr>
<?php }?>
</table>	
</div>

<?php }?>



<?php 
	//Project
	
    if($mode == "Project"){

?>
		<div id="Place01">
<table id="Template01" class="appmltable">

<tr>
  <th>User Name</th>
  <th>Project Name</th>
  <th>Project Activated</th>
  <th>Category of Project</th>
  
  <th>File Location</th>
</tr>
<?php while($row=mysqli_fetch_assoc($result)){?>
<tr id="appml_row">
  <td><?php echo $row['UserName'];?></td>
  <td><?php echo $row['ProjectName'];?></td>
  <td><?php echo $row['Activated'];?></td>
  <td><?php echo $row['CategoryName'];?></td>
  <td><?php echo $row['filePath'];?></td>

</tr>
<?php }?>

</table>	
</div>

<?php }?>

</body>
</html>
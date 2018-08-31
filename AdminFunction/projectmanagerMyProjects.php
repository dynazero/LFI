<h3 class="page-header">Projects <small>My Projects</small>
 <button id="projectbtnA" class="btn btn-primary">Completed</button>
<button id="projectbtnB" class="btn btn-warning">Declined</button>
<button id="projectbtnC" class="btn btn-danger">Not Activated</button>
</h3>

<div id="projectPageA" class="projectArchiveA">
<?php
include("../Connections/local.php");

$result = mysqli_query($con,"SELECT `project`.`View` AS State, `project`.`Activated` AS ProjectStatus, `project`.`adminOwner` AS adminOwner,`project`.`Employees` AS Employees,`project`.`ProjectName` AS ProjectName, `project`.`projectID` AS projectID, `users`.`UserName` AS UserName,`project`.`filePath` AS filePath FROM `project` JOIN `users` ON `project`.userID = `users`.usersID WHERE `project`.Activated IN (4) AND `project`.View IN (2,3) AND `project`.adminOwner = $userID ORDER BY `project`.projectID DESC");


	  $tblecount = 1; 
	  
	$rowCount=mysqli_num_rows($result);
	
	 if($rowCount != ""){ ?>	
    
<div class="tableCover">
<table class="table table-bordered">
        <thead>
          <tr>
          
            <th>My Projects</th>
            <th>Project Name</th>
            <th>Client Name</th>
            <th>Project Status</th>    
            <!-- <th>Proposal</th> -->        
            <th>Employees</th>
            <th>Details Tab</th>            
          </tr>
        </thead>
        <tbody>
        
         <?php 
				
				
	$result = mysqli_query($con,"SELECT `project`.`View` AS State, `project`.`Activated` AS ProjectStatus, `project`.`adminOwner` AS adminOwner,`project`.`Employees` AS Employees,`project`.`ProjectName` AS ProjectName, `project`.`projectID` AS projectID, `users`.`UserName` AS UserName,`project`.`filePath` AS filePath FROM `project` JOIN `users` ON `project`.userID = `users`.usersID WHERE `project`.Activated IN (4) AND `project`.View IN (2,3) AND `project`.adminOwner = $userID ORDER BY `project`.projectID DESC");
	  $tblecount = 1;  ?>	
     
	<?php while($row=mysqli_fetch_assoc($result)){ ?> 
          <tr>
          
     <?php $projectStatusNo = $row['ProjectStatus']; 
	 		$projectID = $row['projectID'];
			$adminOwner =$row['adminOwner'];
			
			$projectadminOwner = mysqli_query($con,"SELECT `UserName` FROM `users` WHERE `usersID` = $adminOwner");
				$adminRow = mysqli_fetch_assoc($projectadminOwner);
				$adminName = $adminRow['UserName'];
				
	 		if($projectStatusNo == 0){
				
				$projectStatus = "Not Activated";
				
				$projectOptions = "	<option value='1'>Activated</option>
									<option value='2'>OnProgress</option>
									<option value='3'>Declined</option>
									<option value='4'>Completed</option>";
				
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
         
		     <form id="editProjectDetail" method="post">
            <td><?php echo $tblecount;?></td>
            
            <td><?php echo $row['ProjectName'];?></td>           
            <td><?php echo $row['UserName'];?>"</td>
            
            <td>
            <?php echo $projectStatus; ?> 
             </td>
            <!-- <td><a href="AdminFunction/<?php // echo $row['filePath'];?>" download="PDFFile.pdf"><?php // echo $row['filePath'];?></a></td> -->
            <td style="min-width:180px;">
            
            <?php echo $row['Employees']; ?>
            </td>
            <td><a class="list-group-item" href="#" data-toggle="modal" data-target="#proj<?php echo $row['projectID']; ?>">View Details</a></td>
            
          </tr>
             <?php   $tblecount++; }?>
        </tbody>
      
      </table>
      </div>
       <?php }else{ ?>
        <h4><small>No Completed Projects as of the Moment.</small></h4>
         <?php }?>
 

</div> <!--/#projectPageA-->

<div id="projectPageB" class="projectArchiveA">
<?php
include("../Connections/local.php");

$result = mysqli_query($con,"SELECT `project`.`View` AS State, `project`.`Activated` AS ProjectStatus, `project`.`adminOwner` AS adminOwner,`project`.`Employees` AS Employees,`project`.`ProjectName` AS ProjectName, `project`.`projectID` AS projectID, `users`.`UserName` AS UserName,`project`.`filePath` AS filePath FROM `project` JOIN `users` ON `project`.userID = `users`.usersID WHERE `project`.Activated IN (3) AND `project`.View IN (2,3) AND `project`.adminOwner = $userID ORDER BY `project`.projectID DESC");
	  $tblecount = 1; 
	  
	$rowCount=mysqli_num_rows($result);
	
	 if($rowCount != ""){ ?>	
    
<div class="tableCover">
<table class="table table-bordered">
        <thead>
          <tr>
          
            <th>My Projects</th>
            <th>Project Name</th>
            <th>Client Name</th>
            <th>Project Status</th>    
            <!-- <th>Proposal</th> -->        
            <th>Employees</th>
            <th>Details Tab</th>            
          </tr>
        </thead>
        <tbody>
        
         <?php 
				
				
	$result = mysqli_query($con,"SELECT `project`.`View` AS State, `project`.`Activated` AS ProjectStatus, `project`.`adminOwner` AS adminOwner,`project`.`Employees` AS Employees,`project`.`ProjectName` AS ProjectName, `project`.`projectID` AS projectID, `users`.`UserName` AS UserName,`project`.`filePath` AS filePath FROM `project` JOIN `users` ON `project`.userID = `users`.usersID WHERE `project`.Activated IN (3) AND `project`.View IN (2,3) AND `project`.adminOwner = $userID ORDER BY `project`.projectID DESC");
	  $tblecount = 1;  ?>	
     
	<?php while($row=mysqli_fetch_assoc($result)){ ?> 
          <tr>
          
     <?php $projectStatusNo = $row['ProjectStatus']; 
	 		$projectID = $row['projectID'];
			$adminOwner =$row['adminOwner'];
			
			$projectadminOwner = mysqli_query($con,"SELECT `UserName` FROM `users` WHERE `usersID` = $adminOwner");
				$adminRow = mysqli_fetch_assoc($projectadminOwner);
				$adminName = $adminRow['UserName'];
				
	 		if($projectStatusNo == 0){
				
				$projectStatus = "Not Activated";
				
				$projectOptions = "	<option value='1'>Activated</option>
									<option value='2'>OnProgress</option>
									<option value='3'>Declined</option>
									<option value='4'>Completed</option>";
				
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
         
		     <form id="editProjectDetail" method="post">
            <td><?php echo $tblecount;?></td>
            
            <td><?php echo $row['ProjectName'];?></td>           
            <td><?php echo $row['UserName'];?>"</td>
            
            <td>
            <?php echo $projectStatus; ?> 
             </td>
            <!-- <td><a href="AdminFunction/<?php // echo $row['filePath'];?>" download="PDFFile.pdf"><?php // echo $row['filePath'];?></a></td> -->
            <td style="min-width:180px;">
            
            <?php echo $row['Employees']; ?>
            </td>
            <td><a class="list-group-item" href="#" data-toggle="modal" data-target="#proj<?php echo $row['projectID']; ?>">View Details</a></td>
            
          </tr>
             <?php   $tblecount++; }?>
        </tbody>
      
      </table>
      </div>
       <?php }else{ ?>
        <h4><small>No Declined Projects as of the Moment.</small></h4>
         <?php }?>
 

</div> <!--/#projectPageB-->

<div id="projectPageC" class="projectArchiveA">
<?php
include("../Connections/local.php");

$result = mysqli_query($con,"SELECT `project`.`View` AS State, `project`.`Activated` AS ProjectStatus, `project`.`adminOwner` AS adminOwner,`project`.`Employees` AS Employees,`project`.`ProjectName` AS ProjectName, `project`.`projectID` AS projectID, `users`.`UserName` AS UserName,`project`.`filePath` AS filePath FROM `project` JOIN `users` ON `project`.userID = `users`.usersID WHERE `project`.Activated IN (0) AND `project`.View IN (2,3) AND `project`.adminOwner = $userID ORDER BY `project`.projectID DESC");
	  $tblecount = 1; 
	  
	$rowCount=mysqli_num_rows($result);
	
	 if($rowCount != ""){ ?>	
    
<div class="tableCover">
<table class="table table-bordered">
        <thead>
          <tr>
          
            <th>My Projects</th>
            <th>Project Name</th>
            <th>Client Name</th>
            <th>Project Status</th>    
            <!-- <th>Proposal</th> -->        
            <th>Employees</th>
            <th>Details Tab</th>            
          </tr>
        </thead>
        <tbody>
        
         <?php 
				
				
	$result = mysqli_query($con,"SELECT `project`.`View` AS State, `project`.`Activated` AS ProjectStatus, `project`.`adminOwner` AS adminOwner,`project`.`Employees` AS Employees,`project`.`ProjectName` AS ProjectName, `project`.`projectID` AS projectID, `users`.`UserName` AS UserName,`project`.`filePath` AS filePath FROM `project` JOIN `users` ON `project`.userID = `users`.usersID WHERE `project`.Activated IN (0) AND `project`.View IN (2,3) AND `project`.adminOwner = $userID ORDER BY `project`.projectID DESC");
	  $tblecount = 1;  ?>	
     
	<?php while($row=mysqli_fetch_assoc($result)){ ?> 
          <tr>
          
     <?php $projectStatusNo = $row['ProjectStatus']; 
	 		$projectID = $row['projectID'];
			$adminOwner =$row['adminOwner'];
			
			$projectadminOwner = mysqli_query($con,"SELECT `UserName` FROM `users` WHERE `usersID` = $adminOwner");
				$adminRow = mysqli_fetch_assoc($projectadminOwner);
				$adminName = $adminRow['UserName'];
				
	 		if($projectStatusNo == 0){
				
				$projectStatus = "Not Activated";
				
				$projectOptions = "	<option value='1'>Activated</option>
									<option value='2'>OnProgress</option>
									<option value='3'>Declined</option>
									<option value='4'>Completed</option>";
				
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
         
            <td><?php echo $tblecount;?></td>
            
            <td><?php echo $row['ProjectName'];?></td>           
            <td><?php echo $row['UserName'];?>"</td>
            
            <td>
            <?php echo $projectStatus; ?> 
             </td>
            <!-- <td><a href="AdminFunction/<?php // echo $row['filePath'];?>" download="PDFFile.pdf"><?php // echo $row['filePath'];?></a></td> -->
            <td style="min-width:180px;">
            
            <?php echo $row['Employees']; ?>
            </td>
            <td><a class="list-group-item" href="#" data-toggle="modal" data-target="#proj<?php echo $row['projectID']; ?>">View Details</a></td>
            
          </tr>
             <?php   $tblecount++; }?>
        </tbody>
      
      </table>
      </div>
       <?php }else{ ?>
        <h4><small>No "Not Activate" Projects as of the Moment.</small></h4>
         <?php }?>
 

</div> <!--/#projectPageC-->

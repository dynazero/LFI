<h3 class="page-header">My Projects <button id="projectbtnA" class="btn btn-primary">Pending</button>
<button id="projectbtnB" class="btn btn-primary">Completed</button>
<button id="projectbtnC" class="btn btn-warning">Declined</button>
<button id="projectbtnD" class="btn btn-danger">Not Activated</button>
</h3>

<div id="projectPageA"> 
<h3 class="page-header"><small>Pending</small></h3>
<?php
include("../Connections/local.php");

$result = mysqli_query($con,"SELECT `project`.`Activated` AS ProjectStatus, `project`.`Employees` AS Employees,`project`.`ProjectName` AS ProjectName, `project`.`adminOwner` AS adminOwner, `project`.`projectID` AS projectID, `users`.`UserName` AS UserName,`project`.`filePath` AS filePath FROM `project` JOIN `users` ON `project`.userID = `users`.usersID WHERE `project`.Activated = 0 AND `project`.View = 1 AND `project`.userID = $userID ORDER BY `project`.projectID DESC");
	  $tblecount = 1; 
	  
	$rowCount=mysqli_num_rows($result);
	
	 if($rowCount != ""){ ?>	
     
<div class="tableCover">
<table class="table table-bordered">
        <thead>
          <tr>
          
            <th>My Projects</th>
            <th>Project Name</th>
            <th>Project Manager</th>
            <th>Project Status</th>    
            <!-- <th>Proposal</th> -->        
            <th>Employees</th>
            <th>Details Tab</th>            
          </tr>
        </thead>
        <tbody>
        
         <?php 
				
				
	$result = mysqli_query($con,"SELECT `project`.`Activated` AS ProjectStatus, `project`.`Employees` AS Employees,`project`.`ProjectName` AS ProjectName, `project`.`adminOwner` AS adminOwner, `project`.`projectID` AS projectID, `users`.`UserName` AS UserName,`project`.`filePath` AS filePath FROM `project` JOIN `users` ON `project`.userID = `users`.usersID WHERE `project`.Activated = 0 AND `project`.View = 1 AND `project`.userID = $userID ORDER BY `project`.projectID DESC");
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
				
								
				}else if($projectStatusNo == 1){
				
				$projectStatus = "Activated";
				
								
				}else if($projectStatusNo == 2){
				
				$projectStatus = "OnProgress";
				
								
				}else if($projectStatusNo == 3){
				
				$projectStatus = "Declined";
				
				
				}else if($projectStatus == 4){
				
				$projectStatus = "Completed";
				
				}
				
				
	 
	 ?>
         
		     
            <td><?php echo $tblecount;?></td>
            
            <td><?php echo $row['ProjectName'];?></td>           
            
            <td> <?php echo $adminName;?> </td>
            <td><?php echo $projectStatus; ?> </td>
			 <td><?php echo $row['Employees']; ?></td>
            <td><a class="list-group-item" href="#" data-toggle="modal" data-target="#proj<?php echo $row['projectID']; ?>">View Details</a></td>
            
          </tr>
             <?php   $tblecount++; }?>
        </tbody>
      
      </table>
      </div>
       <?php }else{ ?>
        <h4><small>No Pending Project as of the Moment.</small></h4>
         <?php }?>
 
</div> <!--/#projectPageA-->

<div id="projectPageB"> 
<h3 class="page-header"><small>Completed</small></h3>
<?php
include("../Connections/local.php");

$result = mysqli_query($con,"SELECT `project`.`Activated` AS ProjectStatus, `project`.`Employees` AS Employees,`project`.`ProjectName` AS ProjectName, `project`.`adminOwner` AS adminOwner, `project`.`projectID` AS projectID, `users`.`UserName` AS UserName,`project`.`filePath` AS filePath FROM `project` JOIN `users` ON `project`.userID = `users`.usersID WHERE `project`.Activated = 4 AND `project`.userID = $userID ORDER BY `project`.projectID DESC");
	  $tblecount = 1; 
	  
	$rowCount=mysqli_num_rows($result);
	
	 if($rowCount != ""){ ?>	
     
<div class="tableCover">
<table class="table table-bordered">
        <thead>
          <tr>
          
            <th>My Projects</th>
            <th>Project Name</th>
            <th>Project Manager</th>
            <th>Project Status</th>    
            <!-- <th>Proposal</th> -->        
            <th>Employees</th>
            <th>Details Tab</th>            
          </tr>
        </thead>
        <tbody>
        
         <?php 
				
				
	$result = mysqli_query($con,"SELECT `project`.`Activated` AS ProjectStatus, `project`.`Employees` AS Employees,`project`.`ProjectName` AS ProjectName, `project`.`adminOwner` AS adminOwner, `project`.`projectID` AS projectID, `users`.`UserName` AS UserName,`project`.`filePath` AS filePath FROM `project` JOIN `users` ON `project`.userID = `users`.usersID WHERE `project`.Activated = 4 AND `project`.userID = $userID ORDER BY `project`.projectID DESC");
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
				
								
				}else if($projectStatusNo == 1){
				
				$projectStatus = "Activated";
				
								
				}else if($projectStatusNo == 2){
				
				$projectStatus = "OnProgress";
				
								
				}else if($projectStatusNo == 3){
				
				$projectStatus = "Declined";
				
				
				}else if($projectStatus == 4){
				
				$projectStatus = "Completed";
				
				}
				
				
	 
	 ?>
         
		     
            <td><?php echo $tblecount;?></td>
            
            <td><?php echo $row['ProjectName'];?></td>           
            
            <td> <?php echo $adminName;?> </td>
            <td><?php echo $projectStatus; ?> </td>
			 <td><?php echo $row['Employees']; ?></td>
            <td><a class="list-group-item" href="#" data-toggle="modal" data-target="#proj<?php echo $row['projectID']; ?>">View Details</a></td>
            
          </tr>
             <?php   $tblecount++; }?>
        </tbody>
      
      </table>
      </div>
       <?php }else{ ?>
        <h4><small>No Completed Project as of the Moment.</small></h4>
         <?php }?>
 
</div> <!--/#projectPageB-->

<div id="projectPageC"> 
<h3 class="page-header"><small>Declined</small></h3>
<?php
include("../Connections/local.php");

$result = mysqli_query($con,"SELECT `project`.`Activated` AS ProjectStatus, `project`.`Employees` AS Employees,`project`.`ProjectName` AS ProjectName, `project`.`adminOwner` AS adminOwner, `project`.`projectID` AS projectID, `users`.`UserName` AS UserName,`project`.`filePath` AS filePath FROM `project` JOIN `users` ON `project`.userID = `users`.usersID WHERE `project`.Activated = 3 AND `project`.userID = $userID ORDER BY `project`.projectID DESC");
	  $tblecount = 1; 
	  
	$rowCount=mysqli_num_rows($result);
	
	 if($rowCount != ""){ ?>	
     
<div class="tableCover">
<table class="table table-bordered">
        <thead>
          <tr>
          
            <th>My Projects</th>
            <th>Project Name</th>
            <th>Project Manager</th>
            <th>Project Status</th>    
            <!-- <th>Proposal</th> -->        
            <th>Employees</th>
            <th>Details Tab</th>            
          </tr>
        </thead>
        <tbody>
        
         <?php 
				
				
	$result = mysqli_query($con,"SELECT `project`.`Activated` AS ProjectStatus, `project`.`Employees` AS Employees,`project`.`ProjectName` AS ProjectName, `project`.`adminOwner` AS adminOwner, `project`.`projectID` AS projectID, `users`.`UserName` AS UserName,`project`.`filePath` AS filePath FROM `project` JOIN `users` ON `project`.userID = `users`.usersID WHERE `project`.Activated = 4 AND `project`.userID = $userID ORDER BY `project`.projectID DESC");
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
				
								
				}else if($projectStatusNo == 1){
				
				$projectStatus = "Activated";
				
								
				}else if($projectStatusNo == 2){
				
				$projectStatus = "OnProgress";
				
								
				}else if($projectStatusNo == 3){
				
				$projectStatus = "Declined";
				
				
				}else if($projectStatus == 4){
				
				$projectStatus = "Completed";
				
				}
				
				
	 
	 ?>
         
		     
            <td><?php echo $tblecount;?></td>
            
            <td><?php echo $row['ProjectName'];?></td>           
            
            <td> <?php echo $adminName;?> </td>
            <td><?php echo $projectStatus; ?> </td>
			 <td><?php echo $row['Employees']; ?></td>
            <td><a class="list-group-item" href="#" data-toggle="modal" data-target="#proj<?php echo $row['projectID']; ?>">View Details</a></td>
            
          </tr>
             <?php   $tblecount++; }?>
        </tbody>
      
      </table>
      </div>
       <?php }else{ ?>
        <h4><small>No Declined Project as of the Moment.</small></h4>
         <?php }?>
 
</div> <!--/#projectPageC-->

<div id="projectPageD"> 
<h3 class="page-header"><small>Not Activated</small></h3>
<?php
include("../Connections/local.php");

$result = mysqli_query($con,"SELECT `project`.`Activated` AS ProjectStatus, `project`.`Employees` AS Employees,`project`.`ProjectName` AS ProjectName, `project`.`adminOwner` AS adminOwner, `project`.`projectID` AS projectID, `users`.`UserName` AS UserName,`project`.`filePath` AS filePath FROM `project` JOIN `users` ON `project`.userID = `users`.usersID WHERE `project`.Activated = 0 AND `project`.View = (2,3) AND `project`.userID = $userID ORDER BY `project`.projectID DESC");
	  $tblecount = 1; 
	  
	$rowCount=mysqli_num_rows($result);
	
	 if($rowCount != ""){ ?>	
     
<div class="tableCover">
<table class="table table-bordered">
        <thead>
          <tr>
          
            <th>My Projects</th>
            <th>Project Name</th>
            <th>Project Manager</th>
            <th>Project Status</th>    
            <!-- <th>Proposal</th> -->        
            <th>Employees</th>
            <th>Details Tab</th>            
          </tr>
        </thead>
        <tbody>
        
         <?php 
				
				
	$result = mysqli_query($con,"SELECT `project`.`Activated` AS ProjectStatus, `project`.`Employees` AS Employees,`project`.`ProjectName` AS ProjectName, `project`.`adminOwner` AS adminOwner, `project`.`projectID` AS projectID, `users`.`UserName` AS UserName,`project`.`filePath` AS filePath FROM `project` JOIN `users` ON `project`.userID = `users`.usersID WHERE `project`.Activated = 0 AND `project`.View = (2,3) AND `project`.userID = $userID ORDER BY `project`.projectID DESC");
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
				
								
				}else if($projectStatusNo == 1){
				
				$projectStatus = "Activated";
				
								
				}else if($projectStatusNo == 2){
				
				$projectStatus = "OnProgress";
				
								
				}else if($projectStatusNo == 3){
				
				$projectStatus = "Declined";
				
				
				}else if($projectStatus == 4){
				
				$projectStatus = "Completed";
				
				}
				
				
	 
	 ?>
         
		     
            <td><?php echo $tblecount;?></td>
            
            <td><?php echo $row['ProjectName'];?></td>           
            
            <td> <?php echo $adminName;?> </td>
            <td><?php echo $projectStatus; ?> </td>
			 <td><?php echo $row['Employees']; ?></td>
            <td><a class="list-group-item" href="#" data-toggle="modal" data-target="#proj<?php echo $row['projectID']; ?>">View Details</a></td>
            
          </tr>
             <?php   $tblecount++; }?>
        </tbody>
      
      </table>
      </div>
       <?php }else{ ?>
        <h4><small>No "Not Activate" Project as of the Moment.</small></h4>
         <?php }?>
 
</div> <!--/#projectPageD-->
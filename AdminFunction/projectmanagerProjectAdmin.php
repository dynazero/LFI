<h3 class="page-header">Home <small>Project Admin</small></h3>
<?php
include("../Connections/local.php");

$result = mysqli_query($con,"SELECT `project`.`View` AS State, `project`.`Activated` AS ProjectStatus, `project`.`adminOwner` AS adminOwner,`project`.`Employees` AS Employees,`project`.`ProjectName` AS ProjectName, `project`.`projectID` AS projectID, `users`.`UserName` AS UserName,`project`.`filePath` AS filePath FROM `project` JOIN `users` ON `project`.userID = `users`.usersID WHERE `project`.Activated IN (1,2) AND `project`.View IN (2,3) AND `project`.adminOwner = $userID ORDER BY `project`.projectID DESC");
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
				
				
	$result = mysqli_query($con,"SELECT `project`.`View` AS State, `project`.`Activated` AS ProjectStatus, `project`.`adminOwner` AS adminOwner,`project`.`Employees` AS Employees,`project`.`ProjectName` AS ProjectName, `project`.`projectID` AS projectID, `users`.`UserName` AS UserName,`project`.`filePath` AS filePath FROM `project` JOIN `users` ON `project`.userID = `users`.usersID WHERE `project`.Activated IN (1,2) AND `project`.View IN (2,3) AND `project`.adminOwner = $userID ORDER BY `project`.projectID DESC");
	  $tblecount = 1;  ?>	
     
	<?php while($row=mysqli_fetch_assoc($result)){ ?> 
          <tr>
          
     <?php $projectStatusNo = $row['ProjectStatus']; 
	 		$projectID = $row['projectID'];
			$adminOwner =$row['adminOwner'];
			
			$projectadminOwner = mysqli_query($con,"SELECT `UserName` FROM `users` WHERE `usersID` = $adminOwner");
				$adminRow = mysqli_fetch_assoc($projectadminOwner);
				$adminName = $adminRow['UserName'];
	 		if($projectStatusNo == 1){
				
				$projectStatus = "Activated";
				
				$projectOptions = "<option value='2'>OnProgress</option>
									<option value='3'>Declined</option>
									<option value='4'>Completed</option>";
				
				}else if($projectStatusNo == 2){
				
				$projectStatus = "OnProgress";
				
				$projectOptions  = "<option value='1'>Activated</option>
									<option value='3'>Declined</option>
									<option value='4'>Completed</option>";
				
				}else if($projectStatusNo == 3){
				
				$projectStatus = "Declined";
				
				$projectOptions  = "<option value='1'>Activated</option>
									<option value='2'>OnProgress</option>
									<option value='4'>Completed</option>";
				
				}else if($projectStatusNo == 4){
				
				$projectStatus = "Completed";
				
				$projectOptions  = "<option value='1'>Activated</option>
									<option value='2'>OnProgress</option>
									<option value='3'>Declined</option>";
				
				}
				
				
	 
	 ?>
         
		     <form id="editProjectDetailprojectmanager" method="post">
            <td><?php echo $tblecount;?><button type="submit" class="btn btn-primary btn-xs" >Update</button></td>
            
            <td><?php echo $row['ProjectName'];?></td>           
            <td><?php echo $row['UserName'];?></td>
            
            <td> <?php echo $projectStatus; ?>
            
             </td>
            <!-- <td><a href="AdminFunction/<?php // echo $row['filePath'];?>" download="PDFFile.pdf"><?php // echo $row['filePath'];?></a></td> -->
            <td style="min-width:180px;">
            
            <input type="hidden" name="projectID" value="<?php echo $projectID;?>"/>
            <input class="textEmp" type="textArea" name="Emp" value="<?php echo $row['Employees']; ?>"/>
           </form>
            </td>
            
              <?php 
					 $RoleName = "manager";
					 
					 $rowA1=mysqli_query($con,"SELECT COUNT(*) FROM `projectgallery` LEFT JOIN `commentgallery` ON `commentgallery`.projectgalleryID =`projectgallery`.projectgalleryID INNER JOIN `project` ON `projectgallery`.projectID = `project`.projectID  WHERE `projectgallery`.projectID = $projectID AND `commentgallery`.$RoleName = 0 AND `project`.adminOwner = $userID OR `projectgallery`.projectID = $projectID AND `projectgallery`.$RoleName = 0 AND `project`.adminOwner = $userID");
					 
					 
					 
					 $resultCountA1 = mysqli_fetch_array($rowA1);
					 $pgPanelA1 = $resultCountA1['0']; 
					 
					 if($pgPanelA1 != 0){
						 
						 $pgBadge = "<span class='badge pgBadge'>!</span>";
						 
						 } 
						 
						 $rowA2=mysqli_query($con,"SELECT COUNT(*) FROM `projectfiles` JOIN `project` ON `project`.projectID = `projectfiles`.projectID WHERE `projectfiles`.projectID = $projectID AND `projectfiles`.$RoleName = 0 AND `project`.adminOwner = $userID");
					 
					 $resultCountA2 = mysqli_fetch_array($rowA2);
					 $drPanelA2 = $resultCountA2['0']; 
					 
					 if($drPanelA2 != 0){
						 
						 $drBadge = "<span class='badge drBadge'>!</span>";
						 
						 }else{
							 
							  $drBadge = "<span class='badge drBadge' style='display:none;'>!</span>";
							 
							 }
						 
						  $rowA3=mysqli_query($con,"SELECT COUNT(*) FROM `cadgallery` JOIN `project` ON `project`.projectID = `cadgallery`.projectID  WHERE `cadgallery`.projectID = $projectID AND `cadgallery`.$RoleName= 0 AND `project`.adminOwner = $userID");
					 
					 $resultCountA3 = mysqli_fetch_array($rowA3);
					 $cdPanelA3 = $resultCountA3['0'];
					 
					 if($cdPanelA3 != 0){
						 
						 $cdBadge = "<span class='badge cdBadge'>!</span>";
						 
						 }else{
							 
							  $cdBadge = "<span class='badge cdBadge' style='display:none;'>!</span>";
							 
							 }
							 
						
						$projectView = $pgPanelA1+$drPanelA2+$cdPanelA3; 
						
							if($projectView != 0){
						 
						 $pview = "<span class='badge completepView'>!</span>";
						 
						 }else{
							 
							  $pview = "<span class='badge completepView' style='display:none;'>!</span>";
							 
							 }
						
						?>
            
            <td><a class="list-group-item" href="#" data-toggle="modal" data-target="#proj<?php echo $row['projectID']; ?>">View Details <?php echo $pview; ?></a></td>
            
          </tr>
             <?php   $tblecount++; }?>
        </tbody>
      
      </table>
      </div>
       <?php }else{ ?>
        <h4><small>No Projects Active/On Progress as of the Moment.</small></h4>
         <?php }?>
 



<h3 class="page-header">Home <small>Project Admin</small></h3>
<?php
include("../Connections/local.php");

$result = mysqli_query($con,"SELECT `project`.`View` AS State, `project`.`Activated` AS ProjectStatus, `project`.`adminOwner` AS adminOwner,`project`.`Employees` AS Employees,`project`.`ProjectName` AS ProjectName, `project`.`projectID` AS projectID, `users`.`UserName` AS UserName,`project`.`filePath` AS filePath FROM `project` JOIN `users` ON `project`.userID = `users`.usersID WHERE `project`.Activated IN (1,2) AND `project`.View IN (2,3) ORDER BY `project`.projectID DESC");
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
            <th>Project Manager</th>
            <th>Project Status</th>    
            <!-- <th>Proposal</th> -->        
            <th>Employees</th>
            <th>Details Tab</th>            
          </tr>
        </thead>
        <tbody>
        
         <?php 
				
				
	$result = mysqli_query($con,"SELECT `project`.`View` AS State, `project`.`Activated` AS ProjectStatus, `project`.`adminOwner` AS adminOwner,`project`.`Employees` AS Employees,`project`.`ProjectName` AS ProjectName, `project`.`projectID` AS projectID, `users`.`UserName` AS UserName,`project`.`filePath` AS filePath FROM `project` JOIN `users` ON `project`.userID = `users`.usersID WHERE `project`.Activated IN (1,2) AND `project`.View IN (2,3) ORDER BY `project`.projectID DESC");
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
         
		     <form id="editProjectDetail" method="post">
            <td><?php echo $tblecount;?><button id="" class="btn btn-primary btn-xs" >Update</button></td>
            
            <td><input class="textEmp" type="text" name="ProjectName" value="<?php echo $row['ProjectName'];?>"/></td>           
            <td><input disabled class="textEmp" type="text" name="ClientName" value="<?php echo $row['UserName'];?>"/></td>
            <td> <select id="adminOwner" name="adminOwner" class="">
            <option value="<?php echo $adminOwner;?>"> <?php echo $adminName; ?> </option>
            
      <?php $resultAdminQuery = mysqli_query($con,"SELECT * FROM `users` WHERE usersID != $adminOwner AND Role = 1 AND `Activated` != 3 OR usersID != $adminOwner AND Role = 2 AND `Activated` != 3");
	   
	  
	  				while($rowAdminUsers = mysqli_fetch_array($resultAdminQuery)){ ?>
			<option value="<?php echo $rowAdminUsers['usersID']; ?>"><?php echo $rowAdminUsers['UserName'];?></option>
						
						<?php }		
	  ?> 
            
            </select></td>
            <td>
            <select id="projStatus" name="projStatus" class="">
            	
                <option value="<?php echo $projectStatusNo; ?>"> <?php echo $projectStatus; ?> </option>
                <?php echo $projectOptions; ?>
            </select>
             </td>
            <!-- <td><a href="AdminFunction/<?php // echo $row['filePath'];?>" download="PDFFile.pdf"><?php // echo $row['filePath'];?></a></td> -->
            <td style="min-width:180px;">
            
            <input type="hidden" name="projectID" value="<?php echo $projectID;?>"/>
            <input class="textEmp" type="text" name="Emp" value="<?php echo $row['Employees']; ?>"/>
           </form>
            </td>
            
            <?php 
					 $RoleName = "admin";
					 
					 $rowA1=mysqli_query($con,"SELECT COUNT(*) FROM `projectgallery` LEFT JOIN `commentgallery` ON `commentgallery`.projectgalleryID =`projectgallery`.projectgalleryID WHERE `projectgallery`.projectID = $projectID AND `commentgallery`.$RoleName = 0 OR `projectgallery`.projectID = $projectID AND `projectgallery`.$RoleName = 0 ");
					 
					 $resultCountA1 = mysqli_fetch_array($rowA1);
					 $pgPanelA1 = $resultCountA1['0']; 
					 
					 if($pgPanelA1 != 0){
						 
						 $pgBadge = "<span class='badge pgBadge'>!</span>";
						 
						 }else{
							 
							  $pgBadge = "<span class='badge pgBadge' style='display:none;'>!</span>";
							 
							 }
							 
						 $rowA2=mysqli_query($con,"SELECT COUNT(*) FROM `projectfiles` WHERE `projectfiles`.projectID = $projectID AND `projectfiles`.$RoleName = 0");
					 
					 $resultCountA2 = mysqli_fetch_array($rowA2);
					 $drPanelA2 = $resultCountA2['0']; 
					 
					 if($drPanelA2 != 0){
						 
						 $drBadge = "<span class='badge drBadge'>!</span>";
						 
						 }else{
							 
							  $drBadge = "<span class='badge drBadge' style='display:none;'>!</span>";
							 
							 }
							 
							  $rowA3=mysqli_query($con,"SELECT COUNT(*) FROM `cadgallery` WHERE `cadgallery`.projectID = $projectID AND `cadgallery`.$RoleName = 0");
					 
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
       <?php }else{ ?>
        <h4><small>No Projects Active/On Progress as of the Moment.</small></h4>
         <?php }?>
 
</div>


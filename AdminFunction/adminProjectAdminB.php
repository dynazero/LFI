<?php include("../Connections/local.php");?>
<h3 class="page-header">Projects <small>My Projects</small> <button id="projectbtnA" class="btn btn-primary">Completed</button>
<button id="projectbtnB" class="btn btn-warning">Declined</button>
<button id="projectbtnC" class="btn btn-danger">Not Activated</button>
</h3>

<div id="projectPageA"> 
<h3 class="page-header"><small>Completed</small></h3>
<?php $result = mysqli_query($con,"SELECT `project`.`Activated` AS ProjectStatus, `project`.`Employees` AS Employees,`project`.`ProjectName` AS ProjectName, `project`.`adminOwner` AS adminOwner, `project`.`projectID` AS projectID, `users`.`UserName` AS UserName,`project`.`filePath` AS filePath FROM `project` JOIN `users` ON `project`.userID = `users`.usersID WHERE `project`.Activated IN (4) AND `project`.View IN (2,3) ORDER BY  `project`.projectID DESC");
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
				
				
	$result = mysqli_query($con,"SELECT `project`.`Activated` AS ProjectStatus, `project`.`Employees` AS Employees,`project`.`ProjectName` AS ProjectName, `project`.`adminOwner` AS adminOwner, `project`.`projectID` AS projectID, `users`.`UserName` AS UserName,`project`.`filePath` AS filePath FROM `project` JOIN `users` ON `project`.userID = `users`.usersID WHERE `project`.Activated IN (4) AND `project`.View IN (2,3) ORDER BY  `project`.projectID DESC");
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
            <option value="<?php echo $adminOwner;?>"> <?php echo $adminName;?> </option>
            
      <?php $resultAdminQuery = mysqli_query($con,"SELECT * FROM `users` WHERE usersID != $adminOwner AND Role = 1 OR usersID != $adminOwner AND Role = 2");
	   
	  
	  				while($rowAdminUsers = mysqli_fetch_array($resultAdminQuery)){ ?>
			<option value="<?php echo $rowAdminUsers['usersID']; ?>"><?php echo $rowAdminUsers['UserName'];?></option>
						
						<?php }		
	  ?> 
            
            </select></td>
            <td>
            <select id="projStatus" name="projStatus" class="">
            	
                <option value="<?php echo $projectStatusNo; ?>"> <?php echo $projectStatus; ?></option>
                <?php echo $projectOptions; ?>
            </select>
             </td>
            <!-- <td><a href="AdminFunction/<?php // echo $row['filePath'];?>" download="PDFFile.pdf"><?php // echo $row['filePath'];?></a></td> -->
            <td style="min-width:180px;">
            
            <input type="hidden" name="projectID" value="<?php echo $projectID;?>"/>
            <input class="textEmp" type="text" name="Emp" value="<?php echo $row['Employees']; ?>"/>
           </form>
            </td>
            <td><a class="list-group-item" href="#" data-toggle="modal" data-target="#proj<?php echo $row['projectID']; ?>">View Details</a></td>
            
          </tr>
             <?php   $tblecount++; }?>
        </tbody>
      
      </table>
      </div>
       <?php }else{ ?>
        <h4><small>No Projects Completed as of the Moment.</small></h4>
         <?php }?>
 
</div> <!--/#projectPageA-->

<div id="projectPageB">
<h3 class="page-header"><small>Declined</small></h3>
<?php $result = mysqli_query($con,"SELECT `project`.`Activated` AS ProjectStatus, `project`.`Employees` AS Employees,`project`.`ProjectName` AS ProjectName, `project`.`adminOwner` AS adminOwner, `project`.`projectID` AS projectID, `users`.`UserName` AS UserName,`project`.`filePath` AS filePath FROM `project` JOIN `users` ON `project`.userID = `users`.usersID WHERE `project`.Activated IN (3)AND `project`.View IN (2,3) ORDER BY  `project`.projectID DESC");
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
				
				
	$result = mysqli_query($con,"SELECT `project`.`Activated` AS ProjectStatus, `project`.`Employees` AS Employees,`project`.`ProjectName` AS ProjectName, `project`.`adminOwner` AS adminOwner, `project`.`projectID` AS projectID, `users`.`UserName` AS UserName,`project`.`filePath` AS filePath FROM `project` JOIN `users` ON `project`.userID = `users`.usersID WHERE `project`.Activated IN (3)AND `project`.View IN (2,3) ORDER BY  `project`.projectID DESC");
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
            <option value="<?php echo $adminOwner;?>"> <?php echo $adminName;?> </option>
            
      <?php $resultAdminQuery = mysqli_query($con,"SELECT * FROM `users` WHERE usersID != $adminOwner AND Role = 1 OR usersID != $adminOwner AND Role = 2");
	   
	  
	  				while($rowAdminUsers = mysqli_fetch_array($resultAdminQuery)){ ?>
			<option value="<?php echo $rowAdminUsers['usersID']; ?>"><?php echo $rowAdminUsers['UserName'];?></option>
						
						<?php }		
	  ?> 
            
            </select></td>
            <td>
            <input type="hidden" id="projStatus" name="projStatus" class="" value="<?php echo $projectStatusNo; ?>"/>
               <?php echo $projectStatus; ?>
             </td>
            <!-- <td><a href="AdminFunction/<?php // echo $row['filePath'];?>" download="PDFFile.pdf"><?php // echo $row['filePath'];?></a></td> -->
            <td style="min-width:180px;">
            
            <input type="hidden" name="projectID" value="<?php echo $projectID;?>"/>
            <input class="textEmp" type="text" name="Emp" value="<?php echo $row['Employees']; ?>"/>
           </form>
            </td>
            <td><a class="list-group-item" href="#" data-toggle="modal" data-target="#proj<?php echo $row['projectID']; ?>">View Details</a></td>
            
          </tr>
             <?php   $tblecount++; }?>
        </tbody>
      
      </table>
      </div>
       <?php }else{ ?>
        <h4><small>No Projects Declined as of the Moment.</small></h4>
         <?php }?>
 
</div><!--/#projectPageB-->

<div id="projectPageC"> 
<h3 class="page-header"><small>Not Activated</small></h3>
<?php $result = mysqli_query($con,"SELECT `project`.`Activated` AS ProjectStatus, `project`.`Employees` AS Employees,`project`.`ProjectName` AS ProjectName, `project`.`adminOwner` AS adminOwner, `project`.`projectID` AS projectID, `users`.`UserName` AS UserName,`project`.`filePath` AS filePath FROM `project` JOIN `users` ON `project`.userID = `users`.usersID WHERE `project`.Activated IN (0)AND `project`.View IN (2,3) ORDER BY  `project`.projectID DESC");
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
				
				
	$result = mysqli_query($con,"SELECT `project`.`Activated` AS ProjectStatus, `project`.`Employees` AS Employees,`project`.`ProjectName` AS ProjectName, `project`.`adminOwner` AS adminOwner, `project`.`projectID` AS projectID, `users`.`UserName` AS UserName,`project`.`filePath` AS filePath FROM `project` JOIN `users` ON `project`.userID = `users`.usersID WHERE `project`.Activated IN (0)AND `project`.View IN (2,3) ORDER BY  `project`.projectID DESC");
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
            <option value="<?php echo $adminOwner;?>"> <?php echo $adminName;?> </option>
            
      <?php $resultAdminQuery = mysqli_query($con,"SELECT * FROM `users` WHERE usersID != $adminOwner AND Role = 1 OR usersID != $adminOwner AND Role = 2");
	   
	  
	  				while($rowAdminUsers = mysqli_fetch_array($resultAdminQuery)){ ?>
			<option value="<?php echo $rowAdminUsers['usersID']; ?>"><?php echo $rowAdminUsers['UserName'];?></option>
						
						<?php }		
	  ?> 
            
            </select></td>
            <td>
             <input type="hidden" id="projStatus" name="projStatus" class="" value="<?php echo $projectStatusNo; ?>"/>
               <?php echo $projectStatus; ?>
             </td>
            <!-- <td><a href="AdminFunction/<?php // echo $row['filePath'];?>" download="PDFFile.pdf"><?php // echo $row['filePath'];?></a></td> -->
            <td style="min-width:180px;">
            
            <input type="hidden" name="projectID" value="<?php echo $projectID;?>"/>
            <input class="textEmp" type="text" name="Emp" value="<?php echo $row['Employees']; ?>"/>
           </form>
            </td>
            <td><a class="list-group-item" href="#" data-toggle="modal" data-target="#proj<?php echo $row['projectID']; ?>">View Details</a></td>
            
          </tr>
             <?php   $tblecount++; }?>
        </tbody>
      
      </table>
      </div>
       <?php }else{ ?>
        <h4><small>No Projects "Not Active" as of the Moment.</small></h4>
         <?php }?>
 
</div><!--/#projectPageC-->


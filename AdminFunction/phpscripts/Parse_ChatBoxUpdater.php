<?php $result = mysqli_query($con,"SELECT `project`.`adminOwner` AS adminOwner, `project`.`Activated` AS ProjectStatus, `project`.`Scale` AS Scale,  `project`.`filePath` AS filePath, `project`.`projectcategoryID` AS projectcategoryID, `project`.`Employees` AS Employees,`project`.`ProjectName` AS ProjectName, `project`.`projectID` AS projectID, `users`.`UserName` AS UserName,`project`.`filePath` AS filePath FROM `project` JOIN `users` ON `project`.userID = `users`.usersID");
	 
	 
	 
		while($row=mysqli_fetch_array($result)){?>
        
 <div id="proj<?php echo $row['projectID'];?>"  class="modal fade" style="overflow:auto;">
     
     <div class="modal-dialog" style="min-width:800px;">
	<div class="modal-content rowBalance">
                     
              <?php $projectCategory = $row['projectcategoryID']; 
			  		$employees = $row['Employees'];
					$filePath = $row['filePath'];
					$projectID = $row['projectID'];
					$ProjectStatus = $row['ProjectStatus'];
					$ProjectScale = $row['Scale'];
					$adminOwner = $row['adminOwner'];
					
					
			$projectadminOwner = mysqli_query($con,"SELECT `UserName` FROM `users` WHERE `usersID` = $adminOwner");
				$adminRow = mysqli_fetch_assoc($projectadminOwner);
				$adminName = $adminRow['UserName'];
					
					if($ProjectScale == ""){
						
						$ProjectScale = "N/A";
						
						}
						
					if($employees == ""){
						
						$employees = "N/A";
						
						}	
			  
			 
			   ?>       
                    
                     
                       	
          <!-- <a href="Images/Upload/15.jpg" class="thumbnail" style="background-color:#333; width:150px; height:125px; margin-left:auto; margin-right:auto; border-radius:10px;">
                      <img src="Images/Upload/15.jpg" data-src="holder.js/300x300" alt="" style="width:150px; height:114px; border-radius:10px; margin-top:0px">
                            </a>-->
                            
                      <div class="modal-body" >
                      
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                        
                    
                      <h3> <?php echo $row['ProjectName'];?> </h3>
                      
                      
                          <h4 style="cursor:default; float:left;">Client: <span style="text-decoration:underline;"><?php echo $row['UserName'];?> </span></h4>
                          
                         <h3 style="cursor:pointer;  float:right;"> <a data-toggle="modal" data-target="#materialModal<?php echo $projectID; ?>"><small style="color:#36F; cursor:pointer;"> Material View </a></small> </h3>
                                              
                           
                         
                         
                         
                         
                         <?php  $resultCategory = mysqli_query($con,"SELECT * FROM `projectcategory` WHERE projectcategoryID = $projectCategory");
						 
						 while($row=mysqli_fetch_array($resultCategory)){ 
						 
						 $projectCategory = $row['CategoryName'];
						 
						 
				if($ProjectStatus == 0){
				
				$ProjectStats = " style='color:red;'>Not Activated";
				
				$balDisable = "disabled";
				
				$updateBal = " ";
				
				}else if($ProjectStatus == 1){
				
				$ProjectStats = " style='color:blue;'>Activated";
				
				$balDisable = " ";
				
				$updateBal ="<button class='btn-xs btn-warning' type='submit'>Update</button>";
				
				}else if($ProjectStatus == 2){
				
				$ProjectStats = " style='color:green;'>OnProgress";
				
				$balDisable = " ";
				
				$updateBal ="<button class='btn-xs btn-warning' type='submit'>Update</button>";
				
				}else if($ProjectStatus == 3){
				
				$ProjectStats = " style='color:red;'> Declined";
				
				$balDisable = "disabled";
				
				$updateBal = " ";
				
				}else if($ProjectStatus == 4){
				
				$ProjectStats = "style='color:blue; text-decoration:underline;'>Completed";
				
				$balDisable = "disabled";
				
				$updateBal = " ";
				
				}
					
						 ?> 
                         
                         <table class="table" style="cursor:default; border-bottom:1px solid #CCC;"> 
                         
                         <tr> 
                         <td>
                        <span style="font-weight:bold;">Project Status:</span><span <?php echo $ProjectStats; ?> </span>  </td>
                         <td>
                         <span style="font-weight:bold;">Project Category:</span><span><?php echo $projectCategory; ?> </span>   </td>
                         <td>
                        <span  style="font-weight:bold;">Assigned Manager:</span> <span style="text-decoration:underline;"> <?php echo $adminName; ?> </span>
                         </td>
                         </tr>
                         
                         <tr> 
                         <td>
                        <span  style="font-weight:bold;">Project Scale:</span> <span style="text-decoration:underline; "> <?php echo $ProjectScale; ?> </span>
                         </td>
                         
                         <td>
                         <span  style="font-weight:bold;">Employees:</span> <span style="text-decoration:underline;"> <?php echo $employees; ?> </span>
                          </td>
                          <td class="balanceTriggerBtn">
                          <span  style="font-weight:bold; color:#36F; cursor:pointer;">Account Balance:</span>
                          	
                         <?php $balanceInquiry=mysqli_query($con,"SELECT * FROM `projectbalance` WHERE  `projectID` = $projectID"); 
                 				$resultBal = mysqli_fetch_array($balanceInquiry);
								
								if(isset($resultBal)){
									  $balance = $resultBal['Balance'];	
									  $balanceQue = "Unsettled";
										if($balance != 0){
											
											echo $balanceQue;
														 
										}else{
											$balance = '0';
										echo "Cleared";
											
											}
				          			}else{
                                    	 $balance = 'XXXXXXX';	
                                   		 echo "No Balance Arranged";
                                    
                                    }
									
									 ?>
                        
                         
                         
                         <?php } ?>
                        </td>
                        
                        <td class="mainBalanceBox">
                        <span style="font-weight:bold;">Maintaining Balance:</span>  <span class="closeBalanceBox" style="color:#999; position:absolute; right:10%; cursor:pointer;"><small style="font-weight:bold;">x</small></span>
                        <form id="UpdateBalance" method="post" enctype="multipart/form-data"><small> <input id="mainBalance" name="mainBalance" type="number" <?php echo $balDisable; ?> size="15" name="mainBalance" value ="<?php echo $balance; ?>"/></small>
                    <input type="hidden" id="projectIDbal" name="projectIDbal" value="<?php echo $projectID;?>"/>
                    
                    <?php echo $updateBal; ?>
                                          
                       </form>
                      </td>
                      
                         
                      </tr>
                      
                                           
                          
                     </table>   
                       
                       
                       <br>
                       <div class="closePanel" style="width:750px; max-height:600px; "> 
                       <div class="panel panel-primary" style="width:750px; max-height:320px; ">
                       <div class="panel-heading">
                        <h3 class="panel-title" style="margin-left: auto; margin-right: auto; text-align: center; width: 231px;">Progress Gallery
                        
                         <?php if($ProjectStatus !== "3" && $ProjectStatus !== "0" && $ProjectStatus !== "4"){ ?>
                        
                        <a data-toggle="modal" data-target="#projectAdd<?php echo $projectID; ?>"><span class="glyphicon glyphicon-plus-sign"></span></a> 
                        
					<?php   } ?>
                        
                        
                        </h3>
                        
                      </div>
                      <div class="panel-body" style="width:inherit; max-height:inherit; overflow:auto;">
                      
                        <?php 
						$resultrowPicture = mysqli_query($con,"SELECT * FROM `projectgallery` WHERE `projectID` = '$projectID'");											 
					$rowCount =  mysqli_fetch_assoc($resultrowPicture);
	
	
						if($rowCount != ""){ 
						 
						$resultPicture = mysqli_query($con,"SELECT * FROM `projectgallery` WHERE `projectID` = '$projectID'");
										 
						 while($row=mysqli_fetch_array($resultPicture)){ ?>
                         						

                         
                         <a href="#" data-toggle="modal" data-target="#projgall<?php echo $row['projectgalleryID']; ?>">
                         <img class="imageInside" src="phpscripts/<?php echo $row['ImagePath']; ?>" class="img-rounded img-responsive" />
                         </a>
                         
				
                         
                         <?php } ?>
                         
                         <?php if($ProjectStatus !== "3" && $ProjectStatus !== "0" && $ProjectStatus !== "4"){ ?>
                        
                         <a data-toggle="modal" data-target="#projectAdd<?php echo $projectID; ?>">
                         <img class="imageInside" src="ProfilePic/069596-blue-jelly-icon-alphanumeric-plus-sign-simple.png" class="img-rounded img-responsive"/>
                         </a>
                         
                         <?php   } ?>
                         
                          <?php  }else{?>
                         
                 			<h3><small>Picture Goes Here</small>
                            <?php if($ProjectStatus !== "3" && $ProjectStatus !== "0" && $ProjectStatus !== "4"){ ?>
                            <a data-toggle="modal" data-target="#projectAdd<?php echo $projectID; ?>">
                            
                            <img class="imageInside" src="ProfilePic/069596-blue-jelly-icon-alphanumeric-plus-sign-simple.png" class="img-rounded img-responsive"/>
                  			</a>
                            <?php } ?>
                            </h3>
                             
                       <?php } ?>
                       
                          </div>
                        </div>
                        
                        
                        
                        <div class="panel panel-info" style=" width:500px; max-height:190px; margin-left:auto; margin-right:auto;  ">
                      <div class="panel-heading">
                        <h3 class="panel-title">Document Reference
                        
                        <?php if($ProjectStatus !== "3" && $ProjectStatus !== "0" && $ProjectStatus !== "4"){ ?>
                        <a data-toggle="modal" data-target="#projectDocAdd<?php echo $projectID; ?>"><span class="glyphicon glyphicon-plus-sign"></span></a>
                        
                        <?php } ?>
                        </h3>
                      </div>
                      <div class="panel-body">
                      <ul>
                      	<li> 
                      <a href="AdminFunction/<?php echo $filePath;?>" download="ProjectFile">Initial Proposal</a> </li>
                     
                      
                      <?php $resultCategory = mysqli_query($con,"SELECT * FROM `projectfiles` WHERE projectID = '$projectID'");
						 
						 while($row=mysqli_fetch_array($resultCategory)){ ?>
						 
					<li><a href="<?php echo $row['pathfile'];?>" download="ProjectFile"><?php echo $row['pathfile'];?></a></li>
                         
                         <?php } ?>
                      
                         </ul>
                      </div>
                    </div>
                    
                    <div class="panel panel-danger" style="width:500px; max-height:190px; margin-left:auto; margin-right:auto; ">
                      <div class="panel-heading">
                        <h3 class="panel-title">Cad Documents
                        
                          <?php if($ProjectStatus !== "3" && $ProjectStatus !== "0" && $ProjectStatus !== "4"){ ?>
                        <a data-toggle="modal" data-target="#projectCadAdd<?php echo $projectID; ?>"><span class="glyphicon glyphicon-plus-sign"></span></a>
                        	<?php } ?>
                            
                        
                        </h3>
                      </div>
                      <div class="panel-body">
                        <?php $resultCategoryA = mysqli_query($con,"SELECT * FROM `cadgallery` WHERE projectID = '$projectID'");
						 
						 $rowCountimg =  mysqli_fetch_assoc($resultCategoryA);
	
	
						if($rowCountimg != ""){ ?>
                         
                      <table class="table">
        <thead>
          <tr>
           <!-- <th>#</th> -->
            <th>File Path</th>
            <th>Date</th>
            <th>Uploader</th>
          </tr>
        </thead>
        <tbody>
         <?php $resultCategory = mysqli_query($con,"SELECT * FROM `cadgallery` WHERE projectID = '$projectID'");
						 
						 while($row=mysqli_fetch_array($resultCategory)){ ?>
          <tr>
            <!--<th scope="row">1</th>-->
            <td ><a href="<?php echo $row['cadpathfile'];?>" download="ProjectFile"><?php echo $row['cadpathfile'];?></a>  </td>
            <td><?php echo $row['Time'];?></td>
            <td><?php $uploader = $row['userID'];
					 
					 $resultUploader = mysqli_query($con,"SELECT `FirstName` FROM `users` WHERE usersID = '$uploader'"); 
					 
					 
					$uploader = mysqli_fetch_array($resultUploader);
					
					
					echo $uploader['FirstName'];
					
					
					 
					 ?> </td>
          </tr>
          
                         <?php } ?>
        </tbody>
      </table>
      <?php  }else { ?>
		  <h3><small>No Cad File Uploaded yet</small></h3>
		  
	   <?php	  } ?>
                      
                      </div>
                    </div>
      </div><!--/.closePanel-->                  
                     <!-- <textarea rows="4" cols="50" required id="descript" name="descript"><?php // echo $row['Description'];?></textarea> -->
                                                  
                      </div>
                      <br>
                       <br>
                      <div class="modal-footer">
                      
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                     </div><!-- /.modal-content -->
                  </div><!-- /.modal-dialog -->
                   
                   </div><!-- /#rticle .modal -->
                   
                   
                   
                   <?php $row++; } ?>
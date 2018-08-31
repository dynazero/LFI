<?php $resultCategory = mysqli_query($con,"SELECT `project`.`adminOwner` AS adminOwner, `project`.`Activated` AS ProjectStatus, `project`.`Scale` AS Scale,  `project`.`filePath` AS filePath, `project`.`projectcategoryID` AS projectcategoryID, `project`.`Employees` AS Employees,`project`.`ProjectName` AS ProjectName, `project`.`projectID` AS projectID, `users`.`UserName` AS UserName,`project`.`filePath` AS filePath,`project`.`userID` AS ClientID FROM `project` JOIN `users` ON `project`.userID = `users`.usersID");
						 
						 
						  
						 while($row=mysqli_fetch_array($resultCategory)){ 
						 
						 
						 $projectID = $row['projectID'];
						 $ClientID = $row['ClientID'];
						 $ProjectName = $row['ProjectName']?>
						 
                         
				 <div id="projectDocAdd<?php echo $row['projectID']; ?>"  class="modal fade" style="overflow:auto;">

  <div class="modal-dialog" style="width:490px;">
    <div class="modal-content">
     
       
      
      <div class="modal-body">
      
       <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Upload Your Document File For this Project</h4>
        
        <form id="projectDocAdd" method="post" enctype="multipart/form-data">
        
		<div style="width:200px;margin-left:auto; margin-bottom:50px; margin-top:10px; margin-right:auto;">
       
    
       <h2><small><?php echo $ProjectName; ?></small></h2>
        <input type="hidden" id="projectDocAddID" name="projectDocAddID" value="<?php echo $projectID; ?>"/>		
        <input type="hidden" id="projectDocAddName" name="projectDocAddName" value="<?php echo $ProjectName; ?>"/>		
         <input type="hidden" name="userRole" value="<?php echo $Role; ?>"/>
        <input type="hidden" id="projectDocAddClientID" name="projectDocAddClientID" value="<?php echo $ClientID; ?>"/>	
        
        <input type="hidden" id="DocuserID" name="DocuserID" value="<?php echo $usersID; ?>"/>
    	<input name="file" type="file" /> 
    <button>Submit</button>
    	</div>
</form>
      </div>
    <!--  <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>-->
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<?php } ?>
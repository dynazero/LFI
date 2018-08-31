<?php $resultCategory = mysqli_query($con,"SELECT `project`.`Activated` AS ProjectStatus, `project`.`Employees` AS Employees,`project`.`ProjectName` AS ProjectName, `project`.`projectID` AS projectID, `users`.`UserName` AS UserName,`project`.`filePath` AS filePath FROM `project` JOIN `users` ON `project`.userID = `users`.usersID WHERE `project`.Activated = 1 OR `project`.Activated = 2");
						 
						 
						 
						 while($row=mysqli_fetch_array($resultCategory)){ 
						 
						 
						 $projectID = $row['projectID'];
						 $ProjectName = $row['ProjectName']?>
						 
                         
				 <div id="projectAdd<?php echo $row['projectID']; ?>"  class="modal fade" style="overflow:auto;">

  <div class="modal-dialog" style="width:490px;">
    <div class="modal-content">
     
       
      
      <div class="modal-body">
      
       <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Add Picture to Gallery</h4>
        
        <form id="projectImgAdd" method="post" enctype="multipart/form-data">
        
       
		<div style="width:200px;margin-left:auto; margin-bottom:50px; margin-top:10px; margin-right:auto;">
       <h2><small><?php echo $ProjectName; ?></small></h2>
        <input type="hidden" id="projectID" name="projectID" value="<?php echo $projectID; ?>"/>
        <input type="hidden" name="userRole" value="<?php echo $Role; ?>"/>
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
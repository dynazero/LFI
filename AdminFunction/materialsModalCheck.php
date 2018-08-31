    <?php include("../Connections/local.php"); ?>
	
	<?php $resultProjects=mysqli_query($con,"SELECT `project`.projectID, `project`.ProjectName FROM `project`"); 
	
	
 		while($rowproj = mysqli_fetch_array($resultProjects)){ ?>
        
         <?php $projectID = $rowproj['projectID']; ?>
        
        <div id="materialModal<?php echo $projectID; ?>" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title"><?php echo $rowproj['ProjectName']; ?><small> Materials</small></h4>
      </div>
      <div class="modal-body">
       <?php $resultrowCheck=mysqli_query($con,"SELECT * FROM `materialsproject` JOIN `project` JOIN `materialsstorage` ON `materialsproject`.mainprojectID = `project`.projectID AND `materialsproject`.MaterialsStorageID = `materialsstorage`.materialsSID WHERE  `materialsproject`.mainprojectID = $projectID"); 
 		$rowCheck = mysqli_fetch_row($resultrowCheck);?>
       
 <?php if($rowCheck != ""){ ?>
 
     <table class="table  table-bordered" style="cursor:default;">
           
           	
      <tr>  
      <th><small>Item Name</small></th> 
      <th><small>Quantity</small> </th> 
      </tr>
            
           
    <?php $result=mysqli_query($con,"SELECT * FROM `materialsproject` JOIN `project` JOIN `materialsstorage` ON `materialsproject`.mainprojectID = `project`.projectID AND `materialsproject`.MaterialsStorageID = `materialsstorage`.materialsSID WHERE  `materialsproject`.mainprojectID = $projectID");
		while ($row=mysqli_fetch_array($result)){ ?>           
          
    <tr>   	
        <td><?php echo 	$row['MaterialName']; ?> </td>
        <td><?php echo 	$row['MPQuantity']; ?></td>
    </tr>
    <?php }; ?>	 
    
    </table> 
    
    <?php }else{ ?>
		
		 <h4><small>No Materials Added to this Project Yet.</small></h4> 
         
	<?php	} ?>
    
    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<?php } ?>
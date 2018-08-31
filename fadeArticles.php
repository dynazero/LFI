   
 	<?php $result = mysqli_query($con,"SELECT * FROM homecontext ORDER BY `ID` DESC");  
		while($row=mysqli_fetch_array($result)){?>
        
 <div id="rticle<?php echo $row['ID'];?>"  class="modal fade">
     
     <div class="modal-dialog">
	<div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title"><?php echo $row['Title'];?></h4>
                      </div>
                       	
          <!-- <a href="Images/Upload/15.jpg" class="thumbnail" style="background-color:#333; width:150px; height:125px; margin-left:auto; margin-right:auto; border-radius:10px;">
                      <img src="Images/Upload/15.jpg" data-src="holder.js/300x300" alt="" style="width:150px; height:114px; border-radius:10px; margin-top:0px">
                            </a>-->
                            
                      <div class="modal-body">
                        <p> <?php echo $row['Description'];?></p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                     </div><!-- /.modal-content -->
                  </div><!-- /.modal-dialog -->
                  
                   </div><!-- /#rticle .modal -->
                   
                   <?php $row++; } ?>
				   
                   
                   
  
 	<?php $result = mysqli_query($con,"SELECT * FROM homeblog ORDER BY `ID` DESC");  
		while($row=mysqli_fetch_array($result)){?>
        
 <div id="blog<?php echo $row['ID'];?>"  class="modal fade">
     
     <div class="modal-dialog">
	<div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title"><?php echo $row['Title'];?></h4>
                      </div>
                       	
          <!-- <a href="Images/Upload/15.jpg" class="thumbnail" style="background-color:#333; width:150px; height:125px; margin-left:auto; margin-right:auto; border-radius:10px;">
                      <img src="Images/Upload/15.jpg" data-src="holder.js/300x300" alt="" style="width:150px; height:114px; border-radius:10px; margin-top:0px">
                            </a>-->
                            
                      <div class="modal-body">
                        <p> <?php echo $row['Description'];?></p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                     </div><!-- /.modal-content -->
                  </div><!-- /.modal-dialog -->
                  
                   </div><!-- /#rticle .modal -->
                   
                   <?php $row++; } ?>

  
 	<?php $result = mysqli_query($con,"SELECT * FROM homegallery ORDER BY `ID` DESC");  
		while($row=mysqli_fetch_array($result)){?>
        
 <div id="hGallery<?php echo $row['ID'];?>"  class="modal fade" style="overflow:auto;">
     
     <div class="modal-dialog">
	<div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                         <form id="hGallEditor" method="post" enctype="multipart/form-data">
                       
                       <input type="text"  name="hgallTitle" id="hgallTitle" value="<?php echo $row['Title'];?>" />
                       <br>
                       <img src="../<?php echo $row['Path'];?>" style="width:80px; height:80px; position:absolute; " />
                        
                        <input type="hidden" id="picturePath" name="picturePath" value="<?php echo $row['Path'];?>"/> 
                        <input type="hidden" id="hgallID" name="hgallID" value="<?php echo $row['ID'];?>"/>
                        <input name="file" type="file" style="margin-left:80px; margin-bottom:50px; margin-top:10px;"/> 
                      </div>
                       	
          <!-- <a href="Images/Upload/15.jpg" class="thumbnail" style="background-color:#333; width:150px; height:125px; margin-left:auto; margin-right:auto; border-radius:10px;">
                      <img src="Images/Upload/15.jpg" data-src="holder.js/300x300" alt="" style="width:150px; height:114px; border-radius:10px; margin-top:0px">
                            </a>-->
                            
                      <div class="modal-body">
                       <textarea rows="4" cols="50"  id="descript" name="descript"><?php echo $row['Description'];?></textarea>
                           <div id="btnLoose">
                           <button type="submit" class="btn btn-primary" style="float:left;
margin-right: 20px;" >Save</button>
                          </form>
                          <form id="hGallDeleter" method="post" enctype="multipart/form-data">
                            <input type="hidden" id="hgallDelID" name="hgallDelID" value="<?php echo $row['ID'];?>"/>
                          <button type="submit"  class="btn btn-default">Delete</button>
                           </form>
                           </div>
                      </div>
                      <div class="modal-footer">
                      
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                     </div><!-- /.modal-content -->
                  </div><!-- /.modal-dialog -->
                   
                   </div><!-- /#rticle .modal -->
                   
                   <?php $row++; } ?>



        
 <div id="hGalleryAdd"  class="modal fade" style="overflow:auto;">
     
     <div class="modal-dialog">
	<div class="modal-content">
                      <div class="modal-header">
                      
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                        <h3>Add Asset to Home Gallery</h3>
                         
                      </div>
                       	
          <!-- <a href="Images/Upload/15.jpg" class="thumbnail" style="background-color:#333; width:150px; height:125px; margin-left:auto; margin-right:auto; border-radius:10px;">
                      <img src="Images/Upload/15.jpg" data-src="holder.js/300x300" alt="" style="width:150px; height:114px; border-radius:10px; margin-top:0px">
                            </a>-->
                            
                      <div class="modal-body">
                       <form id="hGallAdd" method="post" enctype="multipart/form-data">
                       
                       <input type="text" name="hgallTitle" id="hgallTitle" value="" />
                     
                        <input name="file" required type="file" style="margin-bottom:50px; margin-top:10px;"/> 
                       <textarea rows="4" cols="50"  id="descript" name="descript"></textarea>
                           <div id="btnLoose">
                           <button type="submit" class="btn btn-primary"  >Save</button>
                          </form>
                         
                           </div>
                      </div>
                      <div class="modal-footer">
                      
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                     </div><!-- /.modal-content -->
                  </div><!-- /.modal-dialog -->
                   
                   </div><!-- /#rticle .modal -->
                   
                  
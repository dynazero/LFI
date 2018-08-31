
  
 	<?php $result = mysqli_query($con,"SELECT * FROM homeblog ORDER BY `ID` DESC");  
		while($row=mysqli_fetch_array($result)){?>
        
 <div id="blog<?php echo $row['ID'];?>"  class="modal fade" style="overflow:auto;">
     
     <div class="modal-dialog">
	<div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                          
                      </div>
                       	
          <!-- <a href="Images/Upload/15.jpg" class="thumbnail" style="background-color:#333; width:150px; height:125px; margin-left:auto; margin-right:auto; border-radius:10px;">
                      <img src="Images/Upload/15.jpg" data-src="holder.js/300x300" alt="" style="width:150px; height:114px; border-radius:10px; margin-top:0px">
                            </a>-->
                            
                      <div class="modal-body">
                      
                      <form id="blogEditor" method="post" enctype="multipart/form-data" style="margin-left:auto; margin-right:auto; width:200px;" >
                       
                       <input type="text" required name="formTitle" id="formTitle" value="<?php echo $row['Title'];?>" />
                       <br>
                       <img src="<?php echo $row['Path'];?>" style="width: 210px; height: 116px; position: absolute;" />
                        
                        <input type="hidden" id="picturePath" name="picturePath" value="<?php echo $row['Path'];?>"/> 
                        <input type="hidden" id="blogID" name="blogID" value="<?php echo $row['ID'];?>"/>
                        <input name="file" type="file" style="margin-left: 12px; margin-bottom: 0px; margin-top: 122px;"/> 
                     <!-- <textarea rows="4" cols="50" required id="descript" name="descript"><?php // echo $row['Description'];?></textarea> -->
                           <div id="btnLoose">
                           <button type="submit" class="btn btn-primary">Save</button>
                          </form>
                          
                         <!-- <form id="blogDeleter" method="post" enctype="multipart/form-data">
                            <input type="hidden" id="blogDelID" name="blogDelID" value="<?php echo $row['ID'];?>"/>
                          <button type="submit"  class="btn btn-default">Delete</button>
                           </form>-->
                           </div>
                       
                      </div>
                      <div class="modal-footer">
                      
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                     </div><!-- /.modal-content -->
                  </div><!-- /.modal-dialog -->
                   
                   </div><!-- /#rticle .modal -->
                   
                   <?php $row++; } ?>


  <!-- <div id="hBlogAdd"  class="modal fade" style="overflow:auto;">
     
     <div class="modal-dialog">
	<div class="modal-content">
                      <div class="modal-header">
                      
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                        <h3>Add Asset to Blogs</h3>
                         
                      </div>-->
                       	
          <!-- <a href="Images/Upload/15.jpg" class="thumbnail" style="background-color:#333; width:150px; height:125px; margin-left:auto; margin-right:auto; border-radius:10px;">
                      <img src="Images/Upload/15.jpg" data-src="holder.js/300x300" alt="" style="width:150px; height:114px; border-radius:10px; margin-top:0px">
                            </a>-->
                            
       <!--                <div class="modal-body">
                       <form id="hBlogAdd" method="post" enctype="multipart/form-data">
                       
                       <input type="text" required name="formTitle" id="formTitle" value="" />
                     
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
              <!--     </div><!-- /.modal-dialog -->
                   
               <!--     </div><!-- /#rticle .modal -->
                   
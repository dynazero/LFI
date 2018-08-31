


 	<?php $result = mysqli_query($con,"SELECT * FROM homecontext ORDER BY `ID` DESC");  
		while($row=mysqli_fetch_array($result)){?>
        
 <div id="hArticle<?php echo $row['ID'];?>"  class="modal fade" style="overflow:auto;">
     
     <div class="modal-dialog">
	<div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                         <form id="hArticleEditor" method="post" enctype="multipart/form-data">
                       
                       <input type="text"  name="hArticleTitle" id="hArticleTitle" value="<?php echo $row['Title'];?>" />
                       <br>
                        
                        <input type="hidden" id="hArticleID" name="hArticleID" value="<?php echo $row['ID'];?>"/>
                         
                      </div>
                       	
          <!-- <a href="Images/Upload/15.jpg" class="thumbnail" style="background-color:#333; width:150px; height:125px; margin-left:auto; margin-right:auto; border-radius:10px;">
                      <img src="Images/Upload/15.jpg" data-src="holder.js/300x300" alt="" style="width:150px; height:114px; border-radius:10px; margin-top:0px">
                            </a>-->
                            
                      <div class="modal-body">
                       <textarea rows="4" cols="50"  id="descript" name="descript"><?php echo $row['Description'];?></textarea>
                           <div id="btnLoose">
                           <button type="submit" class="btn btn-primary" >Save</button>
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



        

          <!-- <a href="Images/Upload/15.jpg" class="thumbnail" style="background-color:#333; width:150px; height:125px; margin-left:auto; margin-right:auto; border-radius:10px;">
                      <img src="Images/Upload/15.jpg" data-src="holder.js/300x300" alt="" style="width:150px; height:114px; border-radius:10px; margin-top:0px">
                            </a>-->
                            
                     
                  
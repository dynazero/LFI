<?php $result = mysqli_query($con,"SELECT * FROM galleryarchive WHERE `GalleryNumber` = 5");  
		while($row=mysqli_fetch_array($result)){?>
        
 <div id="gallarc<?php echo $row['ID'];?>"  class="modal fade" style="overflow:auto;">
     
     <div class="modal-dialog">
	<div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                         <form id="custGallEditor" method="post" enctype="multipart/form-data">
                       
                       <input type="text"  name="custGallTitle" id="custGallTitle" value="<?php echo $row['Title'];?>" placeholder="Title goes here"/>
                       
                        <select id="catSelection" name="catSelection" >
                        
                        <?php 		$gallFilt = $row['GalleryNumber'];
						
								if($gallFilt == 1){
									
									$gallNo = "Commercial Models";
									
									}
								if($gallFilt == 2){
									
									$gallNo = "Residential Models";
									
									}
								if($gallFilt == 3){
									
									$gallNo = "ModelShow Room";
									
									}
								if($gallFilt == 4){
									
									$gallNo = "High Rise";
									
									}
								if($gallFilt == 5){
									
									$gallNo = "Site Development";
									
									}
								if($gallFilt == 6){
									
									$gallNo = "Vessel Models";
									
									}
								if($gallFilt == 7){
									
									$gallNo = "Hotels, Condominium Office Building";
									
									}					
								
									$gallCat = $gallNo; 
                        
                        echo "<option  value='".$gallCat."'>". $gallCat ."</option>"; ?>
                       
					  		 
                        <?php $catresult = mysqli_query($con,"SELECT * FROM homeblog WHERE Title != '$gallCat'"); 
 
								while($rowA=mysqli_fetch_array($catresult)){ ?>
							
				<option value="<?php echo $rowA['ID']; ?>"><?php echo $rowA['Title']; ?> </option>
                                      

							<?php } ?>
						            
                             
                        
                          
                        </select>
                        
                        <br>
                       <img src="../<?php echo $row['PathFile'];?>" style="width:80px; height:80px; position:absolute; " />
                        
                        <input type="hidden" id="picturePath" name="picturePath" value="<?php echo $row['PathFile'];?>"/> 
                        <input type="hidden" id="custGallID" name="custGallID" value="<?php echo $row['ID'];?>"/>
                        <input name="file" type="file" style="margin-left:80px; margin-bottom:50px; margin-top:10px;"/> 
                      </div>
                       	
          <!-- <a href="Images/Upload/15.jpg" class="thumbnail" style="background-color:#333; width:150px; height:125px; margin-left:auto; margin-right:auto; border-radius:10px;">
                      <img src="Images/Upload/15.jpg" data-src="holder.js/300x300" alt="" style="width:150px; height:114px; border-radius:10px; margin-top:0px">
                            </a>-->
                            
                      <div class="modal-body">
                      
                       <textarea rows="4" cols="50"  id="descript" name="descript" placeholder="Some Description"><?php echo $row['Description'];?></textarea>
                           <div id="btnLoose">
                           <button type="submit" class="btn btn-primary" style="float:left;
margin-right: 20px;" >Save</button>
                          </form>
                          <form id="custGallDeleter" method="post" enctype="multipart/form-data">
                            <input type="hidden" id="custGallDelID" name="custGallDelID" value="<?php echo $row['ID'];?>"/>
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



        
 <div id="cGallAdd"  class="modal fade" style="overflow:auto;">
     
     <div class="modal-dialog">
	<div class="modal-content">
                      <div class="modal-header">
                      
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                        <h3>Add Asset to Gallery</h3>
                         
                      </div>
                       	
          <!-- <a href="Images/Upload/15.jpg" class="thumbnail" style="background-color:#333; width:150px; height:125px; margin-left:auto; margin-right:auto; border-radius:10px;">
                      <img src="Images/Upload/15.jpg" data-src="holder.js/300x300" alt="" style="width:150px; height:114px; border-radius:10px; margin-top:0px">
                            </a>-->
                            
                      <div class="modal-body">
                       <form id="custGallAdd" method="post" enctype="multipart/form-data">
                       
                       <input type="text" name="custGallTitle" id="custGallTitle" value="" /> 
                       
                       <select id="catSelection" name="catSelection" >
                      		 
                        <?php $catresult = mysqli_query($con,"SELECT * FROM homeblog "); 
 
								while($rowA=mysqli_fetch_array($catresult)){ ?>
							
				<option value="<?php echo $rowA['ID']; ?>"><?php echo $rowA['Title']; ?> </option>
                                      

							<?php } ?>
						            
                             
                        
                          
                        </select>
                        
                     
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
                   
                  




 	<?php $result = mysqli_query($con,"SELECT * FROM contact WHERE ID = 1");  
		while($row=mysqli_fetch_array($result)){?>
        
 <div id="companyInfo"  class="modal fade" style="overflow:auto;">
     
     <div class="modal-dialog">
	<div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                         
                       <h2>Company Info</h2>
                       
                       <br>
                        
                     
                         
                      </div>
                       	
          <!-- <a href="Images/Upload/15.jpg" class="thumbnail" style="background-color:#333; width:150px; height:125px; margin-left:auto; margin-right:auto; border-radius:10px;">
                      <img src="Images/Upload/15.jpg" data-src="holder.js/300x300" alt="" style="width:150px; height:114px; border-radius:10px; margin-top:0px">
                            </a>-->
                            
                      <div class="modal-body" style="overflow:hidden;">
                         
                     <form id="companyInfoEditor" method="post" enctype="multipart/form-data">
                    
                    <div class="inseparator"> <input type="text"  name="contactTel" id="contactTel" value="<?php echo $row['Telephone'];?>" /><h5>Telephone</h5></div>
                      <div class="inseparator"> <input type="text"  name="contactCell" id="contactCell" value="<?php echo $row['Cellphone'];?>" /><h5>Cellphone </h5></div>
                     <div class="inseparator"> <input type="text"  name="contactEmail" id="contactEmail" value="<?php echo $row['Email'];?>" />
                  <h5>Email </h5>   </div> 
                   <div class="inseparator">   <input type="text"  name="contactFb" id="contactfb" value="<?php echo $row['Facebook'];?>" /><h5>Facebook Url</h5></div>
                      
                     <div class="inseparator">  <textarea rows="4" cols="50"  id="descript" name="descript"><?php echo $row['Address'];?></textarea><h5>Address</h5></div>
                     
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
                            
                  
<!--								personal info fademodal										-->

 	<?php $result = mysqli_query($con,"SELECT * FROM users WHERE usersID = '$userID'");  
		while($row=mysqli_fetch_array($result)){?>
        
 <div id="personInfo"  class="modal fade" style="overflow:auto;">
     
     <div class="modal-dialog">
	<div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                        
                          <h2>Account Info</h2>
                         
                       <br>                        
                                              
                      </div>
                       	
          <!-- <a href="Images/Upload/15.jpg" class="thumbnail" style="background-color:#333; width:150px; height:125px; margin-left:auto; margin-right:auto; border-radius:10px;">
                      <img src="Images/Upload/15.jpg" data-src="holder.js/300x300" alt="" style="width:150px; height:114px; border-radius:10px; margin-top:0px">
                            </a>-->
                            
                      <div class="modal-body" style="overflow:hidden;">
                         
                     <form id="personInfoEditor" method="post" enctype="multipart/form-data">
                                                            
                    <div class="inseparator"> <input type="text"  name="userFName" id="userFName" value="<?php echo $row['FirstName'];?>" /><h5>FirstName</h5></div>
                      <div class="inseparator"> <input type="text"  name="userLName" id="userLName" value="<?php echo $row['LastName'];?>" /><h5>LastName </h5></div>
                     <div class="inseparator"> <input type="text" disabled name="userRole" id="userRole" value="<?php echo $rolecode;?>" /><h5>Logged In as</h5></div>
                   <div class="inseparator">   <input type="text"  name="userEmail" id="userEmail" value="<?php echo $row['Email'];?>" /><h5>Email</h5></div>
                 <div class="inseparator">  <input name="file" type="file" style="margin-left:80px; margin-bottom:50px; margin-top:10px;"/> <h5 style="text-decoration:underline;">Upload New Avatar</h5></div>
                   
                            <input type="hidden" name="userID" id="userID" value="<?php echo $row['usersID'];?>"/>
                    
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
                            
                     
                  
                     
                  
                  
                  
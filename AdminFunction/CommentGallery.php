<style>

.chatDivWrapper{	
	width:550px;
}

.chatDivA{
	width:250px;
	height:400px;
	position:relative;
	display:inline-table;
	}
	
.chatDivB{
	border:none;
	width:300px;
	height:350px;
	position:absolute;
	right:20px;
	top:10px;
	}
	
	
.mainChatBox{
 height:300px;
 overflow:auto;	
}

.chatText:nth-child(odd){
		background-color:#CCC;
}

</style>


<script>
$(document).ready(function(e) {
    

$("form#comment").submit(function(){

    var formData = new FormData($(this)[0]);

    $.ajax({
        url: "phpscripts/Parse_CommentGallery.php",
        type: 'POST',
        data: formData,
        async: false,
        success: function (data) {
			alert("Message Sent");
			startActivityRefresh();
			},
        cache: false,
        contentType: false,
        processData: false
    });

    return false;
});

$("form#disenbPhoto").submit(function(){

    var formData = new FormData($(this)[0]);

    $.ajax({
        url: "phpscripts/Parse_PhotoGalleryToggle.php",
        type: 'POST',
        data: formData,
        async: false,
        success: function (data) {
			alert(data);
			startActivityRefresh();			
			},
        cache: false,
        contentType: false,
        processData: false
    });

    return false;
});

});

</script>

 <?php $resultCategory = mysqli_query($con,"SELECT * FROM `projectgallery`");
						 
						 while($row=mysqli_fetch_array($resultCategory)){ ?>
						 
				 <div id="projgall<?php echo $row['projectgalleryID']; ?>"  class="modal fade" style="overflow:auto;">
                         <?php $projectAuth = $row['Approved'];
						 
						 if($projectAuth != 0){
							  
							 $approvalBtn = "<button class='btn btn-danger btn-block'>Disable";
							 
							  $pjGalleryStatus = "<h3><small>Enabled</small></h3>";
							 
							 }else{
								 
								 
						     $approvalBtn = "<button class='btn btn-success btn-block'>Enable";
								 
								 $pjGalleryStatus = "<h3><small>Disabled</small></h3>"; 
								 }
						 
						 ?>
                         
             
     <div class="modal-dialog" >
	<div class="modal-content">
                                    	
          <!-- <a href="Images/Upload/15.jpg" class="thumbnail" style="background-color:#333; width:150px; height:125px; margin-left:auto; margin-right:auto; border-radius:10px;">
                      <img src="Images/Upload/15.jpg" data-src="holder.js/300x300" alt="" style="width:150px; height:114px; border-radius:10px; margin-top:0px">
                            </a>-->
                            <div class="modal-header">
                       
                         
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                    
                      
                 			</div>
                 
                      <div class="modal-body">
                      
                      
           <div class="chatDivWrapper"> 
           
             <div class="chatDivA">
             <img src="phpscripts/<?php echo $row['ImagePath']; ?>" style="max-width:240px; max-height:240px; margin-bottom:10px;"/>
                     <!-- <textarea rows="4" cols="50" required id="descript" name="descript"><?php // echo $row['Description'];?></textarea> -->
<?php $tempProjectgallery = $row['projectgalleryID'];	?>

	

    <form id="comment" method="post" enctype="multipart/form-data">
    	<textarea required rows="3" cols="20" class="form-control" required type="text" name="message" style="max-height:150px; max-width:240px;"> </textarea>
        <input type="hidden" name="projectgalleryID" value="<?php echo $tempProjectgallery;?>"/>
        <input type="hidden" name="userRole" value="<?php echo $Role; ?>"/>
        <button class="btn btn-primary btn-block" style="margin-left:-1px;">Send</button>
    </form>
 
</div>

	<div class="chatDivB"> 
    
    	<h3 ><small > Message Box </small></h3>
        <form method="post" enctype="multipart/form-data" onMouseOver="chatBoxSeen()">  
        <div class="mainChatBox">
        
        <?php $result2 = mysqli_query($con,"SELECT * FROM `commentgallery` WHERE `projectgalleryID`='$tempProjectgallery' ORDER BY `date` DESC ");
		
		while($row2=mysqli_fetch_assoc($result2)){
			$user = $row2['usersID']; ?>
            <div class="chatText">
			
	<?php	$resultUser = mysqli_query($con,"SELECT `users`.Role AS Role FROM `commentgallery` JOIN `users` ON `commentgallery`.usersID = `users`.usersID WHERE `commentgallery`.usersID = '$user'");
		
			$role = mysqli_fetch_assoc($resultUser);
			$userRole = $role['Role'];
			
			if($userRole == 1){
				
				$user = "<h4 style='color:red;'>Admin";
				
				}else if($userRole == 2){
				
				$user = "<h4 style='color:green;'>Project Manager";
				
				}else if($userRole == 3){
				
				$user = "<h4 style='color:blue;'>Client";
				
				}
			
		?>	
        	
            	
        	<?php echo $user;?>:<span style="font-size:9px;"><?php echo $row2['date'];?></span></h4>
             
            <h6><?php echo $row2['comment'];?></h6>
        	<input type="hidden" id="commentID" name="commentID" value="<?php echo $row2['commentID'];?>"/>
            <input type="hidden" id="comment" name="comment" value="<?php echo $row2['comment'];?>"/>
        </div>
        <?php }?>
         
        </div> <!--/.mainChatBox-->
       </form>
  		</div><!--/.chatDivB-->
        
       
         </div> <!--/.chatDivWrapper-->   
                   
                     </div><!--/.modal-body-->   
                     
                     
                     </div><!-- /.modal-content -->
                  </div><!-- /.modal-dialog -->
                   
                   </div><!-- /#rticle .modal -->
                   
                 
<?php } ?>
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
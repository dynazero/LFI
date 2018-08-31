<style>
#editMSG{
	width:80px;
	margin-right:10px;		
	}

.innerSeparator{
	width:190px;
	min-height:100px;
	position:relative;
	left:75%;
}	
	
.imageInside{
width:80px; 
height:80px; 
display:inline-table; 
margin-bottom:10px;
margin-right:3px;
margin-left:3px;	
cursor: pointer;
border-radius: 2px;
}

.imageInside:hover{
	width:82px;
	height:82px;	
	margin-right:2px;
	margin-left:2px;
}	


.panel-title span:hover{
	cursor:pointer;	
	color:orange;
}

@media-moz-document url-prefix() {
  fieldset { display: table-cell; }
}



</style>
<div>
<script>
$(document).ready(function(e) {
    $("form#editMSG").submit(function(){

    var formData = new FormData($(this)[0]);

    $.ajax({
        url: "phpscripts/Parse_EditEmployee.php",
        type: 'POST',
        data: formData,
        async: false,
        success: function (data) {
            alert(data)
			location.reload();
        },
        cache: false,
        contentType: false,
        processData: false
    });

    return false;
});


$("form#projectImgAdd").submit(function(){

    var formData = new FormData($(this)[0]);

    $.ajax({
        url: "phpscripts/Parse_ProjImgAdd.php",
        type: 'POST',
        data: formData,
        async: false,
        success: function (data) {
            alert(data)
			location.reload();
        },
        cache: false,
        contentType: false,
        processData: false
    });

    return false;
});


$("form#projectCadAdd").submit(function(){

    var formData = new FormData($(this)[0]);

    $.ajax({
        url: "phpscripts/Parse_AddCad.php",
        type: 'POST',
        data: formData,
        async: false,
        success: function (data) {
            alert(data)
			location.reload();
        },
        cache: false,
        contentType: false,
        processData: false
    });

    return false;
});



});
</script>
<?php
include("../Connections/local.php");

$result = mysqli_query($con,"SELECT `project`.`Activated` AS ProjectStatus, `project`.`Employees` AS Employees,`project`.`ProjectName` AS ProjectName, `project`.`projectID` AS projectID, `users`.`UserName` AS UserName,`project`.`filePath` AS filePath FROM `project` JOIN `users` ON `project`.userID = `users`.usersID WHERE `project`.AdminOwner = $usersID");
	  $tblecount = 1; 
	  
	$rowCount =  mysqli_fetch_assoc($result);
	
	 if($rowCount != ""){ ?>	
     
<div class="tableCover">
<table class="table table-bordered">
        <thead>
          <tr>
          
            <th>My Projects</th>
            <th>Project Name</th>
            <th>Contact</th>
            <th>Project Status</th>    
            <!-- <th>Proposal</th> -->        
            <th>Employees</th>
            <th>Details Tab</th>            
          </tr>
        </thead>
        <tbody>
        
         <?php 
				
				
	$result = mysqli_query($con,"SELECT `project`.`Activated` AS ProjectStatus, `project`.`Employees` AS Employees,`project`.`ProjectName` AS ProjectName, `project`.`projectID` AS projectID, `users`.`UserName` AS UserName,`project`.`filePath` AS filePath FROM `project` JOIN `users` ON `project`.userID = `users`.usersID WHERE `project`.AdminOwner = $usersID");
	  $tblecount = 1;  ?>	
     
	<?php while($row=mysqli_fetch_assoc($result)){ ?> 
          <tr>
          
     <?php $projectStatus = $row['ProjectStatus']; 
	 		$projectID = $row['projectID'];
			
	 		if($projectStatus == 1){
				
				$projectStatus = "Activated";
				
				}else if($projectStatus == 2){
				
				$projectStatus = "OnProgress";
				
				}else if($projectStatus == 3){
				
				$projectStatus = "Declined";
				
				}else if($projectStatus == 4){
				
				$projectStatus = "Completed";
				
				}
				
				
	 
	 ?>
         
		     
            <td><?php echo $tblecount;?></td>
            <td><?php echo $row['ProjectName'];?></td>
            <td><?php echo $row['UserName'];?></td>
            <td><?php echo $projectStatus; ?> </td>
            <!-- <td><a href="AdminFunction/<?php // echo $row['filePath'];?>" download="PDFFile.pdf"><?php // echo $row['filePath'];?></a></td> -->
            <td style="min-width:180px;">
            <form id="editMSG" method="post" >
            <input type="hidden" name="projectID" value="<?php echo $projectID;?>"/>
            <input class="textEmp" type="text" name="Emp" value="<?php echo $row['Employees']; ?>"/>
            <button id="" class="btn btn-primary btn-xs">Update Employees</button>
            </form></td>
            <td><a class="list-group-item" href="#" data-toggle="modal" data-target="#proj<?php echo $row['projectID']; ?>">View Details</a></td>
            
          </tr>
          
          
          
             
             <?php   $tblecount++; }?>
             
            
          
			  
          
          

         
              
			
        </tbody>
      
      </table>
       <?php }else{ ?>
        <h4>No Assigned Projects Under This Project Manager Yet.</h4>
         <?php }?>
 
</div>



  
 	<?php $result = mysqli_query($con,"SELECT `project`.`adminOwner` AS adminOwner, `project`.`Activated` AS ProjectStatus, `project`.`Scale` AS Scale,  `project`.`filePath` AS filePath, `project`.`projectcategoryID` AS projectcategoryID, `project`.`Employees` AS Employees,`project`.`ProjectName` AS ProjectName, `project`.`projectID` AS projectID, `users`.`UserName` AS UserName,`project`.`filePath` AS filePath FROM `project` JOIN `users` ON `project`.userID = `users`.usersID WHERE `project`.AdminOwner = $usersID");
	 
	 
	 
		while($row=mysqli_fetch_array($result)){?>
        
 <div id="proj<?php echo $row['projectID'];?>"  class="modal fade" style="overflow:auto;">
     
     <div class="modal-dialog" style="min-width:800px;">
	<div class="modal-content">
                     
              <?php $projectCategory = $row['projectcategoryID']; 
			  		$employees = $row['Employees'];
					$filePath = $row['filePath'];
					$projectID = $row['projectID'];
					$ProjectStatus = $row['ProjectStatus'];
					$ProjectScale = $row['Scale'];
					$adminOwner = $row['adminOwner'];
					
					if($ProjectScale == ""){
						
						$ProjectScale = "N/A";
						
						}
			  
			 
			   ?>       
                    
                     
                       	
          <!-- <a href="Images/Upload/15.jpg" class="thumbnail" style="background-color:#333; width:150px; height:125px; margin-left:auto; margin-right:auto; border-radius:10px;">
                      <img src="Images/Upload/15.jpg" data-src="holder.js/300x300" alt="" style="width:150px; height:114px; border-radius:10px; margin-top:0px">
                            </a>-->
                            
                      <div class="modal-body" >
                      
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                        
                    
                      <h3>    <?php echo $row['ProjectName'];?> </h3>
                          
                           <div class="modalSeparator" style="margin:10px; width:90%; min-height:20px;"> 
                           
                         <h4 style="cursor:default; width:162px;float:left;">Client: <span style="text-decoration:underline;"><?php echo $row['UserName'];?> </span></h4>
                         
                         
                         
                         <?php  $resultCategory = mysqli_query($con,"SELECT * FROM `projectcategory` WHERE projectcategoryID = $projectCategory");
						 
						 while($row=mysqli_fetch_array($resultCategory)){ 
						 
						 $projectCategory = $row['CategoryName'];
						 
						 
				if($ProjectStatus == 1){
				
				$ProjectStats = " style='color:blue;'>Activated";
				
				}else if($ProjectStatus == 2){
				
				$ProjectStats = " style='color:green;'>OnProgress";
				
				}else if($ProjectStatus == 3){
				
				$ProjectStats = " style='color:red;'> Declined";
				
				}else if($ProjectStatus == 4){
				
				$ProjectStats = "style='color:blue; text-decoration:underline;'>Completed";
				
				}
						 
						 ?> 
                         <h5 style="cursor: default; float:left; width:250px; margin-left: 60px; position: relative; top: 30px; left: -222px; }" ><span style="font-weight:bold;">Project Status:</span><span <?php echo $ProjectStats; ?> </span> </h5>  
                         
                         <h5 style="cursor: default; float:left; width:250px; margin-left: 60px; position: relative; top: -6px; left: 84px; }" ><span style="font-weight:bold;">Project Category:</span><span><?php echo $projectCategory; ?> </span> </h5>  
                         
                         <h5 style="cursor: default; float:left; width:250px; margin-left: 60px; position: relative; top: -10px; left: -60px; }" ><span  style="font-weight:bold;">Project Scale:</span> <span style="text-decoration:underline; "> <?php echo $ProjectScale; ?> </span> </h5>   
                           
                         <h5 style="cursor: default; float:left; width:250px; margin-left: 60px; position: relative; top: -41px; left: 150px; }" ><span  style="font-weight:bold;">Assigned Manager:</span> <span style="text-decoration:underline;"> <?php echo $adminOwner; ?> </span> </h5> 
                         
                          <h5 style="cursor: default; float:left; width: 435px; margin-left: 60px; position: relative; top: -44px; left: 247px; }" ><span  style="font-weight:bold;">Employees:</span> <span style="text-decoration:underline;"> <?php echo $employees; ?> </span> </h5>         
                        
                         
                         
                         <?php } ?>
                       
                         
                         <div class="innerSeparator">
                          
                            </div>  <!--/.innerSeparator-->        
                          
                      </div>  <!--/.modalSeparator-->    
                          
                        
                       
                       <br>
                       <div class="closePanel" style="width:750px; max-height:500px;"> 
                       <div class="panel panel-primary" style="width:750px; max-height:320px; ">
                       <div class="panel-heading">
                        <h3 class="panel-title" style="margin-left: auto; margin-right: auto; text-align: center; width: 231px;">Progress Gallery
                        
                       <?php if($ProjectStatus != 3){ ?>
                        
                        <a data-toggle="modal" data-target="#projectAdd<?php echo $projectID; ?>"><span class="glyphicon glyphicon-plus-sign"></span></a> 
                        
					<?php   } ?>
                        
                        
                        </h3>
                        
                      </div>
                      <div class="panel-body" style="width:inherit; max-height:inherit; overflow:auto;">
                      
                        <?php 
						$resultrowPicture = mysqli_query($con,"SELECT * FROM `projectgallery` WHERE `projectID` = '$projectID'");											 
					$rowCount =  mysqli_fetch_assoc($resultrowPicture);
	
	
						if($rowCount != ""){ 
						 
						$resultPicture = mysqli_query($con,"SELECT * FROM `projectgallery` WHERE `projectID` = '$projectID'");
										 
						 while($row=mysqli_fetch_array($resultPicture)){ ?>
                         						

                         
                         <a href="#" data-toggle="modal" data-target="#projgall<?php echo $row['projectgalleryID']; ?>">
                         <img class="imageInside" src="phpscripts/<?php echo $row['ImagePath']; ?>" class="img-rounded img-responsive" />
                         </a>
                         
				
                         
                         <?php } ?>
                         
                         <?php if($ProjectStatus != 3){ ?>
                        
                         <a data-toggle="modal" data-target="#projectAdd<?php echo $projectID; ?>">
                         <img class="imageInside" src="ProfilePic/069596-blue-jelly-icon-alphanumeric-plus-sign-simple.png" class="img-rounded img-responsive" />
                         </a>
                         
                         <?php   } ?>
                         
                          <?php  }else{?>
                          
                 			Picture Goes Here
                             <a data-toggle="modal" data-target="#projectAdd<?php echo $projectID; ?>">
                            <img class="imageInside" src="ProfilePic/069596-blue-jelly-icon-alphanumeric-plus-sign-simple.png" class="img-rounded img-responsive" />
                  			</a>
                       <?php } ?>
                       
                          </div>
                        </div>
                        
                        <div class="panel panel-info" style="width:500px; max-height:190px; margin-left:auto; margin-right:auto;  ">
                      <div class="panel-heading">
                        <h3 class="panel-title">Document Reference</h3>
                      </div>
                      <div class="panel-body">
                      <ul>
                      	<li> 
                      <a href="AdminFunction/<?php echo $filePath;?>" download="ProjectFile"><?php echo $filePath;?></a> </li>
                     
                      
                      <?php $resultCategory = mysqli_query($con,"SELECT * FROM `projectfiles` WHERE projectID = '$projectID'");
						 
						 while($row=mysqli_fetch_array($resultCategory)){ ?>
						 
					<li><a href="<?php echo $row['pathfile'];?>" download="ProjectFile"><?php echo $row['pathfile'];?></a></li>
                         
                         <?php } ?>
                      
                         </ul>
                      </div>
                    </div>
                    
                    <div class="panel panel-danger" style="width:500px; max-height:190px; margin-left:auto; margin-right:auto; ">
                      <div class="panel-heading">
                        <h3 class="panel-title">Cad Documents
                        
                          <?php if($ProjectStatus != 3){ ?>
                        <a data-toggle="modal" data-target="#projectCadAdd<?php echo $projectID; ?>"><span class="glyphicon glyphicon-plus-sign"></span></a>
                        	<?php } ?>
                        
                        </h3>
                      </div>
                      <div class="panel-body">
                        <?php $resultCategoryA = mysqli_query($con,"SELECT * FROM `cadgallery` WHERE projectID = '$projectID'");
						 
						 $rowCountimg =  mysqli_fetch_assoc($resultCategoryA);
	
	
						if($rowCountimg != ""){ ?>
                         
                      <table class="table">
        <thead>
          <tr>
           <!-- <th>#</th> -->
            <th>File Path</th>
            <th>Date</th>
            <th>Uploader</th>
          </tr>
        </thead>
        <tbody>
         <?php $resultCategory = mysqli_query($con,"SELECT * FROM `cadgallery` WHERE projectID = '$projectID'");
						 
						 while($row=mysqli_fetch_array($resultCategory)){ ?>
          <tr>
            <!--<th scope="row">1</th>-->
            <td ><a href="<?php echo $row['cadpathfile'];?>" download="ProjectFile"><?php echo $row['cadpathfile'];?></a>  </td>
            <td><?php echo $row['Time'];?></td>
            <td><?php $uploader = $row['userID'];
					 
					 $resultUploader = mysqli_query($con,"SELECT `FirstName` FROM `users` WHERE usersID = '$uploader'"); 
					 
					 
					$uploader = mysqli_fetch_array($resultUploader);
					
					
					echo $uploader['FirstName'];
					
					
					 
					 ?> </td>
          </tr>
          
                         <?php } ?>
        </tbody>
      </table>
      <?php  }else { ?>
		  <h3> No Cad File Uploaded yet</h3>
		  
	   <?php	  } ?>
                      
                      </div>
                    </div>
      </div><!--/.closePanel-->                  
                     <!-- <textarea rows="4" cols="50" required id="descript" name="descript"><?php // echo $row['Description'];?></textarea> -->
                                                  
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
               
                <?php include('ProjectImageAdd.php');?>
               <?php include('CommentGallery.php')?>
               <?php include('ProjectCadAdd.php')?>
              
			   
			 
               
			   
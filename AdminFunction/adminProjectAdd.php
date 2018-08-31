<script>
$(document).ready(function(e) {
    $("form#projectAdd").submit(function(){

    var formData = new FormData($(this)[0]);

    $.ajax({
        url: "phpscripts/Parse_Project.php",
        type: 'POST',
        data: formData,
        async: false,
        success: function (data) {
            alert(data)
			reload.this
			
        },
        cache: false,
        contentType: false,
        processData: false
    });

    return false;
});
});
</script>



<h3 class="page-header">Projects <small>Project Add</small></h3>
         	<div class="projectContainer">
            
<form id="projectAdd" method="post" enctype="multipart/form-data">
    <input class="form-control" type="text" name="ProjectName" placeholder="Project Name" required/>
    
    <br>
    
    <br>
    
        <select class="form-control" id="projectadminID" name="projectadminID">
    
    	<?php $result=mysqli_query($con,"SELECT * FROM users WHERE `Role` = 1 AND `Activated` = 1 OR `Role` = 2 AND `Activated` = 1");
				while($row=mysqli_fetch_array($result)){
		?>
        	<option class="form-control" value="<?php echo $row['usersID'];?>"><?php echo $row['UserName'];?></option>
        <?php }?>
    </select>
    
    <h5><small>Project Manager</small></h5>
    
    <select class="form-control" id="projectownerID" name="projectownerID">
    
    	<?php $result=mysqli_query($con,"SELECT * FROM users WHERE `Activated` = 1 ");
				while($row=mysqli_fetch_array($result)){
		?>
        
        		<?php echo $row['Role'];
                
                if($row['Role'] == 1){
					
					$userTitle = 'Admin';
					
					}else if($row['Role'] == 2){
					
					$userTitle = 'Project Manager';
					
					}else if($row['Role'] == 3){
					
					$userTitle = 'Client';
					
					}
                
                ?>
                
        	<option class="form-control" value="<?php echo $row['usersID'];?>"><?php echo $row['UserName'];?> - <?php echo $userTitle;?></option>
        <?php }?>
    </select>
    
    <h5><small>Project Owner</small></h5>
    
    
    <select class="form-control" id="projectcategoryID" name="projectcategoryID">
    
    	<?php $result=mysqli_query($con,"SELECT * FROM projectcategory");
				while($row=mysqli_fetch_array($result)){
		?>
        	<option class="form-control" value="<?php echo $row['projectcategoryID'];?>"><?php echo $row['CategoryName'];?></option>
        <?php }?>
    </select>
    
    <h5><small>Project Category</small></h5>
    
   
    <input class="fileMove" name="file" type="file" placeholder="PDF FileProject" required />
     <h5><small>Please Choose a '.pdf ' File</small></h5>
    <button  class="btn btn-primary">Submit</button>
</form>

         </div><!--/.projectContainer-->
         


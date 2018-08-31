

<script>
$(document).ready(function(e) {
	
    $("form#clientProjAdd").submit(function(){

    var formData = new FormData($(this)[0]);

    $.ajax({
        url: "phpscripts/Parse_Proposal.php",
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



<h3 class="page-header">Send Proposal</h3>

         
            
<form id="clientProjAdd" method="post" enctype="multipart/form-data">
    <input class="form-control" type="text" name="ProjectName" placeholder="Project Name" required/>
    <input type="hidden" name="userID" value="<?php echo $userID?>" /> 
    <h5><small>Project Name</small></h5>
 
    <select class="form-control" id="projectcategoryID" name="projectcategoryID">
    
    	<?php $result=mysqli_query($con,"SELECT * FROM projectcategory");
				while($row=mysqli_fetch_array($result)){
		?>
        	<option value="<?php echo $row['projectcategoryID'];?>"><?php echo $row['CategoryName'];?></option>
        <?php }?>
    </select>
    
    <h5><small>Project Category</small></h5>
    
   
    <input  name="file" type="file" placeholder="PDF FileProject" required />
     <h5><small>Please Choose a '.pdf ' File</small></h5>
    <button  class="btn btn-primary">Submit</button>
</form>

    
         


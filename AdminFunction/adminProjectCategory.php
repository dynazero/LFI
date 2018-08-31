<?php include("../Connections/LFIConnection.php"); ?>
<script>
$(document).ready(function(e) {
    $("form#projCat").submit(function(){

    var formData = new FormData($(this)[0]);

    $.ajax({
        url: "phpscripts/Parse_ProjectCategory.php",
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
<h3 class="page-header">Customize <small>Project Category</small></h3>

<form id="projCat" method="post" enctype="multipart/form-data">
    	<input type="text" name="CategoryName" placeholder="Category Name" required/>
        
    
    <button class="btn btn-primary">Submit</button>
</form>
<div class="panel panel-primary" style="max-width:200px;">

<div class="panel-heading" >Categories Available:</div>
  <div class="panel-body">
  <table class="table" style="cursor:default;">
      <?php $result=mysqli_query($con,"SELECT * FROM `projectcategory` WHERE `projectcategoryID` != 0");
	while($row=mysqli_fetch_array($result)){?>	
    <tr>   	
    	<td><?php echo $row['CategoryName'];?></td>
    </tr>
      <?php }; ?>
     </table>  
	</div>
</div>

	

   

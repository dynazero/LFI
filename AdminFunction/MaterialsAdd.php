<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<?php require_once("../Connections/LFIConnection.php");?>


<script>
$(document).ready(function(e) {
    $("form#materialsAdd").submit(function(){

    var formData = new FormData($(this)[0]);

    $.ajax({
        url: "phpscripts/Parse_MaterialsAdd.php",
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

</head>

<body>

  <div class="modal-dialog">
    <div class="modal-content">
        
        <div class="modal-header">  
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        	<h4 class="modal-title">Materials Add</h4>
         </div>
         <div class="modal-body">
         	<div class="projectContainer">

<form id="materialsAdd" method="post" enctype="multipart/form-data">
	
    <select id="materiallistID" name="materiallistID">
    <?php 
		
		
		$result=mysqli_query($con,"SELECT * FROM materiallist");
		
		
		while($row=mysqli_fetch_assoc($result)){
	?>
    	<option value="<?php echo $row['materiallistID'];?>"><?php echo $row['MaterialName'];?></option>
    	
        
        <?php }?>
    </select>
    <select id="projectID" name="projectID">
    	<?php 
		
		
		$result=mysqli_query($con,"SELECT * FROM project");
		
		
		while($row=mysqli_fetch_assoc($result)){
			?>
          <option value="<?php echo $row['projectID'];?>"><?php echo $row['ProjectName'];?></option>
          
          <?php }?>
    </select>
    <input type="number" name="Quantity" placeholder="Quantity"/>
    
    
    
    <button>Submit</button>
</form>
		
 </div><!--/.modalContainer-->
         </div><!--/.modal-body-->
         <div class="modal-footer">
         
         </div>
        
    </div><!--/.modal-content-->
  </div><!-- /.modal-dialog -->
<body>

</body>
</html>


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
        	<h4 class="modal-title">Project Add</h4>
         </div>
         
         <div class="modal-body">
         	<div class="projectContainer">
            
<form id="projectAdd" method="post" enctype="multipart/form-data">
    <input type="text" name="ProjectName" placeholder="Project Name" required/>
    <select id="projectcategoryID" name="projectcategoryID">
    	<?php $result=mysqli_query($con,"SELECT * FROM projectcategory");
				while($row=mysqli_fetch_array($result)){
		?>
        	<option value="<?php echo $row['projectcategoryID'];?>"><?php echo $row['CategoryName'];?></option>
        <?php }?>
    </select>
    <input type="hidden" name="userID" value="<?php echo $_SESSION['usersID'];?>"/>
    
    <input name="file" type="file" placeholder="PDF FileProject" required/>
    <button>Submit</button>
</form>

         </div><!--/.projectContainer-->
         </div><!--/.modal-body-->
         <div class="modal-footer">
         
         </div>
        
    </div><!--/.modal-content-->
</div><!--/.modal-dialog-->


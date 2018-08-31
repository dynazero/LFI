<script>

$("form#UserManagement").submit(function(){

    var formData = new FormData($(this)[0]);

    $.ajax({
        url: "phpscripts/Parse_UserManage.php",
        type: 'POST',
        data: formData,
        async: false,
        success: function (data) {
            alert(data);
        },
        cache: false,
        contentType: false,
        processData: false
    });

    return false;
});

</script>

<?php require_once("../Connections/LFIConnection.php");

	
	

?>

<div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">User Management</h4>
      </div>
      <div class="modal-body">
        
      </div>
<form id="UserManagement" method="post">
	<select name="UserName">
    	<?php 
				$result = mysqli_query($con,"SELECT * FROM `users`");
				while($row= mysqli_fetch_assoc($result)){
		?>
        		<option value="<?php echo $row['usersID'];?>"><?php echo $row['UserName'];?></option>
                
        <?php }?>
        
        
        </select>
        <select name="Activate">
        	<option value="3">No</option>
            <option value="1">Yes</option>
    </select>
    <button>submit</button>
    
</form>
<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->



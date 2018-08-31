<script>

$(document).ready(function(e) {
    

$("form#sendActivation").submit(function(){

    var formData = new FormData($(this)[0]);

    $.ajax({
        url: "phpscripts/Parse_OldUserProposalManage.php",
        type: 'POST',
        data: formData,
        async: false,
        success: function (data) {
            alert(data);
			reload.this;
        },
        cache: false,
        contentType: false,
        processData: false
    });

    return false;
});

$("form#sendDeactivation").submit(function(){

    var formData = new FormData($(this)[0]);

    $.ajax({
        url: "phpscripts/Parse_OldUserProposalDecline.php",
        type: 'POST',
        data: formData,
        async: false,
        success: function (data) {
            alert(data);
			reload.this;
        },
        cache: false,
        contentType: false,
        processData: false
    });

    return false;
});
});

</script>

<?php include("../Connections/LFIConnection.php");

	
	

?>

<div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">New User Proposal</h4>
      </div>
      <div class="modal-body">
<?php
	require_once("../Connections/LFIConnection.php");

 $result = mysqli_query($con,"SELECT * FROM `project` JOIN `users` ON `project`.userID = `users`.usersID WHERE `project`.Activated = 0 AND `users`.Activated = 1");
	$row=mysqli_fetch_row($result);
	
	if($row != ""){ ?>
	
	
<table>

<tr>
<th>Project Name</th>
<th>User Name</th>
<th>PDF file Path</th>
<th>Send Ticket</th>
</tr>
<?php 

	$result = mysqli_query($con,"SELECT * FROM `project` JOIN `users` ON `project`.userID = `users`.usersID WHERE `project`.Activated = 0 AND `users`.Activated = 1");
	while($row=mysqli_fetch_assoc($result)){
?>
	<tr>
    
    <td><?php echo $row['UserName'];?></td>
    <td><?php echo $row['Email'];?></td>
    <td><a href="AdminFunction/<?php echo $row['filePath'];?>" download="PDFFile.pdf"><?php echo $row['filePath'];?></a></td>
     <td>
     <form id="sendActivation" name="sendPassEmail" method="post" >
     <input type="hidden" name="uName" value="<?php echo $row['UserName']?>"/>
     <input type="hidden" name="eMail" value="<?php echo $row['Email']?>"/>
     <input type="hidden" name="uId" value="<?php echo $row['usersID']?>"/>
     <input type="hidden" name="pId" value="<?php echo $row['projectID']?>"/>
     <button type="submit">Submit</button>  </td>
     
     </form>     
    <td>
    <form id="sendDeactivation" name="sendPassEmail" method="post">
    	<input type="hidden" name="uId" value="<?php echo $row['usersID']?>"/>
     	<input type="hidden" name="pId" value="<?php echo $row['projectID']?>"/>
        <input type="hidden" name="eMail" value="<?php echo $row['Email']?>"/>
    	<button type="submit">Decline </button> 
    </form></td>
    </tr>
	
<?php }?>

</table>
<?php }else{ ?>
	
    <h4 style="margin-left:auto; margin-right:auto;"> No New Proposal </h4>
	
   <?php }   ?> 
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->



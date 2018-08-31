
<?php require_once("../Connections/LFIConnection.php");
if(!isset($_SESSION)){session_start();}
if(isset($_SESSION['usersID'])){
 $userID = $_SESSION['usersID'];
 $usersID = $_SESSION['usersID'];
 }else {echo "UnAuthroized Loggin";
  header('Location: NiceTry.html');
 }
?>

<script>
$(document).ready(function(e) {
    $("form#projectAdmin").submit(function(){

    var formData = new FormData($(this)[0]);

    $.ajax({
        url: "phpscripts/Parse_ProjectAdmin.php",
        type: 'POST',
        data: formData,
        async: false,
        success: function (data) {
            alert(data)
			//location.reload();
        },
        cache: false,
        contentType: false,
        processData: false
    });

    return false;
});
});
</script>
<div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Project Admin</h4>
      </div>
      <div class="modal-body">
        <table>
<tr>
	<th>Project name</th>
    <th>Activated</th>
    <th>Project Category</th>
    <th>Project Owner</th>
    <th>Project Balance</th>
</tr>
<?php 

	$result=mysqli_query($con,"SELECT * FROM `project` JOIN `projectcategory` ON `project`.projectcategoryID=`projectcategory`.projectcategoryID JOIN `projectbalance` ON `project`.projectID=`projectbalance`.projectID");
	
	while($row=mysqli_fetch_assoc($result)){

?>
		
        <tr>
        <form id="projectAdmin" method="post" enctype="multipart/form-data">
        	<td><input type="hidden" name="ProjectID" value="<?php echo $row['projectID'];?>"/><?php echo $row['ProjectName'];?></td>
            <td><select name="Activated">
            	<option value="1" <?php if($row['Activated'] == 1){echo "selected='selected'";}?>>Activated
				</option>		
				<option value="0" <?php if($row['Activated'] == 0){echo "selected='selected'";}?>>Inactive</option>
                <option value="2" <?php if($row['Activated'] == 2){echo "selected='selected'";}?>>On Progress</option>
				<option value="3" <?php if($row['Activated'] == 2){echo "selected='selected'";}?>>Completed</option>
            </select></td>
            <?php $result2=mysqli_query($con,"SELECT * FROM `projectcategory`");
					
			?>
			
            <td><select name="ProjectCategory">
            		<?php while($row2=mysqli_fetch_assoc($result2)){?>
            		<option value="<?php echo $row2['projectcategoryID'];?>" <?php if($row['projectcategoryID'] == $row2['projectcategoryID']){echo "selected='selected'";}?>><?php echo $row2['CategoryName'];?>
                    </option>
					<?php }?>
				</select>
              
			</td>
            <td>
            	<select name="ProjectOwner">
                <?php $result3 = mysqli_query($con,"SELECT DISTINCT `UserName` FROM `users` JOIN `project`");
					while($row3 = mysqli_fetch_assoc($result3)){
			?>
            		<option value="<?php echo $row3['usersID'];?>" <?php if($row3['usersID'] == $row3['adminOwner']){echo "selected='selected'";}?>><?php echo $row3['UserName'];?></option>
            <?php }?>
                </select>	
            
            </td>
            <td><input type="number" name="ProjectBalance" value="<?php echo $row['Balance'];?>"/></td>
            <td><button>Update</button></td>
         </form>   
        </tr>
        

<?php }?>

</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->

<?php include("../../Connections/LFIConnection.php");

 	$searchUser = $_POST['MyData']; ?>
	
<h3><small>Disabled Accounts</small></h3>
<table class="table">
<tr>
<th>UserName</th>
<th>FirstName</th>
<th>LastName</th>
<th>Email</th>
<th>Reactivate Account</th>
</tr>
<?php 
	$result=mysqli_query($con,"SELECT * FROM `users` WHERE `Activated` = 3 AND `UserName` Like '%$searchUser%' OR `Activated` = 3 AND `FirstName` Like '%$searchUser%'" );
	while($row=mysqli_fetch_array($result)){ ?>
<tr>
<td><h4><?php echo $row['UserName'];?></h4></td>
<td><?php echo $row['FirstName'];?></td>
<td><?php echo $row['LastName'];?></td>
<td><?php echo $row['Email'];?></td>
<td>
<form id="userReactivator" method="post" enctype="multipart/form-data">
<input type="hidden" id="useracctID" name="useracctID" value="<?php echo $row['usersID'];?>"/>
<button type="submit" class="btn btn-success">Reactivate</button>
</form> 
</td>
</tr>
<?php } ?>
</table>
<script>

$(document).ready(function(e) {
	
	$("#userManagementB").hide();
	$("#userManagementbtnB").hide();
	
	$("#userManagementbtnA").click(function(){
		
		$("#userManagementA").hide();
		$("#userManagementB").show();
		$("#userManagementbtnA").hide();
		$("#userManagementbtnB").show();
		
		});
		
	$("#userManagementbtnB").click(function(){
		
		$("#userManagementA").show();
		$("#userManagementB").hide();
		$("#userManagementbtnA").show();
		$("#userManagementbtnB").hide();
		
		});
		
	
	
    $("form#userDeactivator").submit(function(){

    var formData = new FormData($(this)[0]);

    $.ajax({
        url: "phpscripts/Parse_UserDeactivate.php",
        type: 'POST',
        data: formData,
        async: false,
        success: function (data) {
             alert(data);
			 reload(this);
        },
        cache: false,
        contentType: false,
        processData: false
    });

    return false;
});

 $("form#userReactivator").submit(function(){

    var formData = new FormData($(this)[0]);

    $.ajax({
        url: "phpscripts/Parse_UserReactivate.php",
        type: 'POST',
        data: formData,
        async: false,
        success: function (data) {
             alert(data);
			 reload(this);
        },
        cache: false,
        contentType: false,
        processData: false
    });

    return false;
});

});

function userMgmtChecker(){
		
		var formData = $("#usermgmtchecker").val();
			
		//var formData = val;
		
    	//var formData = this.value;
		
	  $.post("phpscripts/Parse_UsernamemgmtChecker.php",{MyData:formData},function(result){
		 
		$("#userManagementA").html(result);
		userMgmtCheckerB();
	
  });

    return false;	
	
	};		
	
function userMgmtCheckerB(){
		
		var formData = $("#usermgmtchecker").val();
			
		//var formData = val;
		
    	//var formData = this.value;
		
	  $.post("phpscripts/Parse_UsernamemgmtCheckerB.php",{MyData:formData},function(result){
		 
		$("#userManagementB").html(result);
	
  });

    return false;	
	
	};			
 
</script>


<?php include("../Connections/local.php");?>
<h3 class="page-header">Users Account <small>User Management</small>
<button class="btn btn-success" id="userManagementbtnA">Reactivate</button>
<button  class="btn btn-danger" id="userManagementbtnB">Deactivate</button>
</h3>

<input class="form-control" id="usermgmtchecker" name="usermgmtchecker" onKeyUp="userMgmtChecker()" placeholder="*Search for Username or Firstname"/>

<div id="userManagementA"> 
<h3><small>Activate Accounts</small></h3>

<table class="table">
<tr>
<th>UserName</th>
<th>FirstName</th>
<th>LastName</th>
<th>Email</th>
<th>Deactivate Account</th>
</tr>
<?php 
	$result=mysqli_query($con,"SELECT * FROM `users` WHERE `Activated` = 1" );
	while($row=mysqli_fetch_array($result)){ ?>
<tr>
<td><h4><?php echo $row['UserName'];?></h4></td>
<td><?php echo $row['FirstName'];?></td>
<td><?php echo $row['LastName'];?></td>
<td><?php echo $row['Email'];?></td>
<td>
<form id="userDeactivator" method="post" enctype="multipart/form-data">
<input type="hidden" id="useracctID" name="useracctID" value="<?php echo $row['usersID'];?>"/>
<button type="submit" class="btn btn-danger">Deactivate</button>
</form> 
</td>
</tr>
<?php } ?>
</table>
</div><!--/#userManagementA-->

<div id="userManagementB"> 
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
	$result=mysqli_query($con,"SELECT * FROM `users` WHERE `Activated` = 3" );
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
</div>
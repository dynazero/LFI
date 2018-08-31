<script>
$(document).ready(function(e) {
    

$("form#personalEditor").submit(function(){

    var formData = new FormData($(this)[0]);

    $.ajax({
        url: "phpscripts/Parse_EditAcctInfo.php",
        type: 'POST',
        data: formData,
        async: false,
        success: function(data){
            alert(data);
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
<style>


.companyEditorContext{
	width:400px;
	margin-left:auto;
	margin-right:auto;
	}



</style>

<h3 class="page-header">Personal Info</h3>
<?php include("../Connections/local.php"); ?>

<?php $rowInfo = mysqli_query($con,"SELECT * FROM `users` WHERE `usersID` = $userID");

		$rowLine=mysqli_fetch_array($rowInfo);

 ?> 
<div class="companyEditorContext"> 	
<form id="personalEditor" method="post" enctype="multipart/form-data"> 
<input type="hidden" id="acctID" name="acctID" value="<?php echo $rowLine['usersID']?>"/>

<input class="form-control" type="text" id="FirstName" name="FirstName" value="<?php echo $rowLine['FirstName']?>"/><h5><small>First Name</small></h5> 

<input class="form-control" type="text" id="LastName" name="LastName" value="<?php echo $rowLine['LastName']?>"/><h5><small>Last Name</small></h5> 

<input class="form-control" type="text" id="email" name="email" value="<?php echo $rowLine['Email']?>"/>
<h5><small>Email</small></h5> 

<button class="btn btn-primary btn-block" style="margin-left:-1px;">Submit</button> 
</form>
</div>
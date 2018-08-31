<script>
$("form#companyInfoEditor").submit(function(){

    var formData = new FormData($(this)[0]);

    $.ajax({
        url: "phpscripts/Parse_EditContact.php",
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



</script>
<style>


.companyEditorContext{
	width:400px;
	margin-left:auto;
	margin-right:auto;
	}



</style>

<h3 class="page-header">Customize <small>Edit Company Information</small></h3>
<?php include("../Connections/local.php"); ?>

<?php $rowInfo = mysqli_query($con,"SELECT * FROM `contact`");

		$rowLine=mysqli_fetch_array($rowInfo);

 ?> 
<div class="companyEditorContext"> 	
<form id="companyInfoEditor" method="post" enctype="multipart/form-data"> 
<input type="hidden" id="companyID" name="companyID" value="<?php echo $rowLine['ID']?>"/>
<textarea class="form-control" type="text" id="address" cols="10" rows="3" name="address"><?php echo $rowLine['Address']?> </textarea>

<h5><small>Address</small></h5> 
<input class="form-control" type="text" id="telephone" name="telephone" value="<?php echo $rowLine['Telephone']?>"/><h5><small>Telephone</small></h5> 

<input class="form-control" type="text" id="cellphone" name="cellphone" value="<?php echo $rowLine['Cellphone']?>"/><h5><small>Cellphone</small></h5> 

<input class="form-control" type="text" id="email" name="email" value="<?php echo $rowLine['Email']?>"/>
<h5><small>Email</small></h5> 
<input class="form-control" type="text" id="facebook" name="facebook" value="<?php echo $rowLine['Facebook']?>"/>
<h5><small>Facebook URL</small></h5> 
<button class="btn btn-primary btn-block" style="margin-left:-1px;">Submit</button> 
</form>
</div>
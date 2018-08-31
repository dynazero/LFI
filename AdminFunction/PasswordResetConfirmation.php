<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="icon" href="../Images/webImage/lfiLogo.png" sizes="any" type="image/svg+xml"/><title>LFI Construction</title>
<script src="../jquery-1.11.1.js" type="text/javascript"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>


<script>
$(document).ready(function(e) {
    
	$(".matching").hide();
	
$("#ConfirmPassword").keyup(function(){
	if($("#Password").val() == $("#ConfirmPassword").val()){
		
		$(".matching").show('fast');
		
		}
	
	
	});
	
$("#ConfirmPassword").keyup(function(){
	if($("#Password").val() != $("#ConfirmPassword").val()){
		
		$(".matching").hide('fast');
		
		}
	
	
	})
	

$("form#ResetPassword").submit(function(){
if($("#Password").val() == $("#ConfirmPassword").val()){
    var formData = new FormData($(this)[0]);

    $.ajax({
        url: "phpscripts/Parse_ChangePassword.php",
        type: 'POST',
        data: formData,
        async: false,
        success: function (data) {
            alert(data)
			location.replace('http://luisintiascaledmodels.com/');
        },
        cache: false,
        contentType: false,
        processData: false
    });
}
    return false;
});


});
</script>

<style>

body{
	background-color:gray;
	}
	
.container{
	margin-top:10%;
	max-width:600px;
	text-align:center;
	}
	
.containerB{
margin-top:10px;
max-width:300px;
margin-left:auto;
margin-right:auto;
}

#invaLog{
	color:red;
	width:100px;
	position:relative;
	left:50%;
	}	
		
	
</style>
</head>

<body>
<?php 
$UserName = $_GET['u'];
$Password = $_GET['p'];

require ('../Connections/local.php'); 

$result = mysqli_query($con,"SELECT * FROM `users` WHERE `UserName`='$UserName' AND `Password`='$Password'");
if(mysqli_num_rows($result) > 0){
		
	
	
?>


			
          
<div class="container">
			<h4 class="form-signin-heading">Hello <?php  echo $UserName;?> you can now change your password</h4>
			  <div class=containerB>
				<form id="ResetPassword" method="post" class="form-signin">
                	<input type="hidden" name="UserName" value="<?php  echo $UserName;?>" />
                    <br>
                	<input class="form-control"  type="password" id="Password" name="Password" placeholder="Password" required/>
                    <br>
                    <input class="form-control"  type="password" id="ConfirmPassword" name="ConfirmPassword" placeholder="ConfirmPassword" required/>
                    <h5 class="matching"><small style="color:green;">*Password Match</small></h5>
                    
                    <br>
                    <input class="btn btn-lg btn-primary btn-block" type="submit" value="submit"/>
                </form>
<?php  }else{
		echo "Expired Reset Token";
	
	}?> 



			</div>
</div>
</body>
</html>
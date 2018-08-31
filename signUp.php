<?php 

if(isset($_SESSION)){
	session_destroy();
	
	}

?>





<style>

	
.logWrapper{
	width:20%;
	min-width:274px;
	min-height:272px;
	padding:2px;
	margin-left:auto;
	margin-right:auto;
	background:transparent;
	border-radius:10px;
	}

	
#invaLog{
	color:red;
	width:100px;
	position:relative;
	left:50%;
	}	
	
.checkbox {		
	text-align: center;
	}
	
.checkbox input[type="checkbox"]{
	margin-left: -20px;
	}
		
</style>

<script>

function login(){
		window.location.href = "/AdminFunction/AdminIndex.php";
	
	}
	
	
	
$(document).ready(function(e) {
    
	$("form#signupForm").submit(function(){

    var formData = new FormData($(this)[0]);

    $.ajax({
        url: 'signUpParse.php',
        type: 'POST',
        data: formData,
        async: false,
        success: function (data) {
            alert(data);
			$(".sigupform").val(" ");
        },
        cache: false,
        contentType: false,
        processData: false 	
    });

    return false;
		});
		
		
});

</script>

    
        <div class="logContainer modal-dialog">
	    	<div class="logWrapper">
      <form action="" id="signupForm" name="form1" method="POST" class="form-signin" role="form">
        <h2 class="form-signin-heading">Sign Up</h2>
        <input class="form-control sigupform" placeholder="Username" required autofocus name="UserName" id="UserName" type="text">
         <br>
         <input class="form-control sigupform" placeholder="Email" required type="email" name="Email" id="Email" >
          <br>
        <label class="checkbox">Please Upload your Proposal on *pdf format Only</label>
          <input class="sigupform" required name="file" type="file" > 
       <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="Login" id="Login" value="Login" >Sign Up</button>
      </form>
      <br>
		   </div>
    </div>


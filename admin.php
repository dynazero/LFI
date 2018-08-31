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
		window.location.href = "/AdminFunction/AdminIndexNew.php";
	
	}
	
	
	
$(document).ready(function(e) {
    
	$("form#loginForm").submit(function(){

    var formData = new FormData($(this)[0]);

    $.ajax({
        url: 'loginChecker.php',
        type: 'POST',
        data: formData,
        async: false,
        success: function (data) {
            alert(data)
			
			
				
			if(data == "Logging in"){
					login();
				}else{
					console.log('monitoring '+data);
					}
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
      <form action="loginChecker.php" id="loginForm" method="POST" class="form-signin"  role="form">
        <h2 class="form-signin-heading">Please Log In</h2>
        <input class="form-control" placeholder="Username"  autofocus required name="UserName" id="UserName" type="text"> <br>

        <input class="form-control" placeholder="Password"  type="password" required name="Password" id="Password" >
        <label class="checkbox">
        
          <input value="remember-me" type="checkbox"> Remember me
        </label>
        <div class="signup classic logBtn" data-toggle="modal"  data-target="#passReset">Forgot Password</div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="Login" id="Login" value="Login" >Sign in</button>
      </form>
      
      <br>
		   </div>
    </div>

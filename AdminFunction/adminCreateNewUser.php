<?php include("../Connections/LFIConnection.php"); ?>

<script>

$(document).ready(function(e) {
    
	
$("#genuserName").keyup(function(){

    var formData = this.value;
		
    
	
	 $.post("phpscripts/Parse_UsernameChecker.php",{MyData:formData},function(result){
    $("#usernCheck").html(result);
  });

    return false;
});


$("#geneMail").keyup(function(){

    var formData = this.value;
		
    
	
	 $.post("phpscripts/Parse_EmailChecker.php",{MyData:formData},function(result){
    $("#emailCheck").html(result);
  });

    return false;
});



	

	
$("form#sendGenEmail").submit(function(){

    var formData = new FormData($(this)[0]);

    $.ajax({
        url: "phpscripts/Parse_GeneratedEmailUser.php",
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


      <h3 class="page-header">Users Account <small>Create New User</small></h3>
         	<div class="projectContainer">
      	
 					<form id="sendGenEmail" method="post" enctype="multipart/form-data">
                       
                       <input class="form-control" type="text" required name="genuserName" id="genuserName" placeholder="Username" /> <div id="usernCheck" ></div>
                       <br>
                       <input class="form-control" required type="email" name="geneMail" id="geneMail" placeholder="Email" /> <div id="emailCheck"></div>
                       
                        <br>
                         <select class="form-control" id="userStatus" name="userStatus" >
                        
                        <option value="1">Admin</option>
                        <option value="2">Project Manager</option>
                        <option value="3">Client</option>
                          
                        </select>
                     
                        
                         <button type="submit" class="btn btn-primary"  >Send Email Confirmation</button>
                          </form>
                
</div><!--/.projectContainer-->

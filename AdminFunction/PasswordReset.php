<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>


<script>
$(document).ready(function(e) {
	$("form#PasswordReset").submit(function(){

    var formData = new FormData($(this)[0]);

    $.ajax({
        url: "AdminFunction/phpscripts/Parse_PasswordReset.php",
        type: 'POST',
        data: formData,
        async: false,
        success: function (data) {
            alert(data);
        },
        cache: false,
        contentType: false,
        processData: false
    });

    return false;
});
    
});

</script>
</head>

<body>
 <div class="logContainer modal-dialog">
	    	<div class="logWrapper" style="width:30%; margin-top:10px;">
	<h2 class="form-signin-heading">Please Enter Your Email</h2>
    <form id="PasswordReset" enctype="application/x-www-form-urlencoded" method="post">
    	<input type="email" name="Email" placeholder="JohnSmith@luisintiascaledmodels.com" size="30"/>
        <input type="submit" value="Submit"/>
    </form>
    </div>
    </div>
    
</body>
</html>
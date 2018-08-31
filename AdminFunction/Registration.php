<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<script src="../js/jquery-1.11.1.js" type="text/javascript"></script>
<script>
$(document).ready(function(e) {
    $("form#data").submit(function(){

    var formData = new FormData($(this)[0]);

    $.ajax({
        url: "phpscripts/Parse_registration.php",
        type: 'POST',
        data: formData,
        async: false,
        success: function (data) {
            alert(data)
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
<form id="data" method="post" enctype="multipart/form-data">
    <input type="text" name="UserName" placeholder="User Name" required/>
        <input type="email" name="Email" placeholder="Email" required/>
		<input type="text" name="FirstName" placeholder="First Name" required/>
        <input type="text" name="LastName" placeholder="Last Name" required/>
    
    <button>Submit</button>
</form>
</body>
</html>
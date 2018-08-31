<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<script src="js/jquery-1.11.1.js"></script>
<script>
$(document).ready(function(e) {
	var Users = new Array();
	
	$("form#data").submit(function(){

    var formData = new FormData($(this)[0]);

    $.ajax({
        url: "DemoJsonphp.php",
        type: 'POST',
        data: formData,
		dataType: 'json',
        async: false,
        success: function (data) {
            alert(data);
			console.log(data);
			Users = data;
        },
        cache: false,
        contentType: false,
        processData: false
    });

    return false;
});

$("#ClickMe").click(function(){
	
		$("#Nothing").val(Users.Email+" "+Users.Password);
	});
    
});

</script>
</head>

<body>
<form id="data" method="post" enctype="multipart/form-data">
    <input type="text" name="usersID" />
    
    <button>Submit</button>
</form>

<input id="ClickMe" type="button"/>
<input type="text" id="Nothing" placeholder="Result"/>

</body>
</html>

<script>
$(document).ready(function(e) {
    $("form#matCustom").submit(function(){

    var formData = new FormData($(this)[0]);

    $.ajax({
        url: "phpscripts/Parse_Materials.php",
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
});
</script>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form id="matCustom" method="post" enctype="multipart/form-data">
    <input type="text" name="MaterialName" placeholder="Material Name" required/>
    <input type="number" name="Scale" placeholder="Scale" required/>
    <input type="number" name="Weight" placeholder="Weight" required/>
    <input type="number" name="MinimumRange" placeholder="Minimum" required/>
    <input type="number" name="MaximumRange" placeholder="Maximum" required/>
    
    <button>Submit</button>
</form>

</body>
</html>


<script>
$(document).ready(function(e) {
    $("form#projCat").submit(function(){

    var formData = new FormData($(this)[0]);

    $.ajax({
        url: "phpscripts/Parse_ProjectCategory.php",
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
</head>

<body>
<form id="projCat" method="post" enctype="multipart/form-data">
    	<input type="text" name="CategoryName" placeholder="Category Name" required/>
        
    
    <button>Submit</button>
</form>

<html>
<head>

<script>
$(document).ready(function(e) {
    $("form#projGall").submit(function(){

    var formData = new FormData($(this)[0]);

    $.ajax({
        url: "phpscripts/Parse_ProjectGallery.php",
        type: 'POST',
        data: formData,
        async: false,
        success: function (data) {
            alert(data);
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
<?php require_once("../Connections/LFIConnection.php");
			session_start();
				$LoginID = $_SESSION['usersID'];
				
				?>
<form id="projGall" method="post" enctype="multipart/form-data">
    <select id="ProjectName" name="ProjectName">
    	<?php
				
			$result = mysqli_query($con,"SELECT * FROM `project`");
				while($row=mysqli_fetch_assoc($result)){
		?>
    	<option value="<?php echo $row['projectID'];?>"><?php echo $row['ProjectName']?></option>
        <?php } ?>
					
			
    </select>
     <input type="file" name="file[]" placeholder="Image File" required multiple>

    
    <button>Submit</button>
    
</form>


</body>

</html>


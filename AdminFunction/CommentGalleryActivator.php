<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<script>
$("form#commentActivate").submit(function(){

    var formData = new FormData($(this)[0]);

    $.ajax({
        url: "AdminFunction/phpscripts/Parse_CommentGalleryActivator.php",
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
</script>
<body>
<table>

<?php 
	require_once("../Connections/LFIConnection.php");
	$result = mysqli_query($con,"SELECT * FROM `commentgallery` WHERE Activated=0");
	
	while($row=mysqli_fetch_assoc($result)){
		
?>
	<tr>
    <td>
    	<?php echo $row['comment'];?>
    </td>
    <td>
    	<form id="commentActivate" method="post">
        	<input type="hidden" name="commentID" value="<?php echo $row['commentID']?>"/>
        	<select name="Activated">
            	<option value="0">DeActivate</option>
            	<option value="1">Activate</option>
            </select>
        </form>
    </td>
    </tr>
    
    
<?php }?>
	

</table>
</body>
</html>
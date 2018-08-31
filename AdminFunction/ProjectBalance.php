
<script>
$(document).ready(function(e) {
    $("form#projBal").submit(function(){

    var formData = new FormData($(this)[0]);

    $.ajax({
        url: "phpscripts/Parse_ProjectBalance.php",
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


<form id="projBal" method="post" enctype="multipart/form-data">
    <select id="projectID" name="projectID">
    <?php 
		if(!isset($_SESSION)){
			session_start();
		}
		
		$adminOwner = $_SESSION['usersID'];
		$result = mysqli_query($con,"SELECT * FROM `project` WHERE `adminOwner`='$adminOwner'");
		while($row=mysqli_fetch_assoc($result)){
	?>
    <option value="<?php echo $row['projectID'];?>"><?php echo $row['ProjectName'];?></option>
    
    <?php }?>
    </select>
    <input type="number" name="Balance" placeholder="Balance Amount" required/>
    
    
    <button>Submit</button>
</form>


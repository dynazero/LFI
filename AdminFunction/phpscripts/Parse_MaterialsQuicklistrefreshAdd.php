<?php include("../../Connections/local.php"); ?>

 <?php $resulttype=mysqli_query($con,"SELECT * FROM `materialsstorage`");
                while($rowtype=mysqli_fetch_array($resulttype)){ ?>
                
    	<option value="<?php echo $rowtype['materialsSID']; ?>"><?php echo $rowtype['MaterialName']; ?></option> 
	     <?php } ?>
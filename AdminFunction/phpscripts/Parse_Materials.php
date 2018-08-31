<?php
	require_once("../../Connections/LFIConnection.php");
    print_r($_POST);
    print_r($_FILES);
	
	$MaterialName=$_POST['MaterialName']; 
    $Scale=$_POST['Scale']; 
    $Weight=$_POST['Weight']; 
    $MinimumRange=$_POST['MinimumRange']; 
    $MaximumRange=$_POST['MaximumRange']; 
	
	
	
	mysqli_query($con,"INSERT INTO materiallist (MaterialName,Scale,Weight,MinimumRange,MaximumRange) VALUES('$MaterialName','$Scale','$Weight','$MinimumRange','$MaximumRange')");
	
?>
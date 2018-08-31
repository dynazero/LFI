<?php
	require_once("../../Connections/LFIConnection.php");
    print_r($_POST);
    print_r($_FILES);
	
	$projectID=$_POST['projectID'];
    $Balance=$_POST['Balance'];
	
	mysqli_query($con,"INSERT INTO projectbalance (projectID,Balance) VALUES('$projectID','$Balance')");
?>



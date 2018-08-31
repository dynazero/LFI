<?php 
	require_once("../../Connections/local.php");
	
    $Activate =	$_POST['Activate'];
	$UserName = $_POST['UserName'];
	mysqli_query($con,"UPDATE `users` SET `Activated`='$Activate' WHERE `UserName`='$UserName'");
	echo "Changed Active Status Complete";
?>
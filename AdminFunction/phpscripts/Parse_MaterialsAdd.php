<?php
    print_r($_POST);
    print_r($_FILES);
	
	
	if(!isset($_SESSION)){session_start();}
	require_once("../../Connections/LFIConnection.php");
	$usersID = $_SESSION['usersID'];
	$Date= date('Y-m-d');	
	$materiallistID=$_POST['materiallistID'];
    $projectID=$_POST['projectID'];
    $Quantity=$_POST['Quantity'];
	
	mysqli_query($con,"INSERT INTO materials (projectID,usersID,materiallistID,Quantity,Date)
						VALUES('$projectID','$usersID','$materiallistID','$Quantity','$Date')");
	echo "Materials Added";
	
?>




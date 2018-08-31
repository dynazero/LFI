<?php 

require_once("../../Connections/local.php");
$Email = $_POST['MyData'];
$result= mysqli_query($con,"SELECT * FROM `users` WHERE Email = '$Email'");
	$row=mysqli_fetch_row($result);
	
if($Email != ""){
	if($row != 0){
	echo 'Email Used';
	}else{
		echo 'Email Available';
		}
}else{
	
	echo "";	
	
	}
	
?>
<?php 

require_once("../../Connections/local.php");
$UserName = $_POST['MyData'];
$result= mysqli_query($con,"SELECT * FROM `users` WHERE UserName = '$UserName'");
	$row=mysqli_fetch_row($result);
	
if($UserName != ""){
	if($row != 0){
	echo 'Username Taken';
	}else{
		echo 'Username Available';
		}
}else{
	
	echo "";	
	
	}
	
?>
<?php 

require_once("Connections/LFIConnection.php"); 
$UserName = $_POST['usersID'];
$result= mysqli_query($con,"SELECT * FROM `users` WHERE usersID='$UserName'");

while($row=mysqli_fetch_assoc($result)){
	echo json_encode($row);
}
?>
<?php 
include("../../Connections/local.php");

   $userID = $_POST['useracctID'];


	mysqli_query($con,"UPDATE `users` SET `Activated`= 3 WHERE `usersID` = $userID");

	echo "Account Deactivated";
?>
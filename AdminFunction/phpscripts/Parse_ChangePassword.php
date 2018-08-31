<?php
 require ('../../Connections/local.php'); 

$UserName = $_POST['UserName'];
$Password = $_POST['Password'];

$Passwordmd5 = md5($Password);

mysqli_query($con,"UPDATE `users` SET `Password`='$Passwordmd5' WHERE `UserName`='$UserName'");
echo "Changed Password";
?>
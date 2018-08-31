<?php 


require_once("../../Connections/local.php");


$Username = $_POST['genuserName'];
$Email = $_POST['geneMail'];
$Stat = $_POST['userStatus'];
$Password = md5($Password);


 mysqli_query($con,"INSERT INTO `users`(`usersID`, `UserName`, `FirstName`, `LastName`, `Email`, `Password`, `Activated`, `Role`, `Avatar`) VALUES ('','$Username','','','$Email','$Password',1,'$Stat','')");
	
	
$result = mysqli_query($con,"SELECT * FROM `users` WHERE `Email`='$Email'");
$row = mysqli_fetch_assoc($result);

if(mysqli_num_rows($result) > 0){
		$to = $Email;
$subject = "Password Reset from LFI Models";
$UserName = $row['UserName'];
$FirstName = $row['FirstName'];
$LastName = $row['LastName'];
$Password = $row['Password'];


//define the body of the message.
//Turn on output buffering
$message ='<h2>Hello '.$UserName.'</h2><p>This is an automated message from LFI. If you wish not to continue your transaction to us, please disregard this email.</p><p>One of our Admins activate your account, for us to continue and discuss further more information for future projects,</p><p>click the link below your password to login will be:<br /><b>'.$Password.'</b></p><p><a href="http://luisintiascaledmodels.com/AdminFunction/PasswordResetConfirmation.php?u='.$UserName.'&p='.$Password.'">Click here now to apply the temporary password shown below to your account</a></p><p>If you do not click the link in this email, no changes will be made to your account. In order to set your login password to the temporary password you must click the link above.</p>';
?>

<?php

//copy current buffer contents into $message variable and delete current output buffer



// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <admin@luisintiascaledmodels.com>' . "\r\n";
$headers .= 'Cc: admin@luisintiascaledmodels.com' . "\r\n";
	mail($to,$subject,$message,$headers);
	
	echo "Email Sent";
	}else{
			echo "No Email Address exist";
		
		}
?>
	
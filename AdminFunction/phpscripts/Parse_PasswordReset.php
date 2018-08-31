<?php 

require_once("../../Connections/local.php");


$Email = $_POST['Email'];

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
$message ='<h2>Hello '.$UserName.'</h2><p>This is an automated message from yoursite. If you did not recently initiate the Forgot Password process, please disregard this email.</p><p>You indicated that you forgot your login password. We can generate a temporary password for you to log in with, then once logged in you can change your password to anything you like.</p><p>After you click the link below your password to login will be:<br /><b>'.$Password.'</b></p><p><a href="http://luisintiascaledmodels.com/AdminFunction/PasswordResetConfirmation.php?u='.$UserName.'&p='.$Password.'">Click here now to apply the temporary password shown below to your account</a></p><p>If you do not click the link in this email, no changes will be made to your account. In order to set your login password to the temporary password you must click the link above.</p>';
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
	
	echo "Email Sent, Please check your Email and double Check for spam folder or Junk Folder as this is an automated Email";
	}else{
			echo "No Email Address exist";
		
		}
?>
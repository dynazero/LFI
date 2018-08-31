<?php 


require_once("../../Connections/local.php");


$Email = $_POST['eMail'];
$userID = $_POST['uId'];
$projectID = $_POST['pId'];

    mysqli_query($con,"UPDATE `project` SET `Activated`= 0, `View` = 2 WHERE `userID` = $userID");
	
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
$message ='<h2>Hello '.$UserName.'</h2><p>This is an automated message from LFI. We are very sorry to inform you that your proposal was declined and we are open for your new proposal and we hope that you consider our company for your future projects.</p><p>Sent a proposal and we may discuss it further more.</p><p>click the link below to </p><p><a href="http://luisintiascaledmodels.com/">redirect to our page.</a> and check out our new designs.</p><p>Thank you very much and Have a nice day.</p>';
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
	
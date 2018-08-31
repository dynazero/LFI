<?php

require_once("../../Connections/LFIConnection.php");
    
	
	$UserName=$_POST['UserName'];
    $Email=$_POST['Email'];
    $FirstName=$_POST['FirstName'];
    $LastName =$_POST['LastName'];
	$Pass = rand(0,1000);
	$Password = md5($Pass);
	
	
		
		$result=mysqli_query($con,"SELECT * FROM users WHERE UserName = '$UserName'");
		 if(!mysqli_fetch_array($result))
			{
				
				if(empty($_POST['Role']) === true){
														$Role=3;
													}
	
		if (!mysqli_query($con,"INSERT INTO users (UserName,FirstName,LastName,Email,Password,Role)
						VALUES('$UserName','$FirstName','$LastName','$Email','$Password','$Role')"))
 						 {
  								echo("Error description: " . mysqli_error($con));
  						 }else{
							 
							 	echo("Registration Complete... Please wait for the Aministrator to send your password to your Email");
							 }
				
				
			}else {
				
				echo "User Name Already Existed";
				}
		
		
		
	
	
		
		
		
		
	
	
?>




<?php  include('init.php');
	

	$UserName= $_POST['UserName'];
	$Password= $_POST['Password'];
	
	if(empty ($UserName) === true || empty ($Password) === true){
		$errors[]= 'You need to enter a username and password';
	}//else if(user_exists($UserName) === false) {
		//$errors[] = 'We can\'t find that username,have you registered?';}
	 else if(user_active($UserName) === true) {
	 	$errors[] = 'Account not yet activated';
	}else{
		
		$login = login($UserName , $Password);
		if ($login === false){
			$errors[] = 'The Username/Password combination is incorrect';
		
		}else if(user_deactivated($UserName) === true) {
	 	$errors[] = 'Account Deactivated';
	}else{
			$_SESSION['usersID'] = $login;
			
			//header('Location: mainAdmin.php');
			echo"Logging in";
			exit();
			
		}
	}
	echo output_error($errors);
	//print_r($errors);	

	
?>

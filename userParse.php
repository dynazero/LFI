<?php

function user_register(){
	
	$query = mysql_query("INSERT INTO `users`(`usersID`, `UserName`, `FirstName`, `LastName`, `Email`, `Password`, `Activated`, `Role`) VALUES ('', 'yesItsme','thisisMYNAME','mylastname','myEMAIL','justconsider', '1' , '2')");
	
}

function logged_in(){
	return (isset($_SESSION['usersID'])) ? true : false;	
	
}

function email_exists($Email){
			$Email = sanitize($Email);
			
			
			$query =mysql_query("SELECT COUNT(`usersID`) FROM `users` WHERE `Email` = '$Email' AND `Activated` = 1");
	
			
			return (mysql_result($query, 0) == 1) ?  true : false;
			
}

function prop_exists($Email){
			$Email = sanitize($Email);
			
			
			$query =mysql_query("SELECT COUNT(`usersID`) FROM `users` WHERE `Email` = '$Email' AND `Activated` = 0");
	
			
			return (mysql_result($query, 0) == 1) ?  true : false;
			
}
		
function user_exists($UserName){
			$UserName = sanitize($UserName);
			
	
			$query =mysql_query("SELECT COUNT(`usersID`) FROM `users` WHERE `UserName` = '$UserName'");
	
			
			return (mysql_result($query, 0) == 1) ?  true : false;
			
}


function user_active($UserName){
			$UserName = sanitize($UserName);
			
			$query = mysql_query("SELECT COUNT(`usersID`) FROM `users` WHERE `UserName` = '$UserName' AND `Activated` = 0");
			
			return (mysql_result($query, 0) == 1) ? true : false;
		
}

function user_id_from_username($UserName){
	$UserName = sanitize($UserName);
	
	return mysql_result(mysql_query("SELECT `usersID` FROM `users` WHERE `UserName` = '$UserName'"), 0,'usersID');
	} 

function user_deactivated($UserName){
			$UserName = sanitize($UserName);
			
			
			$query =mysql_query("SELECT COUNT(`usersID`) FROM `users` WHERE `UserName` = '$UserName' AND `Activated` = 3");
	
			
			return (mysql_result($query, 0) == 1) ?  true : false;
			
}

function login($UserName, $Password){
	$usersID = user_id_from_username($UserName);	
	
	$UserName = sanitize($UserName);
	$Password = md5($Password);
	
	
	return (mysql_result(mysql_query("SELECT COUNT(`usersID`) FROM `users` WHERE BINARY `UserName`  = '$UserName' AND BINARY `Password` = '$Password' "), 0) == 1 ) ? $usersID : false;
}



?>
<?php 
session_start();
//error_reporting(0);


require ('Connections/local.php');
require	('general.php');
require ('userParse.php');

/*if(logged_in () === true){
	$session_user_id = $_SESSION['usersID'];
	$user_data = user_data($session_user_id, 'usersID', 'UserName', 'Password', 'FirstName', 'LastName');

}*/

$errors = array();
?>
<?php 

function sanitize($data){
	return mysql_real_escape_string($data);
	
}

function output_error($errors){
	//$output = array();
	//foreach($errors as $error){
	//	$output[] = '<li>' . $error . '</li>';
	//}
	
	return '' .implode ('' ,$errors)  .'';	
}

?>
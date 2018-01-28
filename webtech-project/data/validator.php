<?php 

require 'data_access.php';


function validate_user_id($user)
{
	$organizational_id = explode('-', $user['organizational_id']);
	if( strlen($organizational_id[0]) == 2 || strlen($organizational_id[0]) === 4 && ( (strlen($organizational_id[1]) == 5 || strlen($organizational_id[1]) == 4) && strlen($organizational_id[2]) == 1)) 
		return true;
	return false;
}

function user_exists($user) 
{

	$organizational_id = $user['organizational_id'];
	$password = $user['password'];

	$sql = "select * from login where organizational_id = '$organizational_id' and password = '$password'";

	return execute_sql($sql);
}
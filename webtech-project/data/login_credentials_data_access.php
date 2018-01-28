<?php

require 'data_access.php';

function validateUser($user)
{
	$userId = explode('-', $user['organizational_id']);
	if( strlen($userId[0]) == 2 || strlen($userId[0]) === 4 && ( (strlen($userId[1]) == 5 || strlen($userId[1]) == 4) && strlen($userId[2]) == 1)) {
        if( $result = userExists($user['organizational_id'], $user['password']) ) {
            return $result;
        }
        return false;
    }
	return false;
}

function userExists($userId, $pass)
{
	$sql = "SELECT * FROM login WHERE organizational_id = '$userId' AND password = '$pass'";
	$result = executeSql($sql);
    return $result ? $result : false;
}

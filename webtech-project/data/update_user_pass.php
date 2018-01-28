<?php

require 'data_access.php';


function change_password($user_id, $password)
{
    $sql = "update `login` SET `password` = '$password' where `login`.`organizational_id` = '$user_id';";

    return execute_sql($sql);
}

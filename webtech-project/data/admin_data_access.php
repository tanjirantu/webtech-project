<?php

require 'data_access.php';

function get_admin_info($id)
{
    $sql = "select * from admins";

    return execute_sql($sql);
}

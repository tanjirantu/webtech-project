<?php

session_start();

require '../../data/admin_data_access.php';

$data = get_admin_info($_SESSION['organizational_id']);

if($data) {
    foreach ($data as $value) {
        $_SESSION['first_name'] = $value['first_name'];
        $_SESSION['last_name'] = $value['last_name'];
        $_SESSION['email'] = $value['email'];
        //print_r($value);
    }
}
//var_dump($_SESSION['organizational_id']);
//var_dump($data);

require '../views/admin.view.php';

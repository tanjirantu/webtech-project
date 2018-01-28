<?php

session_start();

require '../../data/update_user_pass.php';

$message = "";

if(isset($_POST['change-password'])) {
    $new_password = $_POST['new-password'];
    $confirm_password = $_POST['confirm-password'];

    if($new_password == $confirm_password)
        $password = $confirm_password;

    if(!empty($password)) {
        $res = change_password($_SESSION['organizational_id'], $password);
        if($res) $message = "Password updated successfully!";
    }
}

require '../views/change-password.view.php';

<?php

session_start();

if (isset($_POST['submit'])) {
    header("location: registration.php");
}

require '../views/registration-notification.view.php';

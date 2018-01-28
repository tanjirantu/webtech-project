<?php

session_start();

session_destroy();

unset($_SESSION);

$_SESSION = array();


header("location: ../../index.php");

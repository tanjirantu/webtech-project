<?php

session_start();

require '../../data/student_data_access.php';

$data = getCoursesToRegister($_SESSION['organizational_id']);

require '../views/registration.view.php';

<?php

session_start();

require '../../data/student_data_access.php';

$courses = getRgisteredCourses($_SESSION['organizational_id']);

require '../views/courses-and-result.view.php';

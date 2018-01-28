<?php

session_start();

require '../../data/student_data_access.php';

$_SESSION['course_schedule_id'] = $_GET['course_schedule_id'];

$data = getCoursesDetails($_SESSION['organizational_id'], $_SESSION['course_schedule_id']);

require '../views/course.view.php';

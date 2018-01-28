<?php

session_start();

require '../../data/student_data_access.php';

$results = getNotices($_SESSION['course_schedule_id']);

require '../views/notice.view.php';

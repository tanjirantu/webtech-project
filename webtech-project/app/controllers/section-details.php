<?php

session_start();

require '../../data/faculty_data_access.php';

if(isset($_GET['title']) && isset($_GET['section'])) {
    $_SESSION['section_title'] = $_GET['title'];
    $_SESSION['course_section'] = $_GET['section'];
}

$result = getCourseScheduleId($_SESSION['section_title'], $_SESSION['course_section']);

$courseScheduleId;
foreach ($result as $courseScheduleId) {
    $courseScheduleId = $courseScheduleId['id'];
    $_SESSION['course_schedule_id'] = $courseScheduleId;
}

$results = getStudentResults($courseScheduleId);

require '../views/section-details1.view.php';

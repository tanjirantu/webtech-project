<?php
session_start();

require '../../data/student_data_access.php';

$courseScheduleId = intval($_GET['course_schedule_id']);
$studentId = $_SESSION['organizational_id'];

$results = getStudentResults($courseScheduleId, $studentId);

require '../views/result-handler.view.php';

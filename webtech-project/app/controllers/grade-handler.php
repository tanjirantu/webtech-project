<?php

session_start();

require '../../data/faculty_data_access.php';

$student_id = $_GET['student_id'];

$results = get_std_res_by_id($_SESSION['course_schedule_id'], $student_id);

if(isset($_POST['update'])) {

    $midterm_quiz1 = $_POST['midterm_quiz1'];
    $midterm_quiz2 = $_POST['midterm_quiz2'];
    $midterm_quiz3 = $_POST['midterm_quiz3'];
    $midterm_written = $_POST['midterm_written'];
    $midterm_attendance = $_POST['midterm_attendance'];
    $midterm_class_performance = $_POST['midterm_class_performance'];
    $midterm_lab = $_POST['midterm_lab'];
    //$midterm_grade = $_POST['midterm_grade'];
    $finalterm_quiz1 = $_POST['finalterm_quiz1'];
    $finalterm_quiz2 = $_POST['finalterm_quiz2'];
    $finalterm_quiz3 = $_POST['finalterm_quiz3'];
    $finalterm_written = $_POST['finalterm_written'];
    $finalterm_attendance = $_POST['finalterm_attendance'];
    $finalterm_class_performance = $_POST['finalterm_class_performance'];
    $finalterm_lab = $_POST['finalterm_lab'];

    $res = update_students_result(
                $midterm_quiz1, $midterm_quiz2, $midterm_quiz3,
                $midterm_written, $midterm_class_performance, $midterm_lab,
                $midterm_attendance, $finalterm_quiz1, $finalterm_quiz2,
                $finalterm_quiz3,$finalterm_written,
                $finalterm_attendance, $finalterm_class_performance, $finalterm_lab,$student_id
        );

    header("location: section-details.php");
}



require '../views/grade-handler.view.php';

<?php

session_start();

require '../../data/student_data_access.php';

$courseScheduleId = $_SESSION['course_schedule_id'];
$studentId = $_GET['student_id'];

$results = getStudentResults($courseScheduleId, $studentId);

if( isset($_POST['update-mid-quiz1']) ) {
    $marks = $_POST['midterm_quiz1'];
    $examTitle = "midterm_quiz1";
    $examTitle1 = explode('1', $examTitle);
    updateGradeQuizMarks($examTitle, $marks, $studentId);
    header("Refresh:0");
} else if( isset($_POST['update-mid-quiz2']) ) {
    $marks = $_POST['midterm_quiz2'];
    $examTitle = "midterm_quiz2";
    updateGradeQuizMarks($examTitle, $marks, $studentId);
    header("Refresh:0");
} else if( isset($_POST['update-mid-quiz3']) ) {
    $marks = $_POST['midterm_quiz3'];
    $examTitle = "midterm_quiz3";
    updateGradeQuizMarks($examTitle, $marks, $studentId);
    header("Refresh:0");
} else if( isset($_POST['update-mid-written']) ) {
    $marks = $_POST['midterm_written'];
    $examTitle = "midterm_written";
    updateGradeQuizMarks($examTitle, $marks, $studentId);
    header("Refresh:0");
} else if( isset($_POST['update-mid-attendance']) ) {
    $marks = $_POST['midterm_attendance'];
    $examTitle = "midterm_attendance";
    updateGradeQuizMarks($examTitle, $marks, $studentId);
    header("Refresh:0");
} else if( isset($_POST['update-mid-class-performance']) ) {
    $marks = $_POST['midterm_class_performance'];
    $examTitle = "midterm_class_performance";
    updateGradeQuizMarks($examTitle, $marks, $studentId);
    header("Refresh:0");
} else if( isset($_POST['update-mid-labexam']) ) {
    $marks = $_POST['midterm_lab'];
    $examTitle = "midterm_lab";
    updateGradeQuizMarks($examTitle, $marks, $studentId);
    header("Refresh:0");
} else if( isset($_POST['calculate-midterm-grade']) ) {
    $midTerm = array(
        'quiz1' => $_POST['midterm_quiz1'],
        'quiz2' => $_POST['midterm_quiz2'],
        'quiz3' => $_POST['midterm_quiz3'],
        'written' => $_POST['midterm_written'],
        'attendance' => $_POST['midterm_attendance'],
        'class_performance' => $_POST['midterm_class_performance'],
        'lab' => $_POST['midterm_lab']
    );

    updateTermResult($studentId, $courseScheduleId, 'MidTerm', $midTerm);
} else if( isset($_POST['update-final-quiz1']) ) {
    $marks = $_POST['finalterm_quiz1'];
    $examTitle = "finalterm_quiz1";
    $examTitle1 = explode('1', $examTitle);
    updateGradeQuizMarks($examTitle, $marks, $studentId);
    header("Refresh:0");
} else if( isset($_POST['update-final-quiz2']) ) {
    $marks = $_POST['finalterm_quiz2'];
    $examTitle = "finalterm_quiz2";
    updateGradeQuizMarks($examTitle, $marks, $studentId);
    header("Refresh:0");
} else if( isset($_POST['update-final-quiz3']) ) {
    $marks = $_POST['finalterm_quiz3'];
    $examTitle = "finalterm_quiz3";
    updateGradeQuizMarks($examTitle, $marks, $studentId);
    header("Refresh:0");
} else if( isset($_POST['update-final-written']) ) {
    $marks = $_POST['finalterm_written'];
    $examTitle = "finalterm_written";
    updateGradeQuizMarks($examTitle, $marks, $studentId);
    header("Refresh:0");
} else if( isset($_POST['update-final-attendance']) ) {
    $marks = $_POST['finalterm_attendance'];
    $examTitle = "finalterm_attendance";
    updateGradeQuizMarks($examTitle, $marks, $studentId);
    header("Refresh:0");
} else if( isset($_POST['update-final-class-performance']) ) {
    $marks = $_POST['finalterm_class_performance'];
    $examTitle = "finalterm_class_performance";
    updateGradeQuizMarks($examTitle, $marks, $studentId);
    header("Refresh:0");
} else if( isset($_POST['update-final-labexam']) ) {
    $marks = $_POST['finalterm_lab'];
    $examTitle = "finalterm_lab";
    updateGradeQuizMarks($examTitle, $marks, $studentId);
    header("Refresh:0");
} else if( isset($_POST['calculate-finalterm-grade']) ) {
    $midTerm = array(
        'quiz1' => $_POST['finalterm_quiz1'],
        'quiz2' => $_POST['finalterm_quiz2'],
        'quiz3' => $_POST['finalterm_quiz3'],
        'written' => $_POST['finalterm_written'],
        'attendance' => $_POST['finalterm_attendance'],
        'class_performance' => $_POST['finalterm_class_performance'],
        'lab' => $_POST['finalterm_lab']
    );

    updateTermResult($studentId, $courseScheduleId, 'FinalTerm', $midTerm);
}


require '../views/manage-student-grades.view.php';

<?php

session_start();

require '../../data/offered_courses_data_access.php';

$courses = getOfferedCourses();

if(isset($_POST['search'])) {
    $courseTitle = $_POST['title'];

    $courses = getOfferedCourseBy($courseTitle);

} else {
    $courses = getOfferedCourses();
}

require '../views/offered-courses.view.php';

<?php

session_start();

require '../../data/faculty_data_access.php';

$facultyId = $_SESSION['organizational_id'];

$results = getFacultyDetails($facultyId);

if($results) {
	foreach ($results as $faculty) {
		$_SESSION['first_name'] = $faculty['first_name'];
		$_SESSION['last_name'] = $faculty['last_name'];
		$_SESSION['email'] = $faculty['email'];
		$_SESSION['blood_group'] = $faculty['blood_group'];
		$_SESSION['gender'] = $faculty['gender'];
		$_SESSION['birth_date'] = $faculty['birth_date'];
		$_SESSION['parmanent_address'] = $faculty['parmanent_address'];
		$_SESSION['current_address'] = $faculty['current_address'];
		$_SESSION['department_id'] = $faculty['department_id'];
	}
}

$courses = getCoursesDetails($facultyId);
if($courses) {
	foreach ($courses as $course) {
	    $_SESSION['course_schedule_id'] = $course['id'];
	    $_SESSION['course_title'] =  $course['title'];
	    $_SESSION['course_section'] = $course['section'];
	}
} else {
	$msg = "No registered courses. Please register asap.";
}

require '../views/faculty.view.php';

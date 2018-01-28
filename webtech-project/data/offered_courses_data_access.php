<?php

require 'data_access.php';

function getOfferedCourses()
{
	$sql = "SELECT title, day_one, day_one_schedule, day_two, day_two_schedule, section
			FROM courses, courses_schedules
			WHERE courses.course_id = courses_schedules.course_id";

	return executeSql($sql);
}

function getOfferedCourseBy($courseTitle)
{
	$sql = "SELECT title, day_one, day_one_schedule, day_two, day_two_schedule, section
			FROM courses, courses_schedules WHERE courses.course_id = courses_schedules.course_id
            AND courses.title LIKE '%" . $courseTitle . "%'";

	return executeSql($sql);
}

function getCourseDetails($studentId)
{
	$sql = "SELECT title, day_one, day_one_schedule, day_two, day_two_schedule
			FROM courses, courses_schedules, students_courses
			WHERE courses.course_id = courses_schedules.course_id
			AND students_courses.course_schedule_id = courses_schedules.id
			AND students_courses.student_id = '$studentId'";

	return executeSql($sql);
}

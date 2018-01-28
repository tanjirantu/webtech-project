<?php

require 'data_access.php';

function getStudentsRegisteredCourseDetails($studentId, $courseScheduleId)
{
	$sql = "SELECT title, day_one, day_one_schedule, day_two, day_two_schedule,
			section, faculties.first_name, faculties.last_name, courses_schedules.id
			FROM courses, courses_schedules, students_courses, faculties_courses, faculties
			WHERE courses_schedules.id = '$courseScheduleId'
			AND faculties_courses.course_schedule_id = students_courses.course_schedule_id
			AND courses_schedules.course_id = courses.course_id
			AND students_courses.course_schedule_id = courses_schedules.id
			AND faculties_courses.course_schedule_id = courses_schedules.id
			AND faculties.organizational_id = faculties_courses.faculty_id
			AND students_courses.student_id = '$studentId' GROUP BY id";

	return execute_sql($sql);
}

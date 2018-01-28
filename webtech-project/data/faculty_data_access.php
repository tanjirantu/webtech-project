<?php

require 'data_access.php';

function getFacultyDetails($facultyId)
{
    $sql = "SELECT * FROM faculties WHERE organizational_id = '$facultyId'";

    return executeSql($sql);
}

function getCoursesDetails($facultyId)
{
    $sql = "SELECT courses_schedules.id, title, day_one, day_one_schedule, day_two, day_two_schedule,
            section, faculties.first_name, faculties.last_name
            FROM courses, courses_schedules, students_courses, faculties_courses, faculties
            WHERE courses.course_id = courses_schedules.course_id
            AND students_courses.course_schedule_id = courses_schedules.id
            AND faculties_courses.course_schedule_id = courses_schedules.id
            AND faculties_courses.faculty_id = '$facultyId'
            GROUP BY id;";

            return executeSql($sql);
}

function getCourseScheduleId($title, $section)
{
    $sql = "SELECT courses_schedules.id, courses.title, courses.course_id, courses_schedules.course_id, courses_schedules.section
        	FROM courses, courses_schedules
        	WHERE courses.title = '$title'
        	AND courses.course_id = courses_schedules.course_id
        	AND courses_schedules.section = '$section'";

	return executeSql($sql);
}

function getStudentResults($courseScheduleId)
{
    $sql = "SELECT students.first_name, last_name, student_id, cgpa, credits_completed,
            midterm_quiz1, midterm_quiz2, midterm_quiz3, midterm_written, midterm_lab,
            midterm_attendance, midterm_class_performance, midterm_grade,
            finalterm_quiz1, finalterm_quiz2, finalterm_quiz3, finalterm_written, finalterm_lab,
            finalterm_attendance, finalterm_class_performance, finalterm_grade
            FROM students_results, students
            WHERE students_results.student_id = students.organizational_id
            AND students_results.course_schedule_id = '$courseScheduleId'";

    return executeSql($sql);

}

function updateNotice($notice, $courseScheduleId, $section)
{
    date_default_timezone_set("Asia/Bangkok");

    $date = date("d-M-Y h:i:s");

    $sql = "INSERT INTO notices (course_schedule_id, section_id, notice, post_date)
            VALUES ('$courseScheduleId', '$section', '$notice', '$date')";

    executeSql($sql);
}

function uploadNotes($courseScheduleId, $section, $name, $size, $type, $location)
{
    date_default_timezone_set("Asia/Bangkok");

    $date = date("d-M-Y h:i:sa");

    $sql = "INSERT INTO notes (course_schedule_id, section_id, name, size, type, location, upload_date)
            VALUES ('$courseScheduleId', '$section', '$name', '$size', '$type', '$location$name', '$date')";

    return executeSql($sql);
}

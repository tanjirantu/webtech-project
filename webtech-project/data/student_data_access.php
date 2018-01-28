<?php

require 'data_access.php';

function getStudentDetails($userId)
{
	$sql = "SELECT * FROM students WHERE organizational_id = '$userId'";
	return executeSql($sql);
}

function getClassRoutine($userId)
{
	$sql = "SELECT title, day_one, day_one_schedule, day_two, day_two_schedule, courses_schedules.id AS course_schedule_id
			FROM courses, courses_schedules, students_courses
			WHERE courses.course_id = courses_schedules.course_id
			AND students_courses.course_schedule_id = courses_schedules.id
			AND students_courses.student_id = '$userId'";

	return executeSql($sql);
}

function getCoursesDetails($studentid, $courseScheduleId)
{
	$sql = "SELECT title, day_one, day_one_schedule, day_two, day_two_schedule, section, faculties.first_name, faculties.last_name, courses_schedules.id
			FROM courses, courses_schedules, students_courses, faculties_courses, faculties
			WHERE courses_schedules.id = '$courseScheduleId'
			AND faculties_courses.course_schedule_id = students_courses.course_schedule_id
			AND courses_schedules.course_id = courses.course_id
			AND students_courses.course_schedule_id = courses_schedules.id
			AND faculties_courses.course_schedule_id = courses_schedules.id
			AND faculties.organizational_id = faculties_courses.faculty_id
			AND students_courses.student_id = '$studentid' GROUP by id";

	return executeSql($sql);
}

function getNotices($courseScheduleId)
{
	$sql = "SELECT notices.id, notice, post_date
			FROM notices, students_courses, courses_schedules
			WHERE students_courses.course_schedule_id = notices.course_schedule_id
			AND students_courses.course_schedule_id = courses_schedules.id
			AND notices.course_schedule_id = '$courseScheduleId'
            GROUP BY id
			ORDER BY id DESC";
	return executeSql($sql);
}

function getNotes($courseScheduleId)
{
	$sql = "SELECT * FROM notes, students_courses, courses_schedules
			WHERE students_courses.course_schedule_id = notes.course_schedule_id
			AND students_courses.course_schedule_id = courses_schedules.id
			AND notes.course_schedule_id = '$courseScheduleId'
			GROUP BY notes.id";

	return executeSql($sql);
}

function getRgisteredCourses($studentId)
{
    $sql = "SELECT courses.title course_id, courses_schedules.id, section
			FROM courses, courses_schedules, students_courses
			WHERE students_courses.course_schedule_id = courses_schedules.id
			AND students_courses.student_id = '$studentId'
			AND courses.course_id = courses_schedules.course_id";

    return executeSql($sql);
}

function getStudentResults($courseScheduleId, $studentId)
{
	$sql = "SELECT students.first_name, students.last_name, students.organizational_id, cgpa, credits_completed,
			students_results.midterm_quiz1, students_results.midterm_quiz2, students_results.midterm_quiz3, students_results.midterm_written,
			students_results.midterm_lab, students_results.midterm_attendance, students_results.midterm_attendance,
			students_results.midterm_class_performance, students_results.midterm_grade, students_results.finalterm_quiz1,
			students_results.finalterm_quiz2, students_results.finalterm_quiz2, students_results.finalterm_quiz3,
			students_results.finalterm_written, students_results.finalterm_lab, students_results.finalterm_attendance,
			students_results.finalterm_class_performance, students_results.finalterm_grade, students_results.final_grade, courses_schedules.id
			FROM students, students_courses, faculties_courses, courses_schedules, students_results
			WHERE students_results.student_id = students_courses.student_id
			AND students_courses.course_schedule_id = courses_schedules.id
			AND students_results.course_schedule_id = faculties_courses.course_schedule_id
			AND faculties_courses.course_schedule_id = students_courses.course_schedule_id
			AND courses_schedules.id = '$courseScheduleId'
			AND students_results.student_id = '$studentId'
			GROUP BY id;";

	return executeSql($sql);
}

function updateGradeQuizMarks($examTitle, $marks, $studentId) {
	$sql = "UPDATE students_results SET `$examTitle` = '$marks' WHERE student_id = '$studentId';";
	return executeSql($sql);
}

function updateTermResult($studentId, $courseScheduleId, $term, Array $marks = array())
{
    $quizzes = array($marks['quiz1'], $marks['quiz2'], $marks['quiz3']);
    $bestOfQuizzes = rsort($quizzes);
    $arrlength = count($quizzes);

    $bestOfQuizzes;
    if($arrlength == 3) {
        $bestOfQuizzes = (int)$quizzes[0] + (int)$quizzes[1];
    } else if($arrlength == 2) {
        $bestOfQuizzes = (int)$quizzes[0] * 2;
    }

    $termMarks = (int)$bestOfQuizzes + (int)$marks['written'] +
                 (int)$marks['attendance'] + (int)$marks['class_performance'] + (int)$marks['lab'];

    $termGrade = calculateTermGrade($termMarks);
	if($term == 'MidTerm') {
		updateMidTermResult($studentId, $courseScheduleId, $termMarks, $termGrade);
	} else if ($term == 'FinalTerm') {
		updateFinalTermResult($studentId, $courseScheduleId, $termMarks, $termGrade);
		$midTermResult = getMidTermResult($studentId, $courseScheduleId);
		$midTerm;
		foreach ($midTermResult as $key => $value) {
			$midTerm = $value;
		}
		$finalTermResult = getFinalTermResult($studentId, $courseScheduleId);
		$finalTerm;
		foreach ($finalTermResult as $key => $value) {
			$finalTerm = $value;
		}

		$totalMarks = (int)($midTerm['midterm_total_marks'] * (40/100))
					+ (int)($finalTerm['finalterm_total_marks'] * (60/100));
		$finalGrade = calculateTermGrade($totalMarks);
		$gpa = calculateCourseGpa($totalMarks);
		calculateResult($studentId, $courseScheduleId, $totalMarks, $finalGrade, $gpa);
	}
}

function updateMidTermResult($studentId, $courseScheduleId, $termMarks, $termGrade)
{
	$sql = "UPDATE students_results
			SET midterm_grade = '$termGrade',
			midterm_total_marks = '$termMarks'
			WHERE student_id = '$studentId'
			AND course_schedule_id = '$courseScheduleId'";

	return executeSql($sql);
}


function updateFinalTermResult($studentId, $courseScheduleId, $termMarks, $termGrade)
{
	$sql = "UPDATE students_results
			SET finalterm_grade = '$termGrade',
			finalterm_total_marks = '$termMarks'
			WHERE student_id = '$studentId'
			AND course_schedule_id = '$courseScheduleId'";

	return executeSql($sql);
}

function getMidTermResult($studentId, $courseScheduleId)
{
	$sql = "SELECT midterm_total_marks
			FROM students_results
			WHERE student_id = '$studentId'
			AND course_schedule_id = '$courseScheduleId'";

	return executeSql($sql);
}

function getFinalTermResult($studentId, $courseScheduleId)
{
	$sql = "SELECT finalterm_total_marks
			FROM students_results
			WHERE student_id = '$studentId'
			AND course_schedule_id = '$courseScheduleId'";

	return executeSql($sql);
}

function calculateTermGrade($term_result)
{
    if($term_result >= 90) return "A+";
    elseif($term_result >=85 && $term_result <= 90) return "A";
    elseif($term_result >=80 && $term_result <= 85) return "B+";
    elseif($term_result >=75 && $term_result <= 80) return "B";
    elseif($term_result >=70 && $term_result <= 75) return "C+";
    elseif($term_result >=65 && $term_result <= 70) return "C";
    elseif($term_result >=60 && $term_result <= 65) return "D+";
    elseif($term_result >=50 && $term_result <= 60) return "D";
    else return "F";
}


function calculateCourseGpa($final_grade)
{
    if($final_grade >= 90) return "4.00";
    elseif($final_grade >=85 && $final_grade <= 90) return "3.75";
    elseif($final_grade >=80 && $final_grade <= 85) return "3.50";
    elseif($final_grade >=75 && $final_grade <= 80) return "3.25";
    elseif($final_grade >=70 && $final_grade <= 75) return "3.00";
    elseif($final_grade >=65 && $final_grade <= 70) return "2.75";
    elseif($final_grade >=60 && $final_grade <= 65) return "2.50";
    elseif($final_grade >=50 && $final_grade <= 60) return "2.25";
    else return "0.00";
}

function calculateResult($studentId, $courseScheduleId, $totalMarks, $finalGrade, $gpa)
{
	$sql = "UPDATE students_results
			SET final_grade = '$finalGrade',
			term_total = '$totalMarks',
			grade_points = '$gpa'
			WHERE student_id = '$studentId'
			AND course_schedule_id = '$courseScheduleId'";
	return executeSql($sql);
}

function searchStudent($name)
{
	$sql = "select * from students where first_name like '%" . $name . "%' ";
	return executeSql($sql);
}

function getCoursesToRegister($studentId)
{
	$sql = "SELECT title, day_one, day_one_schedule, day_two, day_two_schedule, courses_schedules.section
			FROM courses, courses_schedules, students_courses
			WHERE courses_schedules.id = students_courses.course_schedule_id
			AND courses_schedules.course_id = courses.course_id
            AND courses_schedules.id = students_courses.course_schedule_id
            AND courses_schedules.id NOT IN
				(
					SELECT students_courses.course_schedule_id
				 	FROM students_courses
				 	WHERE students_courses.student_id = '$studentId'
				)";

	return executeSql($sql);
}

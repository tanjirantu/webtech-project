<?php session_start();

require '../../data/student_data_access.php';

$start   = new DateTime();
$end     = new DateTime();

$start   = $start->modify( '0 days' );
$end     = $end->modify( '+8 days' );

$interval = new DateInterval('P1D');
$daterange = new DatePeriod($start, $interval ,$end);

$result = getStudentDetails($_SESSION['organizational_id']);

foreach ($result as $student) {
	$_SESSION['first_name'] = $student['first_name'];
	$_SESSION['last_name'] = $student['last_name'];
	$_SESSION['email'] = $student['email'];
	$_SESSION['blood_group'] = $student['blood_group'];
	$_SESSION['gender'] = $student['gender'];
	$_SESSION['birth_date'] = $student['birth_date'];
	$_SESSION['parmanent_address'] = $student['parmanent_address'];
	$_SESSION['current_address'] = $student['current_address'];
	$_SESSION['parents_contact_number'] = $student['parents_contact_number'];
	$_SESSION['students_contact_number'] = $student['students_contact_number'];
	$_SESSION['local_guardians_contact_number'] = $student['local_guardians_contact_number'];
	$_SESSION['department_id'] = $student['department_id'];
	$_SESSION['program_id'] = $student['program_id'];
}

$data = getClassRoutine($_SESSION['organizational_id']);

require '../views/student.view.php';

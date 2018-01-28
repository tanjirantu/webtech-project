<?php

session_start();

require '../../data/faculty_data_access.php';

$courseScheduleId = $_SESSION['course_schedule_id'];
$section = $_SESSION['course_section'];

if(isset($_POST['update-notice'])) {
    $notice = $_POST['notice'];
    updateNotice($notice, $courseScheduleId, $section);
}

if( isset($_POST['upload-file1']) ) {
    $name = $_FILES['file']['name'];
    $size = $_FILES['file']['size'];
    $type = $_FILES['file']['type'];
    $tmp_name = $_FILES['file']['tmp_name'];

    if( isset($name) && !empty($name) ) {
    		$location = "../../public/uploads/";
    		if( move_uploaded_file($tmp_name, $location.$name) ){
    			$smsg = "Uploaded Successfully";
                uploadNotes($courseScheduleId, $section, $name, $size, $type, $location);
    		} else {
    			$fmsg = "Failed to Upload File";
    		}
    } else {
    	$fmsg = "Please Select a File";
    }
}

require '../views/manage-section.view.php';

<?php

session_start();

require '../../data/student_data_access.php';

$notes = getNotes($_SESSION['course_schedule_id']);

require '../views/notes.view.php';;

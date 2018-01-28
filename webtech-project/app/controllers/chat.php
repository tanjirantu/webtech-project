<?php

session_start();

require '../../data/instant_chat_data_access.php';

function formatDate($date)
{
    return date('g:i a', strtotime($date));
}

$courseScheduleId = $_SESSION['course_schedule_id'];

$results = getInstantMessages($courseScheduleId);

require '../views/chat.view.php';

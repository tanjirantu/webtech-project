<?php

require 'data_access.php';

function getInstantMessages($courseScheduleId)
{
    $sql = "SELECT * FROM instant_message
            WHERE course_schedule_id = '$courseScheduleId'
            ORDER BY id DESC ";

    return executeSql($sql);
}

function sendMessage($courseScheduleId, $name, $message)
{
    $sql = "INSERT INTO instant_message (course_schedule_id, name, message)
            VALUES ('$courseScheduleId', '$name', '$message')";

    return executeSql($sql);
}

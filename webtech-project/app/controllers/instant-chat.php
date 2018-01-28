<?php

 session_start();

require '../../data/instant_chat_data_access.php';

if(isset($_POST['submit'])) {
    $name = $_SESSION['first_name'] ." ". $_SESSION['last_name'];
    $message = $_POST['message'];
    $courseScheduleId = $_SESSION['course_schedule_id'];

    if(!empty($name) && !empty($message)) {
        sendMessage($courseScheduleId, $name, $message);
        echo ("<embed loop='false' src='chat-notification.wav' hidden='true' autoplay='true' />");
    }
}

require '../views/instant-chat.view.php';

?>

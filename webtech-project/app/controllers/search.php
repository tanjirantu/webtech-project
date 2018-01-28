<div id="chat_data">
    <?php
    session_start();
    require '../../data/student_data_access.php';

    $results = search_student('a');
    var_dump($results);

    foreach ($results as $result) : ?>
    <div style="padding-bottom: 5px;">
        <span style="color:#4183D7;margin-right:5px;font-weight:700"><?= $result['first_name']; ?> : </span>
        <span> <?= $result['last_name']; ?></span>
    </div>


<?php endforeach; ?>
</div>

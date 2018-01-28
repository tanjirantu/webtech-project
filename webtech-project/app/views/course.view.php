<?php include 'partials/header.php'; ?>
        <div class="container">
            <?php include 'partials/nav.php'; ?>
            <?php include 'partials/sidebar.php'; ?>
            <div class="main">
                <div class="wrap">
                    <div class="course-title">
                    <?php foreach($data as $value) : ?>
                        <h4><?= $value['title'] ." ". "[" .$value['section'] ."]"; ?></h4>
                        <blockquote>
                            <p>60X60 <strong><?= $value['first_name'] ." ". $value['last_name']; ?></strong></p>
                        </blockquote>
                    <?php endforeach; ?>
                    </div>
                    <div class="time-schedule">
                        <table width=100%;>
                            <tr>
                                <th>Time</th>
                                <th>Class Type</th>
                                <th>Room No</th>
                            </tr>
                            <?php foreach ($data as $value) : ?>
                            <tr>
                                <td><?= $value['day_one'] ." ". explode(' ', $value['day_one_schedule'])[0] . "PM". "-". explode(' ', $value['day_one_schedule'])[1] ."PM"; ?></td>
                                <td>Lab</td>
                                <td>3119</td>
                            </tr>
                            <tr>
                                <td><?= $value['day_two'] ." ". explode(' ', $value['day_two_schedule'])[0] . "PM". "-". explode(' ', $value['day_two_schedule'])[1] ."PM"; ?></td>
                                <td>Theory</td>
                                <td>3210</td>
                            </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                    <div class="info-sec">
                        <ul>
                            <li><a href="notes.php">Notes</a></li>
                            <li><a href="notice.php">Notice</a></li>
                            <li><a href="instant-chat.php">Instant Messaging</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
<?php include 'partials/footer.php'; ?>

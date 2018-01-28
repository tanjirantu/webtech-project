<?php include 'partials/header.php'; ?>
        <div class="container">
            <?php include 'partials/nav.php'; ?>
            <?php include 'partials/sidebar.php'; ?>
            <div class="main">
                <div class="class-routine">
                    <table>
                        <tr>
                            <th class="table-title" colspan="4">Class Schedule</th>
                        </tr>

                        <?php foreach($daterange as $date) : ?>
                            <tr>
                            <?php if ( $date->format("d M Y") == date("d M Y") && ($date->format("D") == "Thu" || $date->format("D") == "Fri" || $date->format("D") == "Sat") ) : ?>
                                <th>Today</th>
                                <td>No Class On This Day</td>
                            <?php elseif( (int)$date->format("d") == (int)date("d") + 1 && ($date->format("D") == "Thu" || $date->format("D") == "Fri" || $date->format("D") == "Sat") ) : ?>
                                <th>Tomorrow</th>
                                <td>No Class On This Day</td>
                            <?php elseif( ($date->format("D") == "Thu" || $date->format("D") == "Fri" || $date->format("D") == "Sat") ) : ?>
                                <th><?= $date->format("d M Y"); ?></th>
                                <td>No Class On This Day</td>
                            <?php else: ?>
                                <th><?= $date->format("d M Y"); ?></th>

                                <?php foreach ($data as $row) : ?>

                                        <?php if($date->format("D") == $row['day_two'] || $date->format("D") == $row['day_one']) : ?>
                                        <td>
                                            <li><a href="course.php?course_schedule_id=<?= $row['course_schedule_id'];?>"><?= $row['title']; ?></a></li>
                                            <li><span>Time: <strong><?= $date->format("D"); ?> - <?= explode(' ', $row['day_one_schedule'])[0]; ?> - <?= explode(' ', $row['day_one_schedule'])[1]; ?> 2:0 PM</strong> Room: <strong>3119</strong></span></li>
                                        <?php elseif($date->format("D") == $row['day_two'] || $date->format("D") == $row['day_one']): ?>
                                            <li><a href="course.php?course_schedule_id=<?= $row['course_schedule_id'];?>"><?= $row['title']; ?></a></li>
                                            <li><span>Time: <strong><?= $date->format("D") ?> - <?= explode(' ', $row['day_two_schedule'])[0]; ?> - <?= explode(' ', $row['day_two_schedule'])[1]; ?> 2:0 PM</strong> Room: <strong>3119</strong></span></li>
                                        <?php elseif($date->format("D") == $row['day_two'] || $date->format("D") == $row['day_one']): ?>
                                            <li><a href="course.php?course_schedule_id=<?= $row['course_schedule_id'];?>"><?= $row['title']; ?></a></li>
                                            <li><span>Time: <strong><?= $date->format("D") ?> - <?= explode(' ', $row['day_two_schedule'])[0]; ?> - <?= explode(' ', $row['day_two_schedule'])[1]; ?> 2:0 PM</strong> Room: <strong>3119</strong></span></li>

                                        </td>
                                        <?php endif;?>


                                <?php endforeach; ?>

                            <?php endif; ?>
                            </tr>
                        <?php endforeach; ?>



                    </table>
                </div>
            </div>
        </div>
<?php include 'partials/footer.php'; ?>

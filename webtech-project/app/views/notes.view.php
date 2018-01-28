<?php include 'partials/header.php'; ?>

        <div class="container">

            <?php include 'partials/nav.php'; ?>

            <?php include 'partials/sidebar.php'; ?>
            <div class="main">
                <div class="wrap">
                    <div class="course-title">
                        <h4>Computer Graphics [G]</h4>
                        <blockquote>
                            <p>60X60 <strong>MD. HASIBUL HASAN</strong></p>
                        </blockquote>
                    </div>
                    <div class="time-schedule">
                        <table width=100%;>
                            <tr>
                                <th>Time</th>
                                <th>Class Type</th>
                                <th>Room No</th>
                            </tr>
                            <tr>
                                <td>Tue 12:0 PM - Tue 2:0 PM</td>
                                <td>Theory</td>
                                <td>3119</td>
                            </tr>
                            <tr>
                                <td>Sun 2:0 PM - Sun 5:0 PM</td>
                                <td>Theory</td>
                                <td>3210</td>
                            </tr>
                        </table>
                    </div>
                    <div class="info-sec">
                        <ul>
                            <li><a href="notes.php">Notes</a></li>
                            <li><a href="notice.php">Notice</a></li>
                            <li><a href="instant-chat.php">Instant Messaging</a></li>
                        </ul>
                    </div>
                    <div class="notes">
                        <table width="100%;">
                            <tr>
                                <th>Title</th>
                                <th>Upload Date</th>
                                <th>Size</th>
                            </tr>
                            <?php foreach ($notes as $note ) : ?>
                            <tr>
                                <td> <a href="<?= $note['location'];?>"><?= $note['name']; ?></a></td>
                                <td><?= $note['upload_date']; ?></td>
                                <td>0.<?= $note['size']; ?> MB</td>
                            </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
<?php 'partials/footer.php'; ?>

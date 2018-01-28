<?php include 'partials/header.php'; ?>
        <div class="container">
            <?php include 'partials/nav.php'; ?>
            <?php include 'partials/sidebar-faculty.php'; ?>
            <div class="main">
                <?php foreach ($courses as $course) : ?>
                <div class="box-1">
                    <div class="section-title">
                        <h4><a href="section-details.php?title=<?= $course['title']; ?> &amp;section=<?= $course['section']; ?>"><?= $course['title'] . " " . "[" . $course['section'] ."]" ; ?></a></h4>
                    </div>
                    <table>
                        <tr>
                            <th>Theory</th>
                            <td><?= $course['day_one'] ." ". explode(' ', $course['day_one_schedule'])[0] ." ".explode(' ', $course['day_one_schedule'])[1] ."PM"; ?></td>
                        </tr>
                        <tr>
                            <th style="border-bottom:none;">Lab</th>
                            <td style="border-bottom:none;"><?= $course['day_two'] ." ". explode(' ', $course['day_two_schedule'])[0] ." ".explode(' ', $course['day_two_schedule'])[1] ."PM"; ?></td>
                        </tr>
                    </table>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
<?php include 'partials/footer.php'; ?>

<?php include 'partials/header.php'; ?>

        <div class="container">

            <?php include 'partials/nav.php'; ?>

            <?php include 'partials/sidebar.php'; ?>
            <div class="main">
                <div class="offered-courses-section">
                    <table>
                        <tr>
                            <th class="table-title" colspan="6">Offered Sections 2017-18, Summer</th>
                        </tr>
                        <tr>
                            <th style="border-style:hidden; border-bottom:1px solid #ececec;"></th>
                            <th style="border-style:hidden; border-bottom:1px solid #ececec;"></th>
                            <th style="border-style:hidden; border-bottom:1px solid #ececec;"></th>
                            <th style="border-style:hidden; border-bottom:1px solid #ececec;"></th>
                            <th style="border-style:hidden; border-bottom:1px solid #ececec;"></th>
                            <th class="search-bar" style="border-style:hidden; border-bottom:1px solid #ececec;">

                                <form method="post">
                                    <input type="text" style="width:200px;" name="title">
                                    <input class="btn-default" type="submit" name="search" value="Search">
                                </form>
                            </th>
                        </tr>
                        <tr>
                            <th>Class ID</th>
                            <th>Title</th>
                            <th>Status</th>
                            <th>Capacity</th>
                            <th>Count</th>
                            <th>Time</th>
                        </tr>
                        <?php foreach ($courses as $course) : ?>

                        <tr>
                            <td>00001</td>
                            <td><?= $course['title']; ?> [<?= $course['section']; ?>]</td>
                            <td>Cancel</td>
                            <td>20</td>
                            <td>0</td>
                            <td>
                                <table>
                                    <tr>
                                        <th>Lab</th>
                                        <td><?= $course['day_one']; ?></td>
                                        <td><?= explode(' ', $course['day_one_schedule'])[0]; ?></td>
                                        <td><?= explode(' ', $course['day_one_schedule'])[1]; ?></td>
                                        <td>3119</td>
                                    </tr>
                                    <tr>
                                        <th>Theory</th>
                                        <td><?= $course['day_two']; ?></td>
                                        <td><?= explode(' ', $course['day_two_schedule'])[0]; ?></td>
                                        <td><?= explode(' ', $course['day_two_schedule'])[1]; ?></td>
                                        <td>3209</td>
                                    </tr>

                                </table>
                            </td>
                        </tr>

                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
<?php 'partials/footer.php'; ?>

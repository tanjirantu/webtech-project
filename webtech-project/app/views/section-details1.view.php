<?php include 'partials/header.php'; ?>
        <div class="container">
            <?php include 'partials/nav.php'; ?>
            <?php include 'partials/sidebar-faculty.php'; ?>
            <div class="main">
                <div class="navigation-panel">
                    <ul>
                        <li><a href="section-details.php">Student List</a></li>
                        <li><a href="manage-section.php">Manage Section</a></li>
                        <li><a href="instant-chat.php">Instant Message</a></li>
                    </ul>
                </div>
                <div class="student-list">
                    <form method="post">

                        <table>

                            <tr style="background:#fff;">
                                <th scope="colgroup" style="border-bottom:hidden;">Name</th>
                                <th scope="colgroup" style="border-bottom:hidden;">ID</th>
                                <th scope="colgroup" style="border-bottom:hidden;">CGPA</th>
                                <th scope="colgroup" style="border-bottom:hidden;">Credits Completed</th>
                                <th scope="colgroup" style="border-bottom:hidden;"></th>
                            </tr>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                            <?php foreach ($results as $student) :?>
                            <tr>
                                <td><?= $student['first_name'] ." ". $student['last_name']; ?></td>
                                <td><?= $student['student_id']; ?></td>
                                <td><?= $student['cgpa']; ?></td>
                                <td><?= $student['credits_completed']; ?></td>
                                <td><a href="manage-student-grades.php?student_id=<?=$student['student_id'];?>&student_name=<?= $student['first_name'] ." ". $student['last_name']; ?>">Manage Grades</a></td>
                            </tr>
                            <?php endforeach; ?>

                        </table>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>

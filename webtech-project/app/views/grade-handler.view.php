<?php include 'partials/header.php'; ?>
        <div class="container">
            <?php include 'partials/nav.php'; ?>

            <div class="main" style="width:100%">
                <div class="navigation-panel">
                    <ul>
                        <li><a href="section-details.php">Student List</a></li>
                        <li><a href="manage-section.php">Manage Section</a></li>
                        <li><a href="instant-chat.php">Instant Message</a></li>
                    </ul>
                </div>
                <div class="student-list">
                    <form method="post">
                        <?php foreach ($results as $student) :?>
                        <table width="100%;">

                            <tr style="background:#52B3D9">
                                <th scope="colgroup" style="border-bottom:hidden;">Name</th>
                                <th scope="colgroup" style="border-bottom:hidden;">ID</th>
                                <th scope="colgroup" style="border-bottom:hidden;">CGPA</th>
                                <th scope="colgroup" style="border-bottom:hidden;">Credits Completed</th>
                            </tr>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>

                            <tr>
                                <td><?= $student['first_name'] ." ". $student['last_name']; ?></td>
                                <td><?= $student['student_id']; ?></td>
                                <td><?= $student['cgpa']; ?></td>
                                <td><?= $student['credits_completed']; ?></td>
                            </tr>
                        </table>
                        <table width="100%;">
                            <tr>
                                <th colspan="8" scope="colgroup">Mid Term</th>
                                <th colspan="8" scope="colgroup">Final Term</th>
                                <th scope="colgroup" style="border-bottom:hidden;">Update</th>
                            </tr>
                            <tr>
                                <th scope="col">Quiz 1</th>
                                <th scope="col">Quiz 2</th>
                                <th scope="col">Quiz 3</th>
                                <th scope="col">Mid Term</th>
                                <th scope="col">Attendance</th>
                                <th scope="col">Performance</th>
                                <th scope="col">Lab</th>
                                <th scope="col">Grade</th>
                                <th scope="col">Quiz 1</th>
                                <th scope="col">Quiz 2</th>
                                <th scope="col">Quiz 3</th>
                                <th scope="col">Final Term</th>
                                <th scope="col">Attendance</th>
                                <th scope="col">Performance</th>
                                <th scope="col">Lab</th>
                                <th scope="col">Grade</th>
                                <td></td>
                            </tr>
                            <tr>
                                <td><input type="text" name="midterm_quiz1" value="<?= $_GET['midterm_quiz1']; ?>" style="width:30px;"></td>
                                <td><input type="text" name="midterm_quiz2" value="<?= $_GET['midterm_quiz2']; ?>" style="width:30px;"></td>
                                <td><input type="text" name="midterm_quiz3" value="<?= $_GET['midterm_quiz3']; ?>" style="width:30px;"></td>
                                <td><input type="text" name="midterm_written" value="<?= $_GET['midterm_written']; ?>" style="width:30px;"></td>
                                <td><input type="text" name="midterm_attendance" value="<?= $_GET['midterm_attendance']; ?>" style="width:30px;"></td>
                                <td><input type="text" name="midterm_class_performance" value="<?= $_GET['midterm_class_performance']; ?>" style="width:30px;"></td>
                                <td><input type="text" name="midterm_lab" value="<?= $_GET['midterm_lab']; ?>" style="width:30px;"></td>
                                <td><input type="text" name="midterm_grade" value="<?= $_GET['midterm_grade']; ?>" style="width:30px;" disabled></td>
                                <td><input type="text" name="finalterm_quiz1" value="<?= $_GET['finalterm_quiz1']; ?>" style="width:30px;"></td>
                                <td><input type="text" name="finalterm_quiz2" value="<?= $_GET['finalterm_quiz2']; ?>" style="width:30px;"></td>
                                <td><input type="text" name="finalterm_quiz3" value="<?= $_GET['finalterm_quiz3']; ?>" style="width:30px;"></td>
                                <td><input type="text" name="finalterm_written" value="<?= $_GET['finalterm_written']; ?>" style="width:30px;"></td>
                                <td><input type="text" name="finalterm_attendance" value="<?= $_GET['finalterm_attendance']; ?>" style="width:30px;"></td>
                                <td><input type="text" name="finalterm_class_performance" value="<?= $_GET['finalterm_class_performance']; ?>" style="width:30px;"></td>
                                <td><input type="text" name="finalterm_lab" value="<?= $_GET['finalterm_lab']; ?>" style="width:30px;"></td>
                                <td><input type="text" name="finalterm_grade" value="<?= $_GET['finalterm_grade']; ?>" style="width:30px;" disabled></td>
                                <td> <input type="submit" class="btn-warning" name="update" value="Update"> </td>
                            </tr>
                        </table>
                        <?php endforeach; ?>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>

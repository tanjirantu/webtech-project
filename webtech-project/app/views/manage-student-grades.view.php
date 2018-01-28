<?php include 'partials/header.php'; ?>
        <div class="container">
            <?php include 'partials/nav.php'; ?>
            <?php include 'partials/sidebar-faculty.php'; ?>
            <div class="main">
                <div class="courses-and-results">
                    <table>
                        <tr>
                            <th class="table-title" colspan="3">Grades Marks Quizes</th>
                        </tr>
                        <tr>
                            <td>
                                <form method="post">
                                    <tr>
                                        <td colspan="4" class="course-details">
                                            <li>Web Technologies [F]</li>
                                            <li><i>Total Marks:-<strong> 100 </strong>Passing Marks:- <strong>  50 </strong></i></li>
                                            <li><i>Student(s): <?= $_GET['student_name'] ." [". $_GET['student_id'] ."]"; ?></i></li>
                                        </td>
                                    </tr>
                                    <?php foreach ($results as $result) : ?>
                                    <tr>
                                        <th colspan="3">Mid Term</th>
                                    </tr>
                                    <tr>
                                        <td><strong>Lab Performance </strong><i>(Total:25; Pass:13; Contributes:25%)</i></td>
                                        <td style="width:25px;">-</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Lab Exams </strong><i>(Total:25; Pass:13; Contributes:25%)</i></td>
                                        <td style="width:25px;"><strong><input type="text" name="midterm_lab" value="<?= $result['midterm_lab']; ?>"></strong></td>
                                        <td style="width:25px;"><input class="btn-warning" type="submit" name="update-mid-labexam" value="Update"></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Quiz 1 </strong><i>(Total:25; Pass:13; Contributes:25%)</i></td>
                                        <td style="width:25px;"><strong><input type="text" name="midterm_quiz1" value="<?= $result['midterm_quiz1']; ?>"></strong></td>
                                        <td style="width:25px;"><input class="btn-warning" type="submit" name="update-mid-quiz1" value="Update"></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Quiz 2 </strong><i>(Total:25; Pass:13; Contributes:25%)</i></td>
                                        <td style="width:25px;"><strong><input type="text" name="midterm_quiz2" value="<?= $result['midterm_quiz2']; ?>"></strong></td>
                                        <td style="width:25px;"><input class="btn-warning" type="submit" name="update-mid-quiz2" value="Update"></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Quiz 3 </strong><i>(Total:25; Pass:13; Contributes:25%)</i></td>
                                        <td style="width:25px;"><strong><input type="text" name="midterm_quiz3" value="<?= $result['midterm_quiz3']; ?>"></strong></td>
                                        <td style="width:25px;"><input class="btn-warning" type="submit" name="update-mid-quiz3" value="Update"></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Written </strong><i>(Total:40; Pass:13; Contributes:25%)</i></td>
                                        <td style="width:25px;"><strong><input type="text" name="midterm_written" value="<?= $result['midterm_written']; ?>"></strong></td>
                                        <td style="width:25px;"><input class="btn-warning" type="submit" name="update-mid-written" value="Update"></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Attendance </strong><i>(Total:10; Pass:5; Contributes:25%)</i></td>
                                        <td style="width:25px;"><strong><input type="text" name="midterm_attendance" value="<?= $result['midterm_attendance']; ?>"></strong></td>
                                        <td style="width:25px;"><input class="btn-warning" type="submit" name="update-mid-attendance" value="Update"></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Class Performance </strong><i>(Total:10; Pass:5; Contributes:25%)</i></td>
                                        <td style="width:25px;"><strong><input type="text" name="midterm_class_performance" value="<?= $result['midterm_class_performance']; ?>"></strong></td>
                                        <td style="width:25px;"><input class="btn-warning" type="submit" name="update-mid-class-performance" value="Update"></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Mid Term Grade </strong><i>(Total:100; Pass:50; Contributes:25%)</i></td>
                                        <td style="width:25px;"><?= $result['midterm_grade']; ?></td>
                                        <td style="width:25px;"><input class="btn-default" type="submit" name="calculate-midterm-grade" value="Calculate"></td>
                                    </tr>
                                    <tr>
                                        <th colspan="3">Final Term</th>
                                    </tr>
                                    <tr>
                                        <td><strong>Lab Performance </strong><i>(Total:25; Pass:13; Contributes:25%)</i></td>
                                        <td style="width:25px;">-</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Lab Exams </strong><i>(Total:25; Pass:13; Contributes:25%)</i></td>
                                        <td style="width:25px;"><strong><input type="text" name="finalterm_lab" value="<?= $result['finalterm_lab']; ?>"></strong></td>
                                        <td style="width:25px;"><input class="btn-warning" type="submit" name="update-final-labexam" value="Update"></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Quiz 1 </strong><i>(Total:25; Pass:13; Contributes:25%)</i></td>
                                        <td style="width:25px;"><strong><input type="text" name="finalterm_quiz1" value="<?= $result['finalterm_quiz1']; ?>"></strong></td>
                                        <td style="width:25px;"><input class="btn-warning" type="submit" name="update-final-quiz1" value="Update"></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Quiz 2 </strong><i>(Total:25; Pass:13; Contributes:25%)</i></td>
                                        <td style="width:25px;"><strong><input type="text" name="finalterm_quiz2" value="<?= $result['finalterm_quiz2']; ?>"></strong></td>
                                        <td style="width:25px;"><input class="btn-warning" type="submit" name="update-final-quiz2" value="Update"></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Quiz 3 </strong><i>(Total:25; Pass:13; Contributes:25%)</i></td>
                                        <td style="width:25px;"><strong><input type="text" name="finalterm_quiz3" value="<?= $result['finalterm_quiz3']; ?>"></strong></td>
                                        <td style="width:25px;"><input class="btn-warning" type="submit" name="update-final-quiz3" value="Update"></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Written </strong><i>(Total:40; Pass:13; Contributes:25%)</i></td>
                                        <td style="width:25px;"><strong><input type="text" name="finalterm_written" value="<?= $result['finalterm_written']; ?>"></strong></td>
                                        <td style="width:25px;"><input class="btn-warning" type="submit" name="update-final-written" value="Update"></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Attendance </strong><i>(Total:10; Pass:5; Contributes:25%)</i></td>
                                        <td style="width:15px;"><strong><input type="text" name="finalterm_attendance" value="<?= $result['finalterm_attendance']; ?>"></strong></td>
                                        <td style="width:25px;"><input class="btn-warning" type="submit" name="update-final-attendance" value="Update"></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Class Performance </strong><i>(Total:10; Pass:5; Contributes:25%)</i></td>
                                        <td style="width:25px;"><strong><input type="text" name="finalterm_class_performance" value="<?= $result['finalterm_class_performance']; ?>"></strong></td>
                                        <td style="width:25px;"><input class="btn-warning" type="submit" name="update-final-class-performance" value="Update"></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Final Term Grade </strong><i>(Total:100; Pass:50; Contributes:25%)</i></td>
                                        <td style="width:25px;"><?= $result['finalterm_grade']; ?></td>
                                        <td style="width:25px;"><input class="btn-default" type="submit" name="calculate-finalterm-grade" value="Calculate"></td>
                                    </tr>
                                    <?php endforeach; ?>
                                </form>
                            </td>
                        </tr>
                    </table>
                </div>
                <div id="result"></div>
            </div>
        </div>
    </body>
</html>

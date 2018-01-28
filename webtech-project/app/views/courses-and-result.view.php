<?php include 'partials/header.php'; ?>
        <div class="container">
            <?php include 'partials/nav.php'; ?>
            <?php include 'partials/sidebar.php'; ?>
            <div class="main">
                <div class="courses-and-results">
                    <table>
                        <tr>
                            <th class="table-title" colspan="3">Grades Marks Quizes</th>
                        </tr>
                        <tr>
                            <td>
                                <form method="post">
                                    <select name="users" onchange="showUser(this.value)">
                                        <option value="">Select Course</option>
                                        <?php foreach ($courses as $course) : ?>
                                        <option value="<?= $course['id']; ?>"><?= $course['course_id']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </form>
                            </td>
                        </tr>
                    </table>
                </div>
                <div id="result"></div>
            </div>
        </div>
<?php include 'partials/footer.php'; ?>

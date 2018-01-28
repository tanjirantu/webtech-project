<?php include 'partials/header.php'; ?>

        <div class="container">

            <?php include 'partials/nav.php'; ?>

            <div class="registration-notification">
                <div class="profile-pic">
                    <img src="/webtech-project/public/resources/dummy-user.jpg" alt="user-image">
                </div>
                <div class="student-info">
                    <table>
                        <tr>
                            <th>Name</th>
                            <td><?= $_SESSION['first_name'] ." ". $_SESSION['last_name']; ?> </td>
                        </tr>
                        <tr>
                            <th>ID</th>
                            <td><?= $_SESSION['organizational_id']; ?></td>
                        </tr>
                        <tr>
                            <th>Department</th>
                            <td><?= $_SESSION['department_id']; ?></td>
                        </tr>
                        <tr>
                            <th>CGPA</th>
                            <td>4.00</td>
                        </tr>
                        <tr>
                            <th>Credits Completed</th>
                            <td>130</td>
                        </tr>
                        <tr>
                            <td>You are not allowed to register today.</td>
                            <td>
                                <form method="post">

                                    <input class="btn-warning" type="submit" name="submit" value="Next">

                                </form>
                            </td>
                        </tr>
                    </table>
                </div>

            </div> <!-- end register-nofification -->
        </div>
<?php 'partials/footer.php'; ?>

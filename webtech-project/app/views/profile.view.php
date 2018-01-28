<?php include 'partials/header.php'; ?>

        <div class="container">

            <?php include 'partials/nav.php'; ?>

            <?php include 'partials/sidebar.php'; ?>
            <div class="main">
                <div class="profile-pic" style="left:0;">
                    <img src="../resources/dummy-user.jpg" alt="">
                </div>
                <div class="student-info" style="left:50px;">
                    <table>
                        <tr>
                            <th>Name</th>
                            <td><?= $_SESSION['last_name'] ." ".$_SESSION['last_name']; ?></td>
                        </tr>
                        <tr>
                            <th>Student ID</th>
                            <td><?= $_SESSION['organizational_id']; ?></td>
                        </tr>
                        <tr>
                            <th>Email Address</th>
                            <td><?= $_SESSION['email']; ?></td>
                        </tr>
                        <tr>
                            <th>Contact</th>
                            <td><?= isset($_SESSION['students_contact_number']); ?></td>
                        </tr>
                        <tr>
                            <th>Blood Group</th>
                            <td><?= $_SESSION['blood_group']; ?></td>
                        </tr>

                        <tr>
                            <th>Father's Name</th>
                            <td>Thomas Wayne</td>
                        </tr>
                        <tr>
                            <th>Parent's Phone No</th>
                            <td><?= isset($_SESSION['parents_contact_number']); ?></td>
                        </tr>
                        <tr>
                            <th>Parmanent Address</th>
                            <td><?= $_SESSION['parmanent_address']; ?></td>
                        </tr>
                        <tr>
                            <th>Current Address</th>
                            <td><?= $_SESSION['current_address']; ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

<?php 'partials/footer.php'; ?>

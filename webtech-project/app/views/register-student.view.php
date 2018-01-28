<?php include 'partials/header.php'; ?>
        <div class="container">
            <?php include 'partials/nav.php'; ?>
            <div class="side-panel">
                <div class="sec-1">
                    <div class="side-panel-title">
                        <h2>Account</h2>
                    </div>
                    <div class="side-panel-control">
                        <form method="post">
                            <ul>
                                <li><a href="../../index.php">Dashboard</a></li>
                                <li><a href="change-password.php">Change Password</a></li>
                            </ul>
                        </form>
                    </div>
                </div>
                <div class="sec-2">
                    <div class="side-panel-title">
                        <h2>Manageing Panel</h2>
                    </div>
                    <div class="side-panel-control">
                        <form method="post">
                            <ul>
                                <li><a href="../../index.php">Register Student</a></li>
                                <li><a href="../../index.php">Register Faculty</a></li>
                                <li><a href="manage-students.php">Manage Students</a></li>
                                <li><a href="manage-faculties.php">Manage Faculties</a></li>
                                <li><a href="../../index.php">Add New Section</a></li>
                                <li><a href="../../index.php">Remove Section</a></li>
                            </ul>
                        </form>
                    </div>
                </div>
            </div><!-- end side-panel -->
            <div class="main">
                <div class="wrap">
                    <form method="post">
                            <table>
                                <tr>
                                    <th>First Name</th>
                                    <td>
                                        <input type="text" name="first-name">
                                    </td>
                                </tr>
                                <tr>
                                    <th>Last Name</th>
                                    <td>
                                        <input type="text" name="last-name">
                                    </td>
                                </tr>
                                <tr>
                                    <th>Email Address</th>
                                    <td>
                                        <input type="text" name="email">
                                    </td>
                                </tr>
                                <tr>
                                    <th>Blood Group</th>
                                    <td>
                                        <select>
                                            <option value="apos">A Positive</option>
                                            <option value="aneg">A Negitive</option>
                                            <option value="bpos">B Positive</option>
                                            <option value="bneg">B Negetive</option>
                                            <option value="abpos">AB Positive</option>
                                            <option value="abneg">AB Negitive</option>
                                            <option value="opos">O Positive</option>
                                            <option value="oneg">O Negetive</option>
                                        </select>

                                    </td>
                                </tr>
                                <tr>
                                    <th>Gender</th>
                                    <td>
                                        <input type="radio" name="gender" value="male"> Male
                                        <input type="radio" name="gender" value="female"> Female
                                        <input type="radio" name="gender" value="Other"> Other
                                    </td>
                                </tr>
                                <tr>
                                    <th>Birth Date</th>
                                    <td>
                                        <input type="text" name="birth-date" style="width:70px;" placeholder="dd"> |
                                        <input type="text" name="birth-date" style="width:70px;" placeholder="mm"> |
                                        <input type="text" name="birth-date" style="width:70px;" placeholder="yyy">
                                    </td>
                                </tr>
                                <tr>
                                    <th>Parmanent Address</th>
                                    <td>
                                        <input type="text" name="parmanent-address">
                                    </td>
                                </tr>
                                <tr>
                                    <th>Current Address</th>
                                    <td>
                                        <input type="text" name="current-address">
                                    </td>
                                </tr>
                                <tr>
                                    <th>Parent's Contact Number</th>
                                    <td>
                                        <input type="text" name="parents-phone">
                                    </td>
                                </tr>
                                <tr>
                                    <th>Student Contact Number</th>
                                    <td>
                                        <input type="text" name="students-phone">
                                    </td>
                                </tr>
                                <tr>
                                    <th>Local Guardian's Number</th>
                                    <td>
                                        <input type="text" name="local-guardians-phone">
                                    </td>
                                </tr>
                                <tr>
                                    <th>Assign Student's Id</th>
                                    <td>
                                        <input type="text" name="student-id">

                                    </td>
                                </tr>
                                <tr>
                                    <th>Assign Department</th>
                                    <td>
                                        <select>
                                            <option value="cs">BSc in Computer Science</option>
                                            <option value="cs">BSc in Electrical &amp; Electronic Engineering</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Assign Program</th>
                                    <td>
                                        <select>
                                            <option value="cs">Computer Science and Engineering</option>
                                            <option value="cs">Computer Science and Software Engineering</option>
                                            <option value="cs">Software Engineering</option>
                                            <option value="cs">Computer Science</option>
                                            <option value="cs">Computer Information System</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th></th>
                                    <td><input class="btn-default" type="submit" name="register-student" value="Register Student"></td>
                                </tr>
                            </table>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>

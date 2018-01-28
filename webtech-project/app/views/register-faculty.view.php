<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link rel="stylesheet" href="../../public/css/style.css">
    </head>
    <body>
        <div class="container">
            <div class="header">
                <div class="banner">
                    <div class="logo">
                        <a href="../../index.php"><img src="../../public/resources/aiub.png" alt="aiub" style="width:70px;height:63px;"></a>
                    </div>
                    <div class="seperator">

                    </div>
                    <div class="p-title">
                        <h1 class="h-title">CS Registration System</h1>
                    </div>
                </div>
                <div class="nav">
                    <form method="post">
                        <ul>
                            <li>
                                Welcome<a href="profile.php"> AHMED, KAZI TANJIR</a>
                            </li>
                            <li>
                                <a href="../../index.php"><img src="../resources/logout.png" alt="logout"></a>
                            </li>
                        </ul>
                    </form>
                </div>
            </div> <!-- end header -->
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
                                    <th>Joining Date</th>
                                    <td>
                                        <input type="text" name="birth-date" style="width:70px;" placeholder="dd"> |
                                        <input type="text" name="birth-date" style="width:70px;" placeholder="mm"> |
                                        <input type="text" name="birth-date" style="width:70px;" placeholder="yyy">

                                    </td>
                                </tr>
                                <tr>
                                    <th>Assign Faculty Id</th>
                                    <td>
                                        <input type="text" name="faculty-id">

                                    </td>
                                </tr>
                                <tr>
                                    <th>Assign Department</th>
                                    <td>
                                        <select>
                                            <option value="cs">BSc in Computer Science</option>
                                            <option value="eee">BSc in Electrical &amp; Electronic Engineering</option>
                                        </select>

                                    </td>
                                </tr>
                                <tr>
                                    <th>Designation</th>
                                    <td>
                                        <select>
                                            <option value="cs">School of Science</option>
                                            <option value="cs">School of Engineering</option>
                                            <option value="cs">School of Architecture</option>
                                            <option value="cs">School of Business Administration</option>
                                        </select>

                                    </td>
                                </tr>
                                <tr>
                                    <th></th>
                                    <td><input class="btn-default" type="submit" name="register-faculty" value="Register Faculty"></td>
                                </tr>
                            </table>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>

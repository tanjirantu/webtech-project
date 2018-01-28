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
                                <a href="../../index.php"><img src="../../public/resources/logout.png" alt="logout"></a>
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
                <div class="search-panel">
                    <form method="post">
                        <ul>
                            <li><input type="text" name="search" placeholder="Search By ID or User Name"></li>
                            <li><input class="btn-default" type="submit" name="search" value="Search"></li>
                        </ul>
                    </form>
                </div>
                <div class="box-3">
                    <div class="profile-pic" style="left:0;">
                        <img src="../../public/resources/dummy-user.jpg" alt="profile-pic" style="height:210px;width:200px;">
                    </div>
                    <div class="student-info" style="left:0;">
                        <table>
                            <tr>
                                <th>Name</th>
                                <td>Wayne, Bruce</td>
                            </tr>
                            <tr>
                                <th>Ogranizational Id</th>
                                <td>10-27289-1</td>
                            </tr>
                            <tr>
                                <th>Department</th>
                                <td>BSc in Computer Science</td>
                            </tr>
                            <tr>
                                <th>Program</th>
                                <td>CSE</td>
                            </tr>
                            <tr>
                                <th></th>
                                <td>
                                    <form method="post">
                                        <!--<input class="btn-default" type="submit" name="assign-courses" value="Assign Courses">-->
                                        <a href="registration.php">Assign Courses</a>
                                    </form>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

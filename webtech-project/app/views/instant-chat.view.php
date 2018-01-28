<?php include 'partials/header.php'; ?>
        <div class="container" onload="loadInstantMessages()">
            <div class="header">
                <div class="banner">
                    <div class="logo">
                        <a href="<?= lcfirst($_SESSION['role']); ?>.php"><img src="../../public/resources/aiub.png" alt="aiub" style="width:70px;height:63px;"></a>
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
                                Welcome<a href="profile.php"> <?= $_SESSION['first_name'] ." ". $_SESSION['last_name']; ?></a>
                            </li>
                            <li>
                                <a href="logout.php"><img src="../../public/resources/logout.png" alt="logout"></a>
                            </li>
                        </ul>
                    </form>
                </div>
            </div> <!-- end header -->

            <div class="main" style="width:100%;height:auto;">
                <div class="navigation-panel" style="border-bottom: 1px solid #ececec;">
                    <!-- <ul>
                        <li><a href="section-details.php">Student List</a></li>
                        <li><a href="manage-section.php">Manage Section</a></li>
                        <li><a href="instant-chat.php">Instant Message</a></li>
                    </ul> -->
                    <select>
                        <option value="">Available</option>
                        <option value="">Busy</option>
                        <option value="">Offline</option>
                    </select>
                </div>
                <div class="chat_box">
                    <div id="chat"></div>
                    <textarea name="name" rows="8" cols="80">alkdfjlskadfj</textarea>
                </div>
                <div class="chat_sidebar">
                    <div class="profile-pic" style="left:0;height:64px;width:auto;">
                        <img src="../../public/resources/dummy-user.jpg" alt="user" style="width:64px;height:64px;">
                    </div>
                    <div class="user-info">
                        <h4>Username</h4>
                        <p>Available: [8.00 - 3:30 PM]</p>
                    </div>
                </div>
                <div class="message_panel">
                    <form method="post">
                        <textarea class="instant" name="message" rows="2" cols="30" placeholder="your message here"></textarea>
                        <input class="btn2" type="submit" name="submit" value="Send it">
                    </form>
                </div>
            </div>
        </div>
<?php include 'partials/footer.php'; ?>

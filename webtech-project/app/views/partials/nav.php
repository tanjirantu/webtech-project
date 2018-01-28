<div class="header">

    <div class="banner">

        <div class="logo">
            <a href="<?= lcfirst($_SESSION['role']);?>.php"><img src="/webtech-project/public/resources/aiub.png" alt="aiub" style="width:70px;height:63px;"></a>
        </div>

        <div class="seperator"></div>

        <div class="p-title">
            <h1 class="h-title">CS Registration System</h1>
        </div>

    </div>

    <div class="nav">

        <form method="post">
            <ul>
                <li>
                    Welcome<a href="../../app/controllers/profile.php"> <?= $_SESSION['last_name'] ." ". $_SESSION['first_name']; ?></a>
                </li>
                <li>
                    <a href="../../app/controllers/logout.php"><img src="/webtech-project/public/resources/logout.png" alt="logout"></a>
                </li>
                <li>
                    <a href="../../app/controllers/change-password.php"><img src="/webtech-project/public/resources/settings.png" alt="settings"></a>
                </li>
            </ul>
        </form>

    </div>

</div>

<?php include 'partials/header.php'; ?>
<div class="container">
            <div class="login-panel">
                <div class="login-title">
                    <h2>Login</h2>
                </div>
                <div class="login-controls">
                    <form method="post">
                        <ul>
                            <li>
                                <input type="text" name="organizational_id" id="organizational_id" placeholder="Username">
                            </li>
                            <li>
                                <input type="password" name="password" id="password" placeholder="Password">
                            </li>
                            <li>
                                <input type="submit" name="login" value="Login">
                            </li>
                            <li class="password-recovery-link">
                                <a href="app/controllers/recover-password.php">Forgot Password?</a>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
<?php 'partials/footer.php'; ?>

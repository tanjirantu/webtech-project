<?php include 'partials/header.php'; ?>

        <div class="container">

            <?php include 'partials/nav.php'; ?>


            <div class="main" style="width:100%">
                <table>
                    <form method="post" name="form">
                        <tr>
                            <th><label for="new-password" onkeyup='check();'>New Password <span id='message'></label></th>
                            <td><input type="password" name="new-password" id="new-password"  onkeyup='check();' /></td>
                        </tr>
                        <tr>
                            <th><label for="confirm-password" onkeyup='check();'>Confirm Password <span id='message'></label></th>
                            <td><input type="password" name="confirm-password" id="confirm-password"  onkeyup='check();' /></td>
                        </tr>
                        <tr>
                            <td><p style="color:green;"><?= $message; ?></p></td>
                            <td><input class="btn-warning" type="submit" name="change-password" value="Confirm Change" onclick="check_length();"><a href="#"> Password Policy</a></td>
                        </tr>
                    </form>
                </table>

                <script>
                    var check = function() {
                        if (document.getElementById('new-password').value == document.getElementById('confirm-password').value) {
                            document.getElementById('message').style.color = 'green';
                            document.getElementById('message').style.fontSize = '25px';
                            document.getElementById('message').innerHTML = '✔';
                        } else {
                            document.getElementById('message').style.color = 'red';
                            document.getElementById('message').style.fontSize = '25px';
                            document.getElementById('message').innerHTML = '✗';
                        }
                    }

                    var check_length = function() {
                        pass = document.getElementById('confirm-password').value;
                        if (pass.length < 8)
                            alert("Password must be 8 character long");

                    }

                    var message = function() {
                        if(!check_length() || !check()) {
                            alert("Password did not meet requirement");
                        }
                    }
                </script>
            </div>
        </div>
    </body>
</html>

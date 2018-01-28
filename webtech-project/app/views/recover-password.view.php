<?php include 'partials/header.php'; ?>

        <div class="container">
            <div class="password-recovery-panel">
                <form method="post">
                    <fieldset style="border:none;width:500px;">
                        <legend style="color:silver;">Recover Password</legend>
                        <table>
                            <tr>
                                <th>Email Address</th>
                                <td>
                                    <input type="text" name="email">
                                </td>
                                <td><input class="btn-warning" type="submit" name="submit" value="Submit"></td>
                            </tr>
                        </table>
                    </fieldset>
                </form>
            </div>
        </div>
<?php 'partials/footer.php'; ?>

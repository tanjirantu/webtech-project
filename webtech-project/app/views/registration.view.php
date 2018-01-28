<?php include 'partials/header.php'; ?>

        <div class="container">

            <?php include 'partials/nav.php'; ?>

            <div class="registration-control">
                <div class="navigation">
                    <form method="post">
                        <ul>
                            <li>
                                <input class="btn-warning" type="submit" name="confirm-registration" value="Confirm Registration">
                            </li>
                            <li>
                                <input class="btn-warning" type="submit" name="show-registration-details" value="Show Registered Sections">
                            </li>
                        </ul>
                    </form>
                </div>
            </div>

            <div class="reg-info">
                <table width=100%;>
                    <tr>
                        <td>Student ID</td>
                        <td>:</td>
                        <td><?= $_SESSION['organizational_id']; ?></td>
                        <td>Registration For</td>
                        <td>:</td>
                        <td>2017-18, Spring</td>
                        <td>Credits</td>
                        <td>:</td>
                        <td>Lec:9, Sci:0 Comp:1, Lan:0, Studio:0</td>
                    </tr>
                </table>
            </div>

            <div class="offered-courses-section">
                <table width="100%" id="section-details-table">
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Capacity</th>
                        <th>Count</th>
                        <th>Time</th>
                    </tr>
                    <?php foreach ($data as $value) : ?>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td><?= $value['title'] ." ". "[". $value['section'] ."]"; ?></td>

                        <td>20</td>
                        <td>0</td>
                        <td>
                            <table>
                                <tr>
                                    <th>Theory</th>
                                    <td><?= $value['day_one']; ?></td>
                                    <td><?= explode(' ',$value['day_one_schedule'])[0]; ?> PM</td>
                                    <td><?= explode(' ',$value['day_one_schedule'])[1]; ?> PM</td>
                                    <td>3119</td>
                                </tr>
                                <tr>
                                    <th>Lab</th>
                                    <td><?= $value['day_two']; ?></td>
                                    <td><?= explode(' ',$value['day_two_schedule'])[0]; ?> PM</td>
                                    <td><?= explode(' ',$value['day_two_schedule'])[1]; ?> PM</td>
                                    <td>3209</td>
                                </tr>

                            </table>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>

        <script>
            var list = document.getElementsById("section-details-table");

            alert(list);
        </script>

<?php 'partials/footer.php'; ?>

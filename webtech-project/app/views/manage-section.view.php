<?php include 'partials/header.php'; ?>
        <div class="container">
            <?php include 'partials/nav.php'; ?>
            <?php include 'partials/sidebar-faculty.php'; ?>
            <div class="main">
                <div class="navigation-panel">
                    <ul>
                        <li><a href="section-details.php">Student List</a></li>
                        <li><a href="manage-section.php">Manage Section</a></li>
                        <li><a href="instant-chat.php">Instant Message</a></li>
                    </ul>
                </div>
                <form method="post" enctype="multipart/form-data">
                    <table>
                        <tbody>
                            <tr>
                                <th rowspan="4" scope="rowgroup">Upload Notes</th>
                                <td colspan="4"><input type="file" name="file"></td>
                                <td><input class="btn-warning" type="submit" name="upload-file1" value="Upload"></td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <th rowspan="2" scope="rowgroup">Update Notice</th>
                                <td colspan="2"><textarea name="notice" rows="8" cols="80" style="max-width:500px;min-width:250px;max-height:150px;min-height:50px;"></textarea></td>
                            </tr>
                            <tr>
                                <td><input class="btn-warning" type="submit" name="update-notice" value="Update"></td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </body>
</html>

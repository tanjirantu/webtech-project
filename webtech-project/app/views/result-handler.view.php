<?php foreach ($results as $result) : ?>
    <table style="width:100%">
        <tr>
            <td colspan="4" class="course-details">
                <li>Web Technologies [F]</li>
                <li><i>Total Marks:-<strong> 100 </strong>Passing Marks:- <strong>  50 </strong></i></li>
                <li><i>Course Teacher(s): Shovra Das [1501-1572-2]</i></li>
            </td>
        </tr>
        <tr>
            <th colspan="3">Mid Term</th>
        </tr>
        <tr>
            <td><strong>Lab Performance </strong><i>(Total:25; Pass:13; Contributes:25%)</i></td>
            <td style="width:25px;">-</td>
        </tr>
        <tr>
            <td><strong>Lab Exams </strong><i>(Total:25; Pass:13; Contributes:25%)</i></td>
            <td style="width:25px;"><strong>20.00</strong></td>
        </tr>
        <tr>
            <td><strong>Quiz 1 </strong><i>(Total:25; Pass:13; Contributes:25%)</i></td>
            <td style="width:25px;"><strong><?php echo $result['midterm_quiz1']; ?></strong></td>
        </tr>
        <tr>
            <td><strong>Quiz 2 </strong><i>(Total:25; Pass:13; Contributes:25%)</i></td>
            <td style="width:25px;"><strong><?= $result['midterm_quiz2']; ?></strong></td>
        </tr>
        <tr>
            <td><strong>Quiz 3 </strong><i>(Total:25; Pass:13; Contributes:25%)</i></td>
            <td style="width:25px;"><strong><?= $result['midterm_quiz3']; ?></strong></td>
        </tr>
        <tr>
            <th colspan="3">Final Term</th>
        </tr>
        <tr>
            <td><strong>Lab Performance </strong><i>(Total:25; Pass:13; Contributes:25%)</i></td>
            <td style="width:25px;">-</td>
        </tr>
        <tr>
            <td><strong>Lab Exams </strong><i>(Total:25; Pass:13; Contributes:25%)</i></td>
            <td style="width:25px;"><strong>20.00</strong></td>
        </tr>
        <tr>
            <td><strong>Quiz 1 </strong><i>(Total:25; Pass:13; Contributes:25%)</i></td>
            <td style="width:25px;"><strong><?= $result['finalterm_quiz1']; ?></strong></td>
        </tr>
        <tr>
            <td><strong>Quiz 2 </strong><i>(Total:25; Pass:13; Contributes:25%)</i></td>
            <td style="width:25px;"><strong><?= $result['finalterm_quiz1']; ?></strong></td>
        </tr>
        <tr>
            <td><strong>Quiz 3 </strong><i>(Total:25; Pass:13; Contributes:25%)</i></td>
            <td style="width:25px;"><strong><?= $result['finalterm_quiz3']; ?></strong></td>
        </tr>
    </table>
<?php endforeach; ?>

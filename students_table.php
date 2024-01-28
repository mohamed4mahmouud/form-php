<?php
include 'students.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>name</th>
            <th>email</th>
            <th>status</th>
        </tr>
        <?php foreach($students as $student):?>
            <tr <?php echo ($student['status'] == 'PHP') ? 'style="color:red"' : ''; ?>>
                <td><?php echo $student['name']?></td>
                <td><?php echo $student['email']?></td>
                <td><?php echo $student['status']?></td>
            </tr>
            <?php endforeach; ?>
    </table>
</body>
</html>

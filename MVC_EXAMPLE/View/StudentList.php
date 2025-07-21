<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sinh viên</title>
</head>
<body>
    <h2>Danh sách sinh viên:</h2>
    <table>
        <tr>
            <th>STT</th>
            <th>Tên sinh viên</th> <!-- StudentList.php -->
        </tr>
        <?php
        for ($i = 0; $i < sizeof($studentList); $i++) {
            echo "<tr>";
            echo "<td>" . ($i + 1) . "</td>";
            echo "<td><a href='?stid=" . $studentList[$i]->id . "'>" . $studentList[$i]->name . "</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
    <br>
    <p><a href="../index.php">Home page</a></p>
</body>
</html>
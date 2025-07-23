<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Danh sách sinh viên</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h2>Danh sách sinh viên</h2>
    <table>
        <tr>
            <th>STT</th>
            <th>Họ tên</th>
            <th>Tuổi</th>
            <th>Trường</th>
            <th>Hành động</th>
        </tr>
        <?php if (isset($studentList) && is_array($studentList)): ?>
        <?php foreach ($studentList as $i => $student): ?>
        <tr>
            <td><?= $i + 1 ?></td>
            <td><?= htmlspecialchars($student->name) ?></td>
            <td><?= htmlspecialchars($student->age) ?></td>
            <td><?= htmlspecialchars($student->university) ?></td>
            <td>
                <a class="btn" href="C_Student.php?update=1&stid=<?= $student->id ?>">Cập nhật</a>
            </td>
        </tr>
        <?php endforeach; ?>
        <?php else: ?>
            <tr><td colspan="5">Không có dữ liệu sinh viên.</td></tr>
        <?php endif; ?>
    </table>
    <p><a href="../index.php">Home page</a></p>
</body>
</html>

<?php

// View/UpdateStudent.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cập nhật thông tin sinh viên</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h2>Cập nhật thông tin sinh viên</h2>
    <?php if (isset($student)): ?>
    <form method="post" action="">
        <label>Họ tên:</label>
        <input type="text" name="name" value="<?= htmlspecialchars($student->name) ?>" required><br>
        <label>Tuổi:</label>
        <input type="number" name="age" value="<?= htmlspecialchars($student->age) ?>" required><br>
        <label>Trường:</label>
        <input type="text" name="university" value="<?= htmlspecialchars($student->university) ?>" required><br>
        <button type="submit" name="update">Cập nhật</button>
    </form>
    <?php else: ?>
        <p>Không tìm thấy sinh viên.</p>
    <?php endif; ?>
    <br>
    <p><a href="C_Student.php?update=1">Quay lại danh sách</a></p>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Xoá sinh viên</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h2>Xoá sinh viên</h2>
    <?php if (isset($student)): ?>
        <p>Bạn có chắc chắn muốn xoá sinh viên sau?</p>
        <p><strong>Họ tên:</strong> <?= htmlspecialchars($student->name) ?></p>
        <p><strong>Tuổi:</strong> <?= htmlspecialchars($student->age) ?></p>
        <p><strong>Trường:</strong> <?= htmlspecialchars($student->university) ?></p>
        <form method="post" action="">
            <input type="hidden" name="stid" value="<?= $student->id ?>">
            <button type="submit" name="delete" onclick="return confirm('Bạn có chắc muốn xoá sinh viên này?')">Xoá</button>
        </form>
    <?php else: ?>
        <p>Không tìm thấy sinh viên.</p>
    <?php endif; ?>
    <br>
    <p><a href="C_Student.php">Quay lại danh sách</a></p>
</body>
</html>
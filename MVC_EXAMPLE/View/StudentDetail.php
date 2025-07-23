<!-- View/StudentDetail.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chi tiết sinh viên</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h2>Chi tiết sinh viên:</h2>
    <?php if ($student): ?>
        <p><strong>ID:</strong> <?= $student->id ?></p>
        <p><strong>Họ tên:</strong> <?= $student->name ?></p>
        <p><strong>Tuổi:</strong> <?= $student->age ?></p>
        <p><strong>Trường:</strong> <?= $student->university ?></p>
    <?php else: ?>
        <p>Không tìm thấy sinh viên!</p>
    <?php endif; ?>
    <br>
    <p><a href="C_Student.php">Quay lại danh sách</a></p>
</body>
</html>

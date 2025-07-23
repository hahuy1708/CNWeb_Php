<?php
$ID = $_POST['ID'] ?? '';
$name = $_POST['name'] ?? '';
$university = $_POST['university'] ?? '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tìm kiếm sinh viên</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h2>Tìm kiếm sinh viên</h2>

    <form method="post">
    <input type="text" name="ID" placeholder="ID sinh viên">
    <input type="text" name="name" placeholder="Tên sinh viên">
    <input type="text" name="age" placeholder="Tuổi">
    <input type="text" name="university" placeholder="Trường đại học">
    <button type="submit" name="search">Tìm kiếm</button>
</form>

    <br>

    <?php if (isset($studentList) && is_array($studentList) && count($studentList) > 0): ?>
        <table border="1" width="100%">
            <tr>
                <th>STT</th>
                <th>Mã sinh viên</th>
                <th>Họ tên</th>
                <th>Tuổi</th>
                <th>Trường</th>
            </tr>
            <?php foreach ($studentList as $i => $student): ?>
            <tr>
                <td><?= $i + 1 ?></td>
                <td><?= htmlspecialchars($student->id) ?></td>
                <td><?= htmlspecialchars($student->name) ?></td>
                <td><?= htmlspecialchars($student->age) ?></td>
                <td><?= htmlspecialchars($student->university) ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php elseif ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
        <p>Không tìm thấy sinh viên nào.</p>
    <?php endif; ?>
</body>
</html>

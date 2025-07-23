<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thêm sinh viên</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h2>Thêm sinh viên mới</h2>
    <form method="post" action="">
        <label>Họ tên:</label>
        <input type="text" name="name" required><br>
        <label>Tuổi:</label>
        <input type="number" name="age" required><br>
        <label>Trường:</label>
        <input type="text" name="university" required><br>
        <button type="submit" name="add">Thêm</button>
    </form>
    <br>
    <p><a href="C_Student.php">Quay lại danh sách</a></p>
    <br>
    <p><a href="../index.php">Home page</a></p>
</body>
</html>
<?php
require_once("csdl.php");
$result = $link->query("SELECT * FROM nhanvien");
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Chọn nhân viên để xoá</title>
</head>
<body>
    <h2>Danh sách nhân viên</h2>
    <table border="1" cellpadding="5">
        <tr>
            <th>IDNV</th>
            <th>Tên nhân viên</th>
            <th>Địa chỉ</th>
            <th>Hành động</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['IDNV'] ?></td>
            <td><?= $row['Hoten'] ?></td>
            <td><?= $row['Diachi'] ?></td>
            <td><a href="xulyxoa.php?IDNV=<?= $row['IDNV'] ?>">Xoá</a></td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>

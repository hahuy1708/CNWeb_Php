<?php
require_once("csdl.php");
$result = $link->query("SELECT * FROM phongban");
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Chọn phòng ban để cập nhật</title>
</head>
<body>
    <h2>Danh sách phòng ban</h2>
    <table border="1" cellpadding="5">
        <tr>
            <th>IDPB</th>
            <th>Tên phòng ban</th>
            <th>Mô tả</th>
            <th>Hành động</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['IDPB'] ?></td>
            <td><?= $row['TenPB'] ?></td>
            <td><?= $row['Mota'] ?></td>
            <td><a href="form_capnhat.php?IDPB=<?= $row['IDPB'] ?>">Cập nhật</a></td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>

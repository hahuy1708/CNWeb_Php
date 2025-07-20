<?php
require_once("csdl.php");

// Lấy danh sách phòng ban để hiện trong <select>
$sql = "SELECT IDPB, TenPB FROM phongban";
$result = $link->query($sql);
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Chèn thêm nhân viên</title>
</head>
<body>
    <h2>Chèn thông tin nhân viên</h2>
    <form method="POST" action="xulychentt.php">
        <label>ID Nhân viên:</label><br>
        <input type="text" name="IDNV" required><br><br>

        <label>Họ tên:</label><br>
        <input type="text" name="Hoten" required><br><br>

        <label>Phòng ban:</label><br>
        <select name="IDPB" required>
            <option value="">--Chọn phòng ban--</option>
            <?php while ($row = $result->fetch_assoc()): ?>
                <option value="<?= $row['IDPB'] ?>"><?= $row['TenPB'] ?></option>
            <?php endwhile; ?>
        </select><br><br>

        <label>Địa chỉ:</label><br>
        <input type="text" name="Diachi" required><br><br>

        <button type="submit">Thêm nhân viên</button>
    </form>
</body>
</html>

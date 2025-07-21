<?php
require_once("csdl.php");
$result = $link->query("SELECT * FROM nhanvien");
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Xoá nhiều nhân viên</title>
    <link rel="stylesheet" href="css/style.css">
    <script>
    function checkSubmit() {
        let checked = document.querySelectorAll('input[type="checkbox"]:checked');
        if (checked.length === 0) {
            alert('Bạn chưa chọn nhân viên nào!');
            return false;
        }
        return confirm('Bạn có chắc muốn xoá các nhân viên đã chọn?');
    }
    </script>
</head>
<body>
    <h2>Chọn nhân viên để xoá</h2>
    <form method="POST" action="xulyxoatatca.php" onsubmit="return checkSubmit();">
        <table border="1" cellpadding="5">
            <tr>
                <th>Xoá</th>
                <th>IDNV</th>
                <th>Họ tên</th>
                <th>IDPB</th>
                <th>Địa chỉ</th>
            </tr>
            <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td>
                    <!-- Checkbox với name là IDNV -->
                    <input type="checkbox" name="<?= $row['IDNV'] ?>" value="1">
                </td>
                <td><?= ($row['IDNV']) ?></td>
                <td><?= ($row['Hoten']) ?></td>
                <td><?= ($row['IDPB']) ?></td>
                <td><?= ($row['Diachi']) ?></td>
            </tr>
            <?php endwhile; ?>
        </table>
        <br>
        <button type="submit">Xoá tất cả</button>
    </form>
    <br>
    <a href="home.php">Quay lại trang chính</a>
</body>
</html>

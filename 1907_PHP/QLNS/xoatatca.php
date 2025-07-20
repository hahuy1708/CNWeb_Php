<?php
require_once("csdl.php");
$result = $link->query("SELECT * FROM nhanvien");
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Xoá nhiều nhân viên</title>
    <script>
    function submitDelete() {
        // Lấy tất cả checkbox đã chọn
        let checked = document.querySelectorAll('input[name="nv_check"]:checked');
        if (checked.length === 0) {
            alert('Bạn chưa chọn nhân viên nào!');
            return false;
        }
        if (!confirm('Bạn có chắc muốn xoá các nhân viên đã chọn?')) return false;
        // Gom các IDNV thành chuỗi, phân cách bằng dấu phẩy
        let ids = Array.from(checked).map(cb => cb.value).join(',');
        document.getElementById('idnv_list').value = ids;
        return true;
    }
    </script>
</head>
<body>
    <h2>Chọn nhân viên để xoá</h2>
    <form method="POST" action="xulyxoatatca.php" onsubmit="return submitDelete();">
        <input type="hidden" name="IDNV" id="idnv_list" value="">
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
                    <input type="checkbox" name="nv_check" value="<?= $row['IDNV'] ?>">
                </td>
                <td><?= $row['IDNV'] ?></td>
                <td><?= $row['Hoten'] ?></td>
                <td><?= $row['IDPB'] ?></td>
                <td><?= $row['Diachi'] ?></td>
            </tr>
            <?php endwhile; ?>
        </table>
        <br>
        <button type="submit">Xoá tất cả</button>
    </form>
</body>
</html>

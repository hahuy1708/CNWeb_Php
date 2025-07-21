<?php
require_once("csdl.php");

$idpb = $_REQUEST['IDPB'];

$sql = "SELECT * FROM nhanvien WHERE IDPB = '$idpb'";
$result = mysqli_query($link, $sql);
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách nhân viên</title>
    <link rel="stylesheet" href="css/style.css"> 
</head>
<body>
    <div class="container">
        <table>
            <caption>Danh sách nhân viên phòng ban</caption>
            <tr>
                <th>Mã</th>
                <th>Tên</th>
                <th>Địa chỉ</th>
            </tr>
            <?php while($row = mysqli_fetch_array($result, MYSQLI_BOTH)): ?>
                <tr>
                    <td><?= $row['IDNV'] ?></td>
                    <td><?= $row['Hoten'] ?></td>
                    <td><?= $row['Diachi'] ?></td>
                </tr>
            <?php endwhile; ?>
        </table>
    </div>
</body>
</html>

<?php
mysqli_free_result($result);
mysqli_close($link);
?>

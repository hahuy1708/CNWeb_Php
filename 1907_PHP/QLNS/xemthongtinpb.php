<?php
require_once("csdl.php");

$sql = "SELECT * FROM phongban";
$result = mysqli_query($link, $sql);
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách phòng ban</title>
    <link rel="stylesheet" href="css/style.css"> 
</head>
<body>
    <div class="container">
        <table>
            <caption>Danh sách phòng ban</caption>
            <tr>
                <th>Mã</th>
                <th>Tên phòng ban</th>
                <th>Mô tả</th>
                <th>Xem chi tiết</th>
            </tr>
            <?php while($row = mysqli_fetch_array($result, MYSQLI_BOTH)): ?>
                <tr>
                    <td><?= $row['IDPB'] ?></td>
                    <td><?= $row['TenPB'] ?></td>
                    <td><?= $row['Mota'] ?></td>
                    <td><a href="xemthongtinnvpb.php?IDPB=<?= $row['IDPB'] ?>">Xem chi tiết</a></td>
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

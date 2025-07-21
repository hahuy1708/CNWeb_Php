<?php
require_once("csdl.php");

$sql = "SELECT * FROM nhanvien";
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
        <table border="1" width="100%">
            <caption>Danh sách nhân viên phòng ban</caption>
            <tr>
                <th>Mã</th>
                <th>Tên</th>
                <th>Địa chỉ</th>
            </tr>
            <?php
            while($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
                echo '<tr>';
                echo '<td>' . $row['IDNV'] . '</td>';
                echo '<td>' . $row['Hoten'] . '</td>';
                echo '<td>' . $row['Diachi'] . '</td>';
                echo '</tr>';
            }
            mysqli_free_result($result);
            mysqli_close($link);
            ?>
        </table>
    </div>
</body>
</html>
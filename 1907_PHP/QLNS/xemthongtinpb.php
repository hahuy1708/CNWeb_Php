<?php
require_once("csdl.php");

$sql = "SELECT * FROM phongban";


$result = mysqli_query($link, $sql);

echo "<table border='1' width='100%'>";
echo "<caption>Danh sách phòng ban</caption>";
echo "<tr><th>Mã</th><th>Tên phòng ban</th><th>Mô tả</th><th>Xem chi tiết</th></tr>"; 

while($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
    echo '<tr>
            <td>' . $row['IDPB'] . '</td>
            <td>' . $row['TenPB'] . '</td>
            <td>' . $row['Mota'] . '</td>
            <td><a href="xemthongtinnvpb.php?IDPB=' . $row['IDPB'] . '">Xem chi tiết</a></td>
          </tr>';
}
echo "</table>";

mysqli_free_result($result);
mysqli_close($link);
?>


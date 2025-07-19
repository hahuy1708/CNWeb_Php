<?php
require_once("csdl.php");

$idpb = $_GET['IDPB'];

$sql = "Select * from nhanvien where IDPB = '$idpb'";
$result = mysqli_query($link, $sql);
echo "<table border='1' width='100%'>";
echo "<caption>Danh sách nhân viên phòng ban</caption>";
echo "<tr><th>Mã</th><th>Tên</th><th>Địa chỉ</th></tr>";

while($row = mysqli_fetch_array($result,MYSQLI_BOTH)){
    echo '<tr><td>' . $row['IDNV'] . '</td><td>' . $row['Hoten'] . '</td><td>' . $row['Diachi'] . '</td></tr>';
}
echo "</table>";

mysqli_free_result($result);
mysqli_close($link);

?>
<?php
$link = mysqli_connect("localhost", "root", "", "DULIEU");

if (!$link) {
    die("Không thể kết nối CSDL: " . mysqli_connect_error());
}

$sql = "SELECT * FROM table1";
$result = mysqli_query($link, $sql);

echo "<table border='1' width='100%'>";
echo "<caption>Danh sách dữ liệu trong CSDL</caption>";
echo "<tr><th>Mã</th><th>Tên</th><th>Ngày sinh</th><th>Nghề nghiệp</th></tr>";

while($row = mysqli_fetch_array($result,MYSQLI_BOTH)){
    echo '<tr><td>' . $row['maso'] . '</td><td>' . $row['hoten'] . '</td><td>' . $row['ngaysinh'] . '</td><td>' . $row['nghenghiep'] . '</td></tr>';
}
echo "</table>";

mysqli_free_result($result);
mysqli_close($link);
?>

<?php
if (!isset($_GET['user'])) {
    echo "Bạn chưa đăng nhập. <a href='login.php'>Về trang đăng nhập</a>";
    exit();
}
?>

<h2>Chào bạn, <?php echo htmlspecialchars($_GET['user']); ?>!</h2>
<p>Chào mừng bạn đến với hệ thống quản lý nhân sự.</p>
<h3>Danh sách chức năng</h3>

<ul>
    <li><a href="chenthongtin.php">Chèn thêm nhân viên</a></li>
    <li><a href="capnhat.php">Cập nhật thông tin phòng ban</a></li>
    <li><a href="xoa.php">Xóa 1 nhân viên bất kì</a></li>
    <li><a href="xoatatca.php">Xoá nhiều nhân viên cùng 1 lúc</a></li>

</ul>

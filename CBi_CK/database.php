<?php

// Model/Database.php

$link = mysqli_connect("localhost", "root", "", "...");

if (!$link) {
    die("Không thể kết nối CSDL: " . mysqli_connect_error());
}
?>
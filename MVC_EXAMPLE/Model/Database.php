<?php

// Model/Database.php

$link = mysqli_connect("localhost", "root", "", "dulieu3");

if (!$link) {
    die("Không thể kết nối CSDL: " . mysqli_connect_error());
}
?>
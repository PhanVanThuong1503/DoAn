<?php
    $conn = new mysqli("localhost", "root", "", "webdienthoai2");
    if($conn->connect_errno)
    {
        echo "Lỗi kết nối" . $conn->connect_errno;
        exit();
    }
?>
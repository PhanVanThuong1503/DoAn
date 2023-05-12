<?php
    include('../../config/config.php');

    $id=$_GET['user_id'];
    $sql_xoa="DELETE FROM user WHERE user_id='".$id."'";
    mysqli_query($conn, $sql_xoa);
    header("Location:../../index.php?action=user&query=user");
?>
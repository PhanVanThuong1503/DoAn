<?php
include('../../config/config.php');
 
        $order_id = $_GET['order_id'];
        $query1 = "UPDATE tblorder set status = '1' WHERE order_id = '$order_id'";
        mysqli_query($conn, $query1);
        header('Location:../../index.php?action=quanlydonhang&query=lietke');
    
?>
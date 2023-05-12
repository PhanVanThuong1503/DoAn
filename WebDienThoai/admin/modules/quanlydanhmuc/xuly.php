<?php
    include('../../config/config.php');
    $tenloaisp=$_POST['cate_name'];
    if(isset($_POST['themdanhmuc'])){
        $sql_them = "INSERT INTO category(cate_name) VALUE ('".$tenloaisp."')";
        mysqli_query($conn, $sql_them);
        header('Location:../../index.php?action=quanlydanhmucsanpham&query=lietke');
    }
    else if(isset($_POST['suadanhmuc'])){
        $sql_update = "UPDATE category SET cate_name='".$tenloaisp."' WHERE cate_id=$_GET[id]";
        mysqli_query($conn, $sql_update);
        header('Location:../../index.php?action=quanlydanhmucsanpham&query=lietke');
    }
    else{
        $id=$_GET['id'];
        $sql_xoa="DELETE FROM category WHERE cate_id='".$id."'";
        mysqli_query($conn, $sql_xoa);
        header('Location:../../index.php?action=quanlydanhmucsanpham&query=lietke');
    }
    
?>
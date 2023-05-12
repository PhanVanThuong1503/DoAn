<?php
    include('../../config/config.php');
    $tenhsx=$_POST['ten_hsx'];
    if(isset($_POST['themhsx'])){
        $sql_them = "INSERT INTO hsx(ten_hsx) VALUE ('".$tenhsx."')";
        mysqli_query($conn, $sql_them);
        header('Location:../../index.php?action=hangsanxuat&query=lietke');
    }
    else if(isset($_POST['suahsx'])){
        $sql_update = "UPDATE `hsx` SET `ten_hsx`='".$tenhsx."' WHERE ma_hsx='$_GET[id]'";
        mysqli_query($conn, $sql_update);
        header('Location:../../index.php?action=hangsanxuat&query=lietke');
    }
    else{
        $id=$_GET['id'];
        $sql_xoa="DELETE FROM hsx WHERE ma_hsx='".$id."'";
        mysqli_query($conn, $sql_xoa);
        header('Location:../../index.php?action=hangsanxuat&query=lietke');
    }
    
?>
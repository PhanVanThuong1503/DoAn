<?php
    include('../../config/config.php');
    
    $tenpk=$_POST['pk_ten'];
    $cate_id = $_POST['category'];
    $giapk=$_POST['pk_gia'];
    $soluong=$_POST['pk_soluong'];
    $image = $_FILES['pk_anh']['name'];
    $image_tmp = $_FILES['pk_anh']['tmp_name'];
    $image = time().'_'.$image;
 
    if(isset($_POST['themphukien'])){
        $sql_them = "INSERT INTO `phukien`(`pk_ten`, `cate_id`, `pk_gia`, `pk_soluong`, `pk_anh`)
                     VALUES ('$tenpk', '$cate_id', '$giapk','$soluong','$image')";
        mysqli_query($conn, $sql_them);
        move_uploaded_file($image_tmp, 'uploads/'.$image);
        header('Location:../../index.php?action=phukien&query=lietke');
    }
    else if(isset($_POST['suaphukien'])){
        if($image!=''){
            move_uploaded_file($image_tmp, 'uploads/'.$image);
            
            $sql_update = "UPDATE `phukien` SET `pk_ten`='".$tenpk."',`cate_id`='".$cate_id."' ,`pk_gia`='".$giapk."',`pk_soluong`='".$soluong."',
            `pk_anh`='".$image."' WHERE pk_id='$_GET[id]'";
            
            $sql = "SELECT * FROM phukien WHERE pk_id='$_GET[id]' LIMIT 1";
            $query=mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($query)){
                unlink('uploads/'.$row['pk_anh']);
            }
        }
        else{
            $sql_update = "UPDATE `phukien` SET `pk_ten`='".$tenpk."',`cate_id`='".$cate_id."' ,`pk_gia`='".$giapk."',`pk_soluong`='".$soluong."'
             WHERE pk_id='$_GET[id]'";
        }
        
        mysqli_query($conn, $sql_update);
        header('Location:../../index.php?action=phukien&query=lietke');
    }
    else{
        $id=$_GET['id'];
        $sql = "SELECT * FROM phukien WHERE pk_id='$id' LIMIT 1";
        $query=mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($query)){
            unlink('uploads/'.$row['pk_anh']);
        }
        $sql_xoa="DELETE FROM phukien WHERE pk_id='".$id."'";
        mysqli_query($conn, $sql_xoa);
        header('Location:../../index.php?action=phukien&query=lietke');
    }
?>
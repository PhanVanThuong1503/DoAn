
<?php
    include('../../config/config.php');
    
    $tieude=$_POST['news_name'];
    $image = $_FILES['news_image']['name'];
    $image_tmp = $_FILES['news_image']['tmp_name'];
    $image = time().'_'.$image;
    $noidung = $_POST['description'];

    if(isset($_POST['themtintuc'])){
        $sql_them = "INSERT INTO `news`(`news_name`, `news_image`, `description`)
                     VALUES ('$tieude','$image','$noidung')";
        mysqli_query($conn, $sql_them);
        move_uploaded_file($image_tmp, 'uploads/'.$image);
        header('Location:../../index.php?action=tintuc&query=lietke');
    }
    else if(isset($_POST['suatintuc'])){
        if($image!=''){
            move_uploaded_file($image_tmp, 'uploads/'.$image);
            
            $sql_update = "UPDATE `news` SET `news_name`='".$tieude."',`news_image`='".$image."',`description`='".$noidung."' WHERE news_id='$_GET[id]'";
            
            $sql = "SELECT * FROM news WHERE news_id='$_GET[id]' LIMIT 1";
            $query=mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($query)){
                unlink('uploads/'.$row['news_image']);
            }
        }
        else{
            $sql_update = "UPDATE `news` SET `news_name`='".$tieude."',`description`='".$noidung."' WHERE news_id='$_GET[id]'";
        }
        
        mysqli_query($conn, $sql_update);
        header('Location:../../index.php?action=tintuc&query=lietke');
    }
    else{
        $id=$_GET['id'];
        $sql = "SELECT * FROM news WHERE news_id='$id' LIMIT 1";
        $query=mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($query)){
            unlink('uploads/'.$row['news_image']);
        }
        $sql_xoa="DELETE FROM news WHERE news_id='".$id."'";
        mysqli_query($conn, $sql_xoa);
        header('Location:../../index.php?action=tintuc&query=lietke');
    }


    
?>
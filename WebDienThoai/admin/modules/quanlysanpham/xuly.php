

<?php
    include('../../config/config.php');
    
    $tensp=$_POST['product_name'];
    $giasp=$_POST['product_price'];
    $gia = $_POST['price'];
    $soluong=$_POST['product_quantity'];
    $image = $_FILES['product_image']['name'];
    $image_tmp = $_FILES['product_image']['tmp_name'];
    $image = time().'_'.$image;
    $mota = $_POST['description'];

    $cate_id = $_POST['category'];
    $ma_hsx = $_POST['hsx'];


    if(isset($_POST['themsanpham'])){
        $sql_them = "INSERT INTO `product`(`product_name`, `product_price`, `price`, `product_quantity`, `product_image`, `description`, `cate_id`, `ma_hsx`)
                     VALUES ('$tensp','$giasp', '$gia', '$soluong','$image','$mota','$cate_id','$ma_hsx')";
        mysqli_query($conn, $sql_them);
        move_uploaded_file($image_tmp, 'uploads/'.$image);
        header('Location:../../index.php?action=quanlysanpham&query=lietke');
    }
    else if(isset($_POST['suasanpham'])){
        if($image!=''){
            move_uploaded_file($image_tmp, 'uploads/'.$image);
            
            $sql_update = "UPDATE `product` SET `product_name`='".$tensp."',`product_price`='".$giasp."', `price`='".$gia."', `product_quantity`='".$soluong."',
            `product_image`='".$image."',`description`='".$mota."',`cate_id`='".$cate_id."',`ma_hsx`='".$ma_hsx."' WHERE product_id='$_GET[id]'";
            
            $sql = "SELECT * FROM product WHERE product_id='$_GET[id]' LIMIT 1";
            $query=mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($query)){
                unlink('uploads/'.$row['product_image']);
            }
        }
        else{
            $sql_update = "UPDATE `product` SET `product_name`='".$tensp."',`product_price`='".$giasp."', `price`='".$gia."', `product_quantity`='".$soluong."',
            `description`='".$mota."',`cate_id`='".$cate_id."',`ma_hsx`='".$ma_hsx."' WHERE product_id='$_GET[id]'";
        }
        
        mysqli_query($conn, $sql_update);
        header('Location:../../index.php?action=quanlysanpham&query=lietke');
    }
    else{
        $id=$_GET['id'];
        $sql = "SELECT * FROM product WHERE product_id='$id' LIMIT 1";
        $query=mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($query)){
            unlink('uploads/'.$row['product_image']);
        }
        $sql_xoa="DELETE FROM product WHERE product_id='".$id."'";
        mysqli_query($conn, $sql_xoa);
        header('Location:../../index.php?action=quanlysanpham&query=lietke');
    }


    
?>
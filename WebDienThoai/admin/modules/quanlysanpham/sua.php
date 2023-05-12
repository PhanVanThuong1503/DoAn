<?php
    $sql_sua_sp = "SELECT * FROM product WHERE product_id='$_GET[id]' LIMIT 1";
    $query_sua_sp = mysqli_query($conn, $sql_sua_sp)

?>


<div class="content">
    <p class="content-title" style="color: red;">Sửa sản phẩm</p>
    <?php
        while($dong = mysqli_fetch_array($query_sua_sp)){
    ?>
    <form action="modules/quanlysanpham/xuly.php?id=<?php echo $_GET['id'] ?>" method="POST" enctype="multipart/form-data">
        <div style="float: left; margin: 0 100px;">
            
            <label for=""> Tên sản phẩm</label><br>
            <input required type="text" name="product_name" placeholder="Tên sản phẩm" value="<?php echo $dong['product_name'] ?>"> <br>
            <label for="">Giá ưu đãi</label><br>
            <!-- <input required type="text" name="product_price" placeholder="Giá sản phẩm (VNĐ)"><br> -->
            <input type="number" name="product_price" min="1" placeholder="Giá sản phẩm (VNĐ)" value="<?php echo $dong['product_price'] ?>"><br>

            <label for="">Giá</label><br>
            <input type="number" name="price" min="1" placeholder="Giá sản phẩm (VNĐ)" value="<?php echo $dong['price'] ?>"><br>

            <label for="">Số lượng</label><br>
            <!-- <input type="text" name="product_quantity"> <br> -->
            <input type="number" name="product_quantity" min="1" placeholder="Số lượng sản phẩm" value="<?php echo $dong['product_quantity'] ?>"><br>
            <label for="">Loại sản phẩm</label><br>
            <select required name="category" id="">
                <option value="">--Chọn danh mục sản phẩm--</option>
                <?php  
                    $sql_lietke_danhmucsp="SELECT * FROM category";
                    $row_lietke_danhmucsp=mysqli_query($conn, $sql_lietke_danhmucsp);
        
                    while($result = mysqli_fetch_array($row_lietke_danhmucsp)){
                    
                ?>
                <option 
                    <?php  
                        if($result['cate_id'] == $dong['cate_id']){ echo 'selected';  }
                    ?>
                    value="<?php echo $result['cate_id'] ?>"><?php echo $result['cate_name'] ?></option>

                <?php
                        }
                    
                ?>
            </select> <br>
            <label for="">Hãng sản xuất</label><br>
            <select required name="hsx" id="">
                <option value="">--Chọn hãng sản xuất--</option>
                <?php
                    $sql_lietke_hsx="SELECT * FROM hsx";
                    $row_lietke_hsx=mysqli_query($conn, $sql_lietke_hsx);
                    
                    while($row = mysqli_fetch_array($row_lietke_hsx)){
                        ?>
                        <option 
                            <?php  
                                if($row['ma_hsx'] == $dong['ma_hsx']){ echo 'selected';  }
                            ?>
                            value="<?php echo $row['ma_hsx'] ?>"><?php echo $row['ten_hsx'] ?></option>
                        <?php
                    }
                ?>
            </select> <br>
            
        </div>
        <div>
            <label for="">Ảnh minh họa</label><br>
            <img src="modules/quanlysanpham/uploads/<?php  echo $dong['product_image'] ?>" width="120px">
            <input class="input-file" type="file" name="product_image" style="float: right; margin-top:80px;">
            
             <br>
             <br><br>
            <label for="">Mô tả</label><br>
            <textarea name="description" id="" cols="30" rows="10" placeholder="Mô tả sản phẩm"></textarea>
            <br> <br>
            <br><br><br><br>
            <div style="margin-left: 300px;">
            <input class="btn" type="submit" value="Sửa" name="suasanpham">
            <input class="btn" type="reset" value="Nhập lại">
            </div>

        </div>
    </form>
    <?php
                }
                ?>

</div>



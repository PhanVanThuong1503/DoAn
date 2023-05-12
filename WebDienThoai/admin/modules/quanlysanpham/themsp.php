

<div class="content">
    <p class="content-title" style="color: red;">Thêm sản phẩm mới</p>

    <form action="modules/quanlysanpham/xuly.php" method="POST" enctype="multipart/form-data">
        <div style="float: left; margin: 0 100px;">
            <label for=""> Tên sản phẩm</label><br>
            <input required type="text" name="product_name" placeholder="Tên sản phẩm"> <br>

            <label for="">Giá ưu đãi</label><br>
            <!-- <input required type="text" name="product_price" placeholder="Giá sản phẩm (VNĐ)"><br> -->
            <input type="number" name="product_price" min="1" placeholder="Giá ưu đãi"><br>
            
            <label for="">Giá</label><br>
            <input required type="number" name="price" placeholder="Giá sản phẩm (VNĐ)"><br>

            <label for="">Số lượng</label><br>
            <!-- <input type="text" name="product_quantity"> <br> -->
            <input type="number" name="product_quantity" min="1" placeholder="Số lượng sản phẩm"><br>
            <label for="">Loại sản phẩm</label><br>
            <select required name="category" id="">
                <option value="">--Chọn danh mục sản phẩm--</option>
                <?php  
                    $sql_lietke_danhmucsp="SELECT * FROM category ORDER BY cate_id DESC";
                    $row_lietke_danhmucsp=mysqli_query($conn, $sql_lietke_danhmucsp);
        
                    while($result = mysqli_fetch_array($row_lietke_danhmucsp)){
                    
                ?>
                <option value="<?php echo $result['cate_id'] ?>"><?php echo $result['cate_name'] ?></option>

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
                        <option value="<?php echo $row['ma_hsx'] ?>"><?php echo $row['ten_hsx'] ?></option>
                        <?php
                    }
                ?>
            </select> <br>
            
        </div>
        <div>
            <label for="">Ảnh minh họa</label><br>
            <input class="input-file" type="file" name="product_image"> <br>
            
            <label for="">Mô tả</label><br>
            <textarea name="description" id="" cols="30" rows="10" placeholder="Mô tả sản phẩm"></textarea>
            <br> <br><br><br><br><br><br><br>

            <div style="margin-left: 300px;">
            <input class="btn" type="submit" value="Thêm" name="themsanpham">
            <input class="btn" type="reset" value="Nhập lại">
            </div>

        </div>
    </form>


</div>



<?php
    $sql_lietke_sp="SELECT * FROM product, category, hsx WHERE product.cate_id=category.cate_id AND product.ma_hsx=hsx.ma_hsx ORDER BY product_id DESC";
    $row_lietke_sp=mysqli_query($conn, $sql_lietke_sp);

?>


<div class="content">
    <p class="content-title" style="color: red; text-align:center">Danh sách sản phẩm</p>
    <div class="categories">
        <a href="?action=quanlysanpham&query=them">
                <input class="btn" type="submit" value="Thêm mới">
            <br><br>
        </a>

        <div class="listcat">
            <table>
                <tr>
                    <th style="width: 50px;">STT</th>
                    <th style="width: 110px;">Mã sản phẩm</th>
                    <th style="width: 110px;">Tên sản phẩm</th>
                    <th style="width: 80px;">Giá ưu đãi</th>
                    <th style="width: 80px">Giá</th>
                    <th style="width: 80px;">Số lượng</th>
                    <th style="width: 150px;">Ảnh minh họa</th>
                    <th style="width: 300px;">Mô tả</th>
                    <th style="width: 100px;">Danh mục sản phẩm</th>
                    <th style="width: 100px;">Tên hãng sản xuất</th>
                    <th style="width: 130px;">Quản lý</th>
                </tr>

                <?php
                    $i=0;
                    
                    while($row=mysqli_fetch_array($row_lietke_sp)){
                        $i++;
                ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td ><?php  echo $row['product_id'] ?></td>
                    <td ><?php  echo $row['product_name'] ?></td>
                    <td ><?php  echo number_format($row['product_price'],0,',','.').' đ' ?></td>
                    <td ><?php  echo number_format($row['price'],0,',','.').' đ' ?></td>
                    
                    <td ><?php  echo $row['product_quantity'] ?></td>
                    
                    <td ><img src="modules/quanlysanpham/uploads/<?php  echo $row['product_image'] ?>" width="120px"></td>
                    <td><?php
                            echo $row['description'];
                    ?></td>
                    <td ><?php  echo $row['cate_name'] ?></td>
                    <td><?php echo $row['ten_hsx'] ?></td>
                    <td>
                        <a href="?action=quanlysanpham&query=sua&id=<?php echo $row['product_id']; ?>">Sửa</a>
                        <a style="float: right;" class="xoa" onclick="return confirm('Bạn có chắc muốn xóa không?')"
                                href="modules/quanlysanpham/xuly.php?id=<?php echo $row['product_id']; ?>">Xóa</a>
                    </td>
                </tr>
                <?php
                } 
                ?>
            </table>
        </div>
    </div>
</div>





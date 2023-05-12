<?php
    $sql_lietke_tintuc="SELECT * FROM news";
    $row_lietke_tintuc=mysqli_query($conn, $sql_lietke_tintuc);

?>


<div class="content">
    <p class="content-title" style="text-align:center; color:red">Tin tức</p>
    <div class="categories">
        <a href="?action=tintuc&query=them">
                <input class="btn" type="submit" value="Thêm mới">
            <br><br>
        </a>

        <div class="listcat">
            <table>
                <tr>
                    <th style="width: 50px;">STT</th>
                    <th style="width: 110px;">Mã tin tức</th>
                    <th style="width: 300px;">Tiêu đề</th>
                    <th style="width: 150px;">Ảnh</th>
                    <th style="width: 500px;">Nội dung</th>
                    <th style="width: 130px;">Quản lý</th>
                </tr>

                <?php
                    $i=0;
                    
                    while($row=mysqli_fetch_array($row_lietke_tintuc)){
                        $i++;
                ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td ><?php  echo $row['news_id'] ?></td>
                    <td ><?php  echo $row['news_name'] ?></td>
                    <td ><img src="modules/tintuc/uploads/<?php  echo $row['news_image'] ?>" width="120px"></td>
                    <td><?php echo $row['description']; ?></td>

                    <td>
                        <a href="?action=tintuc&query=sua&id=<?php echo $row['news_id']; ?>">Sửa</a>
                        <a style="float: right;" class="xoa" onclick="return confirm('Bạn có chắc muốn xóa không?')"
                                href="modules/tintuc/xuly.php?id=<?php echo $row['news_id']; ?>">Xóa</a>
                    </td>
                </tr>
                <?php
                } 
                ?>
            </table>
        </div>
    </div>
</div>





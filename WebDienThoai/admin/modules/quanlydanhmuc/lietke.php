<?php
    $sql_lietke_danhmucsp="SELECT * FROM category";
    $row_lietke_danhmucsp=mysqli_query($conn, $sql_lietke_danhmucsp);
?>


<div class="content">
    <p class="content-title" style="color: red; text-align:center">Danh mục sản phẩm</p>
    <div class="categories" style="margin-top:20px">
        <div class="addcat">
            <form name="frmlogin" action="modules/quanlydanhmuc/xuly.php" method="POST" onsubmit="return kiemtra()">
                <h4 id="baoloi" style="color: red;"></h4>
                <input type="text" name="cate_name" placeholder="Tên danh mục sản phẩm">
                <input class="btn" type="submit" value="Thêm mới" name="themdanhmuc">
            </form>
            <br>
        </div>

        <div class="listcat">
            <table style="width: 1230px;" border="1"; >
                <tr>
                    <th>STT</th>
                    <th>Mã danh mục</th>
                    <th>Tên danh mục</th>
                    <th>Quản lý</th>
                </tr>

                <?php
                    $i=0;
                    while($row=mysqli_fetch_array($row_lietke_danhmucsp)){
                        $i++;
                ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row['cate_id']; ?></td>
                    <td><?php echo $row['cate_name']; ?></td>
                    <td>
                        <a href="?action=quanlydanhmucsanpham&query=sua&id=<?php echo $row['cate_id']; ?>">Sửa</a> 
                        <a class="xoa" onclick="return confirm('Bạn có chắc muốn xóa không?')"
                                href="modules/quanlydanhmuc/xuly.php?id=<?php echo $row['cate_id']; ?>">Xóa</a>
                    </td>
                </tr>
                <?php
                } 
                ?>
            </table>
        </div>
    </div>
</div>

<script>
    function kiemtra(){
        var ok=true;
    var u = document.frmlogin.cate_name.value;
    if (u=="") { 
        document.getElementById("baoloi").innerHTML="Chưa nhập tên danh mục!"
        return false;
    }
    document.getElementById("baoloi").innerHTML="Thêm thành công!";
    return true;
    

}
</script>



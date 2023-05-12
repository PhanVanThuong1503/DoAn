<?php
    $sql_lietke_hsx="SELECT * FROM hsx";
    $row_lietke_hsx=mysqli_query($conn, $sql_lietke_hsx);
?>


<div class="content">
    <p class="content-title" style="color: red; margin-left: 30px; text-align:center" >Hãng sản xuất</p>
    <div class="categories" >
        <div class="addcat">
            <form name="frmlogin" action="modules/hangsanxuat/xuly.php" method="POST" onsubmit="return kiemtra()">
                <h4 id="baoloi" style="color: red;"></h4>
                <input type="text" name="ten_hsx" placeholder="Tên hãng sản xuất">
                <input class="btn" type="submit" value="Thêm mới" name="themhsx">
            </form>
            <br>
        </div>

        <div class="listcat">
            <table style="width: 1230px;" border="1"; >
                <tr>
                    <th>STT</th>
                    <th>Mã hãng sản xuất</th>
                    <th>Tên hãng sản xuất</th>
                    <th>Quản lý</th>
                </tr>

                <?php
                    $i=0;
                    while($row=mysqli_fetch_array($row_lietke_hsx)){
                        $i++;
                ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row['ma_hsx']; ?></td>
                    <td><?php echo $row['ten_hsx']; ?></td>
                    <td>
                        <a href="?action=hangsanxuat&query=sua&id=<?php echo $row['ma_hsx']; ?>">Sửa</a> 
                        <a class="xoa" onclick="return confirm('Bạn có chắc muốn xóa không?')"
                                href="modules/hangsanxuat/xuly.php?id=<?php echo $row['ma_hsx']; ?>">Xóa</a>
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
    var u = document.frmlogin.ten_hsx.value;
    if (u=="") { 
        document.getElementById("baoloi").innerHTML="Chưa nhập tên hãng sản xuất!"
        return false;
    }
    document.getElementById("baoloi").innerHTML="Thêm thành công!";
    return true;
    

}
</script>



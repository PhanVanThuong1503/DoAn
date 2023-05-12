<?php
    $sql_sua_hsx = "SELECT * FROM hsx WHERE ma_hsx='$_GET[id]' LIMIT 1";
    $query_sua_hsx = mysqli_query($conn, $sql_sua_hsx);

?>
<div class="content">
    <p class="content-title">Sửa hãng sản xuất</p>
<form action="modules/hangsanxuat/xuly.php?id=<?php echo $_GET['id'] ?>" method="POST">
    <?php
        while($dong = mysqli_fetch_array($query_sua_hsx)){
            ?>
        <label for="">Tên hãng sản xuất</label>
        <input type="text" name="ten_hsx" placeholder="Tên hãng sản xuất" value="<?php echo $dong['ten_hsx'] ?>">
        <input type="submit" class="btn" value="Cập nhật" name="suahsx">

        <?php
        }
        ?>
    </form>
</div>
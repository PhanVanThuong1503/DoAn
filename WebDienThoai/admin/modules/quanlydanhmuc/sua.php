<?php
    $sql_sua_danhmucsp = "SELECT * FROM category WHERE cate_id='$_GET[id]' LIMIT 1";
    $query_sua_danhmucsp = mysqli_query($conn, $sql_sua_danhmucsp)

?>
<div class="content">
    <p class="content-title">Sửa danh mục sản phẩm</p>
<form action="modules/quanlydanhmuc/xuly.php?id=<?php echo $_GET['id'] ?>" method="POST">
    <?php
        while($dong = mysqli_fetch_array($query_sua_danhmucsp)){
            ?>
        
    
        <label for="">Tên danh mục</label>
        <input type="text" name="cate_name" placeholder="Tên danh mục sản phẩm" value="<?php echo $dong['cate_name'] ?>">
        <input type="submit" class="btn" value="Cập nhật" name="suadanhmuc">

        <?php
        }
        ?>
    </form>
</div>
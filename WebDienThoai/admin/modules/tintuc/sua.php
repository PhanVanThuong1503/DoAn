<?php
    $sql_sua_tintuc = "SELECT * FROM news WHERE news_id='$_GET[id]' LIMIT 1";
    $query_sua_tintuc = mysqli_query($conn, $sql_sua_tintuc)

?>

<div class="content">
    <p class="content-title" style="color: red; text-align:center">Sửa tin tức</p>
    <?php
        while($dong = mysqli_fetch_array($query_sua_tintuc)){
    ?>
    <form action="modules/tintuc/xuly.php?id=<?php echo $_GET['id'] ?>" method="POST" enctype="multipart/form-data" style="margin-left: 200px" > 
            <label for=""> Tiêu đề</label><br>
            <input required type="text" name="news_name" placeholder="Tiêu đề" value="<?php echo substr($dong['news_name'],0,38),'...' ?>"> <br>
        
            <label for="">Ảnh</label><br>
            <img src="modules/tintuc/uploads/<?php  echo $dong['news_image'] ?>" width="120px">
            <input class="input-file" type="file" name="news_image" style="margin-top:80px; margin-left:30px;">
            
             <br>
             <br><br>
            <label for="">Nội dung</label><br>
            <textarea name="description" id="" cols="30" rows="10" placeholder="Nội dung"></textarea>
            <br> <br>

            <input class="btn" type="submit" value="Sửa" name="suatintuc">
            <input class="btn" type="reset" value="Nhập lại">


        
    </form>
    <?php
                }
                ?>

</div>



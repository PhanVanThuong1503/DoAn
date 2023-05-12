<?php
    $sql_sua_sp = "SELECT * FROM phukien WHERE pk_id='$_GET[id]' LIMIT 1";
    $query_sua_sp = mysqli_query($conn, $sql_sua_sp)

?>


<div class="content">
    <p class="content-title" style="color: red;">Sửa phụ kiện</p>
    <?php
        while($dong = mysqli_fetch_array($query_sua_sp)){
    ?>
    <form action="modules/phukien/xuly.php?id=<?php echo $_GET['id'] ?>" method="POST" enctype="multipart/form-data">
        <div style="float: left; margin: 0 300px;">
            
            <label for=""> Tên phụ kiện</label><br>
            <input required type="text" name="pk_ten" placeholder="Tên phụ kiện" value="<?php echo $dong['pk_ten'] ?>"> <br>
            <label for=""> Loại phụ kiện</label><br>
            <select required name="category" id="">
                <option value="">--Loại phụ kiện--</option>
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
            </select>
            <br>
            <label for="">Giá</label><br>
            <!-- <input required type="text" name="pk_price" placeholder="Giá phụ kiện (VNĐ)"><br> -->
            <input type="number" name="pk_gia" min="1" placeholder="Giá phụ kiện (VNĐ)" value="<?php echo $dong['pk_gia'] ?>"><br>
            <label for="">Số lượng</label><br>
            <!-- <input type="text" name="pk_quantity"> <br> -->
            <input type="number" name="pk_soluong" min="1" placeholder="Số lượng phụ kiện" value="<?php echo $dong['pk_soluong'] ?>"><br>
            
            
            <label for="">Ảnh minh họa</label><br>
            <img src="modules/phukien/uploads/<?php  echo $dong['pk_anh'] ?>" width="120px"><br>
            <input class="input-file" type="file" name="pk_anh">
            
             <br>
             <br><br>
            
            
            <input class="btn" type="submit" value="Sửa" name="suaphukien">
            <input class="btn" type="reset" value="Nhập lại">
            

        </div>
    </form>
    <?php
                }
                ?>

</div>



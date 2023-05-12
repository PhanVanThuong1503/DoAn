


<div class="content">
    <p class="content-title" style="color: red; text-align:center">Danh sách khách hàng</p><br>
   
    <table style="margin-left: 100px; width:1000px">
        <tr>
            <th id="stt" style="width:50px">STT</th>
            <th style="width:120px">Mã khách hàng</th>
            <th style="width:150px">Họ tên</th>
            <th style="width:200px">Địa chỉ</th>
            <th style="width:150px">Email</th>
            <th style="width:120px">Số điện thoại</th>
            <th style="width:100px">Quản lý</th>
        </tr>
        <?php
            $user_list =mysqli_query($conn, "SELECT * FROM user");

            
            if($user_list){
                $i = 0;
                while($result = mysqli_fetch_array($user_list)){
                    $i ++;
        ?>
        <tr>
            <td  id="stt"><?php echo $i; ?></td>
            <td ><?php  echo $result['user_id'] ?></td>
            <td ><?php  echo $result['name'] ?></td>
            <td ><?php  echo $result['address'] ?></td>
            <td ><?php  echo $result['email'] ?></td>
            <td ><?php  echo $result['phone'] ?></td>
            <td >
                
                <input type="hidden" name="xoa" value="<?php echo $result['user_id'] ?>">
                <a class="xoa" onclick="return confirm('Bạn có chắc muốn xóa không?')" href="modules/user/del.php?user_id=<?php echo $result['user_id'] ?>">Xóa</a>
              

            </td>
        </tr>

        <?php
                }
            }
        ?>

    </table>
   
</div>

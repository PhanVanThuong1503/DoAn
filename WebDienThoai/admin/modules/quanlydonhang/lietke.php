<?php 

    $sql_lietke_dh = mysqli_query($conn, "SELECT * FROM tblorder 
                                            ORDER BY tblorder.order_id DESC");
    

    
?>


<div class="content">
    <p class="content-title" style="text-align: center; color:red">Danh sách đơn hàng</p>
    <table style="width: 1230px; margin-top:10px">
        <tr>
            <th id="stt">STT</th>
            <th>Mã đơn hàng</th>
            <th>Ngày đặt hàng</th>
            <th>Phương thức thanh toán</th>
            <th>Số lượng SP</th>
            <th>Khách hàng phải trả</th>
            <th>Ghi chú</th>
            <th>Trạng thái</th>
            <th>Thao tác</th>
        </tr>
        <?php
                $i = 0;
                
                
                while($result = mysqli_fetch_array($sql_lietke_dh)){
                    $i++;
                    
                    $sl=0;
                    $total =0;
                    $query=mysqli_query($conn, "SELECT * FROM order_detail WHERE order_id='$result[order_id]'");
                    while($result1 = mysqli_fetch_array($query))
                    {
                        $sl+=$result1['quantity'];
                        $total+=$result1['price'];
                    } 
                    
        ?>
        <tr>
            <td   id="stt"><?php echo $i; ?></td>
            <td  ><?php  echo $result['order_id'] ?></td>
            <td  ><?php  echo date('d/m/y', strtotime($result['date'])) ?></td>
            <td  >
                <?php  
                    if($result['payment_method']==0){
                        echo "Trả tiền mặt";
                    }
                    else{
                        echo "Chuyển khoản ngân hàng";
                    }
                ?>
            </td>
            <td  ><?php
            
                echo $sl; ?></td>
            <td  ><?php  echo $total ?></td>
            <td><?php echo $result['note'] ?></td>
            <td  >
                <?php  
                    if($result['status'] == 0){
                        echo "Chờ xác nhận";
                    }
                    else if($result['status'] == 1){
                        echo "Đang giao hàng";
                    }
                    else if($result['status'] == 2){
                        echo "Đã giao hàng";
                    }
                    else if($result['status'] == 3){
                        echo "Đã hủy";
                    }

                ?>
            </td>
            <td  >
                <a href="?action=quanlydonhang&query=xemchitiet&order_id=<?php echo $result['order_id'] ?>" style=" width: 110px; margin-bottom: 5px; margin-top: 5px">Xem chi tiết</a><br>
                <?php
                    if($result['status'] == 0){
                ?>
                <a href="modules/quanlydonhang/xacnhan.php?order_id=<?php echo $result['order_id'] ?>" style=" width: 110px;margin-bottom: 5px; margin-top: 5px; background-color: red">Xác nhận</a>
                <?php
                    }
                ?>
            </td>
        </tr>
        <?php
                }
            
        ?>
    </table>
</div>


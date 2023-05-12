<div class="content">
    <p class="content-title">Đơn hàng đã hoàn thành</p>
    <table style="width: 1230px">
        <tr>
            <th id="stt">STT</th>
            <th>Mã đơn hàng</th>
            <th>Ngày đặt mua</th>
            <th>Khách hàng</th>
            <th>Thành tiền</th>
            <th>Tháo tác</th>
        </tr>
        <?php
           $get_order = mysqli_query($conn, "SELECT * FROM tblorder WHERE status = '2'");
           $i=0;
      
            if($get_order){
                
                $s = 0;
                while($result = $get_order->fetch_assoc()){
                    $i++;
        ?>
        <tr>
            <td  id="stt"><?php echo $i; ?></td>
            <td ><?php  echo $result['order_id'] ?></td>
            <td ><?php  echo date('d/m/Y',  strtotime($result['date'])) ?></td>
            <td ><?php  echo $result['name'] ?></td>
            <td ><?php  
                $query =mysqli_query($conn, "SELECT * FROM order_detail WHERE order_id = '$result[order_id]'");
                $sum = 0;
                while($value = mysqli_fetch_array($query)){
                    $sum += $value['price']*$value['quantity'];
                    // $sum_quantity += $value['quantity'];
                    $s += $sum;
                }
                echo number_format($sum,0,',','.');

            ?></td>
             <td><a href="?action=quanlydonhang&query=xemchitiet&order_id=<?php echo $result['order_id'] ?>">Xem chi tiết</a></td>

        </tr>
        <?php
                }
            }
        ?>
        <tr>
            <td colspan="4" style="font-weight: bold ; padding-left: 20px">Tổng doanh thu</td>
            <td colspan="2" style="text-align:center; font-weight: bold"><?php echo number_format($s, 0,',','.') ?></td>
        </tr>
    </table>
</div>
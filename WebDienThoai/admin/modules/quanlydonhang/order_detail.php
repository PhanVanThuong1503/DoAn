
<?php
    if(isset($_GET['order_id'])){
        $order_id = $_GET['order_id'];
        $query=mysqli_query($conn, "SELECT * FROM tblorder WHERE order_id='$order_id'");
        $result = mysqli_fetch_array($query);
    }
?>


<div class="content">
    <p class="content-title">Chi tiết đơn hàng</p>
    <div style="float: left; margin-bottom: 20px">
        <label for="">Họ tên khách hàng: <?php echo $result['name'] ?></label><br>
        <label for="">Số điện thoại: <?php echo $result['phone'] ?></label><br>
        <label for="">Địa chỉ: <?php echo $result['address'] ?></label><br>

    </div>
    <div style="margin-left: 450px;">
        <label for="">Mã đơn hàng: <?php echo $result['order_id'] ?></label><br>
        <label for="">Ngày đặt hàng: <?php echo date('d/m/y', strtotime($result['date'])) ?></label>
    </div>
    <table style="clear: both; width: 1230px">
        <tr>
            <th id="stt">STT</th>
            <th>Tên sản phẩm</th>
            <th>Ảnh</th>
            <th>Số lượng </th>
            <th>Đơn giá</th>
            <th>Thành tiền</th>
        </tr>
        <?php
            $query1 = "SELECT order_detail.*, product.product_image, product.product_name, product.product_price FROM order_detail
            INNER JOIN product on order_detail.product_id = product.product_id WHERE  order_id = '$order_id'";
            $get_order_detail = mysqli_query($conn, $query1);
            if($get_order_detail){
                $i = 0;
                while($result1 = mysqli_fetch_array($get_order_detail)){
                    $i++;
        ?>
        <tr>
            <td  id="stt"><?php echo $i; ?></td>
            <td ><?php  echo $result1['product_name'] ?></td>
            <td><img src="modules/quanlysanpham/uploads/<?php  echo $result1['product_image'] ?>" style="width: 80px"></td>
            <td ><?php  echo $result1['quantity'] ?></td>
            <td ><?php  echo number_format($result1['product_price'],0,',','.') ?></td>
            <td ><?php  echo number_format($result1['quantity']*$result1['product_price'],0,',','.') ?></td>

        </tr>
        <?php
                }
            }
        ?>
        <tr>
            <td colspan="5" style="font-weight: bold ; padding-left: 20px">Tổng cộng</td>
            <td style="text-align:center; font-weight: bold">
                <?php
                    
                    $total =0;
                    $query=mysqli_query($conn, "SELECT * FROM order_detail WHERE order_id='$result[order_id]'");
                    while($result1 = mysqli_fetch_array($query))
                    {

                        $total+=$result1['price'];
                    } 
                    echo number_format($total,0,',','.'); 
                ?>
            </td>
        </tr>
    </table>
</div>
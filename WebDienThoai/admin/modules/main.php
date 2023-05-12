<div class="main">
    <?php
        if(isset($_GET['action']) && $_GET['query']){
            $tam = $_GET['action'];
            $query = $_GET['query'];
        }
        else{
            $tam ='';
            $query='';
        }
        if($tam=='quanlydanhmucsanpham' && $query=='lietke'){
            include("modules/quanlydanhmuc/lietke.php");
        }
        else if($tam=='quanlydanhmucsanpham' && $query=='sua'){
            include("modules/quanlydanhmuc/sua.php");
        }
        
        elseif($tam=='quanlysanpham' && $query=='lietke')
        {
            include("modules/quanlysanpham/lietke.php");
        }
        elseif($tam=='quanlysanpham' && $query=='them')
        {
            include("modules/quanlysanpham/themsp.php");
        }
        elseif($tam=='quanlysanpham' && $query=='sua')
        {
            include("modules/quanlysanpham/sua.php");
        }

        elseif($tam=='hangsanxuat' && $query=='lietke')
        {
            include("modules/hangsanxuat/lietke.php");
        }
        elseif($tam=='hangsanxuat' && $query=='sua')
        {
            include("modules/hangsanxuat/sua.php");
        }


        elseif($tam=='tintuc' && $query=='lietke')
        {
            include("modules/tintuc/lietke.php");
        }
        elseif($tam=='tintuc' && $query=='them')
        {
            include("modules/tintuc/them.php");
        }
        elseif($tam=='tintuc' && $query=='sua')
        {
            include("modules/tintuc/sua.php");
        }


        elseif($tam=='user' && $query=='user')
        {
            include("modules/user/users.php");
        }


        elseif($tam=='phukien' && $query=='lietke')
        {
            include("modules/phukien/lietke.php");
        }
        elseif($tam=='phukien' && $query=='them')
        {
            include("modules/phukien/them.php");
        }
        elseif($tam=='phukien' && $query=='sua')
        {
            include("modules/phukien/sua.php");
        }
 

        elseif($tam=='feedback' && $query=='show')
        {
            include("modules/feedback/show.php");
        }


        elseif($tam == 'quanlydonhang' && $query=='lietke'){
            include("modules/quanlydonhang/lietke.php");
        }
        elseif($tam == 'quanlydonhang' && $query=='xemchitiet'){
            include("modules/quanlydonhang/order_detail.php");
        }
        elseif($tam == 'quanlydonhang' && $query=='thongke'){
            include("modules/quanlydonhang/thongke.php");
        }


        else{
            include("modules/dashboard.php");
        }
    ?>
</div>
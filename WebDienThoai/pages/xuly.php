<?php
    include("header.php");
    include("menu.php");
    
?>
<div>
    <?php 
        if(isset($_GET['quanly']))
        {
            $tam = $_GET['quanly'];
        }
        else{
            $tam='';
        }

        if($tam=='chitietsp')
        {
            include("chitietsp.php");
        }
    ?>
</div>
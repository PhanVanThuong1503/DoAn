<?php

    include("admin/config/config.php");
    include("header.php");
    include("menu.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/lineicons.css">
    <link rel="stylesheet" href="css/starter.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" 
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Điện thoại</title>
</head>

<body>

    <section class="myslider">
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="images/advt1.webp" class="d-block w-100" alt="...">

                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="images/advt2.webp" class="d-block w-100" alt="...">

                </div>
                <div class="carousel-item">
                    <img src="images/advt3.webp" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <p style="margin:10px 110px -35px ;"><a href="">Trang chủ </a>/ Điện thoại</p>
    <section class="content8">

        <section class="myoption">
            <div class="brand">
                <h5>Hãng sản xuất</h5>
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                            <label class="form-check-label" for="flexCheckChecked">
                                Tất cả
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                SamSung
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Lenovo
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Coolpad
                            </label>
                        </div>
                        
                    </div>
                    <div class="col-md-4">
                    <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Apple(ipad)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Mastel
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                XiaoMi
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                OPPO
                            </label>
                        </div>
                    </div>
                </div>


            </div>
            <div class="price1 pad">
                <h5>Mức giá</h5>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        Tất cả
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Dưới 3 triệu
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Từ 3 - 8 triệu
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Từ 8 - 15 triệu
                    </label>
                </div>
                
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Trên 15 triệu
                    </label>
                </div>
            </div>
            <div class="special-feature pad">
                <h5>Dung lượng</h5>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        Tất cả
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Dưới 64 gb
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Từ 64 - 256 gb
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Trên 256 gb
                    </label>
                </div>
                
            </div>
            
            <div class="screen pad">
                <h5>Màn hình</h5>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        Tất cả
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Khoảng 7-8 inch
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Khoảng 10-11 inch
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Khoảng 12 inch trở lên
                    </label>
                </div>
                
            </div>
            
            <div class="offer pad">
                <h5>Trả góp ưu đãi</h5>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        Tất cả
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Trả góp 0%
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Trả góp 0đ
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Trả góp 0% và 0đ
                    </label>
                </div>
            </div>
        </section>




        <section class="mymaincontent">
            <div class="row">
                <?php

                if(isset($_GET['trang'])){
                    $page = $_GET['trang'];
                }
                else
                {
                    $page=1;
                }
                if($page=='' || $page==1){
                    $begin = 0;
                }
                else{
                    $begin = ($page*3)-3;
                }
                if(isset($_GET['ma_hsx'])){
                    $id=$_GET['ma_hsx'];
                    $sql_pro = "SELECT * FROM product WHERE ma_hsx='$id' AND cate_id = '2' LIMIT 9";
                }else{
                    $sql_pro = "SELECT * FROM product, category WHERE product.cate_id = category.cate_id AND category.cate_name = 'Tablet' ORDER BY product_id DESC LIMIT $begin,3";
                }
                $query_pro = mysqli_query($conn, $sql_pro);
                while ($row_pro = mysqli_fetch_array($query_pro)) {
                ?>


                    <div class="col">
                        <a href="chitietsp.php?product_id=<?php echo $row_pro['product_id'] ?>">
                            <div class="card" style="width: 19rem; height: 35rem; border: none;">
                                <div>
                                    <img src="images/sp.webp" class="card-img-top" alt="..." style="position:absolute;">
                                    <img src="admin/modules/quanlysanpham/uploads/<?php echo $row_pro['product_image'] ?>" alt="..." style="margin-left: 55px; height: 200px; margin-top: 40px;">
                                </div>

                                <div class="card-body" style="margin-top: 20px; margin-left: -10px">
                                    <h6 class="card-title"><a href="" style="color: #000;"><b><?php echo $row_pro['product_name'] ?></b></a></h6>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary" style="background-color: #dee2e6; color:black">256GB</button>
                                        <button type="button" class="btn btn-primary" style="background-color: #dee2e6;color:black">512GB</button>
                                        <button type="button" class="btn btn-primary" style="background-color: #dee2e6;color:black">1TB</button>
                                    </div>
                                    <div class="gia">
                                        <p><?php echo number_format($row_pro['product_price'], 0, ',', '.') . 'đ' ?></p>
                                    </div>
                                    <div class="component" style="background: #f8f9fa; width: 300px; margin-top:7px; border-radius: 10px">
                                        <div class="row" style="margin-left: 10px;">
                                            <div class="col-md-1">
                                                <i class="fa-solid fa-microchip"></i>
                                            </div>
                                            <div class="col">
                                                <p>Snapdragon 8 Gen 2</p>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-left: 10px; margin-top: -10px">
                                            <div class="col-md-1">
                                                <i class="fa-solid fa-database"></i>
                                            </div>
                                            <div class="col-md-3">
                                                <p>256GB</p>
                                            </div>
                                            <div class="col-md-1"><i class="fa-solid fa-mobile"></i></div>
                                            <div class="col-md-4">
                                                <p>6.8 inch</p>
                                            </div>
                                        </div>
                                        <div class="prd_config" style="width: 300px; height:80px">
                                            <img src="images/km.webp" alt="" style="border-radius: 50%; box-shadow: 0 0 0 1px #ffffff; width: 30px; margin-left: 20px;height:30px">
                                            <p style="font-size: 14px; margin-left:10px">Giảm 5% tối đa 1.200.000 đ khi trả góp qua Kredivo</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php
                }
                ?>
            </div>
<br><br>


            <div class="btn-group me-2" role="group" aria-label="First group">
                <p style="margin-top: 5px;">Trang: </p>
                
                <?php
                    if(isset($_GET['ma_hsx'])){
                        $sql_trang=mysqli_query($conn, "SELECT * FROM product WHERE cate_id = '2' AND ma_hsx='$id'");
                    }
                    else{
                        $sql_trang=mysqli_query($conn, "SELECT * FROM product");
                    }
                    $row_count=mysqli_num_rows($sql_trang);
                    $trang = ceil($row_count/3);
                ?>
                <ul class="list_trang">
                    <?php
                        if($page>3){
                            $first_page = 1;
                    ?>
                    <li><a href="?trang=<?php echo $first_page; ?>">First</a></li>
                    <?php    }
                            if($page>1){
                                $prev = $page-1;
                                ?>
                                <li><a href="?trang=<?php echo $prev; ?>">Prev</a></li>
                        <?php
                            }
                        
                    ?>
                    <?php
                        for($i=1; $i<=$trang; $i++)
                        {
                            if($i>$page-3 && $i<$page+3){
                            ?>
                            <li <?php if($i==$page){echo 'style="background: #999999"';}else{echo '';} ?>><a href="?trang=<?php echo $i ?>"><?php echo $i; ?></a></li>
                        <?php
                        }
                        }
                        if($page<$trang-1){
                            $next = $page+1;
                    ?>
                    <li><a href="?trang=<?php echo $next; ?>">Next</a></li>
            <?php
                }
                    ?>
                    <?php
                        if($page<$trang-3){
                            $last_page = $trang;
                    ?>
                    <li><a href="?trang=<?php echo $last_page; ?>">Last</a></li>
                    <?php    }
                            
                        
                    ?>
                </ul>
            </div>
        </section>
    </section>


    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
<?php
    include("footer.php")
?>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BTN Garden | Shop cung cấp các loại cây phong thủy, cây trang trí bàn làm việc, các loại tiểu cảnh và phụ
        kiện Terrarium.</title>
        <link rel="icon" href="<?=$CONTENT_URL?>/images/layout/logo.jpg" type="image\x-icon">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=$CONTENT_URL?>/css/bootstrap-5.0.2-dist/css/bootstrap.css">
    <link rel="stylesheet" href="<?=$CONTENT_URL?>/css/index.css">
    <link rel="stylesheet" href="<?=$CONTENT_URL?>/css/fontawesome-free-5.15.3-web/fontawesome-free-5.15.3-web/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"
        integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> 
    <style>
    .buttons_added {
    opacity:1;
    display:inline-block;
    display:-ms-inline-flexbox;
    display:inline-flex;
    white-space:nowrap;
    vertical-align:top;
}
.is-form {
    overflow:hidden;
    position:relative;
    background-color:#f9f9f9;
    height:2.2rem;
    width:1.9rem;
    padding:0;
    text-shadow:1px 1px 1px #fff;
    border:1px solid #ddd;
}
.is-form:focus,.input-text:focus {
    outline:none;
}
.is-form.minus {
    border-radius:4px 0 0 4px;
}
.is-form.plus {
    border-radius:0 4px 4px 0;
}
.input-qty {
    background-color:#fff;
    height:2.2rem;
    text-align:center;
    font-size:1rem;
    display:inline-block;
    vertical-align:top;
    margin:0;
    border-top:1px solid #ddd;
    border-bottom:1px solid #ddd;
    border-left:0;
    border-right:0;
    padding:0;
}
.input-qty::-webkit-outer-spin-button,.input-qty::-webkit-inner-spin-button {
    -webkit-appearance:none;
    margin:0;
}
    </style>
    
</head>

<body>
    <?php
        // session_start();
    ?>
    <div class="containerr">
        <header class="headerindex">
            <div class="inner-header">
                <a href="<?=$SITE_URL ?>/trang-chinh?trang-chu" id="logo"><img src="../../content/images/layout/logo.jpg" alt=""></a>
                <nav>
                    <ul id="main-menu">
                        <li><a href="<?=$SITE_URL ?>/trang-chinh?trang-chu">Trang chủ</a></li>
                        <li id="sp"><a href="">Sản phẩm <i class="fas fa-caret-down"></i></a>
                            <ul class="listcon">
                                <?php require_once "../../dao/loai.php";
                                                    
                                                    $ten_loais = loai_select_all();
                                                    foreach($ten_loais as $ten_loaii) {
                                                        extract($ten_loaii);
                                                        $href = "$SITE_URL/hang-hoa/liet-ke.php?ma_loai=$ten_loaii[ma_loai]"; 
                                                        echo "
                                <li><a href='$href'>$ten_loai</a></li>";
                                 } ?>
                            </ul>
                        </li>     
                        <li><a href="<?=$SITE_URL ?>/trang-chinh?gioi-thieu">Giới thiệu</a></li>
                        <li><a href="<?=$SITE_URL ?>/trang-chinh?tuyen-dung">Tuyển dụng</a></li>                          
                    </ul>              
                </nav>

                <div class="search">
                    <div class="input-group rounded">
                    <form action="<?=$SITE_URL?>/hang-hoa/liet-ke.php">
                  
                    <input type="search" class="form-control rounded input_search" placeholder="Tìm kiếm sản phẩm..." aria-label="Search" name="keyword"
                        aria-describedby="search-addon" />
                </form>  
                       
                        <!-- <span class="input-group-text border-0" id="search-addon">
                          <i class="fas fa-search"></i>
                        </span> -->
                      </div>
                </div>

                <div class="giohang">
                    <a href="<?=$SITE_URL?>/gio-hang/gio-hang.php"><i class="fas fa-cart-plus icon_giohang" style="font-size: 30px;"></i></a>
                    <div class="sosanpham">
                        <a href="<?=$SITE_URL?>/gio-hang/gio-hang.php" style="color: white; text-decoration: none;">
                        <?php if(!isset($_SESSION['tongsl'])){?>
                                0
                                <?php }else{?>
                                    <span class="notice"><?php echo number_format($_SESSION['tongsl']);?></span>
                                <?php }?>
                        </a>
                    </div>
                    <div class="thanhtien">
                        <a href="<?=$SITE_URL?>/gio-hang/gio-hang.php" style="text-decoration: none;">Thành tiền:<?php if(!isset($_SESSION['tong'])){?>
                                0
                                <?php }else{?>
                                    <span class="notice"><?php echo number_format($_SESSION['tong']);?></span>
                                <?php }?> <b>VNĐ</b></a>
                    </div>
                </div>
                <?php if(!isset($_SESSION['user'])){ ?>
                <div class="taikhoan">
                    <a href="<?=$SITE_URL?>/tai-khoan/dang-ky.php"><i class="fas fa-user-edit"></i>Đăng ký</a> |
                    <a href="<?=$SITE_URL?>/tai-khoan/dang-nhap.php"><i class="fas fa-sign-in-alt"></i>Đăng nhập</a>
                </div>
                <?php } else {
                    
                ?>
                <div class="taikhoan">
                   
                   <li id="info"  style="list-style:none;cursor: pointer;line-height: 30px;"> <a style="font-size: 15px;"><img src="<?=$CONTENT_URL?>/images/users/<?=$_SESSION['user']['hinh']?>" width="50px" alt="">
                   &ensp;Xin chào:<strong> <?= $_SESSION['user']['ho_ten']?></strong>
                   <i class="fas fa-caret-down"></i></a> 
                        <ul class="info_con">
                                    <li><a href="<?=$SITE_URL?>/tai-khoan/cap-nhat-tk.php">Thông tin tài khoản</a></li>
                                    <li><a href="<?=$SITE_URL?>/tai-khoan/doi-mat-khau.php">Đổi mật khẩu</a></li>
                                    <li><a href="<?=$SITE_URL?>/gio-hang/don-hang.php">Đơn hàng của tôi</a></li>
                                    <?php
                                        if($_SESSION['user']['vai_tro'] == 1) {
                                            echo "<li><a href='$ADMIN_URL/trang-chinh'>Quản trị website</a></li>";
                                        }
                                    ?>
                                   
                                    <li><a href="<?=$SITE_URL?>/tai-khoan/dang-nhap.php?btn_logoff">Đăng xuất</a></li>                      
                        </ul>   
                    </li>

                    <br>
                    <!-- <a href=""><i class="fas fa-users-cog"></i>&ensp;Quản trị website</a> <br>
                    <a href="taikhoan/dangnhap.html"><i class="fas fa-sign-in-alt"></i>&ensp;Đăng xuất</a> -->
                    
                </div>
                <?php }?>
            </div>
        </header>
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <script>
            $(document).ready(function(){
                $(window).scroll(function(){
                    if($(this).scrollTop()){
                        $('.headerindex').addClass('sticky');
                    }else{
                        $('.headerindex').removeClass('sticky');
                    }
                });
            });
        </script>
        <main class="bocuc bocucchinh">
            <div class="lop_trong">
                <div class="relative">
                    <section class="banner">
                        <div class="lop_trong">
                            <div class="relative">
                                <article class="bocuc bannerleft">
                                    <div class="lop_trong">
                                        <div class="relative">
                                            <div id="carouselExampleIndicators" class="carousel slide"
                                                data-bs-ride="carousel">
                                                <div class="carousel-indicators">
                                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                                        data-bs-slide-to="0" class="active" aria-current="true"
                                                        aria-label="Slide 1"></button>
                                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                                        data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                    <!-- <button type="button" data-bs-target="#carouselExampleIndicators"
                                                        data-bs-slide-to="2" aria-label="Slide 3"></button> -->
                                                </div>
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <img src="../../content/images/layout/b3.jpg" class="d-block w-100" alt="...">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="../../content/images/layout/b2.jpg" class="d-block w-100" alt="...">
                                                    </div>
                                                    <!-- <div class="carousel-item">
                                                        <img src="images/b3.jpg" class="d-block w-100" alt="...">
                                                    </div> -->
                                                </div>
                                                <button class="carousel-control-prev" type="button"
                                                    data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Previous</span>
                                                </button>
                                                <button class="carousel-control-next" type="button"
                                                    data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Next</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                </article>
                                <article class="bocuc bannerright">
                                    <div class="lop_trong">
                                        <div class="relative">
                                            <span><img src="../../content/images/layout/FotoJet (1).jpg" alt=""></span>
                                            <span><img src="../../content/images/layout/sendaindex.jpg" alt=""></span>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </section>
                    
                    <!-- Danh mục sản phẩm -->
                    <?php require $VIEW_NAME; ?>


                    <!-- Quảng cáo -->
                    <?php require $VIEW_NAME1; ?>
                    
                    
                    <!-- TOP SẢN PHẨM YÊU THÍCH -->
                  

                    <section class="bocuc listindex">
                        <div class="lop_trong">
                            <div class="relative">
                                <div class="bocuc title_listindex">
                                    <div class="lop_trong">
                                        <div class="header">
                                            <div class="header_text">
                                                BTN Garden
                                                <span class="gachchan">
                                                    <i class="fab fa-pagelines"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="relative">
                                            <p>Kênh cung cấp Cây cảnh để bàn, cây phong thủy & chậu cây cảnh uy tín với
                                                hàng ngàn lựa chọn... Hotline chăm sóc khách hàng 0123.456.789 phục vụ
                                                từ 7h đến 20h hàng ngày</p>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            
        </main>
        
        
        <footer class="text-center text-lg-start bg-light text-muted footer">
            <!-- Section: Social media -->
            <section
                class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
            >
                <!-- Left -->
                <div class="me-5 d-none d-lg-block">
                <span>Kết nối với chúng tôi trên mạng xã hội này:</span>
                </div>
                <!-- Left -->
    
                <!-- Right -->
                <div>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-facebook-f" style="color: blue;"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-twitter" style="color: rgb(18, 191, 235);"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-google" style="color: rgb(10, 136, 62);"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-instagram" style="color: rgb(165, 8, 185);"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-youtube" style="color: rgb(255, 0, 0);"></i>
                </a>
                </div>
                <!-- Right -->
            </section>
            <!-- Section: Social media -->
    
            <!-- Section: Links  -->
            <section class="">
                <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <!-- Content -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        <i class="fas fa-gem me-3"></i>BTN Garden
                    </h6>
                    <img src="images/large.png" alt="" width="50%">
                    <p>
                        Kênh cung cấp Cây cảnh để bàn, cây phong thủy & chậu cây cảnh uy tín với hàng ngàn lựa chọn...
                    </p>
                    </div>
                    <!-- Grid column -->
    
                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                       Bản đồ
                    </h6>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.053918648247!2d108.15481061526027!3d16.06269158888499!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31421925c86d904f%3A0x66ae4e5576252943!2zMjIgxJAuIFBo4bqhbSBOaMawIFjGsMahbmcsIEhvw6AgS2jDoW5oIE5hbSwgTGnDqm4gQ2hp4buDdSwgxJDDoCBO4bq1bmcgNTUwMDAwLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1636078873755!5m2!1svi!2s" width="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <!-- Grid column -->
    
                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        BTN Garden
                    </h6>
                    <p><i class="fas fa-home me-3"></i>22 Phạm Như Xương, Hòa Khánh Nam, Liên Chiểu, TP. Đà Nẵng</p>
                    <p><i class="fas fa-envelope me-3"></i>btngarden@gmail.com</p>
                    <p><i class="fas fa-phone me-3"> </i>0917 608 264 | 0986287367</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
                </div>
            </section>
            <!-- Section: Links  -->
    
            <!-- Copyright -->
            <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
                © 2021 BTN Garden
                <a class="text-reset fw-bold" href="">BTN Garden</a>
            </div>
            <!-- Copyright -->
        </footer>    
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
        integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="<?=$CONTENT_URL?>/js/script.js"></script>
    <script>//<![CDATA[
        $('input.input-qty').each(function() {
        var $this = $(this),
            qty = $this.parent().find('.is-form'),
            min = Number($this.attr('min')),
            max = Number($this.attr('max'))
        if (min == 0) {
            var d = 0
        } else d = min
        $(qty).on('click', function() {
            if ($(this).hasClass('minus')) {
            if (d > min) d += -1
            } else if ($(this).hasClass('plus')) {
            var x = Number($this.val()) + 1
            if (x <= max) d += 1
            }
            $this.attr('value', d).val(d)
        })
        })
        //]]></script>
        <script src="https://uhchat.net/code.php?f=b718e8"></script>
</body>

</html>
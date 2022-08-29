<section class="banner_mid">
    <div class="lop_trong">
        <div class="relative">
            <div class="header">
                <span class="header_text">BTN Garden</span>
            </div>
            <div class="relative">
                <p>BTN Garden chuyên cung cấp các loại cây phong thủy, cây trang trí bàn làm
                    việc, các loại tiểu cảnh và phụ kiện Terrarium.</p>
                <div class="viewall">
                    <a href="">
                        <span>Xem thêm</span>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>
<section class="bocuc topsp">
    <div class="lop_trong">
        <div class="relative">
            <div class="bocuc topspcon">
                <div class="lop_trong">
                    <div class="relative">
                        <div class="header">
                            <span class="header_text">
                                TOP SẢN PHẨM BÁN CHẠY
                                <span class="gachchan">
                                    <i class="fab fa-pagelines"></i>
                                </span>
                            </span>
                        </div>
                        <div class="relative">
                            <p>
                                <span style="font-size: 15pt;">Cập nhật liên tục thông tin đầy đủ,
                                    chính xác chất liệu, hình ảnh về sản phẩm phù hợp xu
                                    hướng mới nhất.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bocuc mucsanpham">
    <div class="lop_trong">
        <div class="relative">
            <div class="bocuc sanpham">
                <div class="lop_trong">
                    <div class="relative">
                    <?php
                        require_once "../../dao/loai.php";
                        require_once "../../dao/hang-hoa.php";
                      
                        $items = loai_select_all();
                        foreach($items as $item) {
                            extract($item);
                            $href = "$SITE_URL/hang-hoa/liet-ke.php?ma_loai=$item[ma_loai]";
                        
                    ?>
                        <article class="bocuc senda sp">
                            <div class="lop_trong">
                                <div class="header">
                                    <span class="header_text">
                                        <span class="danhmuc_sp">
                                       <?php echo "<a href='$href'>$ten_loai</a>";?>
                                        </span>
                                    </span>
                                </div>
                                <div class="relative">
                                    <div class="sanpham_box">
                                       
                                        
                                        <?php
                                        $topyts = hang_hoa_select_top_10($ma_loai);
                                        foreach($topyts as $topyt) {
                                            extract($topyt);
                                            
                                        ?>											
                                            <div class='div_noidung' style="margin-bottom: 20px;">
                                                <div class='truong anh' style="position: relative;">
                                                    <a href='<?=$SITE_URL?>/hang-hoa/chi-tiet.php?ma_hh=<?=$ma_hh?>' title='SEN ĐÁ NHUNG ĐEN'>
                                                        <img src='<?=$CONTENT_URL?>/images/products/<?=$topyt['hinh']?>' alt=''>
                                                        <div class="badge-container absolute left top z-1">
                                                            <div class="callout badge badge-circle">
                                                                <div class="badge-inner secondary on-sale">
                                                                    <span><?=$giam_gia?>%</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <h3 class='truong tieude'>
                                                    <a href='<?=$SITE_URL?>/hang-hoa/chi-tiet.php?ma_hh=<?=$ma_hh?>'><?=$ten_hh?></a>
                                                </h3>
                                                <div class='gia'>
                                                    <strong><?=number_format($don_gia-$don_gia*$giam_gia/100)?></strong>
                                                    <span>₫</span>
                                                </div>
                                                <div class='truong nutmuahang'>
                                                <form action="<?=$SITE_URL?>/gio-hang/gio-hang.php?ma_hh=<?=$ma_hh?>" method="post">
                                                        <input type="hidden" name="ten_hh" value="<?=$ten_hh?>">
                                                        <input type="hidden" name="hinh" value="<?=$hinh?>">
                                                        <input type="hidden" name="ma_hh" value="<?=$ma_hh?>">
                                                        <input type="hidden" name="don_gia" value="<?=$don_gia?>">
                                                        <input type="hidden" name="giam_gia" value="<?=$giam_gia?>">
                                                        <input type="hidden" name="ma_loai" value="<?=$ma_loai?>">
                                                        
                                                    <label for=''>
    
                                                        <!-- <button type='submit' 
                                                            class='btn btn-outline-success' name="addCart">
                                                            <a id='text' href='<?=$SITE_URL?>/gio-hang/gio-hang.php?ma_hh=<?=$ma_hh?>'>
                                                            <i class='fas fa-cart-arrow-down'></i>
                                                            Mua hàng</a>
                                                        </button> -->
                                                        <?php if($so_luong>0){ ?>
                                                        <input type='submit' value='Mua hàng' name='addCart' class='btn btn-outline-success'>
                                                            <?php }else { ?>
                                                         <span class='btn btn-outline-danger'>Hết hàng</span>       
                                                           <?php }?>
                                                    </label>
                                                    </form>
                                                    <!-- <label for=''>
                                                        <button type='button'
                                                            class='btn btn-outline-success'>
                                                            <a id='text' href='<?=$SITE_URL?>/gio-hang/gio-hang.php?ma_hh=<?=$ma_hh?>'>
                                                            <i class='fas fa-cart-arrow-down'></i>
                                                            Mua hàng</a>
                                                        </button> -->
                                                    </label>
                                                </div>
                                            </div>
                                        <?php 
                                            } 
                                        ?>
                                                           <!-- <label for=''>

                                                    //     <button type='button'
                                                    //         class='btn btn-outline-success'>
                                                    //         <a id='text' href='$SITE_URL/gio-hang/gio-hang.php?ma_hh=$topyt[ma_hh]'>
                                                    //         <i class='fas fa-cart-arrow-down'></i>
                                                    //         Mua hàng</a>
                                                    //     </button>                    -->
                                                    <!-- <button name='addCart' type='submit'
                                                                    class='btn btn-outline-success'>                                                                    
                                                                    <i class='fas fa-cart-arrow-down'></i>
                                                                    Mua hàng
                                                                </button> -->
                                    </div>
                                </div>
                            </div>
                        </article>
                        <?php 
                            } 
                        ?>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
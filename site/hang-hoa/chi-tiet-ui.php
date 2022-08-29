<?php extract($hang_hoa); ?>
<section class="bocuc danhmucsp">
    <div class="lop_trong">
        <div class="relative">
            <div class="bocuc dmspct">
                <div class="lop_trong">
                    <div class="relative">
                        <article class="bocuc dmsp_title">
                            <div class="lop_trong">
                                <div class="header">
                                    <span class="header_text">
                                        CHI TIẾT SẢN PHẨM
                                        <span class="gachchan">
                                            <i class="fab fa-pagelines"></i>
                                        </span>
                                    </span>
                                </div>
                                <div class="thongtinchitiet">
                                    <div class="thongtin_left">
                                    <img src="<?=$CONTENT_URL?>/images/products/<?=$hinh?>">
                                    </div>
                                    <div class="thongtin_right">
                                        <h1 class="thongtin_title">
                                        <?= $ten_hh?> 
                                        </h1>
                                        <div class="thongtin_gia">
                                        <span style="color:black;">Giá bán: </span><?= number_format($don_gia - $don_gia*$giam_gia/100) ?><span>₫</span>
                                        <br>
                                        <span style="color:gray;text-decoration: line-through; font-size:17px;"><?= number_format($don_gia) ?>₫</span><span style="font-size:17px;"> (<?= number_format($giam_gia) ?>%)</span>
                                        </div>
                                        <div class="so_luong" style="font-weight:bolder; color:red;">
                                        <?php if ($so_luong < 1) { ?>
                                        Hết hàng    
                                        <?php }elseif ($so_luong < 10) { ?>
                                            Chỉ còn <?=$so_luong?> sản phẩm
                                        <?php }else { ?>
                                            
                                        <?php } ?>
                                            
                                        </div>
                                        <?php if($so_luong < 1 ){

                                        }else { ?>
                                            <br>
                                        <div class='truong nutmuahang'>
                                                <form action="<?=$SITE_URL?>/gio-hang/gio-hang.php" method="post">
                                                <!-- <input type="number" name="so_luong" id=""> -->
                                                <div class="buttons_added">
                                                    <input class="minus is-form" type="button" value="-">
                                                    <input aria-label="quantity" class="input-qty" max="<?=$so_luong?>" min="1" name="so_luong" type="number" value="1">
                                                    <input class="plus is-form" type="button" value="+">
                                                </div>
                                                    <input type="hidden" name="ten_hh" value="<?=$ten_hh?>">
                                                    <input type="hidden" name="ma_hh" value="<?=$ma_hh?>">
                                                    <input type="hidden" name="hinh" value="<?=$hinh?>">
                                                    <input type="hidden" name="don_gia" value="<?=$don_gia?>">
                                                    <input type="hidden" name="giam_gia" value="<?=$giam_gia?>">
                                                    <input type="hidden" name="ma_loai" value="<?=$ma_loai?>">
                                                    <!-- <input type="hidden" name="">
                                                    <input type="hidden" name=""> -->
                                                <label for=''>

                                                    <input type='submit' value='Mua hàng' name='addCart' class='btn btn-outline-success'>
                                                </label>
                                                </form>
                                            </div>
                                        <?php } ?>
                                        <br>
                                        <div class="khuyen-mai">
                                            <strong class="tieu-de">Khuyến mại cho sản phẩm
                                                này:</strong>
                                            <ul class="danh-sach">
                                                <li><i class="fas fa-check-circle"></i>Miễn phí ship nội thành với hóa đơn > 500.000đ
                                                </li>
                                                <li><i class="fas fa-check-circle"></i>Tặng ngay bình tưới chuyên dụng cho cây </li>
                                                <li><i class="fas fa-check-circle"></i>Tặng ngay đĩa lót chậu cho từng sản phẩm </li>
                                            </ul>

                                        </div>
                                        
                                        <div class="thongtin_mota">
                                        <?=$mo_ta ?> 
                                            </div> 
                                            <br>                                                     
                                            
                                    </div>
                                </div>
                            </div>
                        </article>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php 
    require 'binh-luan.php';
?>

<?php 
    require 'hang-cung-loai.php';
?>

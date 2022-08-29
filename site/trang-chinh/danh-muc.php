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
                                        DANH MỤC SẢN PHẨM
                                        <span class="gachchan">
                                            <i class="fab fa-pagelines"></i>
                                        </span>
                                    </span>
                                </div>
                                <div class="relative">
                                    <p>
                                        <span style="font-size: 15pt;">Danh mục sản tổng hợp các
                                            loại cây cảnh mới nhất của
                                            <span style="color:#339966 ;"><b>BTN
                                                    Garden</b></span></span>
                                    </p>
                                </div>
                            </div>
                        </article>
                        <article class="bocuc dmsp_img">
                            <div class="lop_trong">
                                <div class="relative">
                                    <div class="sanpham_danhmuc">
                                            <div class="thang">
                                                <?php
                                                    require_once "../../dao/loai.php";
                                                    
                                                    $items = loai_select_all();
                                                    foreach($items as $item) {
                                                        extract($item);
                                                        $href = "$SITE_URL/hang-hoa/liet-ke.php?ma_loai=$item[ma_loai]";
                                                    
                                                echo "
                                                    <div class='thang-item'>
                                                      <a href='$href'><img src='$CONTENT_URL/images/types/$hinh' alt='watch' class='anh_danhmuc'></a> 
                                                      <h5 class='tieude'>
                                                        <a href='$href'>$ten_loai</a>
                                                    </h5>
                                                    </div>
                                                ";
                                                    } 
                                                ?>
                                            </div>          
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

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
                        
                    ?>
                        <article class="bocuc senda sp">
                            <div class="lop_trong">
                                <div class="header">
                                    <span class="header_text">
                                        <span class="danhmuc_sp">
                                        <a href=""><?=$ten_loai?></a>
                                        </span>
                                    </span>
                                </div>
                                <div class="relative">
                                    <div class="sanpham_box">
                                        <?php 
                                        $topyts = hang_hoa_select_top_10($ma_loai);
                                            foreach($topyts as $topyt) {                                           
                                                echo "      
                                                    <div class='div_noidung'>
                                                        <div class='truong anh'>
                                                            <a href='detail_product.php?id=' title='SEN ĐÁ NHUNG ĐEN'>
                                                                <img src='../../content/images/products/$topyt[hinh]' alt=''>
                                                            </a>
                                                        </div>
                                                        <h3 class='truong tieude'>
                                                            <a href='detail_product.php?id='>$topyt[ten_hh]</a>
                                                        </h3>
                                                        <div class='gia'>
                                                            <strong>$topyt[don_gia]</strong>
                                                            <span>VNĐ</span>
                                                        </div>
                                                        <div class='truong nutmuahang'>
                                                            <label for=''>

                                                                <button type='button'
                                                                    class='btn btn-outline-success'>
                                                                    <a id='text' href='detail_product.php?id='>
                                                                    <i class='fas fa-cart-arrow-down'></i>
                                                                    Mua hàng</a>
                                                                </button>
                                                            </label>
                                                        </div>
                                                    </div>";
                                        } ?> 
                                                                              
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
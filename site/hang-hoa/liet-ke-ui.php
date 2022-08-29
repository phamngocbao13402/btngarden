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
                                        DANH SÁCH SẢN PHẨM 
                                        <span class="gachchan">
                                            <i class="fab fa-pagelines"></i>
                                        </span>
                                    </span>
                                </div>
                                <div class="relative">
                                    <p style="color: green; font-size: 25px; font-weight: bolder">
									
                                    </p>
                                </div>
                            </div>
                        </article>
						<article class="bocuc senda sp">
							<div class="lop_trong">
								<div class="relative">
									<div class="sanpham_box">
									<?php
									foreach($items as $item) {
                                        extract($item);

									?>											
										<div class='div_noidung' style="margin-bottom: 20px;">
											<div class='truong anh' style="position: relative;">
												<a href='chi-tiet.php?ma_hh=<?=$ma_hh?>' title='SEN ĐÁ NHUNG ĐEN'>
													<img src='<?=$CONTENT_URL?>/images/products/<?=$item['hinh']?>' alt=''>
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
												<a href='chi-tiet.php?ma_hh=<?=$ma_hh?>'><?=$ten_hh?></a>
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
								</div>
							</div>
                        </article>
					</div>
                </div>
            </div>
        </div>
    </div>
</section>


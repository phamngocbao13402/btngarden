<article class="bocuc dmsp_title">
                            <div class="lop_trong">
                                <div class="header">
                                    <span class="header_text">
                                        DANH SÁCH ĐƠN HÀNG
                                        <span class="gachchan">
                                            <i class="fab fa-pagelines"></i>
                                        </span>
                                    </span>
                                </div>
                               
                            </div>
                        </article>
<div class="px-4 px-lg-0">


  <div class="pb-">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">

          <!-- Shopping cart table -->
          <div class="table-responsive">
            <table class="table" style="text-align:center;">
              <thead>
                <tr>
                <th scope="col" class="border-0 bg-light" style="width: 50px;">
                    <div class="p-2 px-3 text-uppercase">STT</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="p-2 px-3 text-uppercase" >Mã hoá đơn</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Tổng tiền</div>
                  </th>
                  <th scope="col" class="border-0 bg-light" style="text-align:center;">
                    <div class="py-2 text-uppercase" >Ngày đặt mua</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Địa chỉ</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Ghi chú</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Tình trạng</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Chi tiết</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Hành động</div>
                  </th>
                </tr>
              </thead>
              <tbody>
              <?php
              $tong=0;
              $tongsl=0;
              $i=0;
              $stt=0;

              foreach($items as $item) {
                extract($item);
                if($tinh_trang==0){
                    $tinhtrang = 'Đợi xử lý';
                }elseif ($tinh_trang==1) {
                    $tinhtrang = 'Đang giao hàng';
                }else if ($tinh_trang==2) {
                  $tinhtrang = 'Đã giao hàng';
                }else{
                    $tinhtrang = 'Đã huỷ hàng';
                }
                $stt+=1;
                // echo '  
            ?>
                <tr>
                    <td class=" align-middle" style="text-align:center;"><span><?=$stt?></span></td>
                    <td class=" align-middle"><span><?=$ma_hd?></span></td>
                    <td class=" align-middle"><span><?=number_format($tong_tien)?>₫</span></td>
                    <td class=" align-middle" style="text-align:center;"><span><?=$ngay_dat_hang?></span></td>
                    <td class="align-middle"><span><?=$dia_chi?></span></td>
                    <td class="align-middle"><span><?=$ghi_chu?></span></td>
                    <td class="align-middle"><span><?=$tinhtrang?></span></td>
                    <td class="align-middle"><a href="don-hang.php?btn_detail&ma_hd=<?=$ma_hd?>" class="btn btn-success btn-sm">Xem</a></td>
                    <?php if($tinh_trang==0){ ?>
                    <td class="align-middle"><a href="don-hang.php?btn_delete&ma_hd=<?=$ma_hd?>" class="btn btn-danger btn-sm">Huỷ</a></span></td>
                    <?php }elseif($tinh_trang==1){ ?>
                        <td class="align-middle">Không thể huỷ</span></td>
                        <?php }elseif($tinh_trang==2){ ?>
                        <td class="align-middle">Không thể huỷ</span></td>
                        <?php }else{ ?>
                        <td class="align-middle">-</span></td>
                    <?php } ?>
                </tr> 
                
                <?php
                $i+=1;    
            }
                ?>  
                  
                  
                 
              </tbody>
            </table>
            
          </div>
          <!-- End -->
        </div>
      </div>

      <?php
        $_SESSION['tong'] = $tong;
        $_SESSION['tongsl'] = $tongsl;
      ?>

    </div>
  </div>
                           
                                <div class="header"  style="padding:0;">
                                    <span class="header_text">
                                        ĐƠN HÀNG CHI TIẾT
                                        <span class="gachchan">
                                            <i class="fab fa-pagelines"></i>
                                        </span>
                                    </span>
                                </div>
                               
                         
  <div class="pb">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">

          <!-- Shopping cart table -->
          <div class="table-responsive">
          <table class="table" style="text-align:center;">
              <thead>
                <tr>
                
                <th scope="col" class="border-0 bg-light" style="width: 50px;">
                    <div class="p-2 px-3 text-uppercase">Tên</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="p-2 px-3 text-uppercase" >Email</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="p-2 px-3 text-uppercase" >Địa chỉ</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Số điện thoại</div>
                  </th>
                  <th scope="col" class="border-0 bg-light" style="text-align:center;">
                    <div class="py-2 text-uppercase" >Giao hàng</div>
                  </th>
                  
                </tr>
              </thead>
              <tbody>
              <?php
              
              if(!empty($hds)){
                extract($khs);
                  if ($ship == 0) {
                    $gh = "Giao hàng nhanh";
                  }elseif ($ship == 1) {
                    $gh = "Giao hàng hoả tốc";
                  }else {
                    $gh = "Giao hàng tiết kiệm";
                    
                  }           
            ?>
                <tr>
                    <td class=" align-middle" style="text-align:center;"><span><?=$ho_ten?></span></td>
                    <td class=" align-middle"><span><?=$email?></span></td>
                   <td class=" align-middle"><span><?=$dia_chi?></span></td>
                    <td class="align-middle"><span><?=$so_dien_thoai?></span></td>
                    <td class="align-middle"><span><?=$gh?></span></td>                  
                </tr> 
                
                <?php
                
            
          ?>  
                  
                  
                 
              </tbody>
            </table>
            <table class="table" style="text-align:center;">
              <thead>
                <tr>
                <th scope="col" class="border-0 bg-light" style="width: 50px;">
                    <div class="p-2 px-3 text-uppercase">STT</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="p-2 px-3 text-uppercase" >Mã  hoá đơn</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="p-2 px-3 text-uppercase" >Tên hàng hoá</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Hình ảnh</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Số lượng</div>
                  </th>
                  <th scope="col" class="border-0 bg-light" style="text-align:center;">
                    <div class="py-2 text-uppercase" >Giá tiền</div>
                  </th>
                  
                </tr>
              </thead>
              <tbody>
              <?php
              $tong=0;
              $tongsl=0;
              $i=0;
              $stt=0;
             
              foreach($hds as $hd) {
                extract($hd);
                
                $sp = hang_hoa_select_by_id($hd[1]);
                extract($sp);
                $stt+=1;               
            ?>
                <tr>
                    <td class=" align-middle" style="text-align:center;"><span><?=$stt?></span></td>
                    <td class=" align-middle"><span><?=$ma_hd?></span></td>
                   <td class=" align-middle"><span><?=$ten_hh?></span></td>
                    <td class="align-middle"><span><img src="<?php echo $CONTENT_URL.'/images/products/'.$hinh?>" alt="" width="70" class="img-fluid rounded shadow-sm"></span></td>
                    <td class="align-middle"><span><?=$hd[2]?></span></td>
                    <td class="align-middle"><span><?=number_format($don_gia-$giam_gia*$don_gia/100)?>₫</span></td>                  
                </tr> 
                
                <?php
                $i+=1;    
            }
          }else{
         echo '<div style="text-align:center;width:100%;font-size:18px;font-weight:bold;" class="text-success">Lựa chọn đơn hàng để xem chi tiết<div>';
          }?>  
                  
                  
                 
              </tbody>
            </table>
            
          </div>
          <!-- End -->
        </div>
      </div>

      <?php
        $_SESSION['tong'] = $tong;
        $_SESSION['tongsl'] = $tongsl;
      ?>

    </div>
  </div>
</div>


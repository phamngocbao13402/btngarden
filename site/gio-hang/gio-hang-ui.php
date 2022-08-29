<article class="bocuc dmsp_title">
                            <div class="lop_trong">
                                <div class="header">
                                    <span class="header_text">
                                        GIỎ HÀNG
                                        <span class="gachchan">
                                            <i class="fab fa-pagelines"></i>
                                        </span>
                                    </span>
                                </div>
                               
                            </div>
                        </article>
<div class="px-4 px-lg-0">


  <div class="pb-5">
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
                    <div class="p-2 px-3 text-uppercase" >Sản phẩm</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Giá</div>
                  </th>
                  <th scope="col" class="border-0 bg-light" style="text-align:center;">
                    <div class="py-2 text-uppercase" >Số lượng</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Thành tiền</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Xoá</div>
                  </th>
                </tr>
              </thead>
              <tbody>
              <?php
              $tong=0;
              $tongsl=0;
              $i=0;
                if(!empty($_SESSION['myCart'])){
                    
                    
                    foreach($_SESSION['myCart'] as $cart){
                    $tt = $cart[2]*$cart[3];
                    $tong+=$tt;
                    $tongsl+=$cart[3];
                    
                echo '  
            
                <tr>
                <td class="border-0 align-middle" style="text-align:center;"><strong>'.($i+1).'</strong></td>
                  <th scope="row" class="border-0">
                    <div class="p-2" style="text-align:left;">
                      <img src="'.$CONTENT_URL.'/images/products/'.$cart[1].'" alt="" width="70" class="img-fluid rounded shadow-sm">
                      <div class="ml-3 d-inline-block align-middle">
                        <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle">'.$cart[0].'</a></h5><span class="text-muted font-weight-normal font-italic d-block">Mã loại: '.$cart[5].'</span>
                      </div>
                    </div>
                  </th>
                  <td class="border-0 align-middle"><strong>'.number_format($cart[2]).'₫</strong></td>
                  <td class="border-0 align-middle" style="text-align:center;"><strong>'.$cart[3].'</strong></td>
                  <td class="align-middle"><strong>'.number_format($tt).'₫</strong></td>
                  <td class="border-0 align-middle"><a href="gio-hang.php?delid='.$i.'" class="text-dark"><i class="fa fa-trash"></i></a></td>
                </tr>'; 
                $i+=1;
                 }
                
                 
                          }else{
                          echo '<script language="javascript">';
                          echo 'alert("Chưa có mặt hàng nào trong giỏ hàng !")';
                          echo '</script>';
                         
                          }?>  
                  
                  
                  <tr>
                <td scope="col" class="border-0 bg-light">
                    <div class="p-2 px-3"></div>
                  </td>
                  <td scope="col" class="border-0 bg-light">
                    <div class="p-2 px-3"><a
                          href="<?=$SITE_URL ?>/trang-chinh?trang-chu">&leftarrow;<span
                          class="text-mutedd">Chọn tiếp sản phẩm</span></a></div>
                  </td>
                  <td scope="col" class="border-0 bg-light">
                    <div class="py-2"><a
                          href="gio-hang.php?delcart=1"><span
                          class="text-mutedd">Xoá giỏ hàng</span></a></div>
                  </td>
                  <td scope="col" class="border-0 bg-light">
                    <div class="py-2" style="font-weight:bolder;">Tổng tiền:</div>
                  </td>
                  <td scope="col" class="border-0 bg-light">
                    <div class="py-2" style="color:red; font-weight:bolder;"><?=number_format($tong)?>₫</div>
                  </td>
                  <td scope="col" class="border-0 bg-light">
                    <div class="py-2"></div>
                  </td>
                </tr>  
              </tbody>
            </table>
            <?php
              if(!isset($_SESSION['user'])){
                echo '<div style="text-align:center;width:100%;font-size:18px;"><a style="text-decoration:none;font-weight:bold;" href="'.$SITE_URL.'/tai-khoan/dang-nhap.php" class="text-success">Đăng nhập để tiếp tục thanh toán!</a><div>';
              } 
              else {
                if($i>0){  
          ?>
            <form action="<?=$SITE_URL?>/gio-hang/thanh-toan.php" method="post" style="text-align:right;">

            <button type="submit" name="thanhtoan" class='btn btn-outline-success'>Thanh toán</button>
            </form>
            <?php }else {
              echo '<div style="text-align:center;width:100%;font-size:18px;"><a style="text-decoration:none;font-weight:bold;" class="text-success">Thêm sản phẩm để tiếp tục thanh toán!</a><div>';
            }?>
            <?php }?>
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

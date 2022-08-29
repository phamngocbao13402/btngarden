<article class="bocuc dmsp_title">
    <div class="lop_trong">
        <div class="header">
            <span class="header_text">
                THANH TOÁN
                <span class="gachchan">
                    <i class="fab fa-pagelines"></i>
                </span>
            </span>
        </div>
        
    </div>
</article>

        <?php
            if(isset($_SESSION["user"])){
              $ma_kh = $_SESSION["user"]['ma_kh'];
                $hinh = $_SESSION["user"]['hinh'];
                $ho_ten = $_SESSION["user"]['ho_ten'];
                $dia_chi = $_SESSION["user"]['dia_chi'];
                $email = $_SESSION["user"]['email'];
                $so_dien_thoai = $_SESSION["user"]['so_dien_thoai'];
                
            }else {
              $ma_kh = "";
                $hinh = "";
                $ho_ten = "";
                $dia_chi = "";
                $email = "";
                $so_dien_thoai = "";
            }
        ?>
        
    <section class="h-100 h-custom" style="background-color: #eee; border:none;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col">
          <div class="card">
            <div class="card-body p-4">
  
              <div class="row">
  
                <div class="col-lg-7">
                <div class="table-responsive">
            <table class="table" style="text-align:center;">
              <thead>
                <tr>
                <th scope="col" class="border-0 bg-light" style="width: 40px;">
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
                </tr>
              </thead>
              <tbody>
              <?php
              $tong_tam_thoi=0;
              $tongsl=0;
                if(!empty($_SESSION['myCart'])){
                    
                    $i=0;
                    foreach($_SESSION['myCart'] as $cart){
                    $tt = $cart[2]*$cart[3];
                    $tong_tam_thoi+=$tt;
                    $tongsl+=$cart[3];
                   
                   
                echo '  
            
                <tr>
                <td class="border-0 align-middle" style="text-align:center;width:40px;"><strong>'.($i+1).'</strong></td>
                  <th scope="row" class="border-0">
                    <div class="p-2" style="text-align:left;">
                      <img src="'.$CONTENT_URL.'/images/products/'.$cart[1].'" alt="" width="50" class="img-fluid rounded shadow-sm">
                      <div class="ml-3 d-inline-block align-middle">
                        <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle" style="font-size:15px;">'.$cart[0].'</a></h5><span class="text-muted font-weight-normal font-italic d-block small ">Mã loại: '.$cart[4].'</span>
                      </div>
                    </div>
                  </th>
                  <td class="border-0 align-middle"><strong>'.number_format($cart[2]).'₫</strong></td>
                  <td class="border-0 align-middle" style="text-align:center;"><strong>'.$cart[3].'</strong></td>
                  <td class="align-middle"><strong>'.number_format($tt).'₫</strong></td>
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
                    
                  </td>
                  <td scope="col" class="border-0 bg-light">
                   
                  </td>
                  <td scope="col" class="border-0 bg-light">
                  
                  </td>
                  <td scope="col" class="border-0 bg-light">
                    <div class="py-2"></div>
                  </td>
                </tr>  
              </tbody>
            </table>

          </div>
  
                </div>
                <div class="col-lg-5">
  
                  <div class="card text-white rounded-3" style="background-color: rgb(19, 167, 21);">
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-center mb-4">
                        <h5 class="mb-0">Chi tiết khách hàng</h5>
                        <img src="<?=$CONTENT_URL?>/images/users/<?=$hinh?>"
                          class="img-fluid rounded-3" style="width: 45px;" alt="Avatar">
                      </div>
                      <form class="mt-4" style="font-size: 17px !important;" method="post" action="thanh-toan.php">
                      <p class="mb-0"><span class="small mb-2">Phương thức vận chuyển :</span> <br> 
                        <div style='display: flex;'><select class="text-body form-select" style="flex:5;" name="ship">
                          <?php if ($ship == 0) {                           
                          ?>
                          <option value="0" selected>Giao hàng nhanh: 30,000 ₫</option>
                          <option value="1" >Giao hàng hỏa tốc: 45,000 ₫</option>
                          <option value="2">Giao hàng tiết kiệm: 20,000 ₫</option>
                          <?php }elseif ($ship == 1) { ?>
                            <option value="0">Giao hàng nhanh: 30,000 ₫</option>
                          <option value="1" selected>Giao hàng hỏa tốc: 45,000 ₫</option>
                          <option value="2">Giao hàng tiết kiệm: 20,000 ₫</option>
                          <?php }else { ?>
                          <option value="0">Giao hàng nhanh: 30,000 ₫</option>
                          <option value="1" >Giao hàng hỏa tốc: 45,000 ₫</option>
                          <option value="2" selected>Giao hàng tiết kiệm: 20,000 ₫</option>
                          <?php } ?>
                        </select> 
                        
                        <?php echo "<center style='flex:2;'><input type='submit' class='btn btn-primary' value='Chọn' onclick='window.location.reload();'></center>";
                        ?>
                        </div>
                      </p>
                      
                      <input type="hidden" name="ma_kh" value="<?=$ma_kh?>">
                        <div class="form-outline form-white ">
                          <input type="text" id="typeName" name="ho_ten" class="form-control form-control-lg" style="font-size: 15px !important;"
                            placeholder="Họ tên" value="<?=$ho_ten?>"/>
                          <label class="form-label" for="typeName"></label>
                        </div>
  
                        <div class="form-outline form-white ">
                          <input type="text" id="typeText" name="so_dien_thoai" class="form-control form-control-lg" style="font-size: 15px !important;"
                            placeholder="Số điện thoại" minlength="5" maxlength="19" value="<?=$so_dien_thoai?>"/>
                          <label class="form-label" for="typeText"></label>
                        </div>
                        <div class="form-outline form-white ">
                          <input type="text" id="typeText" name="email" class="form-control form-control-lg" style="font-size: 15px !important;"
                            placeholder="Email" minlength="5" maxlength="19" value="<?=$email?>"/>
                          <label class="form-label" for="typeText"></label>
                        </div>
                        <div class="form-outline form-white ">
                          <input type="text" id="typeText" name="dia_chi" class="form-control form-control-lg" style="font-size: 15px !important;"
                            placeholder="Địa chỉ" minlength="5" maxlength="19" value="<?=$dia_chi?>"/>
                          <label class="form-label" for="typeText"></label>
                        </div>
                        <div class="form-outline form-white ">
                            <textarea name="ghi_chu" id="" class="form-control form-control-lg" cols="30" rows="3"  placeholder="Ghi chú" style="font-size: 15px !important;"></textarea>
                          <label class="form-label" for="typeText"></label>
                        </div> 
                        <hr class="my-4">
  
                      <div class="d-flex justify-content-between">
                        <p class="mb-2">Tổng tiền (tạm tính)</p>
                        <p class="mb-2" style="font-weight:bolder;"> <?=number_format($tong_tam_thoi)?>₫</p>
                      </div>
  
                      <div class="d-flex justify-content-between">
                        <p class="mb-2">Phí giao hàng</p>
                        <p class="mb-2">
                          <?php
                          if(isset($ship)){
                            if ($ship == 0) {
                              $gh = 30000;
                            }elseif ($ship == 1) {
                              $gh = 45000;
                            }else {
                              $gh = 20000;
                              
                            }
                            
                            
                          }else {
                            $gh = 30000;
                          }
                          $tong = $tong_tam_thoi + $gh; 
                          ?>
                          <?=number_format($gh)?>₫
                        </p>
                      </div>
  
                      <div class="d-flex justify-content-between mb-4">
                        <p class="mb-2">Tổng tiền</p>
                        <p class="mb-2" style="font-weight:bolder;"><?=number_format($tong)?>₫</p>
                      </div>
  
                      <button type="submit" class="btn btn-block btn-lg" style="background-color: rgb(70, 233, 30);" onclick="return confirm('Xác nhận đặt hàng ?')" name="dat-hang">
                        <div class="d-flex justify-content-between">
                          <span>Thanh toán <i class="fas fa-long-arrow-alt-right ms-2"></i></span>
                        </div>
                      </button>
                      </form>
  
                      <?php
                        $_SESSION['tong-tien'] = $tong;
                        
                      ?>
                      
  
                    </div>
                  </div>
  
                </div>
  
              </div>
  
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
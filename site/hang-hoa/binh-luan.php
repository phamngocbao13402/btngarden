

<section style="background-color: #eee;">
  <div class="container my-5 py-5">
    <div class="row d-flex justify-content-center">
      <div class="col-md-12 col-lg-10 col-xl-8" style="width: 90%;">
      <div class="header">
          <span class="header_text">
              ĐÁNH GIÁ SẢN PHẨM
              <span class="gachchan">
                  <i class="fab fa-pagelines"></i>
              </span>
          </span>
      </div>
        <div class="card">
        
      <?php 
          require '../../dao/binh-luan.php';
          if(exist_param("noi_dung")){
            $ma_kh = $_SESSION['user']['ma_kh'];
            $ngay_bl = date_format(date_create(), 'Y-m-d');
            binh_luan_insert($ma_kh, $ma_hh, $noi_dung, $ngay_bl);
          }
          $binh_luan_list = binh_luan_select_by_hang_hoa($ma_hh);           
          foreach ($binh_luan_list as $bl) {
            echo "
                <div class='card-body' style='border-bottom: 1px solid gray; padding: 2rem;'>
                <div class='d-flex flex-start align-items-center'>
                  <img
                    class='rounded-circle shadow-1-strong me-3'
                    src='$CONTENT_URL/images/users/$bl[hinh]'
                    alt='avatar'
                    width='60'
                    height='60'
                  />
                  <div>
                    <h6 class='fw-bold text-primary mb-1'>$bl[ho_ten] <span style='color: black;'>- $bl[ma_kh]</span></h6> 
                    <p class='text-muted small mb-0'>
                    $bl[ngay_bl]
                    </p>
                  </div>
                </div>

                <p class='mt-3 mb-4 pb-2' style='margin-left:75px; margin-bottom: 0px !important;'>
                $bl[noi_dung] 
                </p>

              </div>
            ";
          }
      ?>
          
          
          <div class="card-footer py-3 border-0" style="background-color: #f8f9fa;">
          
          <?php
              if(!isset($_SESSION['user'])){
                echo '<div style="text-align:center;width:100%;font-size:18px;"><a href="'.$SITE_URL.'/tai-khoan/dang-nhap.php" style="text-decoration:none;font-weight:bold;" class="text-success">Đăng nhập để bình luận!</a><div>';
              } 
              else {
          ?>
            <div class="d-flex flex-start w-100">
              <img
                class="rounded-circle shadow-1-strong me-3"
                src="<?=$CONTENT_URL?>/images/users/<?=$_SESSION['user']['hinh']?>"
                alt="avatar"
                width="40"
                height="40"
              />
              <form class="form-outline w-100" action="<?= $_SERVER["REQUEST_URI"] ?>" method="post">
                <textarea
                  class="form-control"
                  id="textAreaExample"
                  rows="2"
                  style="background: #fff;"
                  name="noi_dung"
                ></textarea>
                <div class="float-end mt-2 pt-1">
                    <button type="submit" class="btn btn-primary btn-sm">Gửi</button>
                    <button type="reset" class="btn btn-outline-primary btn-sm">Nhập lại</button>
                </div>
              </form>
            </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
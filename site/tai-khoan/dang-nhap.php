<?php 
require '../../global.php';
require '../../dao/khach-hang.php';

extract($_REQUEST);

if(exist_param("btn_login")){
    	$user = khach_hang_select_by_id($ma_kh);
    	if($user){
			if ($user['kich_hoat'] == 1) {
				
		    if($user['mat_khau'] == $mat_khau){
		    $MESSAGE = "<h5 class='alert alert-warning'>Đăng nhập thành công!</h5>";

				// xử lý ghi nhớ tài khoản
				if(exist_param("ghi_nho")){
					add_cookie("ma_kh", $ma_kh, 30);
					add_cookie("mat_khau", $mat_khau, 30);
				}
				else {
					delete_cookie("ma_kh");
					delete_cookie("mat_khau");
				}

				// ghi vào session để kiểm tra
		        $_SESSION["user"] = $user;

				// quay trở lại trang được yêu cầu
		        if(isset($_SESSION['request_uri'])){
					header("location: " . $_SESSION['request_uri']);
				}else {
					header("location: " . "$SITE_URL/trang-chinh/index.php");
				}
			}
	            else {
		            $MESSAGE = "<h5 class='alert alert-warning'>Sai mật khẩu!</h5>";
	            }
			}else {
				$MESSAGE = "<h5 class='alert alert-warning'>Tài khoản chưa được kích hoạt!</h5>";
			}
            }
            else {
	            $MESSAGE = "<h5 class='alert alert-warning'>Sai mã đăng nhập!</h5>";
            }
        }
        else {
			if (exist_param("btn_logoff")){
				session_unset();
			}
			$ma_kh = get_cookie("ma_kh");
			$mat_khau = get_cookie("mat_khau");						
    }

	require 'dang-nhap-form.php';

?>

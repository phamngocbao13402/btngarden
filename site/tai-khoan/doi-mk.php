<?php 
require '../../global.php';
require '../../dao/khach-hang.php';

extract($_REQUEST);
    //$user = khach_hang_select_by_id($ma_kh);
    if(exist_param("btn_change")){
    	if($mat_khau1 != $mat_khau2){
    		$MESSAGE = "<h5 class='alert alert-warning'>Xác nhận mật khẩu mới không đúng!</h5>";
    	}
    	else {
    				try {khach_hang_change_password($_SESSION['user']['ma_kh'], $mat_khau1);
    					$MESSAGE = "<h5 class='alert alert-warning'>Đổi mật khẩu thành công!</h5>";
                        session_unset();
                        header('location: dang-nhap.php');
    				} 
    				catch (Exception $exc) {
    					$MESSAGE = "<h5 class='alert alert-warning'>Đổi mật khẩu thất bại!</h5>";
    				}
    			}
    		}     
    require 'doi-mk-form.php';

?>
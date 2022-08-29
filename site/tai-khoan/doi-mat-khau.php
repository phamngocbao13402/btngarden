<?php 
require '../../global.php';
require '../../dao/khach-hang.php';

extract($_REQUEST);
    //$user = khach_hang_select_by_id($_SESSION['user']['ma_kh']);
    if(exist_param("btn_change")){
    	if($mat_khau2 != $mat_khau3){
    		$MESSAGE = "<h5 class='alert alert-warning'>Xác nhận mật khẩu mới không đúng!</h5>";
    	}
    	else {
    		$user = khach_hang_select_by_id($ma_kh);
    		if($user){
    			if($user['mat_khau'] == $mat_khau){
    				try {khach_hang_change_password($ma_kh, $mat_khau2);
    					$MESSAGE = "<h5 class='alert alert-warning'>Đổi mật khẩu thành công!</h5>";
    				} 
    				catch (Exception $exc) {
    					$MESSAGE = "<h5 class='alert alert-warning'>Đổi mật khẩu thất bại!</h5>";
    				}
    			}
    			else {
    				$MESSAGE = "<h5 class='alert alert-warning'>Sai mật khẩu!</h5>";
    			}
    		}
    		else {
    			$MESSAGE = "<h5 class='alert alert-warning'>Sai mã đăng nhập!</h5>";
    		}        
    	}
    }    
	$VIEW_NAME="tai-khoan/doi-mat-khau-form.php";
	$VIEW_NAME1 = "a.php";
	require "../layout.php";
?>
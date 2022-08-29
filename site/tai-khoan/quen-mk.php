<?php
require '../../global.php';
require '../../dao/khach-hang.php';

extract($_REQUEST);

    if(exist_param("btn_forgot")){
    	$user = khach_hang_select_by_id($ma_kh);
    	if($user){
    		if($user['email'] != $email){
    			$MESSAGE = "<h5 class='alert alert-warning'>Sai địa chỉ email!</h5>";
    		}
    		else {
				$_SESSION["user"] = $user;
    			header( 'location: doi-mk.php');
    			//$VIEW_NAME="tai-khoan/dang-nhap-form.php";
    			global $ma_kh, $mat_khau;
    		}
    	}
    	else {
    		$MESSAGE = "<h5 class='alert alert-warning'>Sai tên đăng nhập!</h5>";
    	}
    }

//$VIEW_NAME = "tai-khoan/quen-mk-form.php";
require 'quen-mk-form.php';

?>
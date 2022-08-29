<?php 
require '../../global.php';
require '../../dao/khach-hang.php';

extract($_REQUEST);

if(exist_param("btn_register")){
	if($mat_khau != $mat_khau2) {
		$MESSAGE = "<h5 class='alert alert-warning'>Mật khẩu phải trùng nhau</h5>";
	}
	else if(khach_hang_exist($ma_kh)) {
		$MESSAGE = "<h5 class='alert alert-warning'>Mã khách hàng đã tồn tại</h5>";
	}
	else {
		//$file_name = save_file("hinh", "$IMAGE_DIR/users/"); // nếu có hình thì sẽ upload hình lên thư mục; "hinh" là tên trường file/ thư mục lưu file
		//$hinh = $file_name?$file_name:"user.png"; // lưu tên hình vào database
		$hinh ="user.png";
		try {
			//khach_hang_insert($ma_kh, $mat_khau, $ho_ten, $email, $hinh='', $kich_hoat=0, $vai_tro=0, $so_dien_thoai, $dia_chi='');
			khach_hang_insert1($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro, $so_dien_thoai, $dia_chi);
			//khach_hang_insert1($ma_kh, $mat_khau, $ho_ten, $email, $kich_hoat=0, $vai_tro=0, $so_dien_thoai, $dia_chi='a');
			// sau khi đưa thông tin vào dataabse thì thông báo
			$MESSAGE = "<h5 class='alert alert-warning'>Đăng ký thành viên thành công!</h5>";
		} 
		catch (Exception $exc) {
			$MESSAGE = "<h5 class='alert alert-warning'>Đăng ký thành viên thất bại!</h5>";
		}
	}
}

else {
	//global $ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro, $mat_khau2;
	global $ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro, $so_dien_thoai, $dia_chi, $mat_khau2;
}

//header( "location: dang-ky-form.php");
require 'dang-ky-form.php';

?>
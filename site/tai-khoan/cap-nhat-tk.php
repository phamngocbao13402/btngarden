<?php 
   require '../../global.php';
   require '../../dao/khach-hang.php';

   extract($_REQUEST);
   
   if(exist_param("btn_update")){
   	$file_name= save_file("hinh", "$IMAGE_DIR/users/");
   	$hinh= $file_name?$file_name:$hinh;
   	try {
		khach_hang_update($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro, $so_dien_thoai, $dia_chi);
   		$MESSAGE = "<h5 class='alert alert-success'>Cập nhật thông tin thành viên thành công!</h5>";
         $_SESSION['user'] = khach_hang_select_by_id($ma_kh);
   	} 
   	catch (Exception $exc) {
   		$MESSAGE = "<h5 class='alert alert-warning'>Cập nhật thông tin thành viên thất bại!</h5>";
   	}
   }
   else {
   	extract($_SESSION['user']);
   }

$VIEW_NAME="tai-khoan/cap-nhat-tk-form.php";
$VIEW_NAME1 = "a.php";
require "../layout.php";

?>
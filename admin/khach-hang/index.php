<?php

    require_once "../../dao/pdo.php";
    require "../../global.php";
    require_once "../../dao/khach-hang.php";
    require_once "../../dao/binh-luan.php";
    extract($_REQUEST);
    if (exist_param("btn_list")) {
        $items = khach_hang_select_all();
        $VIEW_NAME = "list.php";
    }
    else if (exist_param("btn_insert")) {
            // lấy dữ liệu từ form, có bao nhiêu dữ liệu lấy về hết
        $ma_kh = $_POST['ma_kh'];
        $mat_khau = $_POST['mat_khau'];
        $ho_ten = $_POST['ho_ten'];
        $email = $_POST['email'];
        // $hinh = $_FILES['hinh']['name'];
        // $hinh = save_file('hinh', "$IMAGE_DIR/users/");
        $kich_hoat = $_POST['kich_hoat'];
        $vai_tro = $_POST['vai_tro'];
        $so_dien_thoai = $_POST['so_dien_thoai'];
        $mat_khau2 = $_POST['mat_khau2'];
        $dia_chi = $_POST['dia_chi'];
        if($mat_khau != $mat_khau2) {
            $MESSAGE = "<h5 class='alert alert-warning'>Mật khẩu phải trùng nhau</h5>";
            $VIEW_NAME = "add.php";
        }else if(khach_hang_exist($ma_kh)) {
            $MESSAGE = "<h5 class='alert alert-warning'>Mã khách hàng đã tồn tại</h5>";
            $VIEW_NAME = "add.php";
        }else {
            $file_name = save_file("hinh", "$IMAGE_DIR/users/"); // nếu có hình thì sẽ upload hình lên thư mục
            $hinh = $file_name?$file_name:"user.png"; // lưu tên hình vào database    
            khach_hang_insert($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro, $so_dien_thoai, $dia_chi);
            $items = khach_hang_select_all(); 
            $VIEW_NAME = "list.php";
        
        }
    }
    else if (exist_param("btn_edit")) {
        // lấy dữ liệu từ form
        $ma_kh = $_REQUEST['ma_kh'];
        $khach_hang_info = khach_hang_select_by_id($ma_kh);
        extract($khach_hang_info);
            //show du lieu
        $VIEW_NAME = "edit.php";
    }
    else if (exist_param("btn_delete")) {
        // lấy dữ liệu từ form
        $ma_kh = $_REQUEST['ma_kh'];
        // binh_luan_delete_kh($ma_kh);
        khach_hang_delete($ma_kh);
        $items = khach_hang_select_all(); 
        $VIEW_NAME = "list.php";
    }
    else if (exist_param("btn_update")) {
        // lấy dữ liệu từ form, có bao nhiêu dữ liệu lấy về hết
        $ma_kh = $_POST['ma_kh'];
        $mat_khau = $_POST['mat_khau'];
        $ho_ten = $_POST['ho_ten'];
        $email = $_POST['email'];
        // $hinh = $_FILES['up_hinh']['name'];
        $kich_hoat = $_POST['kich_hoat'];
        $vai_tro = $_POST['vai_tro'];
        $so_dien_thoai = $_POST['so_dien_thoai'];
        $dia_chi = $_POST['dia_chi'];
        $hinh = save_file("hinh", "$IMAGE_DIR/users/");
        khach_hang_update($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro, $so_dien_thoai, $dia_chi);
        $items = khach_hang_select_all(); 
        $VIEW_NAME = "list.php";
    }else {
        $VIEW_NAME = "add.php";
    }
  require "../layout.php";  
?>
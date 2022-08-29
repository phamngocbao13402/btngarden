<?php 
require_once "../../dao/pdo.php";
require "../../global.php";
require_once "../../dao/loai.php";
require_once "../../dao/hang-hoa.php";

extract($_REQUEST);

if(exist_param("btn_list")) {
    // viet code
    $items = hang_hoa_select_all();
    $VIEW_NAME = "list.php";
}
else if(exist_param("btn_insert")) {
    // lấy dữ liệu từ form
    $ten_hh = $_POST['ten_hh'];
    $don_gia = $_POST['don_gia'];
    $giam_gia = $_POST['giam_gia'];
    $ma_loai = $_POST['ma_loai'];
    $so_luot_xem = $_POST['so_luot_xem'];
    $mo_ta = $_POST['mo_ta'];
    $so_luong = $_POST['so_luong'];
    $ngay_nhap = $_POST['ngay_nhap'];
    $hinh = save_file('hinh', "$IMAGE_DIR/products/");
    // insert database
    hang_hoa_insert($ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $so_luot_xem, $ngay_nhap, $so_luong, $mo_ta);
    // show dữ liệu
    $items = hang_hoa_select_all();
    $VIEW_NAME = "list.php";
}
else if(exist_param("btn_edit")) {
    // lấy dữ liệu từ form
    $ma_hh = $_REQUEST['ma_hh'];
    $hang_hoa_info = hang_hoa_select_by_id($ma_hh);
    extract($hang_hoa_info);
    // show dữ liệu
    $loai_hang = loai_select_all();
    $VIEW_NAME = "edit.php";
}
else if(exist_param("btn_delete")) {
    $ma_hh = $_REQUEST['ma_hh'];
    hang_hoa_delete($ma_hh);
    // hiển thị lại danh sách
    $items = hang_hoa_select_all();
    $VIEW_NAME = "list.php";
}
else if(exist_param("btn_update")) {
    // lấy dữ liệu từ form
    $ma_hh = $_POST['ma_hh'];
    $ten_hh = $_POST['ten_hh'];
    $don_gia = $_POST['don_gia'];
    $giam_gia = $_POST['giam_gia'];
    $ma_loai = $_POST['ma_loai'];
    $so_luot_xem = $_POST['so_luot_xem'];
    $mo_ta = $_POST['mo_ta'];
    $so_luong = $_POST['so_luong'];
    $ngay_nhap = $_POST['ngay_nhap'];
    $hinh = save_file('hinh', "$IMAGE_DIR/products/");
    hang_hoa_update($ma_hh, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $so_luot_xem, $ngay_nhap, $so_luong, $mo_ta);
    
    // hiển thị lại danh sách
    $items = hang_hoa_select_all();
    $VIEW_NAME = "list.php";
}
else {
    $loai_hang = loai_select_all();
    $VIEW_NAME = "add.php";
}

require "../layout.php";

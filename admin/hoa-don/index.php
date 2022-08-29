<?php
require_once "../../dao/pdo.php";
require "../../global.php";
require_once "../../dao/don-hang.php";
require_once "../../dao/khach-hang.php";

// check_login();

extract($_REQUEST);

if(exist_param("btn_view")) {
    $items = hoa_don_select_by_khach_hang($ma_hd);
    $kh = khach_hang_select_by_hd($ma_hd);
    $VIEW_NAME = "detail.php";
}
else if(exist_param("btn_edit")){
    // lấy dữ liệu từ form
    $ma_hd = $_REQUEST['ma_hd'];
    $don_hang_info = hoa_don_select_by_id($ma_hd);
    extract($don_hang_info);
    // show dữ liệu
    $VIEW_NAME = "edit.php";
}
else if(exist_param("btn_delete")){
    $ma_hd = $_REQUEST['ma_hd'];
    hoa_don_delete($ma_hd);
    // hiển thị lại danh sách
    $items = hoa_don_select_all();
    $VIEW_NAME = "list.php";
}
else if(exist_param("btn_update")){
    $ma_hd = $_POST['ma_hd'];
    $tong_tien = $_POST['tong_tien'];
    $ship = $_POST['ship'];
    $ngay_dat_hang = $_POST['ngay_dat_hang'];
    $ghi_chu = $_POST['ghi_chu'];
    $tinh_trang = $_POST['tinh_trang'];
    $ma_kh = $_POST['ma_kh'];
    hoa_don_update($ma_hd,$tong_tien,$ngay_dat_hang,$ghi_chu,$tinh_trang,$ship,$ma_kh);
    // hiển thị lại danh sách
    $items = hoa_don_select_all();
    $VIEW_NAME = "list.php";

}
else if(exist_param("btn_delete_hdct")){
    $ma_hd = $_REQUEST['ma_hd'];
    hoa_don_chi_tiet_delete($ma_hd);
    hoa_don_delete($ma_hd);
    // hiển thị lại danh sách
    $items = hoa_don_select_all();
    $VIEW_NAME = "list.php";
}
else{
    $items = hoa_don_select_all();
    $VIEW_NAME = "list.php";
}
require "../layout.php";

?>
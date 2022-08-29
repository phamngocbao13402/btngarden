<?php 
    require_once "../../global.php";
    require "../../dao/thong-ke.php";
    $items = thong_ke_don_hang();
    $items1 = thong_ke_khach_hang();
    $items2 = thong_ke_loai_hang();
    $items3 = thong_ke_binh_luan2();
    $items4 = thong_ke_hang_hoa2();
    $VIEW_NAME = "trang-chinh/home.php";
    require "../layout.php";
?>

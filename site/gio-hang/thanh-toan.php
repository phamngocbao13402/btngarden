<?php
require "../../global.php";
require "../../dao/pdo.php";
require "../../dao/loai.php";
require "../../dao/hang-hoa.php";
require "../../dao/don-hang.php";

extract($_REQUEST);

    if(isset($_POST['dat-hang'])){
        $ma_kh = $_POST['ma_kh'];
        $ghi_chu = $_POST['ghi_chu'];
        $tinh_trang = '0';
        $ship = $_POST['ship'];
        $dia_chi = $_POST['dia_chi'];
        $ngay_dat_hang = date("Y-m-d H:i:s");
        $tong_tien = $_SESSION['tong-tien'];

        // $idbill = hoa_don_insert('',$_SESSION['tong-tien'],date("Y-m-d H:i:s"),$ghi_chu,0,$ship,$ma_kh);
        
        // foreach($_SESSION['myCart'] as $cart){
        //     hoa_don_chi_tiet_insert($idbill,$key,$value['so_luong'],$value['don_gia']);
        // }
        hoa_don_insert($tong_tien,$ngay_dat_hang,$ghi_chu,$tinh_trang,$ship,$dia_chi,$ma_kh);
        foreach ($_SESSION['myCart'] as $cart) {
            $so_luong_update = $cart[3];
            $ma_hh = $cart[5];
            hang_hoa_giam_so_luong($ma_hh, $so_luong_update);
        }
        echo '<script language="javascript">';
                          echo 'alert("Đặt hàng thành công!")';
                          echo '</script>';
        //Xoá cart
        $_SESSION['myCart'] = [];
        header("location: don-hang.php");
    }

$VIEW_NAME = "gio-hang/thanh-toan-ui.php";
$VIEW_NAME1 = "trang-chinh/yeu-thich.php";


require "../layout.php";



?>
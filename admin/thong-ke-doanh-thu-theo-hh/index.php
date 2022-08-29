<?php 
    require "../../global.php";
    require "../../dao/don-hang.php";
    require "../../dao/thong-ke.php";

    extract($_REQUEST);
    $items = thong_ke_hang_hoa_ban_chay1(); 
    $VIEW_NAME = "thong-ke-doanh-thu-theo-hh/list.php";
    if(exist_param("chon")){
        $load = $_POST['ban_cham'];
        if ($load==0){
        $items = thong_ke_hang_hoa_ban_chay1();     
        $VIEW_NAME = "thong-ke-doanh-thu-theo-hh/list.php";
        }elseif ($load==1) {
        $items = thong_ke_hang_hoa_ban_chay2();     
        $VIEW_NAME = "thong-ke-doanh-thu-theo-hh/list.php";
        }
    }

    require "../layout.php";
?>
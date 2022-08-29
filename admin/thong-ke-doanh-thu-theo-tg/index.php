<?php 
    require "../../global.php";
    require "../../dao/don-hang.php";
    require "../../dao/thong-ke.php";

    extract($_REQUEST);
    $items = thong_ke_doanh_thu_theo_ngay(); 
    $VIEW_NAME = "thong-ke-doanh-thu-theo-tg/list.php";
    if(exist_param("chon")){
        $load = $_POST['ban_cham'];
        if ($load==0){
        $items = thong_ke_doanh_thu_theo_ngay();     
        $VIEW_NAME = "thong-ke-doanh-thu-theo-tg/list.php";
        }elseif ($load==1) {
        $items = thong_ke_doanh_thu_theo_thang();     
        $VIEW_NAME = "thong-ke-doanh-thu-theo-tg/list.php";
        }
        elseif ($load==2) {
        $items = thong_ke_doanh_thu_theo_nam();     
        $VIEW_NAME = "thong-ke-doanh-thu-theo-tg/list.php";
        }
    }

    require "../layout.php";
?>
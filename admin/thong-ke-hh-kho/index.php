<?php 
    require "../../global.php";
    // require "../../dao/binh-luan.php";
    require "../../dao/thong-ke.php";

    extract($_REQUEST);

    if(exist_param("chart", $_REQUEST)) {
        $items = thong_ke_hh_kho();
        $VIEW_NAME = "thong-ke-hh-kho/chart.php";
    }
    else {
       $items = thong_ke_hh_kho();
        $VIEW_NAME = "thong-ke-hh-kho/list.php";
    }

    require "../layout.php";
?>
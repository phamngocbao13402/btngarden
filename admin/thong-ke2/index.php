<?php 
    require "../../global.php";
    // require "../../dao/binh-luan.php";
    require "../../dao/thong-ke.php";

    extract($_REQUEST);

    if(exist_param("chart", $_REQUEST)) {
        $items = thong_ke_binh_luan();
        $VIEW_NAME = "thong-ke2/chart.php";
    }
    else {
       $items = thong_ke_binh_luan();
        $VIEW_NAME = "thong-ke2/list.php";
    }

    require "../layout.php";
?>
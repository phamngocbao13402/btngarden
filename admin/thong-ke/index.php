<?php 
    require "../../global.php";
    // require "../../dao/binh-luan.php";
    require "../../dao/thong-ke.php";

    extract($_REQUEST);

    if(exist_param("chart", $_REQUEST)) {
        $items = thong_ke_hang_hoa();
        $VIEW_NAME = "thong-ke/chart.php";
    }
    else {
       $items = thong_ke_hang_hoa();
        $VIEW_NAME = "thong-ke/list.php";
    }

    require "../layout.php";
?>
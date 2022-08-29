<?php
    require "../../global.php";
    require "../../dao/pdo.php";
    require "../../dao/loai.php";
    require "../../dao/khach-hang.php";

    extract($_REQUEST);// lấy yêu cầu, mảng yêu cầu
    // dùng hàm exist_param để kiểm tra chuỗi đó có tồn tại trong mảng yêu cầu hay không

    if(exist_param("gioi-thieu", $_REQUEST)){
        $VIEW_NAME = "../../page/gioi-thieu.php";
        $VIEW_NAME1 = "../tai-khoan/a.php";
        $VIEW_NAME2 = "../tai-khoan/a.php";
    }elseif (exist_param("tuyen-dung", $_REQUEST)) {
        $VIEW_NAME = "../../page/tuyen-dung.php";
        $VIEW_NAME1 = "../tai-khoan/a.php";
        $VIEW_NAME2 = "../tai-khoan/a.php";
    }else {
        $VIEW_NAME = "trang-chinh/trang-chu.php";
        $VIEW_NAME2 = "trang-chinh/quang-cao.php";
        $VIEW_NAME1 = "trang-chinh/yeu-thich.php";
    }

    require "../layout.php";
?>
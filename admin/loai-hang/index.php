<?php
    require_once "../../dao/pdo.php";
    require "../../global.php";
    require_once "../../dao/loai.php";

    
extract($_REQUEST);

if(exist_param("btn_list")) {
    // viet code
    $items = loai_select_all();
    $VIEW_NAME = "list.php";
}
else if(exist_param("btn_insert")) {
    // lấy dữ liệu từ form
    $ten_loai = $_POST['ten_loai'];
    $hinh = save_file('hinh',"$IMAGE_DIR/types/");
    // insert database
    loai_insert($ten_loai, $hinh);
    // show dữ liệu
    $items = loai_select_all();
    $VIEW_NAME = "list.php";
}
else if(exist_param("btn_edit")) {
    // lấy dữ liệu từ form
    $ma_loai = $_REQUEST['ma_loai'];
    $loai_getinfo = loai_select_by_id($ma_loai);
    extract($loai_getinfo);
    // show dữ liệu
    $VIEW_NAME = "edit.php";
}
else if(exist_param("btn_delete")) {
    $ma_loai = $_REQUEST['ma_loai'];
    loai_delete($ma_loai);
    // hiển thị lại danh sách
    $items = loai_select_all();
    $VIEW_NAME = "list.php";
}
else if(exist_param("btn_update")) {
    // lấy dữ liệu từ form
    $ma_loai = $_POST['ma_loai'];
    $ten_loai = $_POST['ten_loai'];
    $hinh = save_file('hinh', "$IMAGE_DIR/types/");
    // update database
    loai_update($ma_loai, $ten_loai, $hinh);
    // hiển thị lại danh sách
    $items = loai_select_all();
    $VIEW_NAME = "list.php";
}
else {
    $VIEW_NAME = "add.php";
}

require "../layout.php";
?>
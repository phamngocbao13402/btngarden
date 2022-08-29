<?php
require "../../global.php";
require "../../dao/pdo.php";
require "../../dao/loai.php";
require "../../dao/hang-hoa.php";
require "../../dao/don-hang.php";

extract($_REQUEST);

$items = hoa_don_select_by_kh($_SESSION['user']['ma_kh']);
if(exist_param("btn_delete")){
    $ma_hd = $_REQUEST['ma_hd'];
    hoa_don_update_client($ma_hd);
    // hiển thị lại danh sách
    $items = hoa_don_select_by_kh($_SESSION['user']['ma_kh']);
    $VIEW_NAME = "gio-hang/don-hang-ui.php";
}elseif (exist_param("btn_detail")) {
    $ma_hd = $_REQUEST['ma_hd'];
    $hds = hoa_don_select_all_by_id($ma_hd);
    $khs = khach_hang_select_by_hd($ma_hd);
    $VIEW_NAME = "gio-hang/don-hang-ui.php";
}
$VIEW_NAME = "gio-hang/don-hang-ui.php";
$VIEW_NAME1 = "trang-chinh/yeu-thich.php";


require "../layout.php";



?>
<?php
require "../../global.php";
require "../../dao/pdo.php";
require "../../dao/loai.php";
require "../../dao/hang-hoa.php";


extract($_REQUEST);

    if(exist_param("ma_loai")){ // nếu có ma_loai trong yêu cầu 
        // thì sẽ sử dụng hàm hang_hoa_select_by_loai() để liệt kê danh sách sản phẩm theo loại và đây là phần trưng bày hàng hóa      
        $items = hang_hoa_select_by_loai($ma_loai);     
    }
    else if(exist_param("keyword")){
        // liệt kê các sản phẩm theo từ khóa cụ thể, theo tên sản phẩm
    	$items = hang_hoa_select_keyword($keyword);
    }
    // nếu không có yêu cầu nào thì hiển thị tất cả các sản phẩm trong database
    else {
    	$items = hang_hoa_select_all();
    }

$VIEW_NAME = "hang-hoa/liet-ke-ui.php";
$VIEW_NAME1 = "trang-chinh/yeu-thich.php";
//$VIEW_NAME1 = "trang-chinh/quang-cao.php";

require "../layout.php";


// đây là file controller của hàng hóa

?>
<?php
require "../../global.php";
require "../../dao/pdo.php";
require "../../dao/loai.php";
require "../../dao/hang-hoa.php";
require "../../dao/don-hang.php";

extract($_REQUEST);

    // if(exist_param("ma_hh")){ // nếu có ma_loai trong yêu cầu 
    //     // thì sẽ sử dụng hàm hang_hoa_select_by_loai() để liệt kê danh sách sản phẩm theo loại và đây là phần trưng bày hàng hóa
        
    //     $items = hang_hoa_select_by_loai($ma_loai); 
        
      
    // }
    // else{
        
    // }
    
    if(!isset($_SESSION['myCart'])) $_SESSION['myCart']=[];

    // Xoá hết sản phẩm
    if(isset($_GET['delcart'])&&($_GET['delcart']==1)) unset($_SESSION['myCart']);


    // Xoá sản phẩm trong giỏ hàng
    if(isset($_GET['delid'])&&($_GET['delid']>=0)){
        array_splice($_SESSION['myCart'],$_GET['delid'],1);
    }
    if(isset($_POST['addCart'])&&$_POST['addCart']){
        $ten_hh = $_POST['ten_hh'];
        $ma_hh = $_POST['ma_hh'];
        $hinh = $_POST['hinh'];
        $don_gia = $_POST['don_gia'];
        $ma_loai = $_POST['ma_loai'];
        $giam_gia = $_POST['giam_gia'];
        if(isset($_POST['so_luong'])){
            $so_luong = $_POST['so_luong'];
        }else {
            $so_luong = 1;
        }
        
        $gia=$don_gia - $don_gia*$giam_gia/100;

        $fl = 0;
        // Kiểm tra sản phẩm có trong giỏ hàng hay không
        for ($i=0; $i < sizeof($_SESSION['myCart']); $i++) { 
            if($_SESSION['myCart'][$i][0] == $ten_hh){
                $fl = 1;
                $soluongnew = $so_luong + $_SESSION['myCart'][$i][3];
                $_SESSION['myCart'][$i][3] = $soluongnew;
                break;
            
            }
        }
        
        if ($fl == 0) {
            // Thêm sản phẩm vào giỏ hàng
            $spadd = [$ten_hh,$hinh,$gia,$so_luong,$ma_loai,$ma_hh];
            array_push($_SESSION['myCart'],$spadd);
        }
        
    }

$VIEW_NAME = "gio-hang/gio-hang-ui.php";
$VIEW_NAME1 = "trang-chinh/yeu-thich.php";


require "../layout.php";



?>
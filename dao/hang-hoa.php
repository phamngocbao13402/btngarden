<?php
    require_once 'pdo.php';

    function hang_hoa_insert($ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $so_luot_xem, $ngay_nhap, $so_luong, $mo_ta) {
        $sql = "INSERT INTO hang_hoa(ten_hh, don_gia, giam_gia, hinh, ma_loai, so_luot_xem, ngay_nhap, so_luong, mo_ta) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        pdo_execute($sql, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $so_luot_xem, $ngay_nhap, $so_luong, $mo_ta);
    } 

    function hang_hoa_update($ma_hh, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $so_luot_xem, $ngay_nhap, $so_luong, $mo_ta) {
        $sql = "UPDATE hang_hoa SET ten_hh=?, don_gia=?, giam_gia=?, hinh=?, ma_loai=?, so_luot_xem=?, mo_ta=?, so_luong=?, ngay_nhap=?  WHERE ma_hh=?";
        pdo_execute($sql, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $so_luot_xem, $mo_ta, $so_luong, $ngay_nhap, $ma_hh);
    }

    function hang_hoa_delete($ma_hh) {
        $sql = "DELETE FROM hang_hoa WHERE ma_hh=?";
        if(is_array($ma_hh)) {
            foreach($ma_hh as $ma) {
                pdo_execute($sql, $ma);
            }
        }
        else {
            pdo_execute($sql, $ma_hh);
        }

    }

    function hang_hoa_select_all() {
        $sql = "SELECT * FROM hang_hoa";
        return pdo_query($sql);
    }

    function hang_hoa_select_all_home() {
        $sql = "SELECT * FROM hang_hoa ORDER BY ma_hh DESC LIMIT 9";
        return pdo_query($sql);
    }

    function hang_hoa_select_by_id($ma_hh) {
        $sql = "SELECT * FROM hang_hoa WHERE ma_hh=?";
        return pdo_query_one($sql, $ma_hh);
    }

     function hang_hoa_exist($ma_hh) {
        $sql = "SELECT count(*) FROM hang_hoa WHERE ma_hh=?";
        return pdo_query_value($sql, $ma_hh) > 0;
    }


    // Ngoài ra, còn có một số hàm và chức năng khác như sau

    // Sau khi xem một lượt chi tiết thì số lượt xem cộng thêm 1
    function hang_hoa_tang_so_luot_xem($ma_hh) {
        $sql = "UPDATE hang_hoa SET so_luot_xem = so_luot_xem + 1 WHERE ma_hh=?";
        pdo_execute($sql, $ma_hh);
    }

    // Chọn ra 10 sản phẩm có lượt xem lớn nhất
    function hang_hoa_select_top_10($ma_loai) {
        $sql = "SELECT * FROM hang_hoa WHERE so_luot_xem >= 0 AND so_luong>0 AND ma_loai=? ORDER BY so_luot_xem DESC LIMIT 0, 5";
        return pdo_query($sql, $ma_loai);
    }


    // Chọn tất cả sản phẩm theo một loại nào đó
    function hang_hoa_select_by_loai($ma_loai) {
        $sql = "SELECT * FROM hang_hoa WHERE ma_loai=?";
        return pdo_query($sql, $ma_loai);
    }

    //Tìm những hàng hóa với một từ khóa nào đó
    function hang_hoa_select_keyword($keyword) {
        $sql = "SELECT hh.* FROM hang_hoa hh"
               .  " JOIN loai lo ON lo.ma_loai = hh.ma_loai"
               .  " WHERE ten_hh LIKE ? OR ten_loai LIKE ?";
        return pdo_query($sql, '%'.$keyword.'%', '%'.$keyword.'%');

     }
    // function hang_hoa_select_keyword($keyword) {
    //     $sql = "SELECT * FROM hang_hoa WHERE ten_hh LIKE ?";
    //     return pdo_query($sql, '%'.$keyword.'%');

    // }

    function hang_hoa_select_page() {
        global $SL_PER_PAGE;
        if(!isset($_SESSION['page_no'])) {
            $_SESSION['page_no'] = 0;
        }
        if(!isset($_SESSION['page_count'])) {
            $row_count = pdo_query_value("SELECT count(*) FROM hang_hoa");
            $_SESSION['page_count'] = ceil($row_count / 10.0);
        }
        if(exist_param("page_no")) {
            $_SESSION['page_no'] = $_REQUEST['page_no'];
        }
        if($_SESSION['page_no'] < 0) {
            $_SESSION['page_no'] = $_SESSION['page_count'] - 1;
        }
        if($_SESSION['page_no'] >= $_SESSION['page_count']) {
            $_SESSION['page_no'] = 0;
        }
        $sta = $SL_PER_PAGE * $_SESSION['page_no'];
        $sql = "SELECT * FROM hang_hoa ORDER BY ma_hh LIMIT ".$sta.", 10";
        return pdo_query($sql);
    }
 
?>
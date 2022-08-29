<?php

    require_once 'pdo.php';

    // Thêm hoá đơn
    function hoa_don_insert($tong_tien,$ngay_dat_hang,$ghi_chu,$tinh_trang,$ship,$dia_chi,$ma_kh){
        $sql = "INSERT INTO hoa_don(ma_hd, tong_tien, ngay_dat_hang, ghi_chu, tinh_trang, ship,dia_chi, ma_kh) VALUES ('',?,?,?,?,?,?,?)";
        $ma_hd = pdo_execute_lastInsertId($sql,$tong_tien,$ngay_dat_hang,$ghi_chu,$tinh_trang,$ship,$dia_chi,$ma_kh);
        foreach ($_SESSION['myCart'] as $cart) {
            $sql2 = "INSERT INTO hoa_don_chi_tiet(ma_hd,ma_hh,so_luong,don_gia) VALUES (?,?,?,?)";
            pdo_execute($sql2, $ma_hd, $cart[5], $cart[3], $cart[2]);
        }
        
    }
    // Thêm hoá đơn chi tiết
    function hoa_don_chi_tiet_insert($ma_hd,$ma_hh,$so_luong,$don_gia){
        $sql = "INSERT INTO hoa_don_chi_tiet(ma_hd,ma_hh,so_luong,don_gia) VALUES (?, ?, ?, ?)";
        pdo_execute($sql,$ma_hd,$ma_hh,$so_luong,$don_gia);
    }

    // update hóa đơn
    function hoa_don_update($ma_hd,$tong_tien,$ngay_dat_hang,$ghi_chu,$tinh_trang,$ship,$ma_kh){
        $sql = "UPDATE hoa_don set tong_tien=?, ngay_dat_hang=?, ghi_chu=?, tinh_trang=?, ship=?, ma_kh=? where ma_hd=?";
        pdo_execute($sql,$tong_tien,$ngay_dat_hang,$ghi_chu,$tinh_trang,$ship,$ma_kh,$ma_hd);
    }

    //Huỷ đơn hàng
    function hoa_don_update_client($ma_hd){
        $sql = "UPDATE hoa_don set tinh_trang=3 where ma_hd=?";
        pdo_execute($sql, $ma_hd);
    }

    // detele hóa đơn
    function hoa_don_delete($ma_hd){
        $sql = "DELETE FROM hoa_don where ma_hd=?";
        if(is_array($ma_hd)){
            foreach($ma_hd as $ma){
                pdo_execute($sql, $ma);
            }
        }
        else{
            pdo_execute($sql, $ma_hd);
        }
    }
    //Hiển thị thông tin khách hàng của hoá đơn
    function khach_hang_select_by_hd($ma_hd){
        $sql = "SELECT kh.* FROM hoa_don hd JOIN khach_hang kh ON hd.ma_kh = kh.ma_kh where ma_hd=?";
        return pdo_query_one($sql, $ma_hd);
    }
    // hiển thị all hóa đơn
    function hoa_don_select_all(){
        $sql = "SELECT * FROM hoa_don";
        return pdo_query($sql);
    }

    // hiển thị hóa đơn theo mã hóa đơn
    function hoa_don_select_by_id($ma_hd){
        $sql = "SELECT * FROM hoa_don where ma_hd=?";
        return pdo_query_one($sql, $ma_hd);
    }

    function hoa_don_select_all_by_id($ma_hd){
        $sql = "SELECT * FROM hoa_don_chi_tiet where ma_hd=?";
        return pdo_query($sql, $ma_hd);
    }

    function hoa_don_select_by_kh($ma_kh){
        $sql = "SELECT * FROM hoa_don where ma_kh=?";
        return pdo_query($sql, $ma_kh);
    }

    //Cập nhật số lượng sau khi thanh toán
    function hang_hoa_giam_so_luong($ma_hh, $so_luong_update){
        $sql3="UPDATE hang_hoa SET so_luong = so_luong - ? Where ma_hh=?";
        pdo_execute($sql3, $so_luong_update,$ma_hh);
    }
    
    function hoa_don_exist($ma_hd){
        $sql = "SELECT count(*) FROM hoa_don where $ma_hd=?";
        return pdo_query_value($sql, $ma_hd) > 0;
    }

    // show tất cả các hóa đơn thuộc khách hàng nào đó
    function hoa_don_select_by_khach_hang($ma_hd){
        $sql = "SELECT d.*, h.ma_hh from hoa_don_chi_tiet d join hang_hoa h on h.ma_hh=d.ma_hh where d.ma_hd=?";
        return pdo_query($sql, $ma_hd);
    }

    function hoa_don_chi_tiet_delete($ma_hd){
        $sql = "DELETE FROM hoa_don_chi_tiet where ma_hd=?";
        if(is_array($ma_hd)){
            foreach($ma_hd as $ma){
                pdo_execute($sql, $ma);
            }
        }
        else{
            pdo_execute($sql, $ma_hd);
        }
    }

?>
<?php

    require_once "pdo.php";

    // Thêm mới khách hàng
    function khach_hang_insert($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro, $so_dien_thoai, $dia_chi){
        $sql = "INSERT INTO khach_hang(ma_kh, mat_khau, ho_ten, email, hinh, kich_hoat, vai_tro, so_dien_thoai, dia_chi) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        pdo_execute($sql, $ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro, $so_dien_thoai, $dia_chi);
    }

    function khach_hang_insert1($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro, $so_dien_thoai, $dia_chi){
        $sql = "INSERT INTO khach_hang(ma_kh, mat_khau, ho_ten, email, hinh, kich_hoat, vai_tro, so_dien_thoai, dia_chi) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        pdo_execute($sql, $ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat==0, $vai_tro==1, $so_dien_thoai, $dia_chi);
    }

    // Cập nhật khách hàng
    function khach_hang_update($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro, $so_dien_thoai, $dia_chi){
        $sql = "UPDATE khach_hang SET mat_khau=?, ho_ten=?, email=?, hinh=?, kich_hoat=?, vai_tro=?, so_dien_thoai=?, dia_chi=? WHERE ma_kh=?";
        pdo_execute($sql, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro, $so_dien_thoai, $dia_chi, $ma_kh);
    }

    // Xoá khách hàng
    function khach_hang_delete($ma_kh){
        $sql = "DELETE FROM khach_hang WHERE ma_kh=?";
        if(is_array($ma_kh)){
            foreach ($ma_kh as $ma) {
                pdo_execute($sql, $ma);
            }
        }
        else {
            pdo_execute($sql, $ma_kh);
        }
    }

    // function khach_hang_delete($ma_kh){
    //     $sql = "DELETE FROM khach_hang WHERE ma_kh=?";
    //     if(is_array($ma_kh)){
    //         foreach ($ma_kh as $ma) {
    //             pdo_execute($sql, $ma);
    //         }
    //     }
    //     else{
    //         pdo_execute($sql, $ma_kh);
    //     }
    // }
    // function binh_luan_delete_kh($ma_kh) {
    //     $sql = "DELETE FROM binh_luan INNER JOIN khach_hang ON binh_luan.ma_kh = khach_hang.ma_kh WHERE binh_luan.ma_kh=?";
    //     if(is_array($ma_kh)) {
    //         foreach($ma_kh as $ma) {
    //             pdo_execute($sql, $ma);
    //         }
    //     }
    //     else {
    //         pdo_execute($sql, $ma_kh);
    //     }      
    // }
    // Chọn tất cả các khách hàng có trong Database
    function khach_hang_select_all(){
        $sql = "SELECT * FROM khach_hang";
        return pdo_query($sql);
    }

    // Chọn thông tin cụ thể của khách hàng nào đó
    function khach_hang_select_by_id($ma_kh) {
        $sql = "SELECT * FROM khach_hang WHERE ma_kh=?";
        return pdo_query_one($sql, $ma_kh);
    }

    // Kiểm tra sự tồn tại của khách hàng
    function khach_hang_exist($ma_kh) {
        $sql = "SELECT count(*) FROM khach_hang WHERE ma_kh=?";
        return pdo_query_value($sql, $ma_kh) > 0;
    }

    // Kiểm tra khách hàng này theo thuộc loại khách hàng thường hay nhân viên quản trị 
    function khach_select_by_role($vai_tro) {
        $sql = "SELECT * FROM khach_hang WHERE vai_tro = ?";
        return pdo_query($sql, $vai_tro);
    }

    // Thay đổi mật khẩu của khách hàng
    function khach_hang_change_password($ma_kh, $mat_khau_moi) {
    $sql = "UPDATE khach_hang SET mat_khau=? WHERE ma_kh=?";
    pdo_execute($sql, $mat_khau_moi, $ma_kh);
    }

?>
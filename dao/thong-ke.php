<?php 
    require_once 'pdo.php';
    
    function thong_ke_hang_hoa() {
    $sql = "SELECT lo.ma_loai, lo.ten_loai,"
            . " COUNT(*) so_luong,"
            . " MIN(hh.don_gia) gia_min,"
            . " MAX(hh.don_gia) gia_max,"
            . " AVG(hh.don_gia) gia_avg"
            . " FROM hang_hoa hh "
            . " JOIN loai lo ON lo.ma_loai=hh.ma_loai "
            . " GROUP BY lo.ma_loai, lo.ten_loai";
    return pdo_query($sql);
}

function thong_ke_binh_luan() {
    $sql = "SELECT hh.ma_hh, hh.ten_hh,"
            . " COUNT(*) so_luong,"
            . " MIN(bl.ngay_bl) cu_nhat,"
            . " MAX(bl.ngay_bl) moi_nhat"
            . " FROM binh_luan bl"
            . " JOIN hang_hoa hh ON hh.ma_hh=bl.ma_hh "
            . " GROUP BY hh.ma_hh, hh.ten_hh"
            . " HAVING so_luong > 0 ORDER BY so_luong DESC";
    return pdo_query($sql);
}

function thong_ke_hh_kho() {
    $sql = "SELECT *"
            //. " COUNT(*) so_luong,"
            . " FROM hang_hoa";
            //. " GROUP BY ma_hh, hh.ten_hh"
            //. " HAVING so_luong > 0 ORDER BY so_luong DESC";
    return pdo_query($sql);
}


function thong_ke_hang_hoa_ban_chay1(){
    $sql = "SELECT SUM(hdct.so_luong) sl, hh.*, l.ten_loai FROM "
    ."hoa_don_chi_tiet hdct JOIN hang_hoa hh ON hdct.ma_hh = hh.ma_hh JOIN loai l ON hh.ma_loai = l.ma_loai GROUP BY hh.ma_hh "
    ."ORDER BY sl DESC";
    return pdo_query($sql);
}

function thong_ke_hang_hoa_ban_chay2(){
    $sql = "SELECT SUM(hdct.so_luong) sl, hh.*, l.ten_loai FROM "
    ."hoa_don_chi_tiet hdct JOIN hang_hoa hh ON hdct.ma_hh = hh.ma_hh JOIN loai l ON hh.ma_loai = l.ma_loai GROUP BY hh.ma_hh "
    ."ORDER BY sl ASC";
    return pdo_query($sql);
}

function thong_ke_doanh_thu_theo_ngay(){
    $sql = "SELECT SUM(hdct.so_luong) sl, COUNT(hd.ma_hd) so_hd, hh.*, hd.* FROM "
    ."hoa_don_chi_tiet hdct JOIN hang_hoa hh ON hdct.ma_hh = hh.ma_hh JOIN loai l ON hh.ma_loai = l.ma_loai JOIN hoa_don hd ON hd.ma_hd = hdct.ma_hd GROUP BY hd.ngay_dat_hang";
    // ."ORDER BY hd.ngay_dat_hang DESC";
    return pdo_query($sql);
}

function thong_ke_doanh_thu_theo_thang(){
    $sql = "SELECT SUM(hdct.so_luong) sl, COUNT(hd.ma_hd) so_hd, hh.*, hd.*, YEAR(hd.ngay_dat_hang) nam, month(hd.ngay_dat_hang) thang FROM "
    ."hoa_don_chi_tiet hdct JOIN hang_hoa hh ON hdct.ma_hh = hh.ma_hh JOIN loai l ON hh.ma_loai = l.ma_loai JOIN hoa_don hd ON hd.ma_hd = hdct.ma_hd GROUP BY month(hd.ngay_dat_hang), year(hd.ngay_dat_hang)";
    // ."ORDER BY hd.ngay_dat_hang DESC";
    return pdo_query($sql);
}

function thong_ke_doanh_thu_theo_nam(){
    $sql = "SELECT SUM(hdct.so_luong) sl, COUNT(hd.ma_hd) so_hd, hh.*, hd.*, YEAR(hd.ngay_dat_hang) ngay_dat_hang FROM "
    ."hoa_don_chi_tiet hdct JOIN hang_hoa hh ON hdct.ma_hh = hh.ma_hh JOIN loai l ON hh.ma_loai = l.ma_loai JOIN hoa_don hd ON hd.ma_hd = hdct.ma_hd GROUP BY YEAR(hd.ngay_dat_hang)";
    // ."ORDER BY hd.ngay_dat_hang DESC";
    return pdo_query($sql);
}







// Trang chính

function thong_ke_don_hang(){
    $sql = "SELECT COUNT(*) so_luong FROM hoa_don";
    return pdo_query($sql);
}

function thong_ke_khach_hang(){
    $sql = "SELECT COUNT(*) so_luong FROM khach_hang";
    return pdo_query($sql);
}

function thong_ke_loai_hang(){
    $sql = "SELECT COUNT(*) so_luong FROM loai";
    return pdo_query($sql);
}

function thong_ke_binh_luan2(){
    $sql = "SELECT COUNT(*) so_luong FROM binh_luan";
    return pdo_query($sql);
}

function thong_ke_hang_hoa2(){
    $sql = "SELECT COUNT(*) so_luong FROM hang_hoa";
    return pdo_query($sql);
}








$conn = mysqli_connect("localhost", "root", "","btngarden");
    if (! $conn) {

    die("Connection failed" . mysqli_connect_error());
    }
    
    else {
    
    mysqli_select_db($conn, "binh_luan");
    
    }

?>
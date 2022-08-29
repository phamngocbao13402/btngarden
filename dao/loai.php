<?php
// Thêm loại 
function loai_insert($ten_loai,$hinh) {  // lấy (tham số là biến) $ten_loai để chèn vào insert into
    $sql = "INSERT INTO loai(ten_loai,hinh) VALUES (?,?)"; // biến để đưa vào dấu chấm hỏi sẽ lấy từ form
    pdo_execute($sql, $ten_loai, $hinh); // $ten_loai trong hàm execute sẽ thay thế cho dấu chấm hỏi
}

// Cập nhật tên loại
function loai_update($ma_loai, $ten_loai, $hinh) {
    $sql = "UPDATE loai SET ten_loai=?, hinh=? WHERE ma_loai=?";
    pdo_execute($sql, $ten_loai, $hinh, $ma_loai);
}

// xóa một hoặc nhiều loại
    function loai_delete($ma_loai) {
        $sql = "DELETE FROM loai WHERE ma_loai=?";
        if(is_array($ma_loai)) {
            foreach($ma_loai as $ma) {
                pdo_execute($sql, $ma);
            }
        }
        else {
            pdo_execute($sql, $ma_loai);
        }
    }

// Truy vấn tất cả các loại
function loai_select_all() {
    $sql = "SELECT * FROM loai ORDER BY ten_loai"; 
    return pdo_query($sql);

}

// Truy vấn loại theo mã
function loai_select_by_id($ma_loai) {
    $sql = "SELECT * FROM loai WHERE ma_loai=?";
    return pdo_query_one($sql, $ma_loai);
}

// kiểm tra sự tồn tại của một loại
function loai_exist($ma_loai) {
    $sql = "SELECT count(*) FROM loai WHERE ma_loai = ?";
    return pdo_query_value($sql, $ma_loai) > 0;
}
?>
<?php

// Phân trang loại
    $conn = mysqli_connect("localhost", "root", "","btngarden");
    if (! $conn) {

    die("Connection failed" . mysqli_connect_error());
    }
    
    else {
    
    mysqli_select_db($conn, "loai");
    
    }

?>

<?php

// Phân trang sản phẩm
    $conn = mysqli_connect("localhost", "root", "","btngarden");
    if (! $conn) {

    die("Connection failed" . mysqli_connect_error());
    }
    
    else {
    
    mysqli_select_db($conn, "hang_hoa");
    
    }

?>

<?php

// Phân trang khách hàng
    $conn = mysqli_connect("localhost", "root", "","btngarden");
    if (! $conn) {

    die("Connection failed" . mysqli_connect_error());
    }
    
    else {
    
    mysqli_select_db($conn, "khach_hang");
    
    }

?>

<?php

// Phân trang đơn hàng
    $conn = mysqli_connect("localhost", "root", "","btngarden");
    if (! $conn) {

    die("Connection failed" . mysqli_connect_error());
    }
    
    else {
    
    mysqli_select_db($conn, "hoa_don");
    
    }

?>




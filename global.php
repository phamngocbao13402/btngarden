<?php
session_start();
/*
* Định nghĩa các url cần thiết được sử dụng trong website
*/
$ROOT_URL = "/btngarden";
$CONTENT_URL = "$ROOT_URL/content";
$ADMIN_URL = "$ROOT_URL/admin";
$SITE_URL = "$ROOT_URL/site";
$UPLOAD_URL = "../../uploaded/";

$CONTENT_URL_USER = "$ROOT_URL/content/images/users/";
$CONTENT_URL_TYPES = "$ROOT_URL/content/images/types/";
/*
* Định nghĩa đường dẫn chứa ảnh sử dụng trong upload
*/
$IMAGE_DIR = $_SERVER["DOCUMENT_ROOT"] . "$ROOT_URL/content/images";

/*
* 2 biến toàn cục cần thiết để chia sẻ giữa controller và view
*/
$VIEW_NAME = "index.php";
$MESSAGE = "";

/*
* Kiểm tra sự tồn tại của một tham số trong request 
* @param string $fieldname là tên tham số cần kiểm tra
* @return boolean true tồn tại
*/
function exist_param($fieldname){
    return array_key_exists($fieldname, $_REQUEST);
}

/*
* Lưu file upload vào thư mục
* @paramstring $fieldname là tên trường file
* @paramstring $target_dir thư mục lưu file
* @return tênfile upload

*/
function save_file($fieldname, $target_dir){
    $file_uploaded= $_FILES[$fieldname];
    $file_name= basename($file_uploaded["name"]);
    $target_path= $target_dir. $file_name;
    move_uploaded_file($file_uploaded["tmp_name"], $target_path);
    return $file_name;
}

/*
* Tạocookie
* @paramstring $name là tên cookie
* @paramstring $value là giá trị cookie
* @paramint$day là số ngày tồn tại cookie
*/
function add_cookie($name, $value, $day){
    setcookie($name, $value, time() + (86400 * $day), "/");
}

/*
* Xóacookie* @paramstring $name là tên cookie
*/
function delete_cookie($name){
    add_cookie($name, "", -1);
}

/*
* Đọc giá trị cookie
* @paramstring $name là tên cookie
* @return string giá trị của cookie
*/
function get_cookie($name){
    return $_COOKIE[$name]??'';
}

/*
* Kiểm tra đăng nhập và vai trò sử dụng.
* Các php trong admin hoặc php yêu cầu phải được đăng nhập mới được
* phép sử dụng thì cần thiết phải gọi hàm này trước*
*/
function check_login(){
    global $SITE_URL;
    if(isset($_SESSION['user'])){
        if($_SESSION['user']['vai_tro'] == 1){
            return;
        }
        if(strpos($_SERVER["REQUEST_URI"], '/admin/') == FALSE){
            return;
        }
    }
        $_SESSION['request_uri'] = $_SERVER["REQUEST_URI"];
        header("location: $SITE_URL/tai-khoan/dang-nhap.php");
}
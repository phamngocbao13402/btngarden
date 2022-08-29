<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../content/css/login.css">
    <link rel="stylesheet" href="css/fontawesome-free-5.15.3-web/fontawesome-free-5.15.3-web/css/all.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>

	<style type="text/css">
		.error {
			color: red;
			margin-right: 10px;
            font-size: 13px;
            line-height: 10px;
		}
	</style>
    <script type="text/javascript">
        $().ready(function() {
        $("#form_register").validate({
            onfocusout: false,
            onkeyup: false,
            onclick: false,
            rules: {
                "ma_kh": {
                    required: true,
                    maxlength: 15,
                    minlength: 6
                },
                "ho_ten": {
                    required: true,
                    minlength: 2
                },
                "mat_khau": {
                    required: true,
                    minlength: 8
                },
                "mat_khau2": {
                    equalTo: "#mat_khau",
                    required: true,
                    minlength: 8
                    
                }, 
                "email": {
                    required: true,
                    email: true
                },
                "so_dien_thoai": {
                    required: true,
                    maxlength: 10,
                    minlength: 10
                },
                "dia_chi": {
                    required: true
                },
                "up_hinh": {
                    required: true,
                    extension: "jpg|jpeg|png|gif"
                }
                
            },
            messages: {
                "ma_kh": {
                    required: "Không được để trống",
                    maxlength: "Chỉ nhập tối đa 15 ký tự",
                    minlength: "Hãy nhập ít nhất 6 ký tự"
                },
                "mat_khau": {
				required: "Không được để trống",
				minlength: "Hãy nhập ít nhất 8 ký tự"
                },
                "mat_khau2": {
                    equalTo: "Hai mật khẩu phải giống nhau",
                    required: "Không được để trống",
                    minlength: "Hãy nhập ít nhất 8 ký tự"
                },
                "ho_ten": {
                    required: "Không được để trống",
                    minlength: "Hãy nhập ít nhất 2 ký tự"
                },
                "email": {
                    required: "Không được để trống",
                    email: "Phải nhập đúng định dạng email"
                },
                "so_dien_thoai": {
                    required:  "Không được để trống",
                    maxlength:  "Hãy nhập đủ 10 số",
                    minlength:  "Hãy nhập đủ 10 số"
                },
                "dia_chi": {
                    required:  "Không được để trống"
                },
                "up_hinh": {
                    required: "Không được để trống",
                    extension: "Phải đúng định dạng của hình ảnh"
                }
            }
        });
    });
	</script>
</head>
<body>
<div class="container" id="container">
  <div class="form-container sign-in-container">
 
  <form action="dang-ky.php" method="post" enctype="multipart/form-data" id="form_register">
  <?php

if(isset($MESSAGE) && strlen($MESSAGE) > 0){ 
// dùng isset để kiểm tra biến $MESSAGE có tồn tại hay không
// dùng hàm strlen để kiểm tra độ dài ký tự có lớn hơn 0 hay không
// sử dụng echo để in ra các biến $MESSAGE
    echo "<span style='color:red;'>$MESSAGE</span>";
}
?>
    <h1 style="color:orangered">Tạo tài khoản</h1>
    <input type="text" placeholder="Tên" name="ho_ten" required id="ho_ten"/>
    <input type="text" placeholder="Tên đăng nhập" name="ma_kh"required id="ma_kh"/>
    <input type="password" placeholder="Mật khẩu" name="mat_khau" required id="mat_khau"/>
    <input type="password" placeholder="Nhập lại mật khẩu" name="mat_khau2" required id="mat_khau2"/>
    <input type="text" placeholder="Số điện thoại" name="so_dien_thoai"required id="so_dien_thoai"/>
    <input type="email" placeholder="Email" name="email" required id="email"/>
    <input name="vai_tro" value="0" type="hidden" id="vai_tro">
    <!-- <input name="hinh" type="file" value="user.png"> -->
    <input name="kich_hoat" value="0" type="hidden" id="kich_hoat">
    <input type="hidden" placeholder="Địa chỉ" name="dia_chi"required id="dia_chi"/>
      <!-- <label for="">Ảnh</label>
      <input type="file" name="" id="" placeholder="Tên"> -->
      <!--  -->
    
      <!-- <input type="submit" name="dangky" class="btn btn-info" value="Đăng ký" /> -->
      <button  type="submit" name="btn_register" class="btn btn-info btn-success" value="Login">Đăng ký</button>
    </form>
  </div>
  <div class="overlay-container">
    <div class="overlay">
      <div class="overlay-panel overlay-left">
        <h1>Hello, Friend!</h1>
        <p>Nhập thông tin của bạn và bắt đầu hành trình với chúng tôi</p>
        <button class="ghost" id="signIn">Đăng ký</button>
      </div>
      <div class="overlay-panel overlay-right">
        <h1>Welcome Back!</h1>
        <p>Để giữ kết nối với chúng tôi, vui lòng đăng nhập bằng thông tin cá nhân của bạn</p>
        <button class="ghost" id="signUp" ><a href="dang-nhap.php">Đăng nhập</a></button>
      </div>
    </div>
  </div>
</div>
<!-- <script src="js/login.js"></script> -->
</body>
</html>
<!DOCTYPE html>
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
				maxlength: 15
			},
			"mat_khau": {
				required: true,
				minlength: 8
			}
		},
		messages: {
			"ma_kh": {
				required: "Không được để trống",
				maxlength: "Hãy nhập tối đa 15 ký tự"
			},
			"mat_khau": {
				required: "Không được để trống",
				minlength: "Hãy nhập ít nhất 8 ký tự"
			}
		}
	});
});
	</script>
</head>
<body>
<div class="container" id="container">
  <!-- <div class="form-container sign-up-container">

  </div> -->
  <div class="form-container sign-in-container">
    <form method="post" action="<?=$SITE_URL?>/tai-khoan/dang-nhap.php" id="form_register">
    <?php  
                // if(isset($message))  
                // {  
                //      echo '<label class="text-danger">'.$message.'</label>';  
                // }  
                if(isset($MESSAGE) && strlen($MESSAGE) > 0){ 
                  // dùng isset để kiểm tra biến $MESSAGE có tồn tại hay không
                  // dùng hàm strlen để kiểm tra độ dài ký tự có lớn hơn 0 hay không
                  // sử dụng echo để in ra các biến $MESSAGE
                      echo "<span style='color:red;'>$MESSAGE</span>";
                  }
                ?>  
      <h1 style="color:orangered">Đăng nhập</h1>
      <div class="social-container">
        <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
        <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
      </div>
      <span>Hoặc sử dụng tài khoản của bạn</span>
      <input type="text" placeholder="Tên đăng nhập" name="ma_kh" required value="<?=$ma_kh?>"/>
      <input type="password" placeholder="Mật khẩu" name="mat_khau" required value="<?=$mat_khau?>"/>
      <label class="checkbox-inline" >
						<input name="ghi_nho" type="checkbox" style="width:auto; text-align:left;" checked>
						Ghi nhớ tài khoản?
					</label>
      <a href="<?=$SITE_URL?>/tai-khoan/quen-mk.php" style="margin-top: 30px;">Quên mật khẩu?</a>
      <button  type="submit" name="btn_login" class="btn btn-info btn-success">Đăng nhập</button>
      <a href="<?=$SITE_URL?>/trang-chinh/"><i class="fas fa-arrow-circle-left"></i> Quay lại trang chủ</a>
    </form>
  </div>
  <div class="overlay-container">
    <div class="overlay">
      <div class="overlay-panel overlay-left">
        <h1>Welcome Back!</h1>
        <p>Để giữ kết nối với chúng tôi, vui lòng đăng nhập bằng thông tin cá nhân của bạn</p>
        <button class="ghost" id="signIn">Đăng nhập</button>
      </div>
      <div class="overlay-panel overlay-right">
        <h1>Hello, Friend!</h1>
        <p>Nhập thông tin của bạn và bắt đầu hành trình với chúng tôi</p>
        <button class="ghost" id="signUp"><a href="dang-ky.php">Đăng ký</a></button>
      </div>
    </div>
  </div>
</div>
<!-- <script src="js/login.js"></script> -->
</body>
</html>
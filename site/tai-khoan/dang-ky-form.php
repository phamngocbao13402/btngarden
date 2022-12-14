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
                    required: "Kh??ng ???????c ????? tr???ng",
                    maxlength: "Ch??? nh???p t???i ??a 15 k?? t???",
                    minlength: "H??y nh???p ??t nh???t 6 k?? t???"
                },
                "mat_khau": {
				required: "Kh??ng ???????c ????? tr???ng",
				minlength: "H??y nh???p ??t nh???t 8 k?? t???"
                },
                "mat_khau2": {
                    equalTo: "Hai m???t kh???u ph???i gi???ng nhau",
                    required: "Kh??ng ???????c ????? tr???ng",
                    minlength: "H??y nh???p ??t nh???t 8 k?? t???"
                },
                "ho_ten": {
                    required: "Kh??ng ???????c ????? tr???ng",
                    minlength: "H??y nh???p ??t nh???t 2 k?? t???"
                },
                "email": {
                    required: "Kh??ng ???????c ????? tr???ng",
                    email: "Ph???i nh???p ????ng ?????nh d???ng email"
                },
                "so_dien_thoai": {
                    required:  "Kh??ng ???????c ????? tr???ng",
                    maxlength:  "H??y nh???p ????? 10 s???",
                    minlength:  "H??y nh???p ????? 10 s???"
                },
                "dia_chi": {
                    required:  "Kh??ng ???????c ????? tr???ng"
                },
                "up_hinh": {
                    required: "Kh??ng ???????c ????? tr???ng",
                    extension: "Ph???i ????ng ?????nh d???ng c???a h??nh ???nh"
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
// d??ng isset ????? ki???m tra bi???n $MESSAGE c?? t???n t???i hay kh??ng
// d??ng h??m strlen ????? ki???m tra ????? d??i k?? t??? c?? l???n h??n 0 hay kh??ng
// s??? d???ng echo ????? in ra c??c bi???n $MESSAGE
    echo "<span style='color:red;'>$MESSAGE</span>";
}
?>
    <h1 style="color:orangered">T???o t??i kho???n</h1>
    <input type="text" placeholder="T??n" name="ho_ten" required id="ho_ten"/>
    <input type="text" placeholder="T??n ????ng nh???p" name="ma_kh"required id="ma_kh"/>
    <input type="password" placeholder="M???t kh???u" name="mat_khau" required id="mat_khau"/>
    <input type="password" placeholder="Nh???p l???i m???t kh???u" name="mat_khau2" required id="mat_khau2"/>
    <input type="text" placeholder="S??? ??i???n tho???i" name="so_dien_thoai"required id="so_dien_thoai"/>
    <input type="email" placeholder="Email" name="email" required id="email"/>
    <input name="vai_tro" value="0" type="hidden" id="vai_tro">
    <!-- <input name="hinh" type="file" value="user.png"> -->
    <input name="kich_hoat" value="0" type="hidden" id="kich_hoat">
    <input type="hidden" placeholder="?????a ch???" name="dia_chi"required id="dia_chi"/>
      <!-- <label for="">???nh</label>
      <input type="file" name="" id="" placeholder="T??n"> -->
      <!--  -->
    
      <!-- <input type="submit" name="dangky" class="btn btn-info" value="????ng k??" /> -->
      <button  type="submit" name="btn_register" class="btn btn-info btn-success" value="Login">????ng k??</button>
    </form>
  </div>
  <div class="overlay-container">
    <div class="overlay">
      <div class="overlay-panel overlay-left">
        <h1>Hello, Friend!</h1>
        <p>Nh???p th??ng tin c???a b???n v?? b???t ?????u h??nh tr??nh v???i ch??ng t??i</p>
        <button class="ghost" id="signIn">????ng k??</button>
      </div>
      <div class="overlay-panel overlay-right">
        <h1>Welcome Back!</h1>
        <p>????? gi??? k???t n???i v???i ch??ng t??i, vui l??ng ????ng nh???p b???ng th??ng tin c?? nh??n c???a b???n</p>
        <button class="ghost" id="signUp" ><a href="dang-nhap.php">????ng nh???p</a></button>
      </div>
    </div>
  </div>
</div>
<!-- <script src="js/login.js"></script> -->
</body>
</html>
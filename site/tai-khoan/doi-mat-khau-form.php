<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="form-validation.css">
    <style>
        .info p {
    text-align:center;
    color: #999;
    text-transform:none;
    font-weight:600;
    font-size:15px;
    margin-top:2px
  }
  
  .info i {
    color:#F6AA93;
  }
  form h1 {
    font-size: 18px;
    background: #F6AA93 none repeat scroll 0% 0%;
    color: rgb(255, 255, 255);
    padding: 22px 25px;
    border-radius: 5px 5px 0px 0px;
    margin: auto;
    text-shadow: none; 
    text-align:left
  }
  
  form {
    border-radius: 5px;
    max-width: 700px;
    width:100%;
    margin: 5% auto;
    background-color: #FFFFFF;
    overflow: hidden;
  }
  
  p span {
    color: #F00;
  }
  
  p {
    margin: 0px;
    font-weight: 500;
    line-height: 2;
    color:#333;
  }
  
  h1 {
    text-align:center; 
    color: #666;
    text-shadow: 1px 1px 0px #FFF;
    margin:50px 0px 0px 0px
  }
  
  input {
    border-radius: 0px 5px 5px 0px;
    border: 1px solid #eee;
    margin-bottom: 15px;
    width: 75%;
    height: 40px;
    float: left;
    padding: 0px 15px;
  }
  
  a {
    text-decoration:inherit
  }
  
  textarea {
    border-radius: 0px 5px 5px 0px;
    border: 1px solid #EEE;
    margin: 0;
    width: 75%;
    height: 130px; 
    float: left;
    padding: 0px 15px;
  }
  
  .form-group {
    overflow: hidden;
    clear: both;
    width: 70%;
    margin: 0 auto;
  }
  
  .icon-case {
    width: 35px;
    float: left;
    border-radius: 5px 0px 0px 5px;
    background:#eeeeee;
    height:42px;
    position: relative;
    text-align: center;
    line-height:40px;
  }
  
  i {
    color:#555;
  }
  
  .contentform {
    padding: 40px 40px;
  }
  
  .bouton-contact{
    background-color: #4caf4e;
    color: #FFF;
    text-align: center;
    width: 100%;
    border:0;
    padding: 17px 25px;
    border-radius: 0px 0px 5px 5px;
    cursor: pointer;
    margin-top: 40px;
    font-size: 18px;
  }
  
  .leftcontact {
    width:49.5%; 
    float:left;
    border-right: 1px dotted #CCC;
    box-sizing: border-box;
    padding: 0px 15px 0px 0px;
  }
  
  .rightcontact {
    width:49.5%;
    float:right;
    box-sizing: border-box;
    padding: 0px 0px 0px 15px;
  }
  
  .validation {
    display:none;
    margin: 0 0 10px;
    font-weight:400;
    font-size:13px;
    color: #DE5959;
  }
  
  #sendmessage {
    border:1px solid #fff;
    display:none;
    text-align:center;
    margin:10px 0;
    font-weight:600;
    margin-bottom:30px;
    background-color: #EBF6E0;
    color: #5F9025;
    border: 1px solid #B3DC82;
    padding: 13px 40px 13px 18px;
    border-radius: 3px;
    box-shadow: 0px 1px 1px 0px rgba(0, 0, 0, 0.03);
  }
  
  #sendmessage.show,.show  {
    display:block;
  }
  input{
      width: 90%;
  }
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

                "mat_khau": {
                    required: true,
                    minlength: 8
                },
                "mat_khau2": {
                    required: true,
                    minlength: 8
                },
                "mat_khau3": {
                    equalTo: "#mat_khau2",
                    required: true,
                    minlength: 8
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
                required: "Không được để trống",
                minlength: "Hãy nhập ít nhất 8 ký tự"
                },
                "mat_khau3": {
                    equalTo: "Hai mật khẩu phải giống nhau",
                    required: "Không được để trống",
                    minlength: "Hãy nhập ít nhất 8 ký tự"
                }
            }
        });
    });
	</script>
</head>
<body>
    <div class="header">
        <span class="header_text">
            ĐỔI MẬT KHẨU
            <span class="gachchan">
                <i class="fab fa-pagelines"></i>
            </span>
        </span>
    </div>
    <form style="box-shadow: 0 0 5px #1cab02;" action="doi-mat-khau.php" method="post" enctype="multipart/form-data" id="form_register">      
        <div class="contentform">
            <?php
            if(strlen($MESSAGE)){
                echo "<h5>$MESSAGE</h5>";
               
            }
            ?>
            <div class="form-group">
                <p>Tên đăng nhập (Mã khách hàng)<span>*</span></p>
                <span class="icon-case"><i class="fa fa-male"></i></span>
                <input type="text" name="ma_kh" id="ma_kh" value="<?=$_SESSION["user"]['ma_kh']?>" readonly />
                <div class="validation"></div>
            </div>  
      <div class="form-group">
              <p>Mật khẩu cũ <span>*</span></p>	
              <span class="icon-case"><i class="fas fa-key"></i></span>
                  <input type="password" name="mat_khau" id="mat_khau" required/>
                  <div class="validation"></div>
        </div>	
        <div class="form-group">
            <p>Mật khẩu mới <span>*</span></p>	
            <span class="icon-case"><i class="fas fa-key"></i></span>
            <input type="password" name="mat_khau2" id="mat_khau2" required/>
            <div class="validation"></div>
        </div>
        <div class="form-group">
            <p>Nhập lại mật khẩu <span>*</span></p>	
            <span class="icon-case"><i class="fas fa-key"></i></span>
            <input type="password" name="mat_khau3" id="mat_khau3" required/>
            <div class="validation"></div>
        </div>

      </div>
    <button type="submit" class="bouton-contact" name="btn_change" style="font-weight:bolder;">Cập nhật</button>
      
    </form>	
    
    
    </body>
    </html>
</body>
</html>
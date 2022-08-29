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
    max-width:900px;
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
    padding: 40px 30px;
  }
  
  .bouton-contact{
    background-color: #81BDA4;
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
    </style>
</head>
<body>
    <div class="header">
        <span class="header_text">
            THÔNG TIN TÀI KHOẢN
            <span class="gachchan">
                <i class="fab fa-pagelines"></i>
            </span>
        </span>
    </div>
    <form style="box-shadow: 0 0 5px #1cab02;" action="cap-nhat-tk.php" method="post" enctype="multipart/form-data">
        
          
      <div class="contentform">
      <?php

if(strlen($MESSAGE)){
     echo "<h5>$MESSAGE</h5>";
}
?>
    
    
          <div class="leftcontact">
                    <div class="form-group">
                      <p>Tên đăng nhập (Mã khách hàng)<span>*</span></p>
                      <span class="icon-case"><i class="fa fa-male"></i></span>
                          <input type="text" name="ma_kh" id="nom" data-rule="required" readonly value="<?=$_SESSION["user"]['ma_kh']?>"/>
                  <div class="validation"></div>
         </div> 
    
              <div class="form-group">
              <p>Họ và tên <span>*</span></p>
              <span class="icon-case"><i class="fa fa-user"></i></span>
                  <input type="text" name="ho_ten" id="prenom" data-rule="required" value="<?=$_SESSION["user"]['ho_ten']?>"/>
                  <div class="validation"></div>
              </div>
    
              <div class="form-group">
              <p>Ảnh đại diện <span>*</span></p>
              <input name="hinh" type="file" class="form-control" required>
              <img src="<?=$CONTENT_URL?>/images/users/<?=$_SESSION["user"]['hinh']?>" alt="" style="width:30%;">
              <div class="validation"></div>
              </div>	
    <input type="hidden" name="mat_khau" value="<?=$_SESSION["user"]['mat_khau']?>">
    <input type="hidden" name="vai_tro" value="<?=$_SESSION["user"]['vai_tro']?>">
    <input type="hidden" name="kich_hoat" value="<?=$_SESSION["user"]['kich_hoat']?>">
    
    
      </div>
    
      <div class="rightcontact">	
    
      <div class="form-group">
              <p>E-mail <span>*</span></p>	
              <span class="icon-case"><i class="fas fa-envelope"></i></span>
                  <input type="email" name="email" id="email" data-rule="email" value="<?=$_SESSION["user"]['email']?>"/>
                  <div class="validation"></div>
              </div>	
    
              <div class="form-group">
              <p>Số điện thoại <span>*</span></p>
              <span class="icon-case"><i class="fas fa-phone"></i></span>
                  <input type="text" name="so_dien_thoai" id="society" data-rule="required" value="<?=$_SESSION["user"]['so_dien_thoai']?>"/>
                  <div class="validation"></div>
              </div>
          
              <div class="form-group">
              <p>Địa chỉ <span>*</span></p>
              <span class="icon-case"><i class="fas fa-map-marker-alt"></i></i></span>
                  <textarea name="dia_chi" rows="14" data-rule="required" ><?php echo $_SESSION["user"]['dia_chi']?></textarea>
                  <div class="validation"></div>
              </div>	
      </div>
      </div>
    <button type="submit" class="bouton-contact" name="btn_update">Cập nhật</button>
      
    </form>	
    
    
    </body>
    </html>
</body>
</html>
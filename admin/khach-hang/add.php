<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
                <li><a href="index.php"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li><a href="view_khachhang.php">Quản lý khách hàng</a></li>
				<li class="active">Thêm khách hàng</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Thêm Khách Hàng</h1>
			</div>
        </div><!--/.row-->
        <?php
    if(isset($MESSAGE) && strlen($MESSAGE) > 0){ 
        // dùng isset để kiểm tra biến $MESSAGE có tồn tại hay không
        // dùng hàm strlen để kiểm tra độ dài ký tự có lớn hơn 0 hay không
        // sử dụng echo để in ra các biến $MESSAGE
            echo "<h5>$MESSAGE</h5>";
        }
?>
        <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="col-md-6">
                                <form method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Mã khách hàng (Tên đăng nhập)</label>
                                        <input required name="ma_kh" class="form-control" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label>Họ và tên</label>
                                        <input required name="ho_ten" class="form-control" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label>Mật khẩu</label>
                                        <input required name="mat_khau" type="password" minlength="8" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Xác nhận mật khẩu</label>
                                        <input required name="mat_khau2" type="password" minlength="8" class="form-control">
                                    </div>                                                         
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input required name="email" type="email" class="form-control"> 
                                    </div>
                                    <div class="form-group">
                                        <label>Ảnh đại diện</label>
                                        <input name="hinh" type="file" class="form-control" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    
                                    <div class="form-group">
                                        <label>Số Điện Thoại</label>
                                        <input required name="so_dien_thoai" type="text" class="form-control"></input>
                                    </div>
                                    <div class="form-group">
                                        <label>Địa chỉ</label><br>
                                        <textarea name="dia_chi" id="" cols="70" rows="3"></textarea>
                                    </div>
                                    <div class="form-group">
                                    <label>KÍCH HOẠT?</label>
                                        <div class="form-control">
                                            <label class="radio-inline"><input name="kich_hoat" value="0" type="radio">Chưa kích hoạt</label>
                                            <label class="radio-inline"><input name="kich_hoat" value="1" type="radio" checked>Kích hoạt</label>       
                                        </div>
                                    </div>

                                    <div class="form-group">
                                            <label>VAI TRÒ?</label>
                                            <div class="form-control">
                                                <label class="radio-inline"><input name="vai_tro" value="0" type="radio"checked>Khách hàng</label>
                                                <label class="radio-inline"><input name="vai_tro" value="1" type="radio" >Nhân viên</label>
                                            </div>
                                    </div>
                                    <br>
                                    <div class="form-group col-sm-12">
                                        <button name="btn_insert" class="btn btn-success">Thêm mới</button>
                                        <button type="reset" class="btn btn-success">Nhập lại</button>
                                        <a href="index.php?btn_list" class="btn btn-success">Danh sách</a>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>
        </div>
    <!-- /.col-->
</div><!-- /.row -->
		
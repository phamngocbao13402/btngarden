<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li><a href="">Quản lý khách hàng</a></li>
				<li class="active">Cập nhật thông tin khách hàng</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Cập nhật thông tin khách hàng</h1>
			</div>
        </div><!--/.row-->
        <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="col-md-6">
                            <form action="index.php" method="post" enctype="multipart/form-data">                                              
                                <div class="form-group">
                                    <label>Mã khác hàng (Tên đăng nhập)</label>
                                    <input required name="ma_kh" value="<?=$ma_kh?>" readonly class="form-control" placeholder="">
                                </div>
                                                                
                                <div class="form-group">
                                    <label>Họ và tên</label>
                                    <input required name="ho_ten" value="<?=$ho_ten?>" type="text" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Mật khẩu</label>
                                    <input required name="mat_khau" value="<?=$mat_khau?>" type="password" min="0" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Email</label>
                                    <input required name="email" value="<?=$email?>" type="email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Hình ảnh</label>
                                    <input name="hinh" type="file"  value="<?=$hinh?>">
                                    <!-- <input name="up_hinh" type="file" class="form-control"> -->
                                    <img src="../../content/images/users/<?=$hinh?>" alt="" width="100px">
                                  
                                </div>
                                </div>
                                <div class="col-md-6">
                                

                                <div class="form-group">
                                    <label>Số Điện Thoại</label>
                                    <input required name="so_dien_thoai" value="<?=$so_dien_thoai?>" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Địa chỉ</label>
                                    <textarea name="dia_chi"class="form-control" rows="4" required><?=$dia_chi?></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Kích hoạt</label>
                                    <div class="form-control">
                                        <?php if ($kich_hoat == 0) {?>
                                        <label class="radio-inline"><input name="kich_hoat" value="0" type="radio" checked>Chưa kích hoạt</label>
                                        <label class="radio-inline"><input name="kich_hoat" value="1" type="radio" >Kích hoạt</label>   
                                    <?php }else { ?>
                                        <label class="radio-inline"><input name="kich_hoat" value="0" type="radio">Chưa kích hoạt</label>
                                        <label class="radio-inline"><input name="kich_hoat" value="1" type="radio" checked>Kích hoạt</label>   
                                    <?php } ?>    
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Vai trò</label>
                                    
                                        <div class="form-control">
                                        <?php if ($vai_tro == 0) {?>
                                            <label class="radio-inline"><input name="vai_tro" value="0" type="radio" checked>Khách hàng</label>
                                        <label class="radio-inline"><input name="vai_tro" value="1" type="radio" >Nhân viên</label>  
                                    <?php }else { ?>
                                        <label class="radio-inline"><input name="vai_tro" value="0" type="radio">Khách hàng</label>
                                        <label class="radio-inline"><input name="vai_tro" value="1" type="radio" checked>Nhân viên</label>   
                                    <?php } ?>    
                                    </div>
                                    
                                </div>
                                <!-- <div class="form-group">
                                    <label>Cấp</label>
                                    <select name="role" class="form-control">
                                        <?php echo $rs['role'] ?>
                                        <?php if($rs['role']=='0'){?>
                                            <option value="0">khách hàng</option>
                                            <option value="1">admin</option>
                                        <?php }  else {?>
                                            <option value="1">admin</option>
                                            <option value="0">khách hàng</option>
                                        <?php }?>
                                    </select>
                                </div>  -->
                                     
                                
                                </div>
                            </div>
                                
                            </div>
                            <div class="row">
                                <div class="form-group col-sm-12">
                                    <button name="btn_update" class="btn btn-success">Cập nhật</button>
                                    <button type="reset" class="btn btn-success">Nhập lại</button>
                                    <button name="index.php" class="btn btn-success">Thêm mới</button>
                                    <a href="index.php?btn_list" class="btn btn-success">Danh sách</a>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div><!-- /.col-->
            </div><!-- /.row -->		
	</div>
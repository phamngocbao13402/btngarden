<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
                <li><a href="<?=$ADMIN_URL ?>/trang-chinh"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li><a href="">Quản lý sản phẩm</a></li>
				<li class="active">Sửa sản phẩm</li>
			</ol>
		</div>
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Cập nhật sản phẩm</h1>
			</div>
        </div>
        <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="col-md-6">
                                <form action="index.php" method="POST" enctype="multipart/form-data">
                                
                                <div class="form-group">
                                    <label>Mã hàng hóa</label>
                                    <input name="ma_hh" class="form-control" readonly value="<?=$ma_hh?>">
                                </div>

                                <div class="form-group">
                                    <label>Tên sản phẩm</label>
                                    <input required name="ten_hh" value="<?=$ten_hh?>" class="form-control" placeholder="">
                                </div>
                                                                
                                <div class="form-group">
                                    <label>Giá sản phẩm</label>
                                    <input required name="don_gia" value="<?=$don_gia?>" type="number" min="0" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Giảm giá</label>
                                    <input required name="giam_gia" value="<?=$giam_gia?>" type="number" min="0" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Số lượt xem</label>
                                    <input readonly name="so_luot_xem" value="<?=$so_luot_xem?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Số lượng sản phẩm</label>
                                    <input required name="so_luong" type="number" min="0" class="form-control" value="<?=$so_luong?>">
                                </div>    
                        </div>
                        <div class="col-md-6"> 
                                <div class="form-group">
                                    <label>Mô tả</label>
                                    <textarea name="mo_ta"class="form-control" rows="4" required><?=$mo_ta?></textarea>
                                </div>   
                                <div class="form-group">
                                    <label>Ngày nhập</label>
                                    <input required name="ngay_nhap" value=<?=$ngay_nhap?> class="form-control datepicker" type="date" >
                                </div>                            
                                <div class="form-group">
                                    <label>Ảnh Sản Phẩm</label>
                                    <input type="file" name="hinh" value=<?=$hinh?> class="form-control"/>
                                    <img width="100"src="../../content/images/products/<?=$hinh?>">
                                    <br>
                                </div>
                                <div class="form-group">
                                    <label>Mã Phân Loại</label>
                                    <select name="ma_loai" class="form-control">
                                        <?php 
                                            foreach($loai_hang as $loai_hang) {
                                                extract($loai_hang);
                                                echo '<option value="'.$ma_loai.'">'.$ten_loai.'</option>';
                                            }
                                        ?>
                                    </select>
                                </div>
                                <button name="btn_update" type="submit" class="btn btn-success">Cập nhật</button>
                                <button type="submit" class="btn btn-success">Nhập lại</button>
                                <a href="index.php" class="btn btn-success">Thêm mới</a>
                                <a href="index.php?btn_list" class="btn btn-success">Danh sách</a>
                        </form>
                        </div>
                    </div>
                </div>
            </div>		
	</div>
</body>
</html>
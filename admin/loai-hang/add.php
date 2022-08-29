<!-- THÊM MỚI LOẠI HÀNG</h1> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    
</head>
<body>
    <?php 
        if(strlen($MESSAGE)) {
            echo "<h5 class='alert alert-warning'>$MESSAGE</h5>";
        }
    ?>
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li><a href="">Quản lý danh mục</a></li>
				<li class="active">Thêm danh mục</li>
			</ol>
		</div>
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Thêm danh mục</h1>
			</div>
        </div>
        <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="col-md-6">
                                <form action="index.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Mã loại</label>
                                    <input required name="ma_loai" value="Auto number" class="form-control" placeholder="" readonly>
                                </div>
                                                                
                                <div class="form-group">
                                    <label>Tên Loại</label>
                                    <input required name="ten_loai" type="text" class="form-control" id="ten_loai">
                                </div>
                                <div class="form-group">
                                    <label>Hình ảnh</label>
                                    <input type="file" name="hinh" class="form-control"/>
                                    <br>
                                </div>
                                <button name="btn_insert" type="submit" class="btn btn-success">Thêm mới</button>
                                <button name="reset" type="reset" class="btn btn-success">Nhập lại</button>
                                <a href="index.php?btn_list" class="btn btn-success">Danh sách</a>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>		
	</div>
</body>
</html>

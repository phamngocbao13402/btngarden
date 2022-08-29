<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
            <li><a href="">Quản lý sản phẩm</a></li>
            <li class="active">Cập nhật hóa đơn</li>
        </ol>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Cập nhật hóa đơn</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-md-6">
                        <form action="index.php" method="post" enctype="multipart/form-data">
                            
                                <div class="form-group">
                                    <label>MÃ HÓA ĐƠN</label>
                                    <input name="ma_hd" class="form-control" readonly value="<?=$ma_hd?>">
                                </div>

                                <div class="form-group">
                                    <label>TỔNG TIỀN</label>
                                    <input name="tong_tien" class="form-control" readonly value="<?=$tong_tien?>">
                                </div>

                                <div class="form-group">
                                    <label>NGÀY ĐẶT HÀNG</label>
                                    <input name="ngay_dat_hang" class="form-control" readonly value="<?=$ngay_dat_hang?>">
                                </div>
                            </div>
                            <div class="col-md-6">       
                            
                                <div class="form-group">
                                    <label>GHI CHÚ</label>
                                    <input name="ghi_chu" class="form-control" readonly value="<?=$ghi_chu?>">
                                </div>
                                <div class="form-group">
                                    <label>GHI CHÚ</label>
                                    <input name="ship" class="form-control" readonly value="<?=$ship?>">
                                </div>

                                <div class="form-group">
                                    <label>TÌNH TRẠNG</label>
                                    <select class="form-control" name="tinh_trang">
                                            <option value="0">Đợi xử lý</option>
                                            <option value="1">Đang giao hàng</option>
                                            <option value="2">Đã giao hàng</option>
                                    </select>
                                </div>
                            
                                <div class="form-group">
                                    <label>MÃ KHÁCH HÀNG</label>
                                    <input name="ma_kh" class="form-control" readonly value="<?=$ma_kh?>">
                                </div>
                                </div>


                            <div class="row">
                                <div class="form-group col-sm-12">
                                    <button name="btn_update" class="btn btn-success">Cập nhật</button>
                                    <button type="reset" class="btn btn-success">Nhập lại</button>
                                    <a href="index.php?btn_list" class="btn btn-success">Danh sách</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
                            
    </div>
</body>
</html>

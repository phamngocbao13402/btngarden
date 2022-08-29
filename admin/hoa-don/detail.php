<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="<?=$ADMIN_URL ?>/trang-chinh"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Chi tiết đơn hàng</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Chi tiết đơn hàng</h1>
			</div>
		</div><!--/.row-->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body">
                        <h3>Thông tin khách hàng</h3>
                    <table class="table" style="text-align:center;" data-toolbar="#toolbar"
                            data-toggle="table">
                            <thead class="alert-success">
                                <tr>
                                    <th style="text-align:center;">Tên khách hàng</th>
                                    <th style="text-align:center;">Số điện thoại</th>
                                    <th style="text-align:center;">Địa chỉ</th>
                                    <th style="text-align:center;">Email</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php 
                                    extract($kh);
                                ?>
                                <tr>
                                    <td>
                                        <?= $ho_ten ?>
                                    </td>
                                    <td><?=$so_dien_thoai?></td>
                                    <td><?=$dia_chi?></td>
                                    <td><?=$email?></td>
                                    

                                </tr>
                                 
                            </tbody>

                        </table>
                    <form action="index.php?ma_hd=<?=$ma_hd?>" method="post">
                    <h3>Thông tin sản phẩm</h3>
                        <table class="table" style="text-align:center;" data-toolbar="#toolbar"
                            data-toggle="table">
                            <thead class="alert-success">
                                <tr>
                                    <th style="text-align:center;">STT</th>
                                    <th style="text-align:center;">MÃ ĐƠN HÀNG</th>
                                    <th style="text-align:center;">MÃ SẢN PHẨM</th>
                                    <th style="text-align:center;">SỐ LƯỢNG</th>
                                    <th style="text-align:center;">ĐƠN GIÁ</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php 
                                    $stt=0;

                                    foreach($items as $item) {
                                        extract($item);
                                    $stt+=1;
                                ?>
                                <tr>
                                    <td>
                                        <?= $stt ?>
                                    </td>
                                    <td><?=$ma_hd?></td>
                                    <td><?=$ma_hh?></td>
                                    <td><?=$so_luong?></td>
                                    <td><?=number_format($don_gia)?> ₫</td>

                                </tr>
                                <?php 
                                    }
                                ?>
                            </tbody>

                        </table>
                    </form>
                    </div>
				</div>
			</div>
		</div><!--/.row-->	
	</div>	<!--/.main-->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-table.js"></script>	
</body>
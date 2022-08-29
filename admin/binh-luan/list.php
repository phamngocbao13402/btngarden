<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="<?=$ADMIN_URL ?>/trang-chinh"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Danh sách bình luận</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Danh sách bình luận</h1>
			</div>
		</div><!--/.row-->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body">
                        <table 
                            data-toolbar="#toolbar"
                            data-toggle="table">

						    <thead>
						    <tr style="background-color: green">
						        <th>Hàng hóa</th>
						        <th>Số lượng bình luận</th>
                                <th>Mới nhất</th>
                                <th>Cũ nhất</th>                        
                                <th></th>
						    </tr>
                            </thead>
                            <tbody  style="text-align:center;">
                                    <?php 
                                        foreach($items as $item) {
                                            extract($item);
                                    ?>
                                    <tr>
                                        <td><?=$ten_hh?></td>
                                        <td><?=$so_luong?></td>
                                        <td><?=$cu_nhat?></td>
                                        <td><?=$moi_nhat?></td>
                                        <td class="form-group">
                                            <a href="<?=$ADMIN_URL?>/binh-luan/index.php?ma_hh=<?=$ma_hh?>" class="btn btn-primary">Chi tiết</a>
                                        </td>
                                    </tr>
                                        <?php }?>

                                 </tbody>
						</table>
                    </div>
				</div>
			</div>
		</div><!--/.row-->	
	</div>	<!--/.main-->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-table.js"></script>	
</body>
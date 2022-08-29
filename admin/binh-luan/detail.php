<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="index.php"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Chi tiết bình luận</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Chi tiết bình luận</h1>
			</div>
		</div><!--/.row-->
		<div class="row">
        <h4 style="text-align: center">HÀNG HÓA: <?=$items[0]['ten_hh']?></h4> 
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body">
                        <table 
                            data-toolbar="#toolbar"
                            data-toggle="table">

						    <thead>
						    <tr>
						        <th>Nội dung</th>
						        <th>Ngày bình luận</th>
                                <th>Người bình luận</th>                     
                                <th></th>
						    </tr>
                            </thead>
                            <tbody  style="text-align:center;">
                                    <?php 
                                        foreach($items as $item) {
                                            extract($item);
                                    ?>
                                    <tr>
                                        <th>
                                            <input type="checkbox" name="ma_bl[]" value="<?=$ma_bl?>">
                                        </th>
                                        <td><?=$noi_dung?></td>
                                        <td><?=$ngay_bl?></td>
                                        <td><?=$ma_kh?></td>
                                        <td class="form-group">
                                            <a onclick="return confirm('Bạn chắc muốn xóa chứ?')" href="index.php?btn_delete&ma_bl=<?=$ma_bl?>&ma_hh=<?=$ma_hh?>" class="btn btn-danger">Xóa</a>
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
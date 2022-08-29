<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="index.php"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Danh sách danh mục</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Danh sách danh mục</h1>
			</div>
		</div><!--/.row-->
		<div id="toolbar" class="btn-group">
            <a href="index.php" class="btn btn-success">
                <i class="glyphicon glyphicon-plus"></i> Thêm danh mục
            </a>
        </div>
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body">
                        <table 
                            data-toolbar="#toolbar"
                            data-toggle="table" style="text-align:center">

						    <thead>
						    <tr>
                                <th style="text-align: center">STT</th>
						        <th style="text-align: center">Mã loại</th>
                                <th style="text-align: center">Tên loại</th>
                                <th style="text-align: center">Hình ảnh</th>                        
                                <th colspan="2" style="text-align: center">Hành động</th>
						    </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $stt=0;
                                    foreach($items as $item){
                                    extract($item);
                                    $stt+=1;
                                ?>
                                <tr>
                                    <td><?=$stt?></td>
                                    <td><?=$ma_loai?></td>
                                    <td><?=$ten_loai?></td>
                                    <td><img src="../../content/images/types/<?=$hinh?>" alt="" width="100px"></td>
                                    <td>
                                        <a href="index.php?btn_edit&ma_loai=<?=$ma_loai?>" class="btn btn-primary"></i>Sửa</a>
                                        <a onclick="return confirm('Bạn chắc muốn xóa chứ?')" href="index.php?btn_delete&ma_loai=<?=$ma_loai?>" class="btn btn-danger"></i>Xóa</a>
                                    </td>
                                </tr>
                                <?php 
                                }
                                ?>

                                 </tbody>
						</table>
                    </div>
				</div>
			</div>
		</div><!--/.row-->	
	</div>	<!--/.main-->
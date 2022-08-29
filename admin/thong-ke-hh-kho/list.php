<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Thống kê hàng hoá trong kho</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Thống kê hàng hoá trong kho</h1>
			</div>
		</div><!--/.row-->
		<div id="toolbar" class="btn-group">
            <!-- <button name="btn_insert" class="btn btn-default">Thêm mới</button> -->
        </div>
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body">
					<form action="index.php" method="post">
                        <table 
                            data-toolbar="#toolbar"
                            data-toggle="table" style="text-align: center">

						    <thead>
                            <tr><th style="text-align: center">STT</th>
                                <th style="text-align: center">MÃ HÀNG HOÁ</th>
                                <th style="text-align: center">HÀNG HOÁ</th>
                                <th style="text-align: center">SỐ LƯỢNG</th>
                                <th style="text-align: center">LOẠI HÀNG</th>
                                
                            </tr>
                            </thead>
                            <tbody>
								<?php
                                    $stt=0;
                                        foreach ($items as $item) {
											extract($item);
											$stt+=1;
                                    ?>
                                    <tr>
										<!-- <td>
											<input type="checkbox" class="checkbox" name="ma_kh[]" >
										</td> -->
										<td><?=$stt?></td>
                                        <td><?=$ma_hh?></td>
                                        <td><?=$ten_hh?></td>
                                        <td><?=$so_luong?></td>
                                        <td><?=$ma_loai?></td>
                                    </tr>
                                    <?php }?>   
                            </tbody>
						</table>
                       
					</form>
                    <br>
                    <div class="form-group">
                            <a href="index.php?chart" class="btn btn-success">Xem biểu đồ</a>
                        </div>
                    </div>
				</div>
			</div>
		</div>	
	</div>


<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Thống kê doanh thu theo thời gian</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Thống kê doanh thu theo thời gian</h1>
			</div>
		</div><!--/.row-->
		<div id="toolbar" class="btn-group">
         <form action="index.php" method="post">
            <select name="ban_cham" id="" style="padding: 5px; border-radius:5px;">

            <?php if ($load==0) { ?>
                <option value="0" selected>Thống kê theo ngày</option>
                <option value="1" >Thống kê theo tháng</option>
                <option value="2" >Thống kê theo năm</option>
            <?php }elseif ($load==1) { ?>
                <option value="0">Thống kê theo ngày</option>
                <option value="1" selected>Thống kê theo tháng</option>
                <option value="2" >Thống kê theo năm</option>
            <?php }elseif ($load==2) { ?>
                <option value="0" >Thống kê theo ngày</option>
                <option value="1" >Thống kê theo tháng</option>
                <option value="2" selected>Thống kê theo năm</option>
            <?php } ?>
                
            </select>
            <button type="submit" name="chon" class="btn btn-primary">Chọn</button>
            </form>   
            <!-- <a href="index.php?btn_detail&ma_hd=<?=$ma_hd?>" class="btn btn-success btn-sm">nhanh nhất</a>
            <a href="index.php?btn_detail&cma_hd=<?=$ma_hd?>" class="btn btn-success btn-sm">chậm nhất</a> -->
            
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
                                <th style="text-align: center">THỜI GIAN</th>
                                <th style="text-align: center">SỐ LƯỢNG</th>
                                <th style="text-align: center">SỐ HOÁ ĐƠN</th>
                                <th style="text-align: center">TỔNG GIÁ</th>
                                <th style="text-align: center">GIẢM GIÁ</th>
                                <th style="text-align: center">DOANH THU THỰC</th>
                            </tr>
                            </thead>
                            <tbody>
								<?php
                                    $stt=0;
                                        foreach ($items as $item) {
											extract($item);
											$stt+=1;
                                        if(isset($thang)||isset($nam)){
                                    ?>
                                    <tr>
										<!-- <td>
											<input type="checkbox" class="checkbox" name="ma_kh[]" >
										</td> -->
										<td><?=$stt?></td>
                                        <td><?=$thang?>/<?=$nam?></td>
                                        <td><?=$sl?></td>
                                        <td><?=$so_hd?></td>                                       
                                        <td><?=number_format($sl*$don_gia)?>₫</td>
                                        <td><?=number_format($sl*($don_gia*$giam_gia/100))?>₫</td>
                                        <td><?=number_format($sl*$don_gia-($sl*($don_gia*$giam_gia/100)))?>₫</td>
                                    </tr>
                                    <?php }else{?>
                                        <tr>
										<!-- <td>
											<input type="checkbox" class="checkbox" name="ma_kh[]" >
										</td> -->
										<td><?=$stt?></td>
                                        <td><?=$ngay_dat_hang?></td>
                                        <td><?=$sl?></td>
                                        <td><?=$so_hd?></td>                                       
                                        <td><?=number_format($sl*$don_gia)?>₫</td>
                                        <td><?=number_format($sl*($don_gia*$giam_gia/100))?>₫</td>
                                        <td><?=number_format($sl*$don_gia-($sl*($don_gia*$giam_gia/100)))?>₫</td>
                                    </tr>  
                                    <?php } }?>    
                            </tbody>
						</table>
                       
					</form>
                    <br>
				</div>
			</div>
		</div>	
	</div>


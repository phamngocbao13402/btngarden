<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Danh sách khách hàng</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Danh sách khách hàng</h1>
			</div>
		</div><!--/.row-->
		<div id="toolbar" class="btn-group">
            <a href="index.php" class="btn btn-success">
                <i class="glyphicon glyphicon-plus"></i> Thêm Khách Hàng
            </a>
        </div>
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body">
					<!-- <form action="index.php" method="post"> -->
                        <table 
                            data-toolbar="#toolbar"
                            data-toggle="table">

						    <thead>
						    <tr>
								<!-- <th style="text-align: center"></th> -->
						        <th style="text-align: center">STT</th>
						        <th style="text-align: center">Tên đăng nhập</th>
						        
                                <th style="text-align: center">Họ và tên</th>
                                <th style="text-align: center">Email</th>   
								<th style="text-align: center">Hình</th>                                
                                <th style="text-align: center">Số Điện Thoại</th>     
								<th style="text-align: center">Địa chỉ</th>                      
                                <th style="text-align: center">Vai trò</th>  
                                <th style="text-align: center">Kích hoạt</th>                          
                                <th colspan="2" style="text-align: center">Hành động</th>
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
										<td><?=$ma_kh?></td>
										<td><?=$ho_ten?></td>
										<td><?=$email?></td>
										<td><img src="../../content/images/users/<?=$hinh?>" alt="" width="100px"></td>
										<!-- <td><?=$hinh?></td> -->
										<td><?=$so_dien_thoai?></td>
										<td><?=$dia_chi?></td>
										<td><?=($vai_tro == 1)?"Nhân viên":"Khách hàng";?></td>
										<td><?=($kich_hoat == 1)?"Kích hoạt":"Chưa kích hoạt";?></td>
										<!-- <td>
											<a href="index.php?btn_edit&ma_kh=<?=$ma_kh?>" class="btn btn-default btn-sm">Sửa</a>
											<a href="index.php?btn_delete&ma_kh=<?=$ma_kh?>" class="btn btn-default btn-sm">Xóa</a>
										</td> -->
										<td class="form-group" style="text-align: center">
										<a href="index.php?btn_edit&ma_kh=<?=$ma_kh?>" class="btn btn-primary">Sửa</a>
                                        </td>
                                        <td class="form-group" style="text-align: center">
                                            <a onclick="return confirm('Bạn chắc muốn xóa chứ?')" href="index.php?btn_delete&ma_kh=<?=$ma_kh?>" class="btn btn-danger">Xoá</a>
                                        </td>
                                    </tr>
                                    <?php }?>   
                            </tbody>
						</table>
					<!-- </form> -->
                    </div>
				</div>
			</div>
		</div>	
	</div>
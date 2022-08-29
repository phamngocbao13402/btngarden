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
	<h1 style="text-align: center; margin-top: 100px; margin-bottom: 50px; color: green;">CÔNG CỤ QUẢN TRỊ WEBSITE</h1>
    <div class="panel panel-container align-index">
			<div class="row row-index">
				<div class="col-xs-6 col-md-3 col-lg-3 ">
					<div class="panel panel-red  border-right">
						<?php
							foreach ($items as $item) {
								extract($item);
						?>
						<div class=" padding-index"><em class="fa fa-xl fa-shopping-cart "></em>
							<div class="large"><?=$so_luong?></div>
							<div class="text-muted color-name">Đơn hàng</div>
						</div>
						<?php }?> 
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3">
					<div class="panel panel-blue  border-right">
					<?php
							foreach ($items3 as $item) {
								extract($item);
						?>
						<div class=" padding-index"><em class="fa fa-xl fa-comments "></em>
							<div class="large"><?=$so_luong?></div>
							<div class="text-muted color-name">Bình luận</div>
						</div>
						<?php }?> 
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3">
					<div class="panel panel-orange  border-right">
					<?php
							foreach ($items1 as $item) {
								extract($item);
						?>
						<div class=" padding-index"><em class="fa fa-xl fa-users "></em>
							<div class="large"><?=$so_luong?></div>
							<div class="text-muted color-name">Thành viên</div>
						</div>
						<?php }?> 
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3">
					<div class="panel panel-teal  ">
					<?php
							foreach ($items2 as $item) {
								extract($item);
						?>
						<div class=" padding-index"><i class="fa fa-leaf fa-xl"></i></em>
							<div class="large"><?=$so_luong?></div>
							<div class="text-muted color-name">Loại Hàng</div>
						</div>
						<?php }?> 
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3">
					<div class="panel panel-green  ">
					<?php
							foreach ($items4 as $item) {
								extract($item);
						?>
						<div class=" padding-index"><i class="fa fa-xl fa-tree" ></i></em>
							<div class="large"><?=$so_luong?></div>
							<div class="text-muted color-name">Hàng hoá</div>
						</div>
						<?php }?> 
					</div>
				</div>
			</div>
		</div>
        </div>
</body>
</html>

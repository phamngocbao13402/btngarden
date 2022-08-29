<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?=$SITE_URL?>/trang-chinh/"><span>BTN</span> Garden</a>
                        <!-- <a class="navbar-brand" href="#"><img src="<?=$CONTENT_URL?>/images/layout/logo.png" alt="" width="100px"></a> -->
                        <ul class="user-menu">
                            <li class="dropdown pull-right">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> admin <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <!-- <li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Hồ sơ</a></li> -->
                                    <!-- <li><a href="logout.php"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Đăng xuất</a></li> -->
                                </ul>
                            </li>
                        </ul>
                    </div>
                                    
                </div><!-- /.container-fluid -->
            </nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar" style="width:20%;">
			<div class="form-group logo">
			
                <a href="<?=$SITE_URL?>/trang-chinh/"><img src="<?=$CONTENT_URL?>/images/layout/logo.jpg" alt="" width="100px"></a>
			</div>
          
		<ul class="nav menu">
			<li><a href="<?=$ADMIN_URL ?>/trang-chinh"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Home</a></li>
            <li><a href="<?=$ADMIN_URL ?>/loai-hang"><svg class="glyph stroked chain"><use xlink:href="#stroked-chain"/></svg> Loại</a></li>
            <li><a href="<?=$ADMIN_URL ?>/hang-hoa"><svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg>Quản lý hàng hoá</a></li>
			<li><a href="<?=$ADMIN_URL ?>/khach-hang"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg>Quản lý khách hàng</a></li>
			<li><a href="<?=$ADMIN_URL ?>/hoa-don"><svg class="glyph stroked open folder"><use xlink:href="#stroked-open-folder"/></svg>Quản lý đơn hàng</a></li>
            <li><a href="<?=$ADMIN_URL ?>/binh-luan"><svg class="glyph stroked two messages"><use xlink:href="#stroked-two-messages"/></svg> Quản lý bình luận</a></li>
            <li><a><svg class="glyph stroked gear"><use xlink:href="#stroked-line-graph"></use></svg> Thống kê</a>
                <ul class="nav menu">
                    <li><a href="<?=$ADMIN_URL ?>/thong-ke"><svg class="glyph stroked twogear"></svg><i class="fas fa-seedling"></i> Thống kê sản phẩm</a></li>
                    <li><a href="<?=$ADMIN_URL ?>/thong-ke2"><svg class="glyph stroked two messages"></svg><i class="far fa-comment-dots"></i> Thống kê bình luận</a></li>
                    <li><a href="<?=$ADMIN_URL ?>/thong-ke-hh-kho"><svg class="glyph stroked two messages"></svg><i class="fab fa-accusoft"></i> Thống kê HH trong kho</a></li>
                    <li><a href="<?=$ADMIN_URL ?>/thong-ke-doanh-thu-theo-hh"><svg class="glyph stroked two messages"></svg><i class="fas fa-leaf"></i> Thống kê doanh thu theo mặt hàng</a></li>
                    <li><a href="<?=$ADMIN_URL ?>/thong-ke-doanh-thu-theo-tg"><svg class="glyph stroked two messages"></svg><i class="far fa-clock"></i> Thống kê doanh thu theo thời gian</a></li>

                </ul>        
            </li>
            

        </ul>

</div>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="index.php"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Danh sách sản phẩm</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Danh sách sản phẩm</h1>
			</div>
		</div><!--/.row-->
		<div id="toolbar" class="btn-group">
            <a href="index.php" class="btn btn-success">
                <i class="glyphicon glyphicon-plus"></i> Thêm sản phẩm
            </a>
        </div>
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body">
                        <table 
                            data-toolbar="#toolbar"
                            data-toggle="table">

						    <thead>
						    <tr>
						        <th style="text-align:center;">Mã HH</th>
						        <th style="text-align:center;">Tên HH</th>
                                <th style="text-align:center;">Ảnh SP</th>
                                <th style="text-align:center;">Giá SP</th>
                                <th style="text-align:center;">Giảm Giá</th>
                                <th style="text-align:center;">Số lượng</th>
                                <th style="text-align:center;">Số lượt xem</th>
                                <th style="text-align:center;">Loai HH</th>                         
                                <th style="text-align:center;">Ngày nhập</th>   
                                <th style="text-align:center;">Mô tả</th>                         
                                <th colspan="2" style="text-align:center;">Hành động</th>
						    </tr>
                            </thead>
                            <tbody>
                                <!-- phân trang -->
                                <?php
                                    
                                    require_once "../../dao/phantrang.php";
        
                                    $per_page_record = 8;
        
                                    if (isset($_GET["page"])) {
        
                                    $page  = $_GET["page"];
                                
                                    }
                                
                                    else {
                                
                                    $page=1;
                                
                                    }
                                
                                    $start_from = ($page-1) * $per_page_record;
                                
                                    $query = "SELECT * FROM hang_hoa LIMIT $start_from, $per_page_record";
                                
                                    $rs_result = mysqli_query ($conn, $query);
                                
                                ?>
                                    <!-- kết phân trang -->
                                    <tr style="text-align:center;">
                                        <?php

                                        while ($row = mysqli_fetch_array($rs_result)) {

                                        // Display each field of the records.

                                        ?>

                                        <td style="text-align:center;"><?php echo $row["ma_hh"]?></td>
                                        <td style="text-align:center;"><?php echo $row["ten_hh"]?></td>
                                        <td style="text-align: center"><img width="100"src="../../content/images/products/<?php echo $row["hinh"]?>"></td>
                                        <td style="text-align:center;"><?php echo number_format($row["don_gia"])?> VND</td>
                                        <td style="text-align:center;"><?php echo number_format($row["giam_gia"])?>%</td>
                                        <td style="text-align:center;"><?php echo $row["so_luong"]?></td>
                                        <td style="text-align:center;"><?php echo $row["so_luot_xem"]?></td>
                                        <td style="text-align:center;"><?php echo $row["ma_loai"]?></td>
                                        <td style="text-align:center;"><?php echo $row["ngay_nhap"]?></td>
                                        <td style="text-align:center;"><?php echo $row["mo_ta"]?></td>
                                        
                                        <td class="form-group">
                                            <a href="index.php?btn_edit&ma_hh=<?php echo $row["ma_hh"]?>" class="btn btn-primary">Sửa</a>
                                        </td>
                                        <td class="form-group">
                                            <a onclick="return confirm('Bạn chắc muốn xóa chứ?')" href="index.php?btn_delete&ma_hh=<?php echo $row["ma_hh"]?>" class="btn btn-danger">Xóa</a>
                                        </td>
                                    </tr>
                                        <?php }?>

                                 </tbody>
						</table>
                        <!-- Phân trang -->
                        <nav aria-label="Page navigation example" style="text-align: center">
                            <ul class="pagination">
                                <li class="page-item">
                                    <?php

                                        $query = "SELECT COUNT(*) FROM hang_hoa";

                                        $rs_result = mysqli_query($conn, $query);

                                        $row = mysqli_fetch_row($rs_result);

                                        $total_records = $row[0];

                                        echo "</br>";

                                        $total_pages = ceil($total_records / $per_page_record);

                                        // number of pages required

                                        $pagLink = "";

                                        if($page>=2){

                                            echo "<a href='index.php?btn_list&page=".($page-1)."'>  Prev </a>";

                                        }

                                        for ($i=1; $i<=$total_pages; $i++) {

                                            if ($i == $page) {

                                                $pagLink .= "<a class = 'active' href='index.php?btn_list&page=".$i."'>".$i." </a>";

                                            }

                                            else  {

                                                $pagLink .= "<a href='index.php?btn_list&page=".$i."'>".$i." </a>";

                                            }

                                        };

                                        echo $pagLink;

                                        if($page<$total_pages){

                                            echo "<a href='index.php?btn_list&page=".($page+1)."'>  Next </a>";

                                        }

                                    ?>
                                    <br>
                                    <br>
                                    <input id="page" type="number" min="1" max="<?php echo $total_pages?>"

                                    placeholder="<?php echo $page."/".$total_pages; ?>" required>

                                    <button class="" onClick="go2Page();">Go</button>

                                    <script>

                                    function go2Page(){

                                    var page = document.getElementById("page").value;

                                    page = ((page><?php echo $total_pages; ?>)?<?php echo $total_pages; ?>:(page<1)?1:page);

                                    window.location.href = 'index.php?btn_list&page='+page;

                                    }

                                    </script>
                                </li>
                            </ul>       
                        </nav>
                        <!-- kết phân trang -->
                    </div>
				</div>
			</div>
		</div><!--/.row-->	
	</div>	<!--/.main-->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-table.js"></script>	
</body>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="index.php"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Danh sách đơn hàng</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Danh sách đơn hàng</h1>
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
						    <tr>
						        <th style="text-align:center;">STT</th>
						        <th style="text-align:center;">Mã Hóa đơn</th>
						        <th style="text-align:center;">Tổng tiền</th>
                                <th style="text-align:center;">Thời gian</th>
                                <th style="text-align:center;">Ghi chú</th>
                                <th style="text-align:center;">Tình trạng</th>
                                <th style="text-align:center;">Phương thức vận chuyển</th>
                                <th style="text-align:center;">Mã khách hàng</th>              
                                <th colspan="3" style="text-align:center;">Hành động</th>
						    </tr>
                            </thead>
                            <tbody>
                                <!-- phân trang -->
                                <?php
                                    
                                    require_once "../../dao/phantrang.php";
        
                                    $per_page_record = 8;
                                    $stt = 0;
        
                                    if (isset($_GET["page"])) {
        
                                    $page  = $_GET["page"];
                                
                                    }
                                
                                    else {
                                
                                    $page=1;
                                
                                    }
                                
                                    $start_from = ($page-1) * $per_page_record;
                                
                                    $query = "SELECT * FROM hoa_don LIMIT $start_from, $per_page_record";
                                
                                    $rs_result = mysqli_query ($conn, $query);
                                
                                    ?>
                                    <!-- kết phân trang -->
                                    <?php

                                        while ($row = mysqli_fetch_array($rs_result)) {
                                            $stt += 1;
                                        // Display each field of the records.

                                    ?>
                                    <tr style="text-align:center;">
                                        <td><?php echo $stt ?></td>
                                        <td><?php echo $row["ma_hd"]?></td>
                                        <td><?php echo number_format($row["tong_tien"])?> VND</td>
                                        <td><?php echo $row["ngay_dat_hang"]?></td>
                                        <td><?php echo $row["ghi_chu"]?></td> 
                                        <td>
                                        <?php 
                                            if($row["ship"]==0){
                                                echo "Giao hàng hoả tốc";
                                            }else if($row["ship"]==1){
                                                echo "Giao hàng nhanh";
                                            }else {
                                                echo "Giao hàng tiết kiệm";
                                            }
                                        ?>
                                        </td> 
                                        <td>
                                        
                                        <?php 
                                            if($row["tinh_trang"]==0){
                                                echo "Đợi xử lý";
                                            }else if($row["tinh_trang"]==1){
                                                echo "Đang giao hàng";
                                            }else if ($row["tinh_trang"]==2) {
                                                echo "Đã giao hàng";
                                            }else{
                                                echo "Đã huỷ hàng";
                                            }
                                        ?>
                                    
                                        </td>
                                        <td><?php echo $row["ma_kh"]?></td>   
                                        <td class="form-group">
                                            <a href="index.php?btn_view&ma_hd=<?php echo $row["ma_hd"]?>" class="btn btn-success">Xem</a>
                                        </td>  
                                        <td class="form-group">
                                            <a href="index.php?btn_edit&ma_hd=<?php echo $row["ma_hd"]?>" class="btn btn-primary">Sửa</a>
                                        </td>
                                        <td class="form-group">
                                            <a href="index.php?btn_delete_hdct&ma_hd=<?php echo $row["ma_hd"]?>" class="btn btn-danger btn-sm">Xóa</a>
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

                                        $query = "SELECT COUNT(*) FROM hoa_don";

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

                                    function go2Page()

                                    {

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
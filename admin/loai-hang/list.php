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
                        data-toggle="table" style="text-align: center">

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
                            
                                $query = "SELECT * FROM loai LIMIT $start_from, $per_page_record";
                            
                                $rs_result = mysqli_query ($conn, $query);
                        
                            ?>
                            <!-- kết phân trang -->

                            <tr>
                                
                                <!-- <th>
                                    <input type="checkbox" name="ma_loai[]" value="<?=$ma_loai?>">
                                </th> -->
                                <?php

                                    while ($row = mysqli_fetch_array($rs_result)) {
                                    $stt += 1;
                                    // Display each field of the records.

                                ?>
                                <td><?php echo $stt ?></td>
                                <td><?php echo $row["ma_loai"]; ?></td>
                                <td><?php echo $row["ten_loai"]; ?></td>

                                <td><img src="../../content/images/types/<?php echo $row["hinh"]?>" alt="" width="100px" height="100px"></td>
                                <td>
                                    <a href="index.php?btn_edit&ma_loai=<?php echo $row["ma_loai"]?>" class="btn btn-primary"></i>Sửa</a>
                                    <a href="index.php?btn_delete&ma_loai=<?php echo $row["ma_loai"]?>" class="btn btn-danger"></i>Xóa</a>
                                </td>
                                
                            </tr>
                            <?php 
                            }
                            ?>

                        </tbody>
                    </table>
                    <!-- Phân trang -->
                    <nav aria-label="Page navigation example" style="text-align: center">
                        <ul class="pagination">
                            <li class="page-item">
                                <?php

                                    $query = "SELECT COUNT(*) FROM loai";

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
    </div>
</div>
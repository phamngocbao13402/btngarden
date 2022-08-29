<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load("current", {packages:["corechart"]});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Hàng hoá',  'Số Lượng'],
            <?php 
                foreach($items as $item) {
                    echo "['$item[ten_hh]',  $item[so_luong]],";                 
                }
            ?>
        ]);

        var options = {
            title: 'THỐNG KÊ BÌNH LUẬN', 
            is3D: true 
        };
        
        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
    }
    </script>
</head>
<body>


    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Biểu đồ thống kê bình luận</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Biểu đồ thống kê bình luận</h1>
			</div>
		</div><!--/.row-->
		<div id="toolbar" class="btn-group">
            <!-- <button name="btn_insert" class="btn btn-default">Thêm mới</button> -->
        </div>
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body">
                    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
                    </div>
				</div>
			</div>
		</div>	
	</div>
</body>
</html>

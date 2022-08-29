<?php  // require '../global.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản trị Website</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link href="<?=$CONTENT_URL?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=$CONTENT_URL?>/css/datepicker3.css" rel="stylesheet">
    <link href="<?=$CONTENT_URL?>/css/bootstrap-table.css" rel="stylesheet">
    <link href="<?=$CONTENT_URL?>/css/styles.css" rel="stylesheet">
    <script src="<?=$CONTENT_URL?>/js/bootstrap.min.js"></script>
    <script src="<?=$CONTENT_URL?>/js/lumino.glyphs.js"></script>
    <script src="<?=$CONTENT_URL?>/js/thong_ke.js"></script>
    <link rel="icon" href="<?=$CONTENT_URL?>/images/layout/logo.jpg" type="image\x-icon">
    
    <script type="text/javascript" src="<?=$CONTENT_URL?>/js/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="<?=$CONTENT_URL?>/css/jquery-ui.min.css">
    

    <script>
        $(function() {
            $(".datepicker").datepicker({date_format: 'yy mm dd'});
        });
    </script>

    <script type="text/javascript">
             $(document).ready(function() {
             // Check All
             $('.check-all').click(function() {
                 $(":checkbox").attr("checked", true);
             });
             // Uncheck All
             $('.uncheck-all').click(function() {
                 $(":checkbox").attr("checked", false);
             });
         });

    </script>
    <style>
        .menu li:hover ul {
            display: block;
        }
        .menu li ul {
            display: none;
            list-style: none;
        }
        .col-lg-10 {
    width: 80% !important;
        }
        .col-lg-offset-2 {
    margin-left: 20% !important;
}
    </style>
</head>
<body>
    
    <?php 
        require 'menu.php'; 
    ?>
   
    <?php
        require $VIEW_NAME;
    ?>
    
    
     
    <!-- <footer class="row alert alert-success">Phạm Ngọc Bảo - FPT Polytechnic Đà Nẵng <br> Copyright &copy; 2020</footer> -->
    
    <script src="<?=$CONTENT_URL?>/js/jquery-1.11.1.min.js"></script>
	<script src="<?=$CONTENT_URL?>/js/bootstrap.min.js"></script>
    <script src="<?=$CONTENT_URL?>/js/bootstrap-table.js"></script>	
</body>
</html>
<?php require_once('./ketnoi.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>hoccc</title>
    <link rel="stylesheet" type="text/css" href="web.css">
</head>
<body>
    
<?php require_once('./common/menutren.php'); ?>

      <div class="main">
        <div id="menu12">
        <div id="menu1">
            <?php
              if(isset($_GET['page'])) {
                $page = $_GET['page'];
                switch ($page) {
                  case 'chitiet':
                    require_once('./chitiet.php');
                    break;
                  default:
                    require_once('./common/baidang.php');
                    break;
                }
              } else {
                  require_once('./common/baidang.php');
              } 
            ?>
        </div>
        

        <?php require_once('./common/divphai.php'); ?>

    </div>
    
    <?php require_once('./common/divduoi.php'); ?>
</body>
</html>
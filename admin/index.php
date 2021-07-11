<?php session_start();
   if (!isset($_SESSION['username']) || !$_SESSION['username']){
       header("location:dangnhap.php");
   }
?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="webbb.css">
</head>
<body>

<?php require_once('./common/header.php'); ?>
  
<div class="duoi">
    
  <?php require_once('./common/menutrai.php'); ?>
    
  <div class="phai">
    <?php
      if(isset($_GET['page'])) {
        $page = $_GET['page'];
        switch ($page) {
          case 'danhsachweb':
            require_once('./danhsachweb.php');
            break;
          case 'themweb':
            require_once('./themweb.php');
            break;
          case 'suaweb':
            require_once('./suaweb.php');
            break;
            case 'quanliloaitin':
            require_once('./quanliloaitin.php');
            break;
          default:
            # code...
            break;
        }
      } else {
          echo "Day la trang index";
      } 
    ?>
  </div>
</div>   
</body>
</html>
<?php session_start();
 ?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
       <?php 
       if (isset($_SESSION['username']) && $_SESSION['username']){
           echo 'Bạn đã đăng nhập với tên là '.$_SESSION['username']."<br/>";
           echo 'Click vào đây để <a href="logout.php">Logout</a>';
       }
       else{
           echo 'Bạn chưa đăng nhập';
       }
       ?>
      <a href="dangnhap.php"> login</a>
    </body>
</html>
<?php
session_start();

require_once('../ketnoi.php');

 if (isset($_SESSION['username']) && $_SESSION['username']){
           echo 'Bạn đã đăng nhập với tên là '.$_SESSION['username']."<br/>";
           echo 'Click vào đây để <a href="logout.php">Logout</a>';
           header("location:danhsachweb.php");
       }
if (isset($_POST['submit']) && $_POST['username'] &&$_POST['password']) {
	$username=$_POST['username'];
	$password=$_POST['password'];
	$password=md5($password);
	$sql = "SELECT * FROM danhsach where username='$username' AND password='$password'";
	$user=$connect->query($sql);
	if (mysqli_num_rows($user) > 0) {
		$_SESSION["username"]= $username;
		header("location:danhsachweb.php");

	}
	else{
		echo "bạn đã nhập sai username hoặc password";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Đăng nhập</title>
	<style type="text/css">
		form{
			width: 34%;
			margin-left: 33%;
            margin-top: 150px;
            border: 1px solid #ccc;
		}
		.tieude{
			background-color: #2ecc71;
		}
		div p{
			font-size: 30px;
			text-align: center;

		}
		img{
			width: 15%;
			border-radius: 50%;
			margin-left: 42%;
		}
		input{
			width: 100%;
	        padding: 12px 20px;
	        margin: 8px 0;
	        display: inline-block;
	        border: 1px solid #ccc;
	        box-sizing: border-box;
		}
		button{
			width: 100%;
			height: 43px;
			background-color: #2ecc71;
		}
		button:hover{
			opacity: 0.8;
		}
	</style>
</head>
<body>
<form  method="post">
	<div class="tieude">
		<p>Well come to Hoc Nguyen</p>
		<img src="https://hinhanhdep.net/wp-content/uploads/2016/06/hinh-anh-meo-con-10.jpg">
	</div>
	<div>
		<label>Username</label>
		<br>
		<input type="text" name="username" placeholder="Enter Username" required>
		<br>
		<label>Password</label>
		<br>
		<input type="password" name="password" placeholder="Enter Password" required>
		<br>
		<button type="submit" name="submit">Đăng nhập</button>
		
	</div>
</form>
</body>
</html>
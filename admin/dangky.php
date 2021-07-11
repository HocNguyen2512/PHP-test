<?php
require_once('../ketnoi.php');

if (isset($_POST['submit']))
 {
	if (
        isset($_POST['username']) &&
        isset($_POST['password']) &&
        $_POST['username'] !='' &&
        $_POST['password'] !=''
	)  {
		$username=$_POST['username'];
		$password=$_POST['password'];
		$sql="SELECT * FROM danhsach where username='$username'";
		$dem=mysqli_query($connect, $sql);
		$password=md5($password);
		if(mysqli_num_rows($dem) > 0){
			header("location:http://localhost/tintuclienminh/dangky.php");
		}
	    else{
	        $sql="INSERT INTO danhsach(username, password) VALUES('$username', '$password')";
		    $ketquathem=$connect->query($sql);
		    if ($ketquathem==true) {
			    echo 'dang ky thanh cong <a href="dangnhap.php">đăng nhập</a>';
			    
		     }
		    else{
			    echo "loi" . $sql. "<br" . $connect->error;
		    }
	    }
	}	
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Đăng ký thành viên</title>
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
		<button type="submit" name="submit">Đăng ký</button>
		
	</div>
</form>
</body>
</html>
<?php
require_once('../ketnoi.php');


if(isset($_POST['submit']))
{   
	if (
		isset($_FILES['anh']) &&
        isset($_POST['tieude']) &&
        isset($_POST['noidung']) &&
        isset($_POST['ngaydang']) &&
        $_FILES['anh'] !='' &&
        $_POST['tieude'] !='' &&
        $_POST['noidung'] !='' &&
        $_POST['ngaydang'] !=''  
	) {
		$duong_dan_anh = 'uploads/'.$_FILES['anh']['name'];
        move_uploaded_file($_FILES['anh']['tmp_name'], $duong_dan_anh);
		$tieude=$_POST['tieude'];
		$noidung=$_POST['noidung'];
		$ngaydang=$_POST['ngaydang'];
		$timestamp = date('Y-m-d H:i:s', strtotime($ngaydang));  
		$sql = "INSERT INTO tintuc(anh, tieude, noidung, ngaydang) VALUES ('$duong_dan_anh', '$tieude', '$noidung', '$timestamp')";
		//var_dump($sql);
		$ketquathem=$connect->query($sql);
		if ($ketquathem==true) {
		 	//echo "them thanh cong";
		 	header('location: http://localhost/tintuclienminh/admin/?page=danhsachweb');
		 } 
		 else{
		 	echo "loi" . $sql. "<br" . $connect->error;
		 }
	}
}

?>

<style type="text/css">
input{
    width: 40%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}
.nutluu{
    background-color: #4CAF50;
    color: white;
    padding: 16px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 43%;
    opacity: 0.9;
}

.nutluu:hover {
  opacity: 1;
}
</style>

<form method="POST" action="" enctype="multipart/form-data">
	<p>thêm ảnh</p>
	<input type="file" name="anh">
	<br>
	<p>tiêu đề</p>
    <input type="text" name="tieude">
    <br>
    <p>nội dung</p>
    <textarea name="noidung"></textarea>	
    <br>
    <p>ngày đăng</p>
    <input type="date" name="ngaydang">
    <br>
    <input class="nutluu" type="submit" name="submit" value="Lưu">
</form>
<?php
require_once('../ketnoi.php');

if (isset($_POST['submit'])) {
	if(
	isset($_POST['tenloaitin']) &&
	$_POST['tenloaitin'] !=''
		){
		$tenloaitin=$_POST['tenloaitin'];
		$sql="INSERT INTO loaitin (tenloaitin) values('$tenloaitin')";
		$ketquathem=$connect->query($sql);
		if ($ketquathem==true) {
			echo "thêm thành công";
			header('http://localhost/tintuclienminh/admin/?page=quanliloaitin');
		}else {
			echo "Lỗi: " . $sql . "<br>" . $connect->error;
		} 
    }
}    

?>
<?php
if (isset($_GET['hanhdong']) && $_GET['hanhdong'] == 'xoa') {
		$id_can_xoa = $_GET['id'];
		$sql_xoa = "DELETE FROM loaitin WHERE id=$id_can_xoa";
		$ketquaxoa = $connect->query($sql_xoa);

		if ($ketquaxoa == true) {
			// Di chuyển về màn hình ban đầu
			header('http://localhost/tintuclienminh/admin/?page=quanliloaitin');
		} else {
			echo "Không thể xóa được";
		}
	}
?>
<?php
  $tenloaitincansua = []; 
	if (isset($_GET['id'])) {
		$id_can_sua = $_GET['id'];
		$sql_lay_thong_tin = "SELECT * FROM loaitin WHERE id=$id_can_sua";
        $ketqua = $connect->query($sql_lay_thong_tin);
        $tenloaitincansua = $ketqua->fetch_assoc();
    }
    if (isset($_POST['update'])) {
    	if (isset($_POST['tenloaitin']) &&
    		$_POST['tenloaitin']!=''

    ) {     $id_can_sua=$_GET['id'];
    		$tenloaitin=$_POST['tenloaitin'];
    		$sql = "UPDATE loaitin SET tenloaitin='$tenloaitin' where id=$id_can_sua";
    	    $ketquasua=$connect->query($sql);
    	    if ($ketquasua==true) {
    	    	echo "sửa thành công";
    	    }
    	    else{
    	    	echo "sửa không thành công";
    	    }
    	}
    }

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="webb.css">
</head>
<body>
	<?php
      if (isset($_GET['hanhdong']) && $_GET['hanhdong'] == 'sua') {
	?>
	<form method="post" action="?page=quanliloaitin&hanhdong=capnhat&id=<?php echo $tenloaitincansua['id'];?>">
	<input type="text" name="tenloaitin" value="<?php echo $tenloaitincansua['tenloaitin'] ;?>">
	<br>
	<input type="submit" name="update" value="lưu">
    </form>
    
    <?php
       } else{
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
    width: 42%;
    opacity: 0.9;
}

.nutluu:hover {
  opacity: 1;
}
table{
	width: 42%;
}
</style>

<form method="post">
	<p>thêm loại tin</p>
	<input type="text" name="tenloaitin">
	<br>
	<input class="nutluu" type="submit" name="submit" value="thêm">
</form>
<?php } ?>
<table border="1" cellspacing="0" cellpadding="0">
	<tr class="dong1">
	  <th>ID</th>
	  <th>Tên Loại Tin</th>
	  <th></th>
	  <th></th>
	</tr>
<?php
 $laydulieu="SELECT * FROM loaitin";
 $ketqua=$connect->query($laydulieu);
 if ($ketqua ->num_rows>0) {
 	while ($row=$ketqua->fetch_assoc()) {
 		

?>
<tr>
	<td><p><?php echo $row["id"]?></p><br></td>
	<td><p><?php echo $row["tenloaitin"]?></p><br></td>
	<td class="cangiua">
	    <a class="nutxoa" href="?page=quanliloaitin&hanhdong=xoa&id=<?php echo $row['id'] ;?>">Xóa</a>
    </td>
    <td class="cangiua">
	    <a class="nutsua" href="?page=quanliloaitin&hanhdong=sua&id=<?php echo $row['id'] ;?>">sửa</a>
	</td>
</tr>
<?php
}
}
?>
</body>
</html>
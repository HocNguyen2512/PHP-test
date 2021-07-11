<?php
require_once('../ketnoi.php');

if (isset($_GET['hanhdong']) && $_GET['hanhdong'] == 'xoa') {
    $id_can_xoa = $_GET['id'];
    $sql_xoa = "DELETE FROM tintuc WHERE id=$id_can_xoa";
    $ketquaxoa = $connect->query($sql_xoa);
    if ($ketquaxoa == true) {
      header('http://localhost/tintuclienminh/admin?page=danhsachweb');
    } else {
      echo " Không xóa được";
    }
  }


?>


<table border="1" cellspacing="0" cellpadding="0">
	<tr class="dong1">
	  <th>ID</th>
	  <th>Ảnh</th>
	  <th>Tiêu Đề</th>
	  <th>Nội Dung</th>
	  <th>Ngày Đăng</th>
	  <th colspan="2"><a class="nutthem" href="?page=themweb">thêm</a></th>
	</tr>
	<?php
	$laydulieu ="SELECT * FROM tintuc";
	$ketqua = $connect->query($laydulieu);
	if($ketqua->num_rows>0)
	  while($row = $ketqua->fetch_assoc()){ 
	        ?>
	<tr>
	  <td><?php echo $row["id"];?></td>
	  <td><img class="img"src="../<?php echo $row["anh"];?>" ></td>
	  <td><?php echo $row["tieude"];?></td>
	  <td><?php echo $row["noidung"];?></td>
	  <td><?php echo date_format(date_create($row["ngaydang"]),"Y/m/d");?></td>
	  <td class="cangiua">
	    <a class="nutxoa" href="?page=danhsachweb&hanhdong=xoa&id=<?php echo $row['id'] ;?>">xóa</a>
	  </td>
	  <td class="cangiua">
	    <a class="nutsua" href="?page=suaweb&id=<?php echo $row['id'] ;?>">sửa</a>
	  </td>
	</tr>
	<?php } ?>
</table>
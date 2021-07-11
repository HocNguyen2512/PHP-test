<?php

$baiviet = [];
if (isset($_GET['id'])) {
	$id_bai_viet = $_GET['id'];
    $sql_lay_thong_tin = "SELECT * FROM tintuc WHERE id=$id_bai_viet";
    $ketqua = $connect->query($sql_lay_thong_tin);
    $baiviet = $ketqua->fetch_assoc();
}

var_dump($baiviet);

?>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="tintuclienminh";

$connect = new mysqli($servername, $username, $password, $dbname);
$connect->set_charset("utf8");

if ($connect->connect_error) {
	die("connect Failed:" . $connect->connect_error);
}
else{
	//echo "connect successfully";
}
?>
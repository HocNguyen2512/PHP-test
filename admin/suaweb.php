<?php
require_once('../ketnoi.php');

    $user_can_sua = [];
    if (isset($_GET['id'])) {
        $id_can_sua = $_GET['id'];
        $sql_lay_thong_tin = "SELECT * FROM tintuc WHERE id=$id_can_sua";
        $ketqua = $connect->query($sql_lay_thong_tin);
        $user_can_sua = $ketqua->fetch_assoc();
    }

    if (isset($_POST['update'])) {
        if (isset($_POST['tieude']) && isset($_POST['noidung']) && $_POST['tieude'] != '' && $_POST['noidung'] != '') {
            $id_can_sua = $_GET['id'];
            $tieude = $_POST['tieude'];
            $noidung = $_POST['noidung'];
            //var_dump($tieude, $noidung, $_FILES);
            
            
            if(isset($_FILES['anh']) && $_FILES['anh']['name'] !='') {
                $duong_dan_anh = 'uploads/'.$_FILES['anh']['name'];
                move_uploaded_file($_FILES['anh']['tmp_name'], $duong_dan_anh);
                $sql = "UPDATE tintuc SET anh='$duong_dan_anh', tieude='$tieude', noidung='$noidung' where id=$id_can_sua";
            } else {
                $sql = "UPDATE tintuc SET tieude='$tieude', noidung='$noidung' where id=$id_can_sua";
            }

            $ketquasua = $connect->query($sql);
            if ($ketquasua == true) {
                header('Location: http://localhost/tintuclienminh/admin/?page=danhsachweb');
            } else {
                echo "Lỗi: " . $sql . "<br>" . $connect->error;
            }
        }
    }
?>

<style type="text/css">
    input{
        width: 65%;
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
        width: 68%;
        opacity: 0.9;
    }

    .nutluu:hover {
      opacity: 1;
    }
    }
</style>

<form method="post" enctype="multipart/form-data" action="/tintuclienminh/admin?page=suaweb&id=<?php echo $user_can_sua['id'];?>">
        <p>Nhập anh: </p>
        <input type="file" name="anh">
        <br>
        <p>Nhập tieu de: </p>
        <input type="text" name="tieude" value="<?php echo $user_can_sua['tieude'] ;?>">
        <br>
        <p>Nhập noi dung: </p>
        <input type="text" name="noidung" value="<?php echo $user_can_sua['noidung'] ;?>">
        <br>
        <input class="nutluu" type="submit" value="Lưu" name="update"/>
</form> 
              
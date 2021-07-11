<?php
$severname = "localhost";
$username = "root";
$password ="";
$dbname = "tintuclienminh";

$connect = new mysqli($severname, $username, $password, $dbname);
$connect->set_charset("utf8");
if ($connect->connect_error) {
        die("Connection failed: " . $connect->connect_error);
    } else {
        // echo "Connected successfully";
    }

$laydulieu ="SELECT * FROM tintuc";
$ketqua = $connect->query($laydulieu);   
?>
<!DOCTYPE html>
<html>
<head>
    <title>hoccc</title>
    <link rel="stylesheet" type="text/css" href="web.css">
</head>

<body>
    <div id="menu">
        <ul>
            <li><a href="index.php">trang chủ</a></li>
            <li><a href="t1.php">giới thiệu</a></li>
            <li><a href="">tin tức</a></li>
            <li>
                <a href="">danh sách tướng</a>
                <ul class=" dst">
                    <li><a href="/dssathu.php">xạ thủ</a></li>
                    <li><a href="">đỡ đòn</a></li>
                    <li><a href="">đấu sĩ</a></li>
                    <li><a href="">pháp sư</a></li>
                    <li><a href="">support buff</a></li>
                </ul>
            </li>
            <li><a href="">sự kiện</a></li>
            <li><a href=""></a></li>
        </ul>
    </div>
    <div class="main">
        <div id="menu12">
        <div id="menu1">
            <div id="asd">
                <h2>TIN ESPORTS</h2>
                <ul>
                    <li><a href=""></a>Hình ảnh</li>
                    <li><a href=""></a>lịch thi đấu</li>
                    <li><a href=""></a>quốc tế</li>
                    <li><a href=""></a>vcs</li>
                    <li><a href=""></a>video</li>
                </ul>
            </div>
            <div>
                <?php
                    if($ketqua->num_rows>0)
                    while($row = $ketqua->fetch_assoc()){ 
                ?>
                <div class="aaa">
                    <img src="<?php echo $row['anh']?>" />
                    <div>
                        <p class="a1"><a href="/tintuclienminh/task1.php">
                            <?php echo $row['tieude']?>
                       </a>
                        </p>
                        <p class="a2"><?php echo $row['ngaydang']?></p>
                        <p>
                           <?php echo substr($row['noidung'], 0, 222)  ?>...

                        </p>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <div id="menu2">
            <div class=" tin">
                <h2 class="tintrongtuan"> TIN HOT TRONG TUẦN</h2>
            </div>
            <div class="sss">
                <div class="s1">
                    <img src="http://lienminh360.vn/wp-content/uploads/2020/10/avatar-fizz-1280x720.jpg">
                    <p>Chi tiết hình ảnh Nhóm trang phục Lễ Hội Ma Ám 2020</p>
                </div>
                <div class="s1">
                    <img src="http://lienminh360.vn/wp-content/uploads/2020/10/avatar-fizz-1280x720.jpg">
                    <p>Chi tiết hình ảnh Nhóm trang phục Lễ Hội Ma Ám 2020</p>
                </div>
                <div class="s1">
                    <img src="http://lienminh360.vn/wp-content/uploads/2020/10/avatar-fizz-1280x720.jpg">
                    <p>Chi tiết hình ảnh Nhóm trang phục Lễ Hội Ma Ám 2020</p>
                </div>
                <div class="s1">
                    <img src="http://lienminh360.vn/wp-content/uploads/2020/10/avatar-fizz-1280x720.jpg">
                    <p>Chi tiết hình ảnh Nhóm trang phục Lễ Hội Ma Ám 2020</p>
                </div>
                <div class="s1">
                    <img src="http://lienminh360.vn/wp-content/uploads/2020/10/avatar-fizz-1280x720.jpg">
                    <p>Chi tiết hình ảnh Nhóm trang phục Lễ Hội Ma Ám 2020</p>
                </div>
                <div class="s1">
                    <img src="http://lienminh360.vn/wp-content/uploads/2020/10/avatar-fizz-1280x720.jpg">
                    <p>Chi tiết hình ảnh Nhóm trang phục Lễ Hội Ma Ám 2020</p>
                </div>
                <div class="s1">
                    <img src="http://lienminh360.vn/wp-content/uploads/2020/10/avatar-fizz-1280x720.jpg">
                    <p>Chi tiết hình ảnh Nhóm trang phục Lễ Hội Ma Ám 2020</p>
                </div>
                <div class="s1">
                    <img src="http://lienminh360.vn/wp-content/uploads/2020/10/avatar-fizz-1280x720.jpg">
                    <p>Chi tiết hình ảnh Nhóm trang phục Lễ Hội Ma Ám 2020</p>
                </div>
            </div>
        </div>
    </div>
    <div id="video">
        <div id="video1">
            <div id="vd1">
                <p>video</p>
                <ul>
                    <li><a href="">cao thu</a></li>
                    <li><a href="">hai huoc</a></li>
                    <li><a href="">highlight</a></li>
                    <li><a href="">giai dau</a></li>
                    <li><a href="">khac</a></li>
                </ul>
            </div>
            <div id="vd2">
                <div id="imgvd2">
                    <img src="http://lienminh360.vn/wp-content/uploads/2020/11/maxresdefault-20.jpg">
                    <p>DWG Canyon: “Tất cả mọi người trong đội của tôi, từ ban huấn luyện đến các tuyển thủ đều đã cố gắng hết sức mình, tôi nghĩ rằng chúng tôi tập luyện chăm chỉ hơn bất cứ đội nào khác.”</p>
                </div>
                <div id="imgvd2">
                    <img src="http://lienminh360.vn/wp-content/uploads/2020/11/maxresdefault-20.jpg">
                    <p>DWG Canyon: “Tất cả mọi người trong đội của tôi, từ ban huấn luyện đến các tuyển thủ đều đã cố gắng hết sức mình, tôi nghĩ rằng chúng tôi tập luyện chăm chỉ hơn bất cứ đội nào khác.”</p>
                </div>
                <div id="imgvd2">
                    <img src="http://lienminh360.vn/wp-content/uploads/2020/11/maxresdefault-20.jpg">
                    <p>DWG Canyon: “Tất cả mọi người trong đội của tôi, từ ban huấn luyện đến các tuyển thủ đều đã cố gắng hết sức mình, tôi nghĩ rằng chúng tôi tập luyện chăm chỉ hơn bất cứ đội nào khác.”</p>
                </div>
            </div>
        </div>
        <div id="menu2">
            <div class=" tin">
                <h2 class="tintrongtuan"> TIN HOT TRONG TUẦN</h2>
            </div>
            <div class="sss">
                <div class="s1">
                    <img src="http://lienminh360.vn/wp-content/uploads/2020/10/avatar-fizz-1280x720.jpg">
                    <p>Chi tiết hình ảnh Nhóm trang phục Lễ Hội Ma Ám 2020</p>
                </div>
                <div class="s1">
                    <img src="http://lienminh360.vn/wp-content/uploads/2020/10/avatar-fizz-1280x720.jpg">
                    <p>Chi tiết hình ảnh Nhóm trang phục Lễ Hội Ma Ám 2020</p>
                </div>
                <div class="s1">
                    <img src="http://lienminh360.vn/wp-content/uploads/2020/10/avatar-fizz-1280x720.jpg">
                    <p>Chi tiết hình ảnh Nhóm trang phục Lễ Hội Ma Ám 2020</p>
                </div>
                <div class="s1">
                    <img src="http://lienminh360.vn/wp-content/uploads/2020/10/avatar-fizz-1280x720.jpg">
                    <p>Chi tiết hình ảnh Nhóm trang phục Lễ Hội Ma Ám 2020</p>
                </div>
                <div class="s1">
                    <img src="http://lienminh360.vn/wp-content/uploads/2020/10/avatar-fizz-1280x720.jpg">
                    <p>Chi tiết hình ảnh Nhóm trang phục Lễ Hội Ma Ám 2020</p>
                </div>

            </div>
        </div>
    </div>
    </div>
</body>
</html>
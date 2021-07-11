<?php

$laydulieu ="SELECT * FROM tintuc";
$ketqua = $connect->query($laydulieu);


?>


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
                <p class="a1">
                    <a href="?page=chitiet&id=<?php echo $row['id'];?>"><?php echo $row['tieude']?></a>
                </p>
                <p class="a2"><?php echo $row['ngaydang']?></p>
                <p>
                   <?php echo substr($row['noidung'], 0, 222)  ?>...

                </p>
            </div>
        </div>
        <?php } ?>
    </div>
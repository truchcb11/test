<?php
	$sql_mathang="select * from sanpham where id_mathang='$_GET[id]'";
	$run_mathang=$conn->query($sql_mathang);
	$sql="select * from mathang where id_mathang='$_GET[id]'";
	$run=$conn->query($sql);
	$row=$run->fetch_array();
?>
<h1 style="text-align:center;color:yellow;background:#00F;padding:10px;"><?php echo $row['tenmathang'] ?></h1>
<div class="sanpham">
    <ul>
    <?php
		$count=$run_mathang->num_rows;
		if($count>0){
        	while($row_mathang=$run_mathang->fetch_array()){
    ?>
                 <li><a href="index.php?xem=chitiet&id=<?php echo $row_mathang['id_sp'] ?>">
                    <img src="adminfile/modules/quanlysanpham/uploads/<?php echo $row_mathang['hinhanh'] ?>" width="210px" height="200px" />
                    <p style="color:#906; margin-top:5px;"><strong><?php echo $row_mathang['tensp'] ?></strong></p>
                    <p style="color:#F00; margin-top:5px;"><?php echo $row_mathang['gia'].'VND' ?></p>
                </a></li>
    <?php
        	}
		}else{
			echo '<h3 style="margin:5px;font-style:italic;color:#000">Hiện chưa có sản phẩm...</h3>';
		}
    ?>
    </ul>
</div>
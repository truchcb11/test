<div class="sanpham">
<?php
	$run=$conn->query("select * from mathang");
	while($row=$run->fetch_array()){
		echo '<h1 style="text-align:center;color:yellow;background:#00F;padding:10px;">'.$row['tenmathang'].'</h1>';
		$sql_mh="select * from mathang inner join sanpham on sanpham.id_mathang=mathang.id_mathang where sanpham.id_mathang='".$row['id_mathang']."'";
		$run_mh=$conn->query($sql_mh);
		$count=$run_mh->num_rows;
		if($count>0){
?>
            <ul>
            <?php
                while($row_mh=$run_mh->fetch_array()){
            ?>
                     <li><a href="index.php?xem=chitiet&id=<?php echo $row_mh['id_sp'] ?>">
                        <img src="adminfile/modules/quanlysanpham/uploads/<?php echo $row_mh['hinhanh'] ?>" width="210px" height="200px" />
                        <p style="color:#906; margin-top:5px;"><strong><?php echo $row_mh['tensp'] ?></strong></p>
                        <p style="color:#F00; margin-top:5px;"><?php echo $row_mh['gia'].'VND' ?></p>
                    </a></li>
            <?php
                }
            ?>
            
<?php
		}else{
		echo '<h3 style="margin:5px;font-style:italic;color:#000">Hiện chưa có sản phẩm...</h3>';
		}
?>
			</ul>
<div class="clear"></div>
<?php
	}
?>
</div>
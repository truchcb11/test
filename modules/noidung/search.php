<?php
	if(isset($_POST['search'])){
		$search=$_POST['inputsearch'];
		$sql="select * from sanpham where tensp LIKE '%$search%'";
		$query=$conn->query($sql);
	}
?>
<h1 style="text-align:center;color:yellow;background:#00F;padding:10px;">Sản phẩm tìm thấy</h1>
<div class="sanpham">
    <ul>
    <?php
		$count=$query->num_rows;
		if($count>0){
        	while($row=$query->fetch_array()){
    ?>
                 <li><a href="index.php?xem=chitiet&id=<?php echo $row['id_sp'] ?>">
                    <img src="adminfile/modules/quanlysanpham/uploads/<?php echo $row['hinhanh'] ?>" width="210px" height="200px" />
                    <p style="color:#906; margin-top:5px;"><strong><?php echo $row['tensp'] ?></strong></p>
                    <p style="color:#F00; margin-top:5px;"><?php echo $row['gia'].'VND' ?></p>
                </a></li>
    <?php
        	}
		}else{
			echo '<h3 style="margin:5px;font-style:italic;color:#000">Không tìm thấy sản phẩm...</h3>';
		}
    ?>
    </ul>
</div>
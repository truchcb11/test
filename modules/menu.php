<?php
	$sql_mh="select * from mathang";
	$run=$conn->query($sql_mh);
?>
<div class="menu">
    <ul>
        <li><a href="index.php"><strong>Trang chủ</strong></a></li>
        <li><a href="#"><strong>Giới thiệu</strong></a></li>
        <li><a href=""><strong>Mặt hàng</strong></a>
            <ul>
            	<?php
                	while($row=$run->fetch_array()){
				?>
                		<li><a href="index.php?xem=mathang&id=<?php echo $row['id_mathang'] ?>"><?php echo $row['tenmathang'] ?></a></li>             
                <?php
					}
				?>
            </ul>              
        </li>
<?php
	$run->close();
	$sql_nh="select * from nhanhieu";
	$run_1=$conn->query($sql_nh);
?>
        <li><a href=""><strong>Nhãn hiệu</strong></a>
            <ul>
                <?php
                	while($row_1=$run_1->fetch_array()){
				?>
                		<li><a href="index.php?xem=nhanhieu&id=<?php echo $row_1['id_nhanhieu'] ?>"><?php echo $row_1['tennhanhieu'] ?></a></li>             
                <?php
					}
				?>                 
            </ul>
        </li>
        <li><a href="index.php?xem=dangky"><strong>Đăng ký</strong></a></li>
        <li><a href="index.php?xem=dangnhap"><strong>Đăng nhập</strong></a></li>
  		<li><a href="index.php?xem=giohang"><strong>Giỏ hàng</strong></a></li>
	    <li><a href="#"><strong>Liên hệ</strong></a></li>
        <form action="index.php" method="post" enctype="multipart/form-data">
            <div class="searchform">
                <input type="text" name="inputsearch" placeholder="Nhập tên sản phẩm" />
                <input type="submit" name="search" value="Search" />
            </div>
        </form>
    </ul>
    <?php 
		$run_1->close();
	?>
</div>
<div class="clear"></div>
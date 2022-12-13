<?php 
	$sql_ct="select * from sanpham where id_sp=$_GET[id]";
	$run=$conn->query($sql_ct);
	$row=$run->fetch_array();
?>
<h1 style="text-align:center;color:yellow;background:#00F;padding:10px;">CHI TIẾT</h1>
<table width="500" border="0" style="border-collapse:collapse; background-color:#FFF; background-color:#CF6; margin:auto; margin-top:50px; margin-bottom:50px">
  <tr>
    <td style="padding:20px;"><div align="center"><img src="adminfile/modules/quanlysanpham/uploads/<?php echo $row['hinhanh'] ?>" width="210px" height="200px" /></div></td>
  </tr>
  <tr>
    <td colspan="2" style="padding:20px;"><div align="center"><h3><?php echo $row['tensp'] ?></h3></div></td>
  </tr>
  <tr>
    <td colspan="2" style="padding:20px; color:#F00"><div align="center"><h3><?php echo 'Giá:'.' '.$row['gia'].'VNĐ' ?></h3></div></td>
  </tr>
  <tr>
    <td colspan="2" style="padding:20px;"><div align="center"><h3>Thông số kỹ thuật</h3></div></td>
  </tr>
  <tr>
    <td colspan="2" style="padding:20px;"><?php echo $row['mota'] ?></td>
  </tr>
  <tr>
    <td colspan="2" style="padding:20px;"><div align="center"><a href="index.php?xem=update_cart&add=<?php echo $row['id_sp'] ?>"><img src="images/mua-ngay-300x110.png" /></a></div></td>
  </tr>
</table>


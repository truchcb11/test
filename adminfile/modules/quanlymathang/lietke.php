<?php
	$sql="select * from mathang order by id_mathang asc";
	$run=$conn->query($sql);
?>
<center><table width="600px" border="1">
  <tr>
    <td><div align="center">ID</div></td>
    <td><div align="center">Tên mặt hàng</div></td>
    <td colspan="2"><div align="center">Quản lý</div></td>
  </tr>
  <?php
  	$i=0;
	while($row=$run->fetch_array()){
  ?>
  <tr>
    <td><?php echo $row['id_mathang'] ?></td>
    <td><?php echo $row['tenmathang'] ?></td>
    <td><div align="center"><a href="adminpage.php?quanly=quanlymathang&ac=sua&id=<?php echo $row['id_mathang'] ?>">Sửa</a></div></td>
    <td><div align="center"><a href="modules/quanlymathang/xuly.php?id=<?php echo $row['id_mathang'] ?>">Xóa</a></div></td>
  </tr>
  <?php
  	$i++;
	}
  ?>
</table>
<a href="adminpage.php?quanly=quanlymathang&ac=them"><button style="margin-top:10px" name="nutthem" id="nut them" type="button">Thêm mới</button></a></center>

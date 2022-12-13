<?php
	$sql="select * from nhanhieu order by id_nhanhieu asc";
	$run=$conn->query($sql);
?>
<center><table width="600px" border="1">
  <tr>
    <td><div align="center">ID</div></td>
    <td><div align="center">Tên nhãn hiệu</div></td>
    <td colspan="2"><div align="center">Quản lý</div></td>
  </tr>
  <?php
  	$i=0;
	while($row=$run->fetch_array()){
  ?>
  <tr>
    <td><?php echo $row['id_nhanhieu'] ?></td>
    <td><?php echo $row['tennhanhieu'] ?></td>
    <td><div align="center"><a href="adminpage.php?quanly=quanlynhanhieu&ac=sua&id=<?php echo $row['id_nhanhieu'] ?>">Sửa</a></div></td>
    <td><div align="center"><a href="modules/quanlynhanhieu/xuly.php?id=<?php echo $row['id_nhanhieu'] ?>">Xóa</a></div></td>
  </tr>
  <?php
  	$i++;
	}
  ?>
</table>
<a href="adminpage.php?quanly=quanlynhanhieu&ac=them"><button style="margin-top:10px" name="nutthem" id="nut them" type="button">Thêm mới</button></a></center>

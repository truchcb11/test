<?php
	$sql="select * from sanpham, mathang, nhanhieu where mathang.id_mathang=sanpham.id_mathang and nhanhieu.id_nhanhieu=sanpham.id_nhanhieu order by sanpham.id_sp asc";
	$run=$conn->query($sql);
?>
<center><table width="800px%" border="2">
  <tr>
    <td><div align="center">ID</div></td>
    <td><div align="center">Tên sản phẩm</div></td>
    <td><div align="center">Hình ảnh</div></td>
    <td><div align="center">Mặt hàng</div></td>
    <td><div align="center">Nhãn hiệu</div></td>
    <td><div align="center">Số lượng</div></td>
    <td><div align="center">Mô tả</div></td>
    <td><div align="center">Giá thành</div></td>
    <td colspan="2"><div align="center">Quản lý</div></td>
  </tr>
  <?php
  	$i=0;
	while($row=$run->fetch_array()){
  ?>
  <tr>
    <td><?php echo $row['id_sp'] ?></td>
    <td><?php echo $row['tensp'] ?></td>
    <td><img src="modules/quanlysanpham/uploads/<?php echo $row['hinhanh'] ?>" width="60px" height="60px" /></td>
    <td><?php echo $row['tenmathang'] ?></td>
    <td><?php echo $row['tennhanhieu'] ?></td>
    <td><?php echo $row['soluong'] ?></td>
    <td><?php echo $row['mota'] ?></td>
    <td><?php echo $row['gia'] ?></td>
    <td><div align="center"><a href="adminpage.php?quanly=quanlysanpham&ac=sua&id=<?php echo $row['id_sp'] ?>">Sửa</a></div></td>
    <td><div align="center"><a href="modules/quanlysanpham/xuly.php?id=<?php echo $row['id_sp'] ?>">Xóa</a></div></td>
  </tr>
  <?php
  	$i++;
	}
  ?>
</table></center>
<center><a href="adminpage.php?quanly=quanlysanpham&ac=them"><button style="margin-top:10px" name="nutthem" id="nut them" type="button">Thêm mới</button></a></center>

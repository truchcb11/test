<?php
	$sql="select * from mathang where id_mathang=$_GET[id]";
	$run=$conn->query($sql);
	$row=$run->fetch_array();
?>
<center><form action="modules/quanlymathang/xuly.php?id=<?php echo $row['id_mathang'] ?>" method="post" enctype="multipart/form-data">
	<table width="600px" border="1">
      <tr>
        <td colspan="2"><div align="center">Sửa mặt hàng</div></td>
      </tr>
      <tr>
        <td><div align="right">Tên mặt hàng:</div></td>
        <td><input type="text" name="tenmathang" id="tenmathang" value="<?php echo $row['tenmathang'] ?>"></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center">
          <input type="submit" name="sua" id="sua" value="Sửa">
        </div></td>
      </tr>
    </table>
</form>
<a href="adminpage.php?quanly=quanlymathang&ac=lietke"><button style="margin-top:10px" name="nutlietke" id="nutlietke" type="button">Liệt kê</button></a></center>

<form action="modules/quanlysanpham/xuly.php" method="post" enctype="multipart/form-data">
	<center><table width="600" border="1">
      <tr>
        <td colspan="2"><div align="center">Thêm sản phẩm</div></td>
      </tr>
      <tr>
        <td><div align="right">Tên sản phẩm:</div></td>
        <td><input type="text" name="tensp" id="tensp"></td>
      </tr>
      <tr>
        <td><div align="right">Hình ảnh:</div></td>
        <td><input type="file" name="hinhanh" id="hinhanh"></td>
      </tr>
      <tr>
        <td><div align="right">Mặt hàng:</div></td>
        <td><select name="mathang" id="mathang">
        		<?php
                	$sql="select * from mathang";
					$run=$conn->query($sql);
					while($row=$run->fetch_array()){
				?>
        		<option value="<?php echo $row['id_mathang'] ?>"><?php echo $row['tenmathang'] ?></option>
                <?php
					}
				?>
        	</select>
        </td>
      </tr>
      <tr>
        <td><div align="right">Nhãn hiệu:</div></td>
        <td><select name="nhanhieu" id="nhanhieu">
        		<?php
                	$sql="select * from nhanhieu";
					$run=$conn->query($sql);
					while($row=$run->fetch_array()){
				?>
        		<option value="<?php echo $row['id_nhanhieu'] ?>"><?php echo $row['tennhanhieu'] ?></option>
                <?php
					}
				?>
            </select>
        </td>
      </tr>
      <tr>
        <td><div align="right">Số lượng:</div></td>
        <td><input type="text" name="soluong" id="soluong" /></td>
      </tr>
      <tr>
        <td><div align="right">Mô tả:</div></td>
        <td><textarea name="mota" id="mota" cols="1000" rows="25"></textarea></td>
      </tr>
      <tr>
        <td><div align="right">Giá thành:</div></td>
        <td><input type="text" name="gia" id="gia"></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center">
          <input type="submit" name="them" id="them" value="Thêm">
        </div></td>
      </tr>
    </table>
</form>
<a href="adminpage.php?quanly=quanlysanpham&ac=lietke"><button style="margin-top:10px" name="nutlietke" id="nutlietke" type="button">Liệt kê</button></a></center>

<?php
	$sql="select * from sanpham where id_sp=$_GET[id]";
	$run=$conn->query($sql);
	$row=$run->fetch_array();
?>
<form action="modules/quanlysanpham/xuly.php?id=<?php echo $row['id_sp'] ?>" method="post" enctype="multipart/form-data">
	<center><table width="600px" border="1">
      <tr>
        <td colspan="2"><div align="center">Sửa sản phẩm</div></td>
      </tr>
      <tr>
        <td><div align="right">Tên sản phẩm:</div></td>
        <td><input type="text" name="tensp" id="tensp" value="<?php echo $row['tensp'] ?>" ></td>
      </tr>
      <tr>
        <td><div align="right">Hình ảnh:</div></td>
        <td><input type="file" name="hinhanh" id="hinhanh"><img src="modules/quanlysanpham/uploads/<?php echo $row['hinhanh'] ?>" width="60px" height="60px" /></td>
      </tr>
      <tr>
        <td><div align="right">Mặt hàng:</div></td>
        <td><select name="mathang" id="mathang">
        		<?php
                	$sql_mh="select * from mathang";
					$run_mh=$conn->query($sql_mh);
					while($row_mh=$run_mh->fetch_array()){
						if($row['id_mathang']==$row_mh['id_mathang']){
				?>
        					<option selected value="<?php echo $row_mh['id_mathang'] ?>"><?php echo $row_mh['tenmathang'] ?></option>
                <?php
						}else{
				?>
                			<option value="<?php echo $row_mh['id_mathang'] ?>"><?php echo $row_mh['tenmathang'] ?></option>
                <?php
						}
					}
				?>
        	</select>
        </td>
      </tr>
      <tr>
        <td><div align="right">Nhãn hiệu:</div></td>
        <td><select name="nhanhieu" id="nhanhieu">
        		<?php
                	$sql_nh="select * from nhanhieu";
					$run_nh=$conn->query($sql_nh);
					while($row_nh=$run_nh->fetch_array()){
						if($row['id_nhanhieu']==$row_nh['id_nhanhieu']){
				?>
        					<option selected value="<?php echo $row_nh['id_nhanhieu'] ?>"><?php echo $row_nh['tennhanhieu'] ?></option>
                <?php
						}else{
				?>
                			<option value="<?php echo $row_nh['id_nhanhieu'] ?>"><?php echo $row_nh['tennhanhieu'] ?></option>
                <?php
						}
					}
				?>
            </select>
        </td>
      </tr>
      <tr>
        <td><div align="right">Số lượng:</div></td>
        <td><input type="text" name="soluong" id="soluong" value="<?php echo $row['soluong'] ?>" /></td>
      </tr>
      <tr>
        <td><div align="right">Mô tả:</div></td>
        <td><textarea name="mota" id="mota" cols="1000" rows="25" ><?php echo $row['mota'] ?></textarea></td>
      </tr>
      <tr>
        <td><div align="right">Giá thành:</div></td>
        <td><input type="text" name="gia" id="gia" value="<?php echo $row['gia'] ?>"></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center">
          <input type="submit" name="sua" id="sua" value="Sửa">
        </div></td>
      </tr>
    </table>
</form>
<a href="adminpage.php?quanly=quanlysanpham&ac=lietke"><button style="margin-top:10px" name="nutlietke" id="nutlietke" type="button">Liệt kê</button></a></center>

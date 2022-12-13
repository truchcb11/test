<form action="modules/noidung/thanhtoan.php" method="post" enctype="multipart/form-data">
<center><table width="350" border="0" style="margin-top:100px; margin-bottom: 200px">
  <tr>
    <td colspan="2" style="padding:10px"><div align="center"><h2>Đặt hàng </h2></div></td>
    </tr>
  <tr>
    <td style="padding:10px"><div align="right">Người nhận hàng: </div></td>
    <td style="padding:10px"><input type="text" name="tennn" /></td>
  </tr>
  <tr>
    <td style="padding:10px"><div align="right">Địa chỉ nhận hàng: </div></td>
    <td style="padding:10px"><input type="password" name="diachinhan" /></td>
  </tr>
   <tr>
    <td style="padding:10px"><div align="right">Số ĐT nhận: </div></td>
    <td style="padding:10px"><input type="password" name="dtnhan" /></td>
  </tr>
   <tr>
    <td style="padding:10px"><div align="right">Phương thức thanh toán: </div></td>
     <td>
            <input type="radio" name="pttt" value="1">Thanh toán bằng thẻ ghi nợ/ tài khoản
            <input type="radio" name="pttt" value="2">Vi Mono
			<input type="radio" name="pttt" value="3">Vi Zalopay
			<input type="radio" name="pttt" value="4">Thanh toán khi nhận hàng
     </td>
  </tr>
  <tr>
    <td colspan="2" style="padding:10px"><div align="center">
      <input type="submit" name="thanhtoan" value="Thanh toán" />
    </div></td>
    </tr>
</table></center>

</form>

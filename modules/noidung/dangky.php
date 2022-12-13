<?php
	if(isset($_POST['dangky'])){
		$tenkhach=$_POST['username'];
		$pass=$_POST['pass'];
		$email=$_POST['email'];
		$diachi=$_POST['diachi'];
		$sdt=$_POST['sdt'];
		$sql="insert into tk_khach (tenkhach, matkhau, email, diachi, sdt) values ('$tenkhach', '$pass','$email', '$diachi', '$sdt')";
		$run=$conn->query($sql);
		if($run){
			header('location:index.php?xem=thongbao');
		}else{
			header('location:index.php?xem=dangky');
		}
	}
?>
<center><form action="index.php?xem=dangky" method="post" enctype="multipart/form-data">
<table width="400" border="0" style="margin:50px;">
  <tr>
    <td colspan="2"><div align="center" style="padding:10px">Đăng ký thành viên</div></td>
  </tr>
  <tr>
    <td style="padding:10px"><div align="right">Tên khách hàng:</div></td>
    <td style="padding:10px"><input type="text" name="username"></td>
  </tr>
  <tr>
    <td style="padding:10px"><div align="right">Mật khẩu:</div></td>
    <td style="padding:10px"><input type="password" name="pass"></td>
  </tr>
  <tr>
    <td style="padding:10px"><div align="right">Email:</div></td>
    <td style="padding:10px"><input type="text" name="email"></td>
  </tr>
  <tr>
    <td style="padding:10px"><div align="right">Địa chỉ:</div></td>
    <td style="padding:10px"><input type="text" name="diachi"></td>
  </tr>
  <tr>
    <td style="padding:10px"><div align="right">Số điện thoại:</div></td>
    <td style="padding:10px"><input type="text" name="sdt"></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center" style="padding:10px"><input type="submit" name="dangky" id="dangky" value="Đăng ký"></div></td>
  </tr>
  </table>
</form></center>
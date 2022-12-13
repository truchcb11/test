<?php
	session_start();
	if(isset($_POST['login'])){
		$yemail=$_POST['y_email'];
		$ypass=$_POST['y_pass'];
		$sql="select * from tk_khach where email='$yemail' and matkhau='$ypass' limit 1";
		$run=$conn->query($sql);
		$count=$run->num_rows;
		if($count==0){
			echo '<script>alert("Sai tài khoản hoặc mật khẩu")</script>';
		}else{
			$_SESSION['login']=$yemail;
			header('Location:index.php?xem=giohang');
		}
	}
?>
<form action="" method="post" enctype="multipart/form-data">
<center><table width="350" border="0" style="margin-top:100px; margin-bottom: 200px">
  <tr>
    <td colspan="2" style="padding:10px"><div align="center"><h2>Đăng nhập</h2></div></td>
    </tr>
  <tr>
    <td style="padding:10px"><div align="right">Email: </div></td>
    <td style="padding:10px"><input type="text" name="y_email" /></td>
  </tr>
  <tr>
    <td style="padding:10px"><div align="right">Mật khẩu: </div></td>
    <td style="padding:10px"><input type="password" name="y_pass" /></td>
  </tr>
  <tr>
    <td colspan="2" style="padding:10px"><div align="center">
      <input type="submit" name="login" value="Đăng nhập" />
    </div></td>
    </tr>
</table></center>
</form>

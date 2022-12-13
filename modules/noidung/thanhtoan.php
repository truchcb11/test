<?php
	session_start();
	if(isset($_POST['login'])){
		$yemail=$_POST['y_email'];
		$ypass=$_POST['y_pass'];
		$sql="select * from taikhoan where tk='$tk' and sotk='$no_tk' and pass='$pass_tk'";
		$run=$conn->query($sql);
		$count=$run->num_rows;
		if($count==0){
			echo '<script>alert("Sai tài khoản hoặc mật khẩu")</script>';
		}else{
			echo 'da ket noi tai khoản';
		}
	}
?>
<form action="" method="post" enctype="multipart/form-data">
<center><table width="350" border="0" style="margin-top:100px; margin-bottom: 200px">
  <tr>
    <td colspan="2" style="padding:10px"><div align="center"><h2>THANH TOÁN </h2></div></td>
    </tr>
  <tr>
    <td style="padding:10px"><div align="right">tên tài khoản </div></td>
    <td style="padding:10px"><input type="text" name="tk" /></td>
  </tr>
  <tr>
    <td style="padding:10px"><div align="right">Số tài khoản </div></td>
    <td style="padding:10px"><input type="password" name="no_tk" /></td>
  </tr>
   <tr>
    <td style="padding:10px"><div align="right">Mã pin tk </div></td>
    <td style="padding:10px"><input type="password" name="pass_tk" /></td>
  </tr>
  <tr>
    <td colspan="2" style="padding:10px"><div align="center">
      <input type="submit" name="thanhtoan" value="Thanh toán" />
    </div></td>
    </tr>
</table></center>
</form>

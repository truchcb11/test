<?php
	include('modules/config.php');
	session_start();
	if(isset($_POST['login'])){
		$user=$_POST['user'];
		$pass=$_POST['pass'];
		$sql="select * from admin where username='$user' and password='$pass' limit 1";
		$query=$conn->query($sql);
		$nums=$query->num_rows;
		if($nums>0){
			$_SESSION['login']=$user;
			header('location:adminpage.php');
		}else{
			header('location:login.php');
		}
	}
?>
<form action="" method="post">
    <center><table width="200" border="0">
      <tr>
        <td colspan="2"><div align="center">Đăng nhập</div></td>
      </tr>
      <tr>
        <td><div align="right">Username:</div></td>
        <td><input type="text" name="user" id="user"></td>
      </tr>
      <tr>
        <td><div align="right">Password</div></td>
        <td><input type="password" name="pass" id="pass"></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center">
          <input type="submit" name="login" id="login" value="Login">
        </div></td>
      </tr>
    </table></center>
</form>

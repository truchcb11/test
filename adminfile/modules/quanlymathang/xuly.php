<?php
	include('../config.php');
	$id=$_GET['id'];
	if(isset($_POST['them'])){
		$tenmathang=$_POST['tenmathang'];
		//thêm
		$sql="INSERT INTO mathang (tenmathang) VALUES ('$tenmathang')";
		$conn->query($sql);
		$conn->close();
		header('location:../../adminpage.php?quanly=quanlymathang&ac=lietke');
	}elseif(isset($_POST['sua'])){
		$tenmathang=$_POST['tenmathang'];
		//sua
		$sql="update mathang set tenmathang='$tenmathang' where id_mathang='$id'";
		$conn->query($sql);
		$conn->close();
		header('location:../../adminpage.php?quanly=quanlymathang&ac=lietke');
	}else{
		//xoa
		$sql="DELETE FROM mathang WHERE id_mathang='$id'";
		$conn->query($sql);
		$conn->close();
		header('location:../../adminpage.php?quanly=quanlymathang&ac=lietke');
	}
?>
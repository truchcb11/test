<?php
	include('../config.php');
	$id=$_GET['id'];
	if(isset($_POST['them'])){
		$tennhanhieu=$_POST['tennhanhieu'];
		//thêm
		$sql="INSERT INTO nhanhieu (tennhanhieu) VALUES ('$tennhanhieu')";
		$conn->query($sql);
		$conn->close($conn);
		header('location:../../adminpage.php?quanly=quanlynhanhieu&ac=lietke');
	}elseif(isset($_POST['sua'])){
		$tennhanhieu=$_POST['tennhanhieu'];
		//sua
		$sql="update nhanhieu set tennhanhieu='$tennhanhieu' where id_nhanhieu='$id'";
		$conn->query($sql);
		$conn->close($conn);
		header('location:../../adminpage.php?quanly=quanlynhanhieu&ac=lietke');
	}else{
		//xoa
		$sql="DELETE FROM nhanhieu WHERE id_nhanhieu='$id'";
		$conn->query($sql);
		$conn->close($conn);
		header('location:../../adminpage.php?quanly=quanlynhanhieu&ac=lietke');
	}
?>
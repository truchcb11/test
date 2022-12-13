<?php
	include('../config.php');
	$id=$_GET['id'];
	
	if(isset($_POST['them'])){
		$tensp=$_POST['tensp'];
		$hinhanh=$_FILES['hinhanh']['name'];
		$hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];
		move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
		$idmathang=$_POST['mathang'];
		$idnhanhieu=$_POST['nhanhieu'];
		$soluong=$_POST['soluong'];
		$mota=$_POST['mota'];
		$gia=$_POST['gia'];
		$sql="insert into sanpham (tensp,hinhanh,id_mathang,id_nhanhieu,soluong,mota,gia) values ('$tensp','$hinhanh','$idmathang','$idnhanhieu','$soluong','$mota','$gia')";
		$conn->query($sql);
		$conn->close();
		header('location:../../adminpage?quanly=quanlysanpham&ac=lietke');
	}elseif(isset($_POST['sua'])){
		$tensp=$_POST['tensp'];
		$hinhanh=$_FILES['hinhanh']['name'];
		$hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];
		move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
		$idmathang=$_POST['mathang'];
		$idnhanhieu=$_POST['nhanhieu'];
		$soluong=$_POST['soluong'];
		$mota=$_POST['mota'];
		$gia=$_POST['gia'];
		if($hinhanh!=''){
			$sql="update sanpham set tensp='$tensp', hinhanh='$hinhanh', id_mathang='$idmathang', id_nhanhieu='$idnhanhieu', soluong='$soluong', mota='$mota', gia='$gia' where id_sp='$id' ";
		}else{
			$sql="update sanpham set tensp='$tensp', id_mathang='$idmathang', id_nhanhieu='$idnhanhieu', soluong='$soluong', mota='$mota', gia='$gia' where id_sp='$id' ";
		}
		$conn->query($sql);
		$conn->close();
		header('location:../../adminpage?quanly=quanlysanpham&ac=lietke');
	}else{
		$sql="delete from sanpham where id_sp='$id'";
		$conn->query($sql);
		$conn->close();
		header('location:../../adminpage?quanly=quanlysanpham&ac=lietke');
	}
?>
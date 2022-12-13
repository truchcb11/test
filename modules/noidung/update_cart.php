<?php
	@session_start();
	if(isset($_GET['thoat'])&&$_GET['thoat']==1){
		unset($_SESSION['login']);
		header('location:index.php?xem=giohang');
	}
	if(isset($_SESSION['cart'])){
		//giam san pham
		if(isset($_GET['giam'])){
			$id=$_GET['giam'];
			if($_SESSION['cart'][$id]['soluong']>1){
				$_SESSION['cart'][$id]['soluong']-=1;
			}else{
				$_SESSION['cart'][$id]['soluong']=$_SESSION['cart'][$id]['soluong'];
			}
			header('location:index.php?xem=giohang');
		}
		//tang san pham
		if(isset($_GET['tang'])){
			$id=$_GET['tang'];
			$_SESSION['cart'][$id]['soluong']+=1;
			header('location:index.php?xem=giohang');
		}
		//xoa san pham
		if(isset($_GET['xoa'])){
			$id=$_GET['xoa'];
			unset($_SESSION['cart'][$id]);
			header('location:index.php?xem=giohang');
		}
	}
	//them san pham vao gio hang
	if(isset($_GET['add']) && !empty($_GET['add'])){
		$id=$_GET['add'];
		$newProduct=array();
		$query=$conn->query("select * from sanpham where id_sp='$id'");
		$row=$query->fetch_array();
		$newProduct[$row['id_sp']]=array('id'=>$row['id_sp'], 'tensp'=>$row['tensp'],'soluong'=>'','gia'=>$row['gia']);
		echo "<pre>";
		if(!isset($_SESSION['cart']) || $_SESSION['cart'] == null){
			$newProduct[$id]['soluong']=1;
			$_SESSION['cart'][$id] = $newProduct[$id];
		}else{
			if(array_key_exists($id, $_SESSION['cart'])){
				$_SESSION['cart'][$id]['soluong']+=1;
			}else{
				$newProduct[$id]['soluong']=1;
				$_SESSION['cart'][$id] = $newProduct[$id];
			}
		}
		header('location:index.php?xem=giohang');
	}

	
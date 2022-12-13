<?php
@session_start();
if(isset($_SESSION['login'])){
		echo '<h1 style="text-align:center;color:yellow;background:#00F;padding:10px;">GIỎ HÀNG CỦA BẠN | <span>Xin chào bạn:<strong><em> '.$_SESSION['login'].'</em></strong><a href="index.php?xem=update_cart&thoat=1" style="text-decoration:underline;color:#fff; margin-left:10px;">Đăng Xuất</a></span></h1>';
	}else{
		echo '<h1 style="text-align:center;color:yellow;background:#00F;padding:10px;">GIỎ HÀNG</h1>';
	}
?>

<table width="800" border="1" style="border-collapse:collapse; margin:auto; margin-top:50px; margin-bottom:50px">
  <tr style="color:#FFF; background:#F00">
    <td><div align="center">Tên sản phẩm</div></td>
    <td><div align="center">Hình ảnh</div></td>
    <td><div align="center">Giá</div></td>
    <td><div align="center">Số lượng</div></td>
    <td><div align="center">Tổng tiền</div></td>
    <td><div align="center">Quản lý</div></td>
  </tr>
  <?php
    $thanhtien=0;
    $tongtien=0;
    if(isset($_SESSION['cart'])){
        foreach($_SESSION['cart'] as $list){
			$query=$conn->query("select * from sanpham where id_sp=".$list['id']);
			$row=$query->fetch_array();
            $tongtien=$list['gia']*$list['soluong'];
            $thanhtien+=$tongtien;
  ?>
          <tr>
            <td><div align="center"><?php echo $list['tensp'] ?></div></td>
            <td><div align="center" style="padding:5px"><img src="adminfile/modules/quanlysanpham/uploads/<?php echo $row['hinhanh'] ?>" width="100px" height="100px" /></div></td>
            <td><div align="center"><?php echo number_format($list['gia']).'VNĐ' ?></div></td>
            <td><div align="center"><?php echo '<a href="index.php?xem=update_cart&giam='.$list['id'].'"><img src="images/subtract.png" width="10px" height="10px" /></a>'.' '.$list['soluong'].' '.'<a href="index.php?xem=update_cart&tang='.$list['id'].'"><img src="images/plus.png" width="10px" height="10px" /></a>' ?></div></td>
            <td><div align="center"><?php echo number_format($tongtien).'VNĐ' ?></div></td>
            <td><div align="center"><a href="index.php?xem=update_cart&xoa=<?php echo $list['id']?>"><img src="images/images.jpg" width="20px" height="20px" /></a></div></td>
          </tr>
    <?php
        }
    }
    ?>
    <tr>
    <td colspan="6" style="padding-left:10px">
    <?php
        if($thanhtien==0){
            echo '<h3>Giỏ hàng trống</h3>';
        }else{
            echo '<h3>Tổng cộng:'.' '.number_format($thanhtien).'VNĐ'.'</h3>';
        }
    ?>
    </td>
  </tr>
</table> 
 <center><table width="800" border="0" style="margin-bottom:50px">
  <tr>
    <td><div align="center"><a href="index.php">Tiếp tục mua hàng</a></div></td>
    <td><div align="center"><a href="?xem=dangky">Đăng ký mới</a></div></td>
    <td><div align="center"><a href="?xem=dangnhap">Bạn đã có tài khoản</a></div></td>
    <td> <?php
				if(isset($_SESSION['login'])&&isset($_SESSION['cart'])){
				?>
                 <p style="float:right; background:#FF0;text-decoration:none;"><a href="modules/noidung/dathang.php" style="color:#000;margin:5px;">Đặt hàng</a></p>
				<?php
				}
				?></td>
  </tr>
</table></center>

              
        	
  

    


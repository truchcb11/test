<div class="content">
	<?php
    	if(isset($_GET['quanly'])){
			$tam=$_GET['quanly'];
		}else{
			$tam='';
		}
		if($tam=='quanlymathang'){
			include('modules/quanlymathang/main.php');
		}elseif($tam=='quanlynhanhieu'){
			include('modules/quanlynhanhieu/main.php');
		}elseif($tam=='quanlysanpham'){
			include('modules/quanlysanpham/main.php');
		}elseif($tam=='search'){
			include('search.php');
		}else{
			include('modules/quanlysanpham/main.php');
		}
	?>
</div>
<div class="clear"></div>
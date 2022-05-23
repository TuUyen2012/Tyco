
<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="view1.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<script type="text/javascript">
	function datHang(){
		confirm("Bạn có muốn đặt hàng không");
	}
	</script>
<header>
<?php require'menu_home.php' ?>
<div style="text-align: center;padding: 10px; background-color:#0099ff;width: 30%;margin-left: 35%;margin-top: 30px;margin-bottom: 10px; "><a href="hoa_don.php">Xem hóa đơn</a></div>	
<?php 

if(empty($_SESSION['gio_hang'])){
	echo '<h1 style="color:red;font-size:60px;position:fixed;top: 300px;right:350px">Bạn chưa có gì trong giỏ hàng</h1	>';
}
else{
	$gio_hang = $_SESSION['gio_hang'];
	?>
	
	<table border = "1" width="100%" style="background:white;margin-top:30px;font-size: 30px "> 
		<tr>
			<th>Tên</th>
			<th>Ảnh</th>
			<th>Giá</th>
			<th>Số Lượng</th>
			<th>Thành Tiền</th>
			<th></th>
		</tr>
		<?php foreach ($gio_hang as $ma_san_pham => $san_pham): ?>
			<tr>
				<td>
					<?php echo $san_pham['ten_san_pham'] ?>
				</td>
				<td>
					<img src="anh_san_pham/<?php echo $san_pham['anh'] ?>" height='120'>
				</td>
				<td>
					<?php echo $san_pham['gia'] ?>
				</td>
				<td>
					<a href="giam_so_luong_san_pham_trong_gio_hang.php?ma_san_pham=<?php echo $ma_san_pham?>"><b style="font-size: 20px; color: red">- &emsp;&emsp;   </a>
					<?php echo $san_pham['so_luong'] ?>
					<a href="tang_so_luong_san_pham_trong_gio_hang.php?ma_san_pham=<?php echo $ma_san_pham?>"><b style="font-size: 20px; color: #009933">  &emsp;&emsp; +</b></a>
				</td>
				<td>
					<?php echo $san_pham['gia']*$san_pham['so_luong'] ?>
				</td>
				<td><a onclick='return confirm("Bạn có chắc chắn muốn xóa?")' href="xoa_san_pham_trong_gio_hang.php?ma_san_pham=<?php echo $ma_san_pham ?>"><i style="color: red;" class="fa fa-trash"></i><b style="color: red;"></b></a></td>
			</tr>
		<?php endforeach ?>
	</table>
	
	<div style="text-align: center;padding: 10px; background-color:#ff6666;width: 30%;margin-left: 35%;margin-bottom: 10px;margin-top: 40px;"><a onclick='return confirm("Bạn chắc chắn muốn xóa?")' href="delete_gio_hang.php">Xoá giỏ hàng</div>
	</a>

	
	
	<br>
	<br><hr>
	
	<?php if(empty($_SESSION['ma_khach_hang'])){
		echo '<h1 style="color:red;font-size:60px;text-align:center;">Bạn phải đăng nhập để thanh toán</h1	>';
	}else{  ?>
	<?php
	
	require 'connect.php';
	$ma_khach_hang = $_SESSION['ma_khach_hang'];
	$sql = "select * from khach_hang where ma_khach_hang = '$ma_khach_hang'";
	$result = mysqli_query($connect,$sql);
	$each = mysqli_fetch_array($result);
  ?>
	<form action="process_dat_hang.php" method="post" >
		<center><table border="1" style="font-size: 25px;background: white;text-align: center;">
			<tr><td>Tên người nhận</td>
		<td><input type="text" name="ten_nguoi_nhan" value=<?php echo $each['ten_khach_hang'] ?>></td>
			</tr>
		<tr>
			<td>Số điện thoại người nhận:</td>
			<td><input type="text" name="sdt_nguoi_nhan" value=<?php echo $each['sdt'] ?>></td>
		</tr>
		<tr>
			<td>Địa chỉ người nhận:</td>
			<td><textarea name='dia_chi_nguoi_nhan' cols="30" rows="5"></textarea></td>
		</tr>
		<tr><td colspan="2 "><div style="text-align: center; background-color: seagreen;width: 100%;"><input style="font-size: 24px;" type="submit" name="submit" value="Đặt hàng" onclick="datHang()"></div></td></tr>
	</table></center>
	</form>
	<?php } ?>
<?php } ?>

</body>
</html>
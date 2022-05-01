<?php 
session_start();
if(empty($_SESSION['ma_khach_hang']))
{
	header("location:form_login.php?error=Đăng nhập đi");
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$ma_hoa_don= $_GET['ma_hoa_don'];
		require 'connect.php';
		$sql = "select * from hoa_don_chi_tiet join san_pham on hoa_don_chi_tiet.ma_san_pham= san_pham.ma_san_pham where ma_hoa_don = '$ma_hoa_don'";
		$result = mysqli_query($connect,$sql);
	?>


	<table border="1px"  width="100%" cellspacing="0px" >
	 	<tr style="background-color: blue; color: red; font-size: 32px" >
	 		<th>Mã hóa đơn</th>	
	 		<th>Tên sản phẩm</th>
	 		<th>Ảnh sản phẩm</th>
	 		<th>Số lượng</th>
	 		<th>Giá</th>
	 		
	 	</tr>
	 	
	 		
	 	<?php foreach ($result as $each): ?>
	 		<tr style="font-size: 20px">
	 			<td>
	 			<?php echo $each['ma_hoa_don']; ?>
	 		</td>	
	 		<td>
	 			<?php echo $each['ten_san_pham']; ?>
	 		</td>
	 		<td>
			 <img src="anh_san_pham/<?php echo $each['anh'] ?>" height = '210'>
	 		</td>
	 		<td>
	 			<?php echo $each['so_luong']; ?>
	 		</td>
	 		<td>
	 			<?php echo $each['gia']?>
	 		</td>

	
	 		
	 	</tr>
	 <?php endforeach ?>
	 </table>
	
	  
	

</body>
</html>
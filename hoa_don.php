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
	<link rel="stylesheet" href="view1.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<?php require'menu_home.php' ?>
	<?php
		$ma_khach_hang = $_SESSION['ma_khach_hang'];
		require 'connect.php';
		$sql= "select * from hoa_don where ma_khach_hang = '$ma_khach_hang' ";
		$result = mysqli_query($connect,$sql);

	?>
	<div style="padding-top: 100px;"></div>
	<table border="1px"  width="100%" cellspacing="0px" style="text-align: center;" >
	 	<tr style="background-color: blue; color: red; font-size: 32px" >
	 		<th>Mã hóa đơn</th>	
	 		<th>Tên khách hàng</th>
	 		<th>SĐT khách hàng</th>
			 <th>Địa chỉ</th>
			 <th>Thời gian đặt</th>
			 <!-- Thay đổi -->
			 <th>Tình Trạng</th>
			 <th>Hủy</th>
	 		<th>Xem chi tiết đơn hàng</th>
	 		
	 	</tr>
	 	
	 		
	 	<?php foreach ($result as $each): 
		 	#Thay đổi
		 	$tinh_trang = '';
		 	if($each['tinh_trang'] == 0){
				 $tinh_trang = 'Chưa duyệt';
			}
			if($each['tinh_trang'] == 1){
				$tinh_trang = 'Đang giao hàng';
			}
			if($each['tinh_trang'] == 2){
				$tinh_trang = 'Đã giao';
			}
			if($each['tinh_trang'] == 3){
				$tinh_trang = 'Đã hủy';
			}
			if($each['tinh_trang'] == 4){
				$tinh_trang = 'Không giao được hàng';
			}

			
		?>
			
	 		<tr style="font-size: 20px">
	 			<td>
	 			<?php echo $each['ma_hoa_don']; ?>
	 		</td>	
	 		<td>
	 			<?php echo $each['ten_nguoi_nhan']; ?>
	 		</td>
	 		<td>
	 			<?php echo $each['sdt_nguoi_nhan']; ?>
	 		</td>
	 		<td>
	 			<?php echo $each['dia_chi_nguoi_nhan']; ?>
			 </td>
			 <td>
	 			<?php echo $each['thoi_gian_dat']; ?>
	 		</td>
    		</form>
			 <!-- Thay đổi -->
			 <td>
	 			<?php echo $tinh_trang; ?>
	 		</td>
			 <td>
			 <a href="huy_don.php?ma_hoa_don=<?php echo $each['ma_hoa_don']?>"><b style="color:darkgreen;">Hủy đơn</b></a>
			</td>
	 		<td>
	 			<a href="xem_chi_tiet_don_hang.php?ma_hoa_don=<?php echo $each['ma_hoa_don']?>"><b style="color:darkgreen;">Xem</b></a>
	 		</td>

	
	 		
	 	</tr>
	 <?php endforeach ?>
	 </table>
	
	  
	<?php mysqli_close($connect); ?>
	

</body>
</html>
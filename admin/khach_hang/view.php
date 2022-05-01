<?php 
session_start();
if(empty($_SESSION['ma_admin']))
{
	header("location:../form_login.php?error=Đăng nhập đi");
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	<?php 
		require '../../connect.php';
		$sql = "select * from khach_hang";
		$result = mysqli_query($connect,$sql);
	?>
    <?php   require '../khu_vuc_admin/menu_admin.php'; ?>

	
	<center> <table border="1px"  width="80%" cellspacing="0px" >
	 	<tr style="color: red; font-size: 32px" >	
	 		<th>Họ và tên</th>
	 		<th>Địa chỉ</th>
	 		<th>Số điện thoại</th>
	 		<th>Giới tính</th>
	 		<th>Email</th>
	 		<th>Sửa</th>
	 		<th>Xóa</th>
	 	</tr>
	 	
	 		
	 	<?php foreach ($result as $each): ?>
	 		<tr style="font-size: 20px;color: black;">
	 		<td>
	 			<?php echo $each['ten_khach_hang']; ?>
	 		</td>
	 		<td>
	 			<?php echo $each['dia_chi'] ?>
	 		</td>	
	 		
	 		
	 		<td>
	 			<?php echo $each['sdt'] ?>
	 		</td>
	 		<td>
	 				<?php
	 			if($each['gioi_tinh']==0) {
	 				echo "Nam";
	 			}else
	 			{
	 				echo "Nữ";
	 			}
	 			?>
	 		</td>
	 		<td>
	 			<?php echo $each['email'] ?>
	 		</td>	
	
	 		<td>
	 			<a href="form_update.php?ma_khach_hang=<?php echo $each['ma_khach_hang'] ?>"><b style="color: green;"> Sửa</b></a>
	 		</td>
	 		<td>
	 			<a onclick='return confirm("Bạn có chắc chắn muốn xóa?")' href="delete.php?ma_khach_hang=<?php echo $each['ma_khach_hang'] ?>"><u style="color: #ff8080;">Xóa</u></a>
	 		</td>	
	 	</tr>
	 <?php endforeach ?>
	 </table></center>
	 <br>
	 <hr>
	  
	  
	<?php mysqli_close($connect); ?>
</body>
</html>
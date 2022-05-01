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
	<link rel="stylesheet" href="">
</head>
<body>
<?php   require '../khu_vuc_admin/menu_admin.php'; ?>
	<?php 
		echo "Welcome ". $_SESSION["ten_admin"]."<br>";
		require '../../connect.php';
		$ma = $_SESSION["ma_admin"];
		$sql = "select * from admin where ma_admin != '$ma' and cap_do != 1";
		$result = mysqli_query($connect,$sql);
	?>
	
	 <a href="form_insert.php">Thêm admin</a>
	<center> <table border="1px"  width="80%" cellspacing="0px" >
	 	<tr style=" color: red; font-size: 32px" >	
	 		<th>Tên</th>
	 		<th>Email</th>
	 		<th>Cấp độ</th>
	 		<th>Sửa</th>
	 		<th>Xóa</th>
	 	</tr>
	 	
	 		
	 	<?php foreach ($result as $each): ?>
	 		<tr style="font-size: 20px">
	 		<td>
	 			<?php echo $each['ten_admin'] ?>
	 		</td>	
	 		<td>
	 			<?php echo $each['email'] ?>
	 		</td>	
	 		<td>
	 			<?php
	 			if($each['cap_do']==0) {
	 				echo "admin";
	 			}else
	 			{
	 				echo "super admin";
	 			}
	 			?>
	 		</td>
	 		<td>
	 			<a href="form_update.php?ma_admin=<?php echo $each['ma_admin'] ?>"><b style="color: green;"> Sửa</b></a>
	 		</td>
	 		<td>
	 			<a onclick='return confirm("Bạn có chắc chắn muốn xóa?")' href="delete.php?ma_admin=<?php echo $each['ma_admin'] ?>"><u style="color: #ff8080;">Xóa</u></a>
	 		</td>	
	 	</tr>
	 <?php endforeach ?>
	 </table></center>
	<?php mysqli_close($connect); ?>
	
</body>
</html>
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
	<link rel="stylesheet" href="khach_hang.css">
</head>
<body>
<?php   require '../khu_vuc_admin/menu_admin.php'; ?>

	<form action="process_insert.php" method="POST">
	<center>
		<table>
			<tr>
				<td>Họ và tên:</td>
		
				<td><input type="text" name="ten_khach_hang"></td>
			</tr>
		<tr>
			<td>Email:</td>
			<td><input type="email" name="email"></td>
		</tr>
		<tr>
			<td>Mật khẩu:</td>
			<td><input type="password" name="mat_khau"></td>
		</tr>
		<tr>
		
			<td colspan="2" style="text-align: center;"><button>Thêm</button></td>
		</tr>
	</table>
	</center>


	</form>
</body>
</html>
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
		$ma_khach_hang = $_GET['ma_khach_hang'];
		require '../../connect.php';
		$sql = "select * from khach_hang where ma_khach_hang = '$ma_khach_hang'";
		$result = mysqli_query($connect,$sql);
		$each = mysqli_fetch_array($result);
	?>	
	<form method="POST" action="process_update.php">
	<center><table border="1">
		
		<input type="hidden" name="ma_khach_hang" value="<?php echo $each['ma_khach_hang'] ?>">
		<tr>
			<td>Họ và tên:</td>
			<td><input type="text" name="ten_khach_hang" value="<?php echo $each['ten_khach_hang'] ?>"></td>
		</tr>
		<tr>
			<td>Địa chỉ:</td>
			<td><input type="text" name="dia_chi" value="<?php echo $each['dia_chi'] ?>"></td>
		</tr>
			<tr>
			<td>Số điện thoại:</td>
			<td><input type="number" name="sdt" value="<?php echo $each['sdt'] ?>"></td>
		</tr>
		<tr>
		<td>Email:</td>
			<td><input type="email" name="email" value="<?php echo $each['email'] ?>"></td>
		</tr>
		<tr>
			<td>Mật khẩu:</td>
			<td><input type="password" name="mat_khau" value="<?php echo $each['mat_khau'] ?>"></td>
		</tr>
		<tr><td colspan="2" style="text-align: center;"><button>Sửa</button></td></tr>
	</table></center>
	</form>
</body>
</html>
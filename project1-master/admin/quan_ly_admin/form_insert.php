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
	<link rel="stylesheet" href="admin.css">
</head>

<body>

<?php   require '../khu_vuc_admin/menu_admin.php'; ?>

<?php 
	$error = '';
	if(isset($_GET['error'])){
		$error = $_GET['error'];
		
		}
?>
<h1>
	<?php echo $error ?>
</h1>
	
<form method="POST" action="process_insert.php">
	<center><table border="1" style="width: 20%;">
	<tr>
		<td>
			Tên:
		</td>
		<td>
			<input type="text" name="ten_admin">
		</td>
		
	</tr>
	<tr>
		<td>
			E-mail:
		</td>
		<td>
			<input type="email" name="email">
		</td>
	</tr>
		
	<tr>
		<td>
			Mật khẩu:
		</td>
		<td>
			<input type="password" name="mat_khau">
		</td>
	</tr>
	<tr>
		<td>Cấp độ:</td>
		<td><input type="radio" name="cap_do" value="0" checked="checked">Admin
		<br>
		<input type="radio" name="cap_do" value="1">Super Admin
		<br></td>
	</tr>
	<tr><td colspan="2" style="text-align: center;" ><button style="background-color:green;font-size: 20px;">Thêm</button></td></tr>
</table></center>
</form>
</body>
</html>
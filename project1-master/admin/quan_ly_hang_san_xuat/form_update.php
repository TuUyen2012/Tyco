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
<?php 
	$ma_hang_san_xuat = $_GET['ma_hang_san_xuat'];
	require '../../connect.php';
	$sql = "select * from hang_san_xuat where ma_hang_san_xuat = '$ma_hang_san_xuat'";
	$result = mysqli_query($connect,$sql);
	$each = mysqli_fetch_array($result);
?>
<?php   require '../khu_vuc_admin/menu_admin.php'; ?>
<form method="POST" action="process_update.php">
	<center><table border="1">
	<input type="hidden" name="ma_hang_san_xuat" value="<?php echo $each['ma_hang_san_xuat'] ?>">
	<tr>
		<td>Tên:</td>
		<td><input type="text" name="ten_hang_san_xuat" value="<?php echo $each['ten_hang_san_xuat'] ?>"></td>
		</tr>
	<tr>
	<td colspan="2"><button>Sửa</button></td>
	</tr>
</table></center>
</form>
</body>
</html>
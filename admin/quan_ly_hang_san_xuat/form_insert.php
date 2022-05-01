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
	<meta charset="utf-8">
	<link rel="stylesheet" href="">
</head>
<body>
<?php 
	$error = '';
	if(isset($_GET['error'])){
		$error = $_GET['error'];
		
		}
?>
<h1>
	<?php echo $error ?>
</h1>
<?php   require '../khu_vuc_admin/menu_admin.php'; ?>
	<form action="process_insert.php" method="POST">
		<center><table border="1">
			<tr>
				<td>Hãng sản xuất</td>
				<td><input type="text" name="ten_hang_san_xuat"></td>
			</tr>
		
		<tr>
		<td colspan="2" ><button>Thêm</button></td>
	</tr>
</table></center>


	</form>
</body>
</html>
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
	$error = '';
	if(isset($_GET['error'])){
		$error = $_GET['error'];
		
		}
?>
<h1>
	<?php echo $error ?>
</h1>

<form method="POST" action="process_insert_sp.php" enctype="multipart/form-data">
<center><table border="1">
	<tr>
	<td>Tên sản phẩm:</td>
	<td><input type="text" name="ten_san_pham"></td>
	</tr>
	<tr>
	<td>Ảnh:</td>
	<td><input type="file" name="anh" accept="image/*"></td>
	</tr>
	<tr>
	<td>Giá:</td>
	<td><input type="number" name="gia"></td>
	</tr>
	<tr>
	<td>Mô tả:</td>
	<td><textarea name="mo_ta"></textarea></td>
	</tr>
	<tr>
	<td>Mã hãng sản xuất</td>
	<td>
		<select name="ma_hang_san_xuat" id="">
			<?php
require '../../connect.php';
$sql = "SELECT * from hang_san_xuat";
$res = mysqli_query($connect, $sql);
while($row = mysqli_fetch_array($res)) {
?>
	<option value="<?php echo $row["ma_hang_san_xuat"] 	?>"><?php echo $row["ten_hang_san_xuat"] 	?></option>
<?php
}
			?>
		</select>
	</td>
	</tr>
	<tr>
		<td colspan="2" style="text-align: center;">
	<button style="font-size: 20px; background: green;">Thêm</button>
		</td>
	</tr>
</table></center>
</form>
</body>
</html>
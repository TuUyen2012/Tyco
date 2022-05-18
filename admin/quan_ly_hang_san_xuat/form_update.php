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

	<div style="display: flex;justify-content: space-between;">
		<?php 
			$ma_hang_san_xuat = $_GET['ma_hang_san_xuat'];
			require '../../connect.php';
			$sql = "select * from hang_san_xuat where ma_hang_san_xuat = '$ma_hang_san_xuat'";
			$result = mysqli_query($connect,$sql);
			$each = mysqli_fetch_array($result);
		?>
		<?php   require '../khu_vuc_admin/menu_admin.php'; ?>
		<form class="container-fluid" style="width: 50%;margin: 5% auto;" method="POST" action="process_update.php">
			<input type="hidden" name="ma_hang_san_xuat" value="<?php echo $each['ma_hang_san_xuat'] ?>">
			<div class="form-group">
				<label for="ten_hang_san_xuat">Name</label>
				<input class="form-control" type="text" name="ten_hang_san_xuat" value="<?php echo $each['ten_hang_san_xuat'] ?>">
			</div>
			<button class="btn btn-primary" style="width: 10%">Update</button>
		</form>
	</div>

</body>

</html>
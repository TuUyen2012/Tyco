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
		<?php   require '../khu_vuc_admin/menu_admin.php'; ?>
		<?php 
		$ma_khach_hang = $_GET['ma_khach_hang'];
		require '../../connect.php';
		$sql = "select * from khach_hang where ma_khach_hang = '$ma_khach_hang'";
		$result = mysqli_query($connect,$sql);
		$each = mysqli_fetch_array($result);
	?>
		<form class="container-fluid" style="width: 60%;margin: 5% auto;" method="POST" action="process_update.php">
			<input type="hidden" name="ma_khach_hang" value="<?php echo $each['ma_khach_hang'] ?>">
			<div class="form-group">
				<label for="ten_khach_hang">Full name</label>
				<input type="text" class="form-control" id="ten_khach_hang" name="ten_khach_hang"
					value="<?php echo $each['ten_khach_hang'] ?>">
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" class="form-control" id="email" name="email" value="<?php echo $each['email'] ?>">
			</div>
			<div class="form-group">
				<label for="dia_chi">Address</label>
				<input type="text" class="form-control" id="dia_chi" name="dia_chi"
					value="<?php echo $each['dia_chi'] ?>">
			</div>
			<div class="form-group">
				<label for="sdt">Phone</label>
				<input type="number" class="form-control" id="sdt" name="sdt" value="<?php echo $each['sdt'] ?>">
			</div>
			<div class="form-group">
				<label for="mat_khau">Password</label>
				<input type="password" class="form-control" id="mat_khau" name="mat_khau"
					value="<?php echo $each['mat_khau'] ?>">
			</div>
			<div class="form-group">
				<label for="gioi_tinh" style="display:block">Gender</label>
				<input type="radio" value="0" name="gioi_tinh" <?php if($each['gioi_tinh']==0) echo "checked" ; ?>>
				Male
				<input type="radio" value="1" style="margin-left: 20px;" name="gioi_tinh" <?php if($each['gioi_tinh']==1) echo "checked" ; ?>> Female
			</div>
			<button class="btn btn-primary" style="width: 10%">Update</button>
		</form>
	</div>

</body>

</html>
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
	<div style="display: flex;justify-content: space-between;">
		<?php   require '../khu_vuc_admin/menu_admin.php'; ?>
		<form class="container-fluid" style="width: 60%;margin: 5% auto;" method="POST" action="process_insert.php">
			<div class="form-group">
				<label for="ten_khach_hang">Full name</label>
				<input type="text" class="form-control" id="ten_khach_hang" name="ten_khach_hang">
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" class="form-control" id="email" placeholder="name@example.com" name="email">
			</div>
			<div class="form-group">
				<label for="dia_chi">Address</label>
				<input type="text" class="form-control" id="dia_chi" name="dia_chi">
			</div>
			<div class="form-group">
				<label for="sdt">Phone</label>
				<input type="number" class="form-control" id="sdt" name="sdt">
			</div>
			<div class="form-group">
				<label for="mat_khau">Password</label>
				<input type="password" class="form-control" id="mat_khau" name="mat_khau">
			</div>
			<div class="form-group">
				<label for="gioi_tinh" style="display:block">Gender</label>
				<input type="radio" value="0" checked="checked" name="gioi_tinh"> Male
				<input type="radio" value="1" style="margin-left: 20px;" name="gioi_tinh"> Female
			</div>
			<button class="btn btn-primary" style="width: 10%">Add user</button>
		</form>
	</div>
</body>

</html>
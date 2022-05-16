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
	<form class="container-fluid" style="width: 60%;" method="POST" action="process_insert.php">
		<div class="form-group">
			<label for="full_name">Full name</label>
			<input type="text" class="form-control" id="full_name" name="ten_admin">
		</div>
		<div class="form-group">
			<label for="email">Email</label>
			<input type="email" class="form-control" id="email" placeholder="name@example.com" name="email">
		</div>
		<div class="form-group">
			<label for="password">Password</label>
			<input type="password" class="form-control" id="password" name="mat_khau">
		</div>
		<div class="form-group">
			<label for="password" style="display:block">Level</label>
			<input type="radio" value="0" checked="checked" name="cap_do"> Admin
			<input type="radio" value="1" style="margin-left: 20px;" name="cap_do"> Supper Admin
		</div>
		<button class="btn btn-primary" style="width: 10%">Add</button>
	</form>
</body>
</html>
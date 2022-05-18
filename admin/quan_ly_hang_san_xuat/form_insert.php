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
	<div style="display: flex;justify-content: space-between;">
		<?php 
	$error = '';
	if(isset($_GET['error'])){
		$error = $_GET['error'];
		
		}
?>

		<?php   require '../khu_vuc_admin/menu_admin.php'; ?>
		<form class="container-fluid" style="width: 50%;margin: 5% auto;" method="POST" action="process_insert.php">
			<div class="form-group">
				<label for="ten_hang_san_xuat">Name</label>
				<input class="form-control" type="text" name="ten_hang_san_xuat">
			</div>
			<button class="btn btn-primary" style="width: 10%">Add</button>
		</form>
	</div>

</body>

</html>
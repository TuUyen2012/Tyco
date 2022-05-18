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
	<div  style="display: flex;justify-content: space-between;">
		<?php 
	$ma_admin = $_GET['ma_admin'];
	require '../../connect.php';
	$sql = "select * from admin where ma_admin = '$ma_admin'";
	$result = mysqli_query($connect,$sql);
	$each = mysqli_fetch_array($result);
?>
	<?php   require '../khu_vuc_admin/menu_admin.php'; ?>
	<form class="container-fluid" style="width: 60%;margin: 5% auto;" method="POST" action="process_update.php">
		<input type="hidden" name="ma_admin" value="<?php echo $each['ma_admin'] ?>">
		<div class="form-group">
			<label for="full_name">Full name</label>
			<input class="form-control" type="text" name="ten_admin" value="<?php echo $each['ten_admin'] ?>">
		</div>
		<div class="form-group">
			<label for="email">Email</label>
			<input class="form-control" type="email" name="email" value="<?php echo $each['email'] ?>">
		</div>
		<div class="form-group">
			<label for="password">Password</label>
			<input class="form-control" type="password" name="mat_khau" value="<?php echo $$each['mat_khau'] ?>">
		</div>
		<div class="form-group">
			<label for="cap_do" style="display:block">Level</label>
			<input type="radio" name="cap_do" value="0" <?php if($each['cap_do']==0) echo "checked" ; ?>>Admin
			<input type="radio" style="margin-left: 20px;" name="cap_do" value="1" <?php if($each['cap_do']==1)
				echo "checked" ; ?>>Super Admin
		</div>
		<button class="btn btn-primary" style="width: 10%">Update</button>
	</form>
	</div>
	
</body>
</html>
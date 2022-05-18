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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
	<div style="display: flex;justify-content: space-between;">
		<?php   require '../khu_vuc_admin/menu_admin.php'; ?>
		<?php 
		require '../../connect.php';
		$ma = $_SESSION["ma_admin"];
		$sql = "select * from admin where ma_admin != '$ma' and cap_do != 1";
		$result = mysqli_query($connect,$sql);
	?>

		<div style="flex: 1">
			<div class="header container-fluid">
				<a class="btn btn-primary" href="form_insert.php">
					<i class="fa-solid fa-user-plus"></i>
					Add admin
				</a>
			</div>
			</br>
			<center>
				<table class="table table-hover table_admin" border="1px" cellspacing="0px">
					<tr class="success">
						<th><input type="checkbox"></th>
						<th>Full name</th>
						<th>Email</th>
						<th>Level</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>


					<?php foreach ($result as $each): ?>
					<tr>
						<td>
							<input type="checkbox">
						</td>
						<td>
							<?php echo $each['ten_admin'] ?>
						</td>
						<td>
							<?php echo $each['email'] ?>
						</td>
						<td>
							<?php
	 			if($each['cap_do']==0) {
	 				echo "admin";
	 			}else
	 			{
	 				echo "super admin";
	 			}
	 			?>
						</td>
						<td>
							<a href="form_update.php?ma_admin=<?php echo $each['ma_admin'] ?>">
								<i class="fa-solid fa-pen-to-square"></i>
							</a>
						</td>
						<td>
							<a onclick='return confirm("Bạn có chắc chắn muốn xóa?")'
								href="delete.php?ma_admin=<?php echo $each['ma_admin'] ?>">
								<i class="fa-solid fa-trash-can"></i>
							</a>
						</td>
					</tr>
					<?php endforeach ?>
				</table>
			</center>
			<?php mysqli_close($connect); ?>
		</div>
	</div>
</body>

</html>
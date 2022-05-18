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
	<style>
		.header {
			float: right;
			margin: 1%;
		}
	</style>
</head>

<body>
	<div style="display: flex;justify-content: space-between;">
		<?php 
		require '../../connect.php';
		$sql = "select * from khach_hang";
		$result = mysqli_query($connect,$sql);
	?>
		<?php   require '../khu_vuc_admin/menu_admin.php'; ?>

		<div style="flex: 1">
			<div class="header container-fluid">
				<a class="btn btn-primary" href="form_insert.php">
					<i class="fa-solid fa-user-plus"></i>
					Add user
				</a>
			</div>
			</br>
			<center style="margin: 5%;">
				<table border="1px" class="table table-hover" cellspacing="0px">
					<tr class="success">
						<th><input type="checkbox"></th>
						<th>Full name</th>
						<th>Address</th>
						<th>Phone number</th>
						<th>Gender</th>
						<th>Email</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>


					<?php foreach ($result as $each): ?>
					<tr>
						<td>
							<input type="checkbox">
						</td>
						<td>
							<?php echo $each['ten_khach_hang']; ?>
						</td>
						<td>
							<?php echo $each['dia_chi'] ?>
						</td>
						<td>
							<?php echo $each['sdt'] ?>
						</td>
						<td>
							<?php
	 			if($each['gioi_tinh']==0) {
	 				echo "Male";
	 			}else
	 			{
	 				echo "Female";
	 			}
	 			?>
						</td>
						<td>
							<?php echo $each['email'] ?>
						</td>

						<td>
							<a href="form_update.php?ma_khach_hang=<?php echo $each['ma_khach_hang'] ?>"><i
									class="fa-solid fa-pen-to-square"></i></a>
						</td>
						<td>
							<a onclick='return confirm("Bạn có chắc chắn muốn xóa?")'
								href="delete.php?ma_khach_hang=<?php echo $each['ma_khach_hang'] ?>">
								<i class="fa-solid fa-trash-can"></i>
							</a>
						</td>
					</tr>
					<?php endforeach ?>
				</table>
			</center>

		</div>

		<?php mysqli_close($connect); ?>
	</div>

</body>

</html>
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
		$sql = "select * from hang_san_xuat";
		$result = mysqli_query($connect,$sql);
	?>
		<?php   require '../khu_vuc_admin/menu_admin.php'; ?>

		<div style="flex: 1;">
			<div class="header container-fluid">
				<a class="btn btn-primary" href="form_insert.php">
					<i class="fa-solid fa-user-plus"></i>
					Add manufacturer
				</a>
			</div>
			</br>

			<center style="margin: 5%">
				<table class="table table-hover" border="1px" width="80%" cellspacing="0px">
					<tr class="success">
						<th>Producer</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>


					<?php foreach ($result as $each): ?>
					<tr>
						<td>
							<?php echo $each['ten_hang_san_xuat']; ?>
						</td>


						<td>
							<a href="form_update.php?ma_hang_san_xuat=<?php echo $each['ma_hang_san_xuat'] ?>">
								<i class="fa-solid fa-pen-to-square"></i>
							</a>
						</td>
						<td>
							<a onclick='return confirm("Bạn có chắc chắn muốn xóa?")'
								href="delete.php?ma_hang_san_xuat=<?php echo $each['ma_hang_san_xuat'] ?>">
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
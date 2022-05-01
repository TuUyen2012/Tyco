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

</head>

<body >
	<?php 
		require '../../connect.php';
		$sql = "select * from hang_san_xuat";
		$result = mysqli_query($connect,$sql);
	?>
	<?php   require '../khu_vuc_admin/menu_admin.php'; ?>

	
	 <center><table border="1px"  width="80%" cellspacing="0px" >
	 	<tr style="color: red; font-size: 32px" >	
	 	
	 		<th>Tên hãng sản xuất</th>
	 		<th>Sửa</th>
	 		<th>Xóa</th>
	 	</tr>
	 	
	 		
	 	<?php foreach ($result as $each): ?>
	 		<tr style="font-size: 20px;">
	 		<td>
	 			<?php echo $each['ten_hang_san_xuat']; ?>
	 		</td>
	 		
	
	 		<td>
	 			<a href="form_update.php?ma_hang_san_xuat=<?php echo $each['ma_hang_san_xuat'] ?>"><b style="color: green;"> Sửa</b></a>
	 		</td>
	 		<td>
	 			<a onclick='return confirm("Bạn có chắc chắn muốn xóa?")' href="delete.php?ma_hang_san_xuat=<?php echo $each['ma_hang_san_xuat'] ?>"><u style="color: #ff8080;">Xóa</u></a>
	 		</td>	
	 	</tr>
	 <?php endforeach ?>
	 </table></center>
	 <br>
	 <hr>
	  <a href="form_insert.php">Thêm hãng sản xuất</a>
	  
	<?php mysqli_close($connect); ?>

</body>
</html>
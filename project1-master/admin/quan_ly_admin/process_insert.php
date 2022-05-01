<?php 
if(empty($_POST['mat_khau'])){
	header("location:form_insert.php?error=Bạn không được để trống");
	exit();
}
	$ten_admin = $_POST['ten_admin'];
	$email = $_POST['email'];
	$mat_khau = $_POST['mat_khau'];
	$cap_do = $_POST['cap_do'];

	require '../../connect.php';
	$sql = "insert into admin(ten_admin,email,mat_khau,cap_do) values('$ten_admin','$email','$mat_khau','$cap_do')";
	mysqli_query($connect,$sql);
	mysqli_close($connect);
	header('location:index.php');


 
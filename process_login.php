<?php 

$email = $_POST['email'];
$mat_khau = $_POST['mat_khau'];


require 'connect.php';

$sql = "select * from khach_hang
where email = '$email' and mat_khau = '$mat_khau'";
$result = mysqli_query($connect,$sql);

//đếm số người trùng email và mật khẩu đã nhập
$dem = mysqli_num_rows($result);

if($dem==1){
	session_start();
	$each = mysqli_fetch_array($result);
	$_SESSION['ma_khach_hang'] = $each['ma_khach_hang'];
	$_SESSION['ten_khach_hang'] = $each['ten_khach_hang'];

	header("location:home.php");
	echo "Xin chao $ten_khach_hang";
}
else{
	header("location:form_login.php?error=Đăng nhập thất bại");
}
<?php
	$email = $_POST['email'];
	$mat_khau = $_POST['mat_khau'];

	require '../connect.php';
	$sql = "select * from admin where email = '$email' and mat_khau ='$mat_khau'";
	$result = mysqli_query($connect,$sql);
	$count = mysqli_num_rows($result);
	if($count==1){
		session_start();
		//lấy người đã đăng nhập
		$each = mysqli_fetch_array($result);
		$_SESSION['ma_admin'] = $each ['ma_admin'];
		$_SESSION['ten_admin'] = $each ['ten_admin'];
		$_SESSION['cap_do'] = $each ['cap_do'];
		//kiểm tra có tích ghi nhớ đăng nhập hay không?
		if(isset($_POST['ghi_nho'])){
			setcookie('ma_admin',$each['ma_admin'],time()+86400*60);
		}
		header("location:index.php");
	}else{
		header("location:form_login.php?error=Tài khoản hoặc mật khẩu không đúng");
	}
mysqli_close($connect);

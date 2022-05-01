<?php
	if(empty($_POST['ten_hang_san_xuat'])){
		header("location:form_insert.php?error=Bạn không được để trống");
		exit();
	}
	$ten_hang_san_xuat = $_POST['ten_hang_san_xuat'];
	

		require '../../connect.php';
		
		$sql = "insert into hang_san_xuat (ten_hang_san_xuat) values ('$ten_hang_san_xuat')";
		mysqli_query($connect,$sql);
		mysqli_close($connect);
		header('location:index.php');
		
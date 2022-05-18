<?php
	$ten_khach_hang = $_POST['ten_khach_hang'];
	$email = $_POST['email'];
	$mat_khau = $_POST['mat_khau'];


		require '../../connect.php';
		mysqli_set_charset($connect,'utf8');
		$sql = "insert into khach_hang(ten_khach_hang,email, dia_chi, sdt, mat_khau, gioi_tinh)
		values ('$ten_khach_hang','$email', '$dia_chi', '$sdt','$mat_khau', '$gioi_tinh)";
		mysqli_query($connect,$sql);
		mysqli_close($connect);
		header('location:view.php');
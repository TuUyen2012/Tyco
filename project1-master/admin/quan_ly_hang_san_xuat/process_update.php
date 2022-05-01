<?php
    $ma_hang_san_xuat  = $_POST['ma_hang_san_xuat'];
	$ten_hang_san_xuat = $_POST['ten_hang_san_xuat'];
	

	require '../../connect.php';

	$sql = "update hang_san_xuat set
	ten_hang_san_xuat = '$ten_hang_san_xuat'
	
	where
	ma_hang_san_xuat = '$ma_hang_san_xuat'";
	mysqli_query($connect,$sql);
	mysqli_close($connect);
	header('location:index.php');
	
<?php 
	$ma_hang_san_xuat = $_GET['ma_hang_san_xuat'];
	require '../../connect.php';
	$sql = "delete from hang_san_xuat where  ma_hang_san_xuat= '$ma_hang_san_xuat'";
	mysqli_query($connect,$sql);
	mysqli_close($connect);
	header('location:index.php');
 
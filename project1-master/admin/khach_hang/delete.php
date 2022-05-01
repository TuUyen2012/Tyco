<?php
	$ma_khach_hang = $_REQUEST['ma_khach_hang'];
	require '../../connect.php';
	$sql = "delete from khach_hang where ma_khach_hang = '$ma_khach_hang' ";
	mysqli_query($connect,$sql);
	mysqli_close($connect);
	header('location:view.php');
	

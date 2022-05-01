<?php
	$ma_khach_hang = $_POST['ma_khach_hang'];
	$ten_khach_hang = $_POST['ten_khach_hang'];
	$dia_chi = $_POST['dia_chi'];
	$sdt = $_POST['sdt'];
	$email = $_POST['email'];
	$mat_khau = $_POST['mat_khau'];

	require '../../connect.php';

	$sql = "update khach_hang set
	ten_khach_hang = '$ten_khach_hang',
	dia_chi = '$dia_chi',
	sdt = '$sdt',
	email = '$email',
	mat_khau = '$mat_khau'
	where 
	ma_khach_hang = '$ma_khach_hang'
	";
	mysqli_query($connect,$sql);
	mysqli_close($connect);
	header('location:view.php');
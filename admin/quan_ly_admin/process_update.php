<?php
    $ma_admin  = $_POST['ma_admin'];
	$ten_admin = $_POST['ten_admin'];
	$email     = $_POST['email'];
	$mat_khau  = $_POST['mat_khau'];
	$cap_do    = $_POST['cap_do'];

	require '../../connect.php';

	$sql = "update admin set
	ten_admin = '$ten_admin',
	email = '$email',
	mat_khau = '$mat_khau',
	cap_do = '$cap_do'
	where
	ma_admin = '$ma_admin'";
	mysqli_query($connect,$sql);
	mysqli_close($connect);
	
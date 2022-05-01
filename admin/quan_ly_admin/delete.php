<?php 
	$ma_admin = $_GET['ma_admin'];
	require '../../connect.php';
	$sql = "delete from admin where ma_admin = '$ma_admin'";
	mysqli_query($connect,$sql);
	mysqli_close($connect);
	header('location:index.php');
 
<?php

$ma_san_pham = $_GET['ma_san_pham'];

session_start();

// khi chưa có giỏ hàng
if(empty($_SESSION['gio_hang'])){
	$_SESSION['gio_hang'] = [];
}

// chưa có sản phẩm trong giỏ hàng
if(empty($_SESSION['gio_hang'][$ma_san_pham])){
	require 'connect.php';

	$sql = "select * from san_pham where ma_san_pham = '$ma_san_pham'";
	$result = mysqli_query($connect,$sql);
	$each = mysqli_fetch_array($result);

	$_SESSION['gio_hang'][$ma_san_pham]['so_luong']     = 1;
	$_SESSION['gio_hang'][$ma_san_pham]['ten_san_pham'] = $each['ten_san_pham'];
	$_SESSION['gio_hang'][$ma_san_pham]['gia']          = $each['gia'];
	$_SESSION['gio_hang'][$ma_san_pham]['anh']          = $each['anh'];
}
// đã có sản phẩm trong giỏ hàng
else{
	$_SESSION['gio_hang'][$ma_san_pham]['so_luong']++;}
header('location:home.php');


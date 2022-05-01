<?php 
session_start();
if(empty($_POST['dia_chi_nguoi_nhan'])){
	header("location:view_gio_hang.php?error=Bạn không được để trống");
	exit();
}
$ten_nguoi_nhan = $_POST['ten_nguoi_nhan'];
$sdt_nguoi_nhan = $_POST['sdt_nguoi_nhan'];
$dia_chi_nguoi_nhan = $_POST['dia_chi_nguoi_nhan'];

$ma_khach_hang = $_SESSION['ma_khach_hang'];
# Thay đổi
$thoi_gian_dat = date("Y-m-d H:i:s", strtotime('+3 hour'));
$tinh_trang = 0;
require 'connect.php';
$sql = "select max(ma_hoa_don) from hoa_don";
$result = mysqli_query($connect,$sql);
$each = mysqli_fetch_array($result);

$max_ma_hoa_don = $each['max(ma_hoa_don)']+1;

$sql = "insert into hoa_don(ma_hoa_don,ma_khach_hang,ten_nguoi_nhan,sdt_nguoi_nhan,dia_chi_nguoi_nhan,thoi_gian_dat,tinh_trang) values ('$max_ma_hoa_don','$ma_khach_hang','$ten_nguoi_nhan','$sdt_nguoi_nhan','$dia_chi_nguoi_nhan','$thoi_gian_dat','$tinh_trang')";
mysqli_query($connect,$sql);

foreach($_SESSION['gio_hang'] as $ma_san_pham => $each){
	$so_luong = $each['so_luong'];
	$gia = $each['gia'];

	$sql = "insert into hoa_don_chi_tiet(ma_hoa_don,ma_san_pham,so_luong,gia) values ('$max_ma_hoa_don','$ma_san_pham','$so_luong','$gia') ";
	mysqli_query($connect,$sql);
}
unset($_SESSION['gio_hang']);
header("location:view_gio_hang.php");



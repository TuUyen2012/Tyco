<?php
if(empty($_POST['ten_san_pham'])){
	header("location:form_insert_sp.php?error=Bạn không được để trống");
	exit();
}
$ten = $_POST['ten_san_pham'];
$gia = $_POST['gia'];
$mo_ta = $_POST['mo_ta'];
$anh = $_FILES['anh'];
$ma_hang_san_xuat = $_POST['ma_hang_san_xuat'];


$array = explode('/', $anh['type']);
$file_type = $array[1];
$ten_anh = strtotime("now").".$file_type";

$target_dir = "../../anh_san_pham/";
$target_file = $target_dir . $ten_anh;
move_uploaded_file($anh["tmp_name"], $target_file);

require '../../connect.php';
$sql = "insert into san_pham(ten_san_pham,anh,gia,mo_ta,ma_hang_san_xuat) values('$ten','$ten_anh','$gia','$mo_ta','$ma_hang_san_xuat')";
mysqli_query($connect,$sql);
mysqli_close($connect);
header('location:view_sp.php');
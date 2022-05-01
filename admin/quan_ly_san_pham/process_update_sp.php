<?php
$ma_san_pham = $_POST['ma_san_pham'];
$ten = $_POST['ten_san_pham'];
$gia = $_POST['gia'];
$mo_ta = $_POST['mo_ta'];
$ma_hang_san_xuat = $_POST['ma_hang_san_xuat'];



$anh_moi = $_FILES['anh_moi'];


if($anh_moi['size']==0){
	$ten_anh = $_POST['anh_cu'];
}else
	{
		$array = explode('/', $anh_moi['type']);
		$file_type = $array[1];
		$ten_anh = strtotime("now").".$file_type";

		$target_dir = "../../anh_san_pham/";
		$target_file = $target_dir . $ten_anh;
		move_uploaded_file($anh_moi["tmp_name"], $target_file);
	}

require '../../connect.php';
$sql = "update san_pham set
ten_san_pham = '$ten',
gia = '$gia',
mo_ta = '$mo_ta',
anh = '$ten_anh',
ma_hang_san_xuat= '$ma_hang_san_xuat'

where 
ma_san_pham = '$ma_san_pham'
";
mysqli_query($connect,$sql);
mysqli_close($connect);
header('location:view_sp.php');
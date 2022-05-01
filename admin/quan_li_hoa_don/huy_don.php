<?php
$ma_hoa_don = $_GET['ma_hoa_don'];
require 'connect.php';

$sql = "update hoa_don set tinh_trang = 3 where ma_hoa_don = $ma_hoa_don and tinh_trang in (4,0)";
mysqli_query($connect,$sql);
	mysqli_close($connect);
    header("location:hoa_don.php");?>
<?php
	session_start();
	$ma_san_pham = $_GET['ma_san_pham'];
	if($_SESSION['gio_hang'][$ma_san_pham]['so_luong']==1){
		unset($_SESSION['gio_hang'][$ma_san_pham]);
	}else{
		$_SESSION['gio_hang'][$ma_san_pham]['so_luong']--;
	}
	header('location:view_gio_hang.php');
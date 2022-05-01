<?php
	session_start();
	$ma_san_pham = $_GET['ma_san_pham'];
	$_SESSION['gio_hang'][$ma_san_pham]['so_luong']++;
	header('location:view_gio_hang.php');
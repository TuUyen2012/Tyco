<?php 

session_start();
unset($_SESSION['gio_hang']);
header('location:view_gio_hang.php');
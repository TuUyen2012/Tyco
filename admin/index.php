<?php 
session_start();
if(empty($_SESSION['ma_admin']))
{
	header("location:form_login.php?error=Đăng nhập");
}
 ?>

<!DOCTYPE html>
<html>
<head>

	<title></title>
	<link rel="stylesheet" href="./css/bootstrap.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
</head>
<?php require 'khu_vuc_admin/menu_admin.php'; ?>
   
</body>
</html>

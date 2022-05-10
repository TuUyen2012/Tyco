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
	
</head>
<?php require 'khu_vuc_admin/admin_menu.php'; ?>
   
</body>
</html>

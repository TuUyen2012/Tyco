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
	
</head>
<?php require 'khu_vuc_admin/menu_admin.php'; ?>
   
</body>
</html>

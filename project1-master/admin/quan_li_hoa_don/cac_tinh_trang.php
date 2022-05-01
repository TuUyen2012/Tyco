<?php 
session_start();
if(empty($_SESSION['ma_admin']))
{
	header("location:../form_login.php?error=Đăng nhập đi");
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cac tinh trang</title>
</head>
<body>
<?php   require_once '../khu_vuc_admin/menu_admin.php'; ?>
    <ul style=" text-align: center; margin: 10rem;" >
    <div style="text-align: center;padding: 10px; background-color:greenyellow;width: 30%;margin-left: 35%;margin-top: 30px;margin-bottom: 10px; "><li><a href="chua_duyet.php">Hóa đơn chưa duyệt</a></li></div>
    <div style="text-align: center;padding: 10px; background-color:yellow;width: 30%;margin-left: 35%;margin-top: 30px;margin-bottom: 10px; "><li><a href="dang_giao.php">Hóa đơn đang giao</a></li></div>
    <div style="text-align: center;padding: 10px; background-color:#0099ff;width: 30%;margin-left: 35%;margin-top: 30px;margin-bottom: 10px; "><li><a href="da_giao.php">Hóa đơn đã giao </a></li></div>
    <div style="text-align: center;padding: 10px; background-color:red;width: 30%;margin-left: 35%;margin-top: 30px;margin-bottom: 10px; "><li><a href="da_huy.php">Hóa đơn đã hủy</a></li></div>
    </ul>
</body>
</html>
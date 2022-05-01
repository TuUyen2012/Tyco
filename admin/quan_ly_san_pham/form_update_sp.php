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
    <title>Document</title>
</head>
<body>
<?php 
    $ma_san_pham = $_GET['ma'];
    require '../../connect.php';
    $sql = "select * from san_pham where ma_san_pham = '$ma_san_pham'";
    $array = mysqli_query($connect,$sql);
    $san_pham = mysqli_fetch_array($array);
 ?>
 <?php   require '../khu_vuc_admin/menu_admin.php'; ?>
 <form method="POST" action="process_update_sp.php" enctype="multipart/form-data">
<center><table border="1">
    <input type="hidden" name="ma_san_pham" value="<?php echo $san_pham['ma_san_pham'] ?>"><br>
<tr>
    <td>Tên sản phẩm:</td> 
    <td><input type="text" name="ten_san_pham" value="<?php echo $san_pham['ten_san_pham'] ?>"></td>
</tr>
<tr>
   <td> Ảnh cũ: <img src="../../anh_san_pham/<?php echo $san_pham['anh'] ?>"height = '100'></td>

    
   <td> <input type="hidden" name="anh_cu" value="<?php echo $san_pham['anh'] ?>"></td>
</tr>
<tr>
   <td> Ảnh mới:</td>
   <td> <input type="file" name="anh_moi" accept="image/*"></td>
</tr>
<tr>
    <td>Giá:</td>
    <td><input type="number" name="gia" value="<?php echo $san_pham['gia'] ?>"></td>
</tr>
<tr>
    <td>Mô tả:</td>
    <td><textarea name="mo_ta"><?php echo $san_pham['mo_ta'] ?></textarea></td>
</tr>
<tr>
    <td>Hãng sản xuất</td>
    <td><input type="text" name="ma_hang_san_xuat" value="<?php echo $san_pham['ma_hang_san_xuat'] ?>"></td>
</tr>
<tr>
    <td colspan="2" style="text-align: center;"><button style="background: green;font-size: 20px;">Sửa</button></td>
</tr>
</table></center>
</form>
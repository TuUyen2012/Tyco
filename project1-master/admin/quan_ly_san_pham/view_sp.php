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
	require '../../connect.php';
	$sql = "select * from san_pham join hang_san_xuat on san_pham.ma_hang_san_xuat=hang_san_xuat.ma_hang_san_xuat";
	$array = mysqli_query($connect,$sql);
    mysqli_close($connect)
    
 ?>
 <?php   require_once '../khu_vuc_admin/menu_admin.php'; ?>
 
 <a href="form_insert_sp.php">Thêm sản phẩm</a><br><br><br>
 <center><table border="1" width="80%">
    <tr style="color: red;font-size: 32px;">
        <th>Tên sản phẩm</th>
        <th>Ảnh</th>
        <th>Giá</th>
        <th>Mô tả</th>
        <th>Hãng sản xuất</th>
        <th>Sửa</th>
        <th>Xóa</th>
    </tr>
    <?php foreach($array as $each): ?>
        <tr style="font-size: 20px;">
            <td><?php echo $each['ten_san_pham'] ?></td>
            <td><img src="../../anh_san_pham/<?php echo $each['anh'] ?>"height='100'></td>
            <td><?php echo $each['gia'] ?></td>
            <td><?php echo $each['mo_ta'] ?></td>
            <td><?php echo $each['ten_hang_san_xuat']?></td>
            <td><a href="form_update_sp.php?ma=<?php echo $each['ma_san_pham'] ?>"><b style="color: green;"> Sửa</b></a></td>
            <td><a onclick='return confirm("Bạn chắc chắn muốn xóa?")' href="delete_sp.php?ma_san_pham=<?php echo $each['ma_san_pham'] ?>"><u style="color: #ff8080;">Xóa</u></a></td>
           
        </tr>
    <?php endforeach ?>

 </table></center>
    

</body>
</html>
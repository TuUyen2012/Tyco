<?php 
session_start();
if(empty($_SESSION['ma_admin']))
{
	header("location:../form_login.php?error=Đăng nhập đi");
}
 ?>

<style>
    .item {
        margin: 3rem 1rem;
        padding: 2rem;
        background-color: yellowgreen;
    }
</style>
<?php   require '../khu_vuc_admin/menu_admin.php'; ?>
<a href="cac_tinh_trang.php">Các tình trạng đơn hàng</a>

<?php
require '../../connect.php';
    
?>
<?php

    
    $sql1 = "SELECT * from hoa_don where tinh_trang=3";
    $res1 = mysqli_query($connect, $sql1);
    while($row1 = mysqli_fetch_array($res1)) {
        $tong_tien = 0;
?>
<div class="item">
    <p>Ma hoa don: <?php echo $row1["ma_hoa_don"] ?></p>
    <p>Ma khach hang: <?php echo $row1["ma_khach_hang"] ?></p>
    <p>Ten khach hang: <?php echo $row1["ten_nguoi_nhan"] ?></p>
    <p>Dia chi: <?php echo $row1["dia_chi_nguoi_nhan"] ?></p>



<?php
    $maa = $row1["ma_hoa_don"];
    $sql2 = "SELECT * from hoa_don_chi_tiet inner join san_pham on hoa_don_chi_tiet.ma_san_pham=san_pham.ma_san_pham where ma_hoa_don = '$maa'";
    $res2 = mysqli_query($connect, $sql2);
    while($row2 = mysqli_fetch_array($res2)) {
        $tong_tien += (intval($row2["gia"])*intval($row2["so_luong"]));
?>
    <p>Mã sản phẩm: <?php echo $row2["ma_san_pham"] ?></p>
    <p>Số lượng: <?php echo $row2["so_luong"] ?></p>
    <p>Tên sản phẩm: <?php echo $row2["ten_san_pham"] ?></p>
    
<?php
    }
?>
    <p>Tổng tiền: <?php echo number_format($tong_tien) ?>
VND</p>
</div>

<?php
}
?>
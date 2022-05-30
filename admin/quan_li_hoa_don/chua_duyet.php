<?php 
session_start();
if(empty($_SESSION['ma_admin']))
{
	header("location:../form_login.php?error=Đăng nhập đi");
}
 ?>
<style>
    .item {
        margin-left: 500px;
        margin-top: -650px;
        width: 100%;
    }
    table{
        border: 1px solid #ccc;
    }
    table th {
    background-color: #cad8fa;
    padding: 5px;
    }
    table td {
    background-color: #f0e7da;
    padding: 5px;
    }
</style>
<?php   require '../khu_vuc_admin/menu_admin.php'; ?>
<a href="cac_tinh_trang.php"></a>

<?php
require '../../connect.php';
    if(isset($_POST["xac_nhan_giao_hang"])) {
        $aa = $_POST["xac_nhan_giao_hang"];
        $sql3 = "UPDATE hoa_don set tinh_trang=1 where ma_hoa_don = '$aa' and tinh_trang=0"; 
        
        if(mysqli_query($connect,$sql3)) {
            echo ":Đã xác nhận thành công";
        }   else {
            echo "Xác nhận lỗi";
        }
    }
        
    if(isset($_POST["huy_don_hang"])) {
        $bb = $_POST["huy_don_hang"];
        $sql3 = "UPDATE hoa_don set tinh_trang=3 where ma_hoa_don = '$bb' and tinh_trang=0"; 
        
        if(mysqli_query($connect,$sql3)) {
            echo ":Hủy thành công";
        }   else {
            echo "Xác nhận lỗi";
        }
    }
?>
<?php


    
    $sql1 = "SELECT * from hoa_don where tinh_trang=0";
    $res1 = mysqli_query($connect, $sql1);
    while($row1 = mysqli_fetch_array($res1)) {
        $tong_tien = 0;
?>
<div class="item">
    <table>
        <tr>
            <th>Mã hóa đơn</th>
            <th>Mã khách hàng</th>
            <th>Tên khách hàng</th>
            <th>Địa chỉ</th>


<?php
    $maa = $row1["ma_hoa_don"];
    $sql2 = "SELECT * from hoa_don_chi_tiet inner join san_pham on hoa_don_chi_tiet.ma_san_pham=san_pham.ma_san_pham where ma_hoa_don = '$maa'";
    $res2 = mysqli_query($connect, $sql2);
    while($row2 = mysqli_fetch_array($res2)) {
        $tong_tien += (intval($row2["gia"])*intval($row2["so_luong"]));
?>

            <th>Mã sản phẩm</th>
            <th>Số lượng</th>
            <th>Tên sản phẩm</th>
    <!-- không hiện -->
    <p>Mã sản phẩm: <?php echo $row2["ma_san_pham"] ?></p>
    <p>Số lượng: <?php echo $row2["so_luong"] ?></p>
    <p>Tên sản phẩm: <?php echo $row2["ten_san_pham"] ?></p>
    <!-- không hiện -->
    
<?php
    }
?>
            <th>Tổng tiền</th>
    </tr>
    <tr>
            <td><?php echo $row1["ma_hoa_don"] ?></td>
            <td><?php echo $row1["ma_khach_hang"] ?></td>
            <td><?php echo $row1["ten_nguoi_nhan"] ?></td>
            <td><?php echo $row1["dia_chi_nguoi_nhan"] ?></td>
            <td><?php echo number_format($tong_tien) ?> VND</td>
            <td>
                <form action="chua_duyet.php" method="POST">
                    <input type="hidden" value="<?php echo $row1["ma_hoa_don"] ?>" name="xac_nhan_giao_hang">
                    <input type="submit" value="Xác nhận">
                </form>
            </td>
            <td>
                <form action="chua_duyet.php" method="POST">
                    <input type="hidden" value="<?php echo $row1["ma_hoa_don"] ?>" name="huy_don_hang">
                    <input type="submit" value="Hủy">
                </form>
            </td>
        </tr>
    </table>
</div>

<?php
}
?>





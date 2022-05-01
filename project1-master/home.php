  <?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="home.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>



        <div class="menu-toggle" id="hamburger">
            <i class="fas fa-bars"></i>
        </div>
        <div class="overlay"></div>
        <div class="container">
            <nav>
                <h1 class="brand"><a href="home.php"><span style="font-size: 52px">ty</span><b style="color: black;">co</b> </a></h1>
                <ul>
                    <li><a href="home.php"><i class="fa fa-home" style="color: red;font-size: 20px"></i><b style="color: black;">Trang chủ</b></a></li>
                    
                    <li><?php #if(isset($_SESSION['ma_khach_hang'])){?>
<a href="view_gio_hang.php"><i class="fa fa-shopping-cart" style="font-size:20px;position: relative;color:red"></i><b style="color: black;">Giỏ Hàng</b></a> <?php #}?></li>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                    <li><?php 
                    if(isset($_SESSION['ma_khach_hang'])){
                     ?><b style="color: red; font-size: 12px;position: relative;right:-30px"><b style="color: black;"></b>Xin chào:<?php echo $_SESSION['ten_khach_hang'] ?></b>
<a onclick='return confirm("Bạn chắc chắn đăng xuất?")' href="logout.php">
<i class="fa fa-user-circle-o" style="color: red;"></i><b style="color: black;">Đăng xuất</b>
</a>
<?php } else{ ?>
<a href="form_login.php">
<i class="fa fa-user-circle-o" style="color: red;"></i><b style="color: black;">Đăng nhập</b>
</a>
<?php } ?>
</li>
                </ul> 
            </nav>
        </div>

<br><br><br><br><br>
        <?php 
require 'connect.php';
$tim_kiem = '';
if(isset($_GET['tim_kiem'])){
  $tim_kiem = $_GET['tim_kiem'];
}
$sql = "select * from san_pham where ten_san_pham like '%$tim_kiem%' ";
if(isset($_GET['ma_hang_san_xuat'])){
  $ma_hang_san_xuat = $_GET['ma_hang_san_xuat'];
  $sql = "$sql and ma_hang_san_xuat ='$ma_hang_san_xuat' ";
}
$array = mysqli_query($connect,$sql);


//phan trang
$so_san_pham = mysqli_num_rows($array);
$so_san_pham_trong_1_trang = 8;

$so_trang = ceil($so_san_pham / $so_san_pham_trong_1_trang);

$trang_hien_tai = 1;
if(isset($_GET['trang'])){
  $trang_hien_tai = $_GET['trang'];
}

$bo_qua = ($trang_hien_tai - 1) * $so_san_pham_trong_1_trang;
$sql = "$sql limit $so_san_pham_trong_1_trang offset $bo_qua";
$result_sp = mysqli_query($connect,$sql);


?>


<form align='center'>
  
   </i><span style="color: #ff6666; font-size: 32px;margin: 20px 10px"> <i class="fa fa-search"></i>Tìm kiếm: </span><input style="width: 50%; height:30px" type="search" name="tim_kiem" value="<?php echo $tim_kiem ?>">
  </form>
<br><br>

<?php 
  require 'menu.php';
 ?>


 <?php foreach($result_sp as $each): ?>
 

<div class="block">
  <div class="product">
    <img src="anh_san_pham/<?php echo $each['anh'] ?>" height = '210'>
      <div class="buttons">
        <?php #if(isset($_SESSION['ma_khach_hang'])){?>
        <a onclick="return alert('Bạn đã thêm sản phẩm thành công vào giỏ hàng')" class="preview" href="process_them_san_pham_vao_gio_hang.php?ma_san_pham=<?php echo $each['ma_san_pham'] ?>">Mua</a>
      <?php #}?>
       <!-- <?php #if(!isset($_SESSION['ma_khach_hang'])){?> - -->
       
        <!-- <a class="preview">Mua</a> -->

       <?php #}?>

      <a class="buy" href="xem_chi_tiet.php?ma_san_pham=<?php echo $each['ma_san_pham'] ?>">Xem chi tiết</a>
       

        
    </div>
  </div>
  
  <div class="info">
    <h4  style="color: red"><?php echo $each['ten_san_pham'] ?></h4>
     
    <span class="price"><?php echo number_format($each['gia']) ?> VNĐ</span><br>
  
  </div>
  
  
  </div>
</div>
     <?php endforeach ?>
</div>
<div class="phan-trang">
  <?php for ($i=1;$i<=$so_trang;$i++) { ?>
    <u><a href="?trang=<?php echo $i ?>&tim_kiem=<?php echo $tim_kiem ?>">
    <u style="color: black;">
      <?php echo $i ?>
  </u>
    </a></u>
  <?php }?>
</div>

 
<?php mysqli_close($connect); ?>
</body>

</html> 
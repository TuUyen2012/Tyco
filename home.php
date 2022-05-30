<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="./assets/home3.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
  <?php require './menu_home.php'; ?>
  <?php 
		require 'connect.php';
<<<<<<< HEAD
    session_start();
=======
>>>>>>> 0dd108db0a49d1f6df9b085090b19ffd757a5da4
		$sql = "select * from san_pham as sp ";
    if (isset($_GET['product_company']) && !empty($_GET['product_company'])){
      $product_company = $_GET['product_company'];
      $sql .= 'inner join hang_san_xuat as hsx on sp.ma_hang_san_xuat = hsx.ma_hang_san_xuat ';
    }
    // $_GET['ten_san_pham'] = 'a';
    if (isset($_GET['product'])){
      $product = $_GET['product'];
      $sql .= "where ten_san_pham like '%$product%' ";
    }
    if (isset($_GET['product_company']) && !empty($_GET['product_company'])){
      $sql .= "and hsx.ten_hang_san_xuat like '%$product_company%'";
    }
    if (isset($_GET['listMoney'])){
      $listMoney = '';
      $option = $_GET['listMoney'];
      if($option ==1){
        $listMoney = "and gia between 0 and 1000000 ";
      }
      else if($option ==2){
        $listMoney = "and gia between 1000000 and 3000000 ";
      }
      else if($option ==3){
        $listMoney = "and gia > 3000000 ";
      }
      $sql.= $listMoney;
    }
    // echo $sql;
		$result = mysqli_query($connect,$sql);
    if($result == false){
      $result=[];
    }
	?>
  <div class="wrapper">
    <div class="slider">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" style="margin-top: -20px;">
          <div class="item active">
            <img src="./admin/people-coffee-tea-meeting.jpg" alt="Los Angeles">
          </div>

          <div class="item">
            <img src="./admin/pexels-photo-872957.jpeg" alt="Chicago">
          </div>

          <div class="item">
            <img src="./admin/pexels-photo.jpg" alt="Chicago">
          </div>

          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>

      <div class="container row my-style" style="display: flex; width: 100%; justify-content: space-evenly; ">
        <div class="col-sm-3" style="width: 100%;">
          <form>
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Filter</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Money</td>
                <td>
                  <select id="listMoney" name="listMoney">
                    <option value="All">All</option>
                    <option value="1">0 - 1.000.000</option>
                    <option value="2">1.000.000 - 3.000.000</option>
                    <option value="3">3.000.000 trở lên</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td>Product Company</td>
                <td><input name ="product_company" type="text"></td>
              </tr>
              <tr>
                <td>Product</td>
                <td><input name ="product" type="text"></td>
              </tr>
            </tbody>
          </table>
          <div class="form-check">
              <input type="submit" class="btn btn-login float-right"
                href="home.php">
            </div>
          </form>
        </div>
        <div class="col-sm-9" style="width: 100%;">
          <!-- <p>Sed ut perspiciatis...</p> -->
          <?php foreach ($result as $each): ?>
          <div class="img">
            <a href="xem_chi_tiet.php?ma_san_pham=<?php echo $each['ma_san_pham'] ?>"><img src="anh_san_pham/<?php echo $each['anh']?>" style="height:250px; width: 250px;"></a>
            <p class="uyn"><?php echo $each['ten_san_pham'] ?></p>
            <p class="uyn"><?php echo $each['gia'] ?></p>
          </div>
          <?php if(isset($_SESSION['ma_khach_hang'])){?>
          <!-- <a onclick="return alert('Bạn đã thêm sản phẩm thành công vào giỏ hàng')" class="preview"
            href="process_them_san_pham_vao_gio_hang.php?ma_san_pham=<?php echo $each['ma_san_pham'] ?>">Mua</a> -->
          <?php }?>
          <?php if(!isset($_SESSION['ma_khach_hang'])){?>
          <!-- <a class="preview">Mua</a> -->
          <?php }?>
          <?php endforeach ?>
        </div>
      </div>

      <div class="footer">
        <div class="copyright">
          <a href="#"><i class="fa-brands fa-facebook"></i>.</a>
          <a href="#"><i class="fa-brands fa-instagram"></i>.</a>
          <a href="#"><i class="fa-brands fa-twitter"></i></a>
        </div>
        <p>Infor.Support.Marketing</p>
        <p>Easy for user . Privacy Policy</p>
        <p><i class="fa-solid fa-copyright"></i>Copyright</p>
      </div>
    </div>
</body>

</html>
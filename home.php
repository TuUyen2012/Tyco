<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="./assets/homes.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
  <?php   require './menu_home.php'; ?>
  <?php 
		require 'connect.php';
		$sql = "select * from san_pham";
		$result = mysqli_query($connect,$sql);
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
        <div class="carousel-inner">
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

      <div class=" container row">
        <div class="col-sm-3">
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
                  <input list="listMoney" name="listMoney">
                  <datalist id="listMoney">
                    <option value="0 - 1.000.000">
                    <option value="1.000.000 - 3.000.000">
                    <option value="3.000.000 trở lên">
                  </datalist>
                </td>
              </tr>
              <tr>
                <td>Product Company</td>
                <td><input type="text"></td>
              </tr>
              <tr>
                <td>Product</td>
                <td><input type="text"></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-sm-9" style="background-color:pink;">
          <p>Sed ut perspiciatis...</p>
          <?php foreach ($result as $each): ?>
          <img src="anh_san_pham/<?php echo $each['anh']?>" style="height = 100px;">
          <?php if(isset($_SESSION['ma_khach_hang'])){?>
          <a onclick="return alert('Bạn đã thêm sản phẩm thành công vào giỏ hàng')" class="preview"
            href="process_them_san_pham_vao_gio_hang.php?ma_san_pham=<?php echo $each['ma_san_pham'] ?>">Mua</a>
          <?php }?>
          <?php if(!isset($_SESSION['ma_khach_hang'])){?>
          <a class="preview">Mua</a>
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
<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
  <link rel="stylesheet" href="./assets/login.css">
  <link rel="stylesheet" href="./css/bootstrap.css">
</head>
<body>
  <?php 
  $err="";
  if(isset($_GET["error"])) {
    $err = $_GET["error"];
  } ?>
	

	
<div class="box">
  <!-- <h2>Đăng ký</h2> -->
  <!-- <form method="POST" action="process_dang_ki.php"> -->
  <!-- <div class="inputBox">
      <input type="text" name="ten_khach_hang" >
      <label>Họ và tên</label>
  </div> -->
     <!-- <p style="color:#66b3ff ; font-size: 14px;" >Giới tính:</p>
     <pre style="color: white">Nam<input type="radio" name="gioi_tinh" value="0" checked="checked"></pre>
    <pre style="color: white">Nữ<input type="radio" name="gioi_tinh" value="1"></pre>
    <br><br> -->
    <!-- <div class="inputBox">
      <input type="email" name="email" >
      <label>Email</label>
    </div> -->
    <!-- <div class="inputBox">
      <input type="password" name="mat_khau" >
       
    <label>Mật khẩu</label>
    </div>
    
    <div class="inputBox">
      <input type="password" name="re_mat_khau">
      <label>Nhập lại mật khẩu</label>
    </div> -->
    <!-- <div class="inputBox"> -->

      <!-- <input type="text" name="dia_chi" >
      <label>Địa chỉ</label>
    </div> -->
      <!-- <div class="inputBox">
      <input type="text" name="sdt" >
      <label>Số điện thoại</label>
    </div> -->

    <div class="inputBox" style="color: red">
      <?php
        echo $err;
      ?>
    </div>
    <!-- <br>
    <input type="submit" name="dang_ki" value="Đăng ký" href="process_dang_ki.php"><br><br> -->

   
    
  </form>
</div>

<section class="login-block">
    <div class="container">
	<div class="row">
		<div class="col-md-4 login-sec">
		    <h2 class="text-center">Regist Now</h2>
        <form method="POST" action="process_dang_ki.php" class="login-form">
  <div class="form-group">
    <label for="exampleInputEmail1" class="text-uppercase">Username</label>
    <input type="text" class="form-control" placeholder="username" name="ten_khach_hang">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1" class="text-uppercase">Sex</label>
    <table>
      <tr>
        <td><pre>Male</pre></td>
        <td><pre>Female</pre></td>
      </tr>
      <tr>
        <td><input type="radio" name="gioi_tinh" value="0" checked="checked"></td>
        <td><input type="radio" name="gioi_tinh" value="1"></td>
      </tr>
    </table>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1" class="text-uppercase">Email</label>
    <input type="text" class="form-control" placeholder="email" name="email">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1" class="text-uppercase">Password</label>
    <input type="password" class="form-control" placeholder="password" name="mat_khau">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword2" class="text-uppercase">Re-Password</label>
    <input type="password" class="form-control" placeholder="re_password" name="re_mat_khau">
  </div>

  <div class="form-group">
    <label class="text-uppercase">Address</label>
    <input type="text" class="form-control" placeholder="address" name="dia_chi">
  </div>

  <div class="form-group">
    <label class="text-uppercase">Phone Number</label>
    <input type="text" class="form-control" placeholder="phone number" name="sdt">
  </div>

  <div class="form-check">
    <input type="submit" name="dang_ki" value="Submit" class="btn btn-login float-right" href="process_dang_ki.php">
  </div>
  
</form>
<div class="copy-text">Created with <i class="fa fa-heart"></i> by TyCo</div>
		</div>
		<div class="col-md-8 banner-sec">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                 <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
            <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block img-fluid" src="https://static.pexels.com/photos/33972/pexels-photo.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <div class="banner-text">
            <h2>This is Heaven</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
        </div>	
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="https://images.pexels.com/photos/7097/people-coffee-tea-meeting.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <div class="banner-text">
            <h2>This is Heaven</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
        </div>	
    </div>
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="https://images.pexels.com/photos/872957/pexels-photo-872957.jpeg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <div class="banner-text">
            <h2>This is Heaven</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
        </div>	
    </div>
  </div>
            </div>	   
		    
		</div>
	</div>
</div>
</section>



</body>
</html>

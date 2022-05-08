<!DOCTYPE html>
<html>
<head>
	<title>Login Admin</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="admin_login.css">
	<link rel="stylesheet" href="admin_bootstrap.css">
</head>
<body>

	<?php
	$error = "";
	if(isset($_GET['error'])){
		$error = $_GET['error'];
		
		}
	if(isset($_COOKIE['ma_admin'])){
		$ma_admin = $_COOKIE['ma_admin'];
	require '../connect.php';
	$sql = "select * from admin where ma_admin = '$ma_admin'";
	$result = mysqli_query($connect,$sql);
	$count = mysqli_num_rows($result);
	if($count==1){
		session_start();

		$each = mysqli_fetch_array($result);
		$_SESSION['ma_admin'] = $each['ma_admin'];
		$_SESSION['ten_admin'] = $each['ten_admin'];
		$_SESSION['cap_do'] = $each['cap_do'];
		header('location:index.php');

	}
	}
	?>
	
<!-- <div class="box"> -->
  <!-- <h2>Login admin</h2> -->
  <!-- <form method="POST" action="process_login.php"> -->
    <!-- <div class="inputBox">
      <input type="email" name="email" >
      <label>Email</label>
    </div> -->
    <!-- <div class="inputBox">
      <input type="password" name="mat_khau" >
                  <label>Mật khẩu</label>
    </div> -->
	
		
		
		<!-- <br><br>
		<button>Đăng nhập</button>
	</form>
	<div class="inputBox" style="color: red">
      <?php echo $error ?>
    </div> -->



	<section class="login-block">
    <div class="container">
	<div class="row">
		<div class="col-md-4 login-sec">
		    <h2 class="text-center">Login Admin</h2>
		    <form class="login-form" method="POST" action="process_login.php">

  <div class="form-group">
    <label for="exampleInputEmail1" class="text-uppercase">Email</label>
    <input type="text" class="form-control" placeholder="email" name="email"> 
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1" class="text-uppercase">Password</label>
    <input type="password" class="form-control" placeholder="password" name="mat_khau">
  </div>
  
  
    <div class="form-check">
    <button type="submit" class="btn btn-login float-right">Submit</button>
	<?php echo $error ?>
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

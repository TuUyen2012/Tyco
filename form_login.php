<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/login.css">
  <link rel="stylesheet" href="./css/bootstrap.css">
</head>
<body>
  
  <?php 
  $errr="";
  if(isset($_GET['infor'])){
	
    ?>
    <h1>
  <?php echo '<h1>'.$_GET['infor']."</h1>" ?>
</h1>
<?php } ?>
  <?php if(isset($_GET['error'])){ ?>
<h1>
  <?php echo '<h1>'.$_GET['error']."</h1>" ?>
</h1>
<?php } ?>

<section class="login-block">
    <div class="container">
	<div class="row">
		<div class="col-md-4 login-sec">
		    <h2 class="text-center">Login Now</h2>
        <form method="POST" action="process_login.php" class="login-form">
  <div class="form-group">
    <label for="exampleInputEmail1" class="text-uppercase" >Email</label>
    <input type="email" class="form-control" name="email" placeholder="Email">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" class="text-uppercase">Password</label>
    <input type="password" class="form-control" name="mat_khau" placeholder="Password">
  </div>
  
  
    <div class="form-check">
      <label class="form-check-label">
        <input type="checkbox" class="form-check-input">
        <small>Remember Me</small>
      </label>
      <input class="btn btn-login float-right" type="submit" name="sign-in" value="Đăng nhập">
      <button ><a class="btn btn-login" href="form_dang_ky.php">Đăng ký</a></button>
      <span>Forgot password ?<a href="#">Reset password</a></span>
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





<!-- <div class="form"> -->
  <!-- <h2 class="subtitle">Login</h2>
  <form method="POST" action="process_login.php" class="full-center"> -->
    
    <!-- <div class="input --full">
      <input id="login --email" name="email" type="email" placeholder="Email">
    </div> -->

    <!-- <div class="input --full">
      <input id="login --pasword" type="password" name="mat_khau" placeholder="Password">            
    </div> -->
    
    <div class="input --full"> /*không biết biến err ở đâu*/
      <?php echo $errr ?>
    </div>

    <!-- <span>Forgot password ?<a href="#">Reset password</a></span> -->

    <!-- <div class="button">
      <input id="button --login" type="submit" name="sign-in" value="Đăng nhập">
      <button ><a href="form_dang_ky.php">Đăng ký</a></button>
    </div> -->
    
  <!-- </form>
</div> -->
</body>
</html>
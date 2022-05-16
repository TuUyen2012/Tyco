<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/login.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
              <label for="exampleInputEmail1" class="text-uppercase">Email</label>
              <input type="email" class="form-control" name="email" placeholder="Email">

            </div>
            <div class="form-group">
              <label for="exampleInputPassword1" class="text-uppercase">Password</label>
              <input type="password" class="form-control" name="mat_khau" placeholder="Password">
            </div>


            <div class="form-check" style="padding-left: 0">
              <div style="margin-bottom: 15px">
                <input class="btn btn-login float-right" type="submit" name="sign-in" value="Đăng nhập">
                <button class="btn btn-login"><a href="form_dang_ky.php" style="color: #fff">Đăng ký</a></button>
              </div>

              <span>Forgot password?<a href="#"> Reset password</a></span>
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
                <img class="d-block img-fluid" src="/project1-master/admin/pexels-photo.jpg"
                  alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                  <div class="banner-text">
                    <h2>This is Heaven</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                      labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="/project1-master/admin/people-coffee-tea-meeting.jpg"
                  alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                  <div class="banner-text">
                    <h2>This is Heaven</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                      labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="/project1-master/admin/pexels-photo-872957.jpeg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                  <div class="banner-text">
                    <h2>This is Heaven</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                      labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
  </section>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
</body>

</html>
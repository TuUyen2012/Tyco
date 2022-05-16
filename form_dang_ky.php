<?php session_start(); ?>

<!DOCTYPE html>
<html>

<head>
  <title></title>
  <link rel="stylesheet" href="./assets/login.css">
  <link rel="stylesheet" href="./css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
  <?php 
  $err="";
  if(isset($_GET["error"])) {
    $err = $_GET["error"];
  } ?>

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
              <label for="exampleInputEmail1" class="text-uppercase">Gender</label>
              <table>
                <tr>
                  <td style="width: 50%;"><input type="radio" name="gioi_tinh" value="0" checked="checked"> Male</td>
                  <td><input type="radio" name="gioi_tinh" value="1"> Female</td>
                </tr>
              </table>
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1" class="text-uppercase">Email</label>
              <input type="text" class="form-control" placeholder="email" name="email">
            </div>
      
            <div class="form-group">
              <label class="text-uppercase">Address</label>
              <input type="text" class="form-control" placeholder="address" name="dia_chi">
            </div>

            <div class="form-group">
              <label class="text-uppercase">Phone Number</label>
              <input type="text" class="form-control" placeholder="phone number" name="sdt">
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1" class="text-uppercase">Password</label>
              <input type="password" class="form-control" placeholder="password" name="mat_khau">
            </div>

            <div class="form-group">
              <label for="exampleInputPassword2" class="text-uppercase">Re-Password</label>
              <input type="password" class="form-control" placeholder="re_password" name="re_mat_khau">
            </div>

            <div class="form-check">
              <input type="submit" name="dang_ki" value="Submit" class="btn btn-login float-right"
                href="process_dang_ki.php">
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
                <img class="d-block img-fluid" src="/project1-master/admin/pexels-photo-872957.jpeg"
                  alt="First slide">
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
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="./assets/login.css"> -->
  <link rel="stylesheet" href="./assets/login1.css">
  <link rel="stylesheet" href="./themify-icons/themify-icon.css">
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

<div class="form">
  <h2 class="subtitle">Login</h2>
  <form method="POST" action="process_login.php" class="full-center">
    
    <div class="input --full">
      <input id="login --email" name="email" type="email" placeholder="Email">
    </div>

    <div class="input --full">
      <input id="login --pasword" type="password" name="mat_khau" placeholder="Password">            
    </div>
    
    <div class="input --full">
      <?php echo $errr ?>
    </div>

    <span>Forgot password ?<a href="#">Reset password</a></span>

    <div class="button">
      <input id="button --login" type="submit" name="sign-in" value="Đăng nhập"><br><br>
      <button ><a href="form_dang_ky.php">Đăng ký</a></button>
    </div>
    
  </form>
</div>
</body>
</html>
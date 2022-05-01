<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
  <?php 
  $err="";
  if(isset($_GET["error"])) {
    $err = $_GET["error"];
  } ?>
	

	
<div class="box">
  <h2>Đăng ký</h2>
  <form method="POST" action="process_dang_ki.php">
  <div class="inputBox">
      <input type="text" name="ten_khach_hang" >
      <label>Họ và tên</label>
  </div>
     <p style="color:#66b3ff ; font-size: 14px;" >Giới tính:</p>
     <pre style="color: white">Nam<input type="radio" name="gioi_tinh" value="0" checked="checked"></pre>
    <pre style="color: white">Nữ<input type="radio" name="gioi_tinh" value="1"></pre>
    <br><br>
    <div class="inputBox">
      <input type="email" name="email" >
      <label>Email</label>
    </div>
    <div class="inputBox">
      <input type="password" name="mat_khau" >
       
    <label>Mật khẩu</label>
    </div>
    
    <div class="inputBox">
      <input type="password" name="re_mat_khau">
      <label>Nhập lại mật khẩu</label>
    </div>
    <div class="inputBox">

      <input type="text" name="dia_chi" >
      <label>Địa chỉ</label>
    </div>
      <div class="inputBox">
      <input type="text" name="sdt" >
      <label>Số điện thoại</label>
    </div>

    <div class="inputBox" style="color: red">
      <?php
        echo $err;
      ?>
    </div>
    <br>
    <input type="submit" name="dang_ki" value="Đăng ký" href="process_dang_ki.php"><br><br>

   
    
  </form>
</div>

</body>
</html>

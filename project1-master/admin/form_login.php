<!DOCTYPE html>
<html>
<head>
	<title>đăng nhập</title>
	<link rel="stylesheet" href="all.css">
</head>
<body>
	<h1 style="color: red;font-size: 50px;text-align: center;">Admin</h1>
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
	
<div class="box">
  <h2>Đăng nhập admin</h2>
  <form method="POST" action="process_login.php">
    <div class="inputBox">
      <input type="email" name="email" >
      <label>Email</label>
    </div>
    <div class="inputBox">
      <input type="password" name="mat_khau" >
                  <label>Mật khẩu</label>
    </div>
	
		
		
		<br><br>
		<button>Đăng nhập</button>
	</form>
	<div class="inputBox" style="color: red">
      <?php echo $error ?>
    </div>

</body>
</html>

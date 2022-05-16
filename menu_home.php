
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="./assets/menu_home.css">
 </head>
 <body>
    <nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="home.php">TyCo</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="home.php">About us</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
            <li><a href="form_dang_ky.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="form_login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
    </div>
    </nav>

 <!-- <div class="menu-toggle" id="hamburger">
            <i class="fas fa-bars"></i>
        </div>
        <div class="overlay"></div>
        <div class="container">
            <nav>
                <h1 class="brand"><a href="home.php"><span style="font-size: 52px">ty</span><b style="color: black;">co</b></a></h1>
                <ul>
                    <li><a href="home.php"><i class="fa fa-home" style="color: red;font-size: 20px"></i><b style="color: black;">Trang chủ</b></a></li>
                   
                    <li><?php if(isset($_SESSION['ma_khach_hang'])){?>
<a href="view_gio_hang.php"><i class="fa fa-shopping-cart" style="font-size:20px;position: relative;color:red"></i><b style="color: black;">Giỏ Hàng</b></a> <?php }?></li>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                    <li><?php 
                    if(isset($_SESSION['ma_khach_hang'])){
                     ?><b style="color: red; font-size: 12px;position: relative;right:-30px">Xin chào:<?php echo $_SESSION['ten_khach_hang'] ?></b>
<a onclick='return confirm("Bạn chắc chắn đăng xuất?")' href="logout.php">
<b style="color: black;"> Đăng xuất	</b>
</a>
<?php } else{ ?>
<a href="form_login.php">
<b style="color: black;">Đăng nhập</b>
</a>
<?php } ?>
</li>
                </ul>
            </nav>
		</div> -->

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</body>
 </html>
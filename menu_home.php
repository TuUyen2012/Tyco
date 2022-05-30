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
     <link rel="stylesheet" href="./assets/menu_homes.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
 </head>
 <body>
    <nav class="navbar navbar-inverse">
    <div class="container-fluid" style="height: 70px;">
        <div class="navbar-header">
            <a class="navbar-brand" href="home.php">TyCo</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="home.php" class="text">About us</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
<<<<<<< HEAD
            <li><a href="view_gio_hang.php?>"><i class="fa-solid fa-cart-shopping text"></i></a></li>
            <?php if(isset($_SESSION['ma_khach_hang'])){ ?>
                <li><a href="#" class="text"><i class="fa-solid fa-user"></i>Welcome</a></li>
                <li><a href="logout.php" class="text"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>    
            <?php }else{ ?>
                <li><a href="form_dang_ky.php" class="text"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="form_login.php" class="text"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
=======
            <li><a href="view_gio_hang.php?>"><i class="fa-solid fa-cart-shopping"></i></a></li>
            <?php if(isset($_SESSION['ma_khach_hang'])){ ?>
                <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
            <?php }else{ ?>
                <li><a href="form_dang_ky.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="form_login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
>>>>>>> 0dd108db0a49d1f6df9b085090b19ffd757a5da4
            <?php }?>
        </ul>
    </div>
    </nav>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</body>
 </html>
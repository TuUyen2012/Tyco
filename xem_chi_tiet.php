<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/xemChiTiet.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<? session_start();?>
<?php require'menu_home.php' ?>
    <!-- <?php
        $ma_san_pham = $_GET['ma_san_pham'];
        require 'connect.php';
        $sql = "select * from san_pham where ma_san_pham = '$ma_san_pham'";
        $result = mysqli_query($connect,$sql);

    ?>
        <?php
            foreach ($result as $key) :?>
            <div>
               
                <img src="anh_san_pham/<?php echo $key['anh'] ?>" height = '400' style="float: left; margin-top:60px;">
                 <h1 style="float: left; margin:20px; margin-top: 60px;color: seagreen;"><?php echo $key['ten_san_pham']?></h1>
                <p style="float:left; margin: 40px;font-size: 18px;"><?php echo nl2br($key['mo_ta'])?></p>

            </div>
            <?php endforeach?> -->

    <div class="container">
        <?php
            $ma_san_pham = $_GET['ma_san_pham'];
            require 'connect.php';
            $sql = "select * from san_pham where ma_san_pham = '$ma_san_pham'";
            $result = mysqli_query($connect,$sql);
        ?>
        <?php foreach ($result as $key) :?>
            <div class="contaiImg">
                <img src="anh_san_pham/<?php echo $key['anh'] ?>" height = '300' style="float: left; margin-top:60px;">
            </div>
            <div class="img">
                <img src="pexels-photo.jpg" alt="" id="img">
                <img src="pexels-photo.jpg" alt="" id="img">
                <img src="pexels-photo.jpg" alt="" id="img">
            </div>
            <div class="contaiInfo">
                <p style="float:left; margin: 40px;font-size: 18px;">
                    <?php echo nl2br($key['ten_san_pham'])?> <br>
                    <?php echo nl2br($key['mo_ta'])?> <br>
                    <a href=""><?php echo nl2br($key['gia'])?>VND</a>
                </p> 
                <a href="home.php"><button>Go Back</button></a>
                <?php if(!isset($_SESSION['ma_khach_hang'])){?>
                    <button onclick="return alert('Bạn đã thêm sản phẩm thành công vào giỏ hàng')" class="preview"
                href="process_them_san_pham_vao_gio_hang.php?ma_san_pham=<?php echo $key['ma_san_pham'] ?>">Add to cart</button>
                <?php }?>
            </div>
        <?php endforeach?>
    </div>
    <div class="button">

    </div>

    <div class="footer">
        <div class="copyright">
          <a href="#"><i class="fa-brands fa-facebook"></i>.</a>
          <a href="#"><i class="fa-brands fa-instagram"></i>.</a>
          <a href="#"><i class="fa-brands fa-twitter"></i></a>
        </div>
        <p>Infor.Support.Marketing</p>
        <p>Easy for user . Privacy Policy</p>
        <p><i class="fa-solid fa-copyright"></i>Copyright</p>
      </div>
    </div>
    
</body>
</html>
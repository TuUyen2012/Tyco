
        <div class="menu-toggle" id="hamburger">
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
		</div>
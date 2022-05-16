<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/project1-master/admin/style.css">
    <link rel="stylesheet" href="/project1-master/admin/main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-left">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img src="/project1-master/admin/user.png" alt="">
                    <small> Admin</small>
                </a>
            </div>


            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <?php if ($_SESSION['cap_do']==0) {?>
                        <?php }else { ?>
                    <li><a class="dropdown-item" href="/project1-master/admin/quan_ly_admin/index.php"><i class="fa-solid fa-circle-user"></i> Quản lý admin</a></li>
                    <?php }?>
                    <li><a class="dropdown-item" href="/project1-master/admin/khach_hang/view.php"><i class="fa-solid fa-screwdriver-wrench"></i> Quản lý khách hàng</a></li>
                    <li><a class="dropdown-item" href="/project1-master/admin/quan_ly_hang_san_xuat/index.php"><i class="fa-solid fa-screwdriver-wrench"></i> Quản lý hãng sản xuất</a></li>
                    <li><a class="dropdown-item" href="/project1-master/admin/quan_li_hoa_don/cac_tinh_trang.php"><i class="fa-solid fa-screwdriver-wrench"></i> Quản lý sản phẩm</a></li>
                    <li>
                        <a data-toggle="collapse" href="#answerOne" class="dropdown-item dropdown-toggle">
                            <i class="fa-solid fa-bowl-rice"></i> Quản lý hóa đơn
                        </a>
                        <ul class="panel-collapse collapse" id="answerOne">
                            <li><a class="dropdown-item" href="#">Chưa duyệt</a></li>
                            <li><a class="dropdown-item" href="#">Đang giao</a></li>
                            <li><a class="dropdown-item" href="#">Đã giao</a></li>
                            <li><a class="dropdown-item" href="#">Đã hủy</a></li>
                        </ul>
                    </li>
                </ul>
                <button class="btn btn-outline-danger"><a href="../logout.php">Log out</a></button>
            </div>
        </div>
    </nav>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="view1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<?php require'menu_home.php' ?>
    <?php
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
            <?php endforeach?>
    
</body>
</html>
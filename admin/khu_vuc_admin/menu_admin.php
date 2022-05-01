
<!DOCTYPE html>
<html>
<head>

	<title></title>
	
</head>
<style>
        *{
            margin:0px;
            padding:0px;  
        }
        body{
            font-family: tahoma;
            font-size:20px; 
        }
        #menu {
            width: 1600px;
            height: 40px;
            background-color:brown ;
            margin: 50px auto;
        }
        ul.root > li{
            list-style: none;
            float: left;
            margin: 0 80px;
            position: relative;
        }
        ul.root > li > a{
            text-decoration: none;
            color: #fff;
            padding: 0px 15px 0 px 15px;
            line-height: 40px;
            display: block;
        }
        ul.root  >li > a:hover{
            background: orange;
            color: blue;
            transition: ease-in 0.50s;
            -moz-transition: ease-in 0.50s;
            -webkit-transition: ease-in 0.50s; 
        }
        ul.submenu {
            width: 250px;
            background:  #6d136a;
            min-height: 120px;
            display: none;
            position: absolute;
        }
        ul.submenu li{
            list-style: none;
        }
        ul.submenu li a{
            color: #fff;
            text-decoration: none;
            display: block;
            border-top: 1px solid yellow;
            line-height: 40px;
            text-indent: 10px;
        }
        ul.submenu li a:hover{
            background: orange;
            color: blue;
            transition: ease-in 0.50s;
            -moz-transition: ease-in 0.50s;
            -webkit-transition: ease-in 0.50s; 
        }
        ul.root > li:hover ul.submenu{
            display: block;
            transition: ease-out 0.50s;
            -moz-transition: ease-out 0.50s;
            -webkit-transition: ease-out 0.50s; 
        }
    </style>

    <div id="menu">
        <ul class="root">
            <?php
           if ($_SESSION['cap_do']==0){
?>
<li></li>
<?php
           }else {
           ?>
           
            <li><a href="/project1-master/admin/quan_ly_admin/index.php">Xem tất cả admin</a>
               
            </li>
        <?php }?>
        
            <li><a href="/project1-master/admin/khach_hang/view.php">Khách Hàng</a>
			</li>
			<li>
			<a href="/project1-master/admin/quan_ly_hang_san_xuat/index.php">Hãng sản xuất</a><br>
			</li>
            </li>
            <li><a href="/project1-master/admin/quan_ly_san_pham/view_sp.php">Sản Phẩm</a>
            </li>
            <li><a href="/project1-master/admin/quan_li_hoa_don/cac_tinh_trang.php">Hóa Đơn</a>
            </li>
           
               <a href="../logout.php">Đăng xuất</a> 
            </li>
        </ul>
    </div>
    


</body>
</html>
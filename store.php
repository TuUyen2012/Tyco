<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Home Store</title>

 		<!-- Google font -->
 		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

 		<!-- Bootstrap -->
 		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

 		<!-- Slick -->
 		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
 		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

 		<!-- nouislider -->
 		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

 		<!-- Font Awesome Icon -->
 		<link rel="stylesheet" href="css/font-awesome.min.css">

 		<!-- Custom stlylesheet -->
 		<link type="text/css" rel="stylesheet" href="css/style.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>
		<?php   require './menu_home.php'; ?>
		<?php 
		require 'connect.php';
		$sql = "select * from san_pham as sp where 1=1 ";
    if (isset($_GET['product_company']) && !empty($_GET['product_company'])){
      $product_company = $_GET['product_company'];
      $sql .= 'inner join hang_san_xuat as hsx on sp.ma_hang_san_xuat = hsx.ma_hang_san_xuat ';
    }
    // $_GET['ten_san_pham'] = 'a';
    if (isset($_GET['product'])){
      $product = $_GET['product'];
      $sql .= "and ten_san_pham like '%$product%' ";
    }
    if (isset($_GET['product_company']) && !empty($_GET['product_company'])){
      $sql .= "and hsx.ten_hang_san_xuat like '%$product_company%'";
    }
    if (isset($_GET['listMoney'])){
      $listMoney = '';
      $option = $_GET['listMoney'];
      if($option ==1){
        $listMoney = "and gia between 0 and 1000000 ";
      }
      else if($option ==2){
        $listMoney = "and gia between 1000000 and 3000000 ";
      }
      else if($option ==3){
        $listMoney = "and gia > 3000000 ";
      }
      $sql.= $listMoney;
    }
    echo $sql;
	$result = mysqli_query($connect,$sql);
    if($result == false){
      $result=[];
    }
	$categories = mysqli_query($connect,"select * from hang_san_xuat");
	foreach ($categories as $category){
		print_r($category['ten_hang_san_xuat']);
	}
	?>


		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./anh_san_pham/shop01.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Laptop<br>Collection</h3>
								<a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./anh_san_pham/shop03.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Accessories<br>Collection</h3>
								<a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./anh_san_pham/shop02.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Cameras<br>Collection</h3>
								<a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- ASIDE -->
					<div id="aside" class="col-md-3">
						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">PRODUCT</h3>
							<div class="checkbox-filter">
							
								<div class="input-checkbox">
									<input type="checkbox" id="category-1">
									<label for="category-1">
										<span></span>
										Laptops
										<small>(120)</small>
									</label>
								</div>

								<div class="input-checkbox">
									<input type="checkbox" id="category-2">
									<label for="category-2">
										<span></span>
										Smartphones
										<small>(740)</small>
									</label>
								</div>

								<div class="input-checkbox">
									<input type="checkbox" id="category-3">
									<label for="category-3">
										<span></span>
										Cameras
										<small>(1450)</small>
									</label>
								</div>

								<div class="input-checkbox">
									<input type="checkbox" id="category-4">
									<label for="category-4">
										<span></span>
										Accessories
										<small>(578)</small>
									</label>
								</div>

								<div class="input-checkbox">
									<input type="checkbox" id="category-5">
									<label for="category-5">
										<span></span>
										Laptops
										<small>(120)</small>
									</label>
								</div>

								<div class="input-checkbox">
									<input type="checkbox" id="category-6">
									<label for="category-6">
										<span></span>
										Smartphones
										<small>(740)</small>
									</label>
								</div>
							</div>
						</div>
						<!-- /aside Widget -->

						<!-- aside Widget -->
						<div class="col-sm-3" style="width: 100%;">
          <form>
          <table class="table table-hover">
            <tbody>
              <tr>
                <td>Money</td>
                <td>
                  <select id="listMoney" name="listMoney">
                    <option value="All">All</option>
                    <option value="1">0 - 1.000.000</option>
                    <option value="2">1.000.000 - 3.000.000</option>
                    <option value="3">3.000.000 trở lên</option>
                  </select>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
						<!-- /aside Widget -->

						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">BRAND</h3>
							<div class="checkbox-filter">
							<div class="input-checkbox">
									<input type="checkbox" id="brand-1">
									<label for="brand-1">
										<span></span>
										All
										<small>
											<?php 
											$count =mysqli_fetch_assoc(mysqli_query($connect,"select count(*) as total from san_pham"));
											echo "(".$count['total'].")";
											?>
										</small>
									</label>
								</div>
								<?php foreach ($categories as $category){ ?>
								<div class="input-checkbox">
									<input type="checkbox" id="brand-1">
									<label for="brand-1">
										<span></span>
										<?php
										 echo $category['ten_hang_san_xuat'];
										 $ma_hang_san_xuat = $category['ma_hang_san_xuat'];
										?>
										<small>
											<?php 
											$count =mysqli_fetch_assoc(mysqli_query($connect,"select count(*) as total from san_pham where ma_hang_san_xuat = $ma_hang_san_xuat"));
											echo "(".$count['total'].")";
											?>
										</small>
									</label>
								</div>
								<?php } ?>
							</div>
						</div>
						<!-- /aside Widget -->
						<div class="form-check">
              <input type="submit" class="btn btn-login float-right"
                href="home.php">
            </div>
          </form>
					</div>
					<!-- /ASIDE -->

					<!-- STORE -->
					<div id="store" class="col-md-9">
						<!-- store top filter -->
						<div class="store-filter clearfix">
							<div class="store-sort">
								<label>
									Show:
									<select class="input-select">
										<option value="0">20</option>
										<option value="1">50</option>
									</select>
								</label>
							</div>
						</div>
						<!-- /store top filter -->
						
						<!-- store products -->
						<div class="row">
						<?php foreach ($result as $each): ?>
							<!-- product -->
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<div class="product-img">
										<a href="xem_chi_tiet.php?ma_san_pham=<?php echo $each['ma_san_pham'] ?>"><img src="anh_san_pham/<?php echo $each['anh']?>" alt=""></a>
										<div class="product-label">
											<span class="sale">-30%</span>
											<span class="new">NEW</span>
										</div>
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="xem_chi_tiet.php?ma_san_pham=<?php echo $each['ma_san_pham'] ?>"><?php echo $each['ten_san_pham'] ?></a></h3>
										<h4 class="product-price"><?php echo number_format($each['gia']) ?><del class="product-old-price">$990.00</del></h4>
										<div class="product-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										<div class="product-btns">
											<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
										</div>
									</div>
								</div>
							</div>
							<!-- /product -->
							<?php endforeach ?>

							<div class="clearfix visible-sm visible-xs"></div>
							

						<!-- /store products -->

						<!-- store bottom filter -->
						<div class="store-filter clearfix">
							<span class="store-qty">Showing 20-100 products</span>
							<ul class="store-pagination">
								<li class="active">1</li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
							</ul>
						</div>
						<!-- /store bottom filter -->
					</div>
					<!-- /STORE -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- NEWSLETTER -->
		<div id="newsletter" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="newsletter">
							<!-- HOT DEAL SECTION -->
		<div id="hot-deal" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="hot-deal">
							<ul class="hot-deal-countdown">
								<li>
									<div>
										<h3>02</h3>
										<span>Days</span>
									</div>
								</li>
								<li>
									<div>
										<h3>10</h3>
										<span>Hours</span>
									</div>
								</li>
								<li>
									<div>
										<h3>34</h3>
										<span>Mins</span>
									</div>
								</li>
								<li>
									<div>
										<h3>60</h3>
										<span>Secs</span>
									</div>
								</li>
							</ul>
							<h2 class="text-uppercase">hot deal this week</h2>
							<p>New Collection Up to 50% OFF</p>
							<a class="primary-btn cta-btn" href="#">Shop now</a>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /HOT DEAL SECTION -->

							<ul class="newsletter-follow">
								<li>
									<a href="#"><i class="fa-brands fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa-brands fa-instagram"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa-brands fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa-brands fa-tiktok"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /NEWSLETTER -->

		<!-- FOOTER -->
		<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">About Us</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</p>
								<ul class="footer-links">
									<li><a href="https://www.google.com/maps/place/58+P.+Th%C3%A1i+H%C3%A0,+Trung+Li%E1%BB%87t,+%C4%90%E1%BB%91ng+%C4%90a,+H%C3%A0+N%E1%BB%99i,+Vi%E1%BB%87t+Nam/@21.0106566,105.8204312,17z/data=!3m1!4b1!4m5!3m4!1s0x3135ab7dfb00c95f:0x5175c58560ee5f71!8m2!3d21.0106566!4d105.8226199?hl=vi-VN"><i class="fa fa-map-marker"></i>58 Thai Ha - Dong Da - Ha Noi</a></li>
									<li><a href="#"><i class="fa fa-phone"></i>0243.944.9969</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i>contect@tycovietnam.com</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Categories</h3>
								<ul class="footer-links">
									<li><a href="#">Hot deals</a></li>
									<li><a href="#">Laptops</a></li>
									<li><a href="#">Smartphones</a></li>
									<li><a href="#">Cameras</a></li>
									<li><a href="#">Accessories</a></li>
								</ul>
							</div>
						</div>

						<div class="clearfix visible-xs"></div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Information</h3>
								<ul class="footer-links">
									<li><a href="#">About Us</a></li>
									<li><a href="#">Contact Us</a></li>
									<li><a href="#">Privacy Policy</a></li>
									<li><a href="#">Orders and Returns</a></li>
									<li><a href="#">Terms & Conditions</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Service</h3>
								<ul class="footer-links">
									<li><a href="#">My Account</a></li>
									<li><a href="#">View Cart</a></li>
									<li><a href="#">Wishlist</a></li>
									<li><a href="#">Track My Order</a></li>
									<li><a href="#">Help</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->

			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							<ul class="footer-payments">
								<li><a href="#" style="color: #fff;"><i class="fa-brands fa-cc-visa"></i></a></li>
								<li><a href="#" style="color: #fff;"><i class="fa-solid fa-credit-card"></i></a></li>
								<li><a href="#" style="color: #fff;"><i class="fa-brands fa-paypal"></i></a></li>
								<li><a href="#" style="color: #fff;"><i class="fa-brands fa-cc-mastercard"></i></a></li>
								<li><a href="#" style="color: #fff;"><i class="fa-brands fa-cc-discover"></i></a></li>
								<li><a href="#" style="color: #fff;"><i class="fa-brands fa-cc-amex"></i></a></li>
							</ul>
							<span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">TyCo</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span>
						</div>
					</div>
						<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
		</footer>
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>

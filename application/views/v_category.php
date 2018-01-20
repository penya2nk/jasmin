<!DOCTYPE html>
<html lang="en">
<head>
<title>Jasmin - Kategori</title>
<link rel="shortcut icon" href="<?php echo base_url('assets/coloshop/images/favicon.ico'); ?>">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Colo Shop Template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/coloshop/styles/bootstrap4/bootstrap.min.css'); ?>">
<link href="<?php echo base_url('assets/coloshop/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet'); ?>" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/coloshop/plugins/OwlCarousel2-2.2.1/owl.carousel.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/coloshop/plugins/OwlCarousel2-2.2.1/owl.theme.default.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/coloshop/plugins/OwlCarousel2-2.2.1/animate.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/coloshop/styles/main_styles.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/coloshop/styles/responsive.css'); ?>">
<style type="text/css">
	.new_arrivals{
		margin-top: 100px;
	}
</style>
</head>

<body>

<div class="super_container">

	<!-- Header -->

	<header class="header trans_300">

		<!-- Top Navigation -->

		<div class="top_nav">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
					</div>
					<div class="col-md-6 text-right">
						<div class="top_nav_right">
							<ul class="top_nav_menu">
								<li class="account">
									<a href="<?php echo site_url('welcome/setting');?>">
										My Account
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Main Navigation -->

		<div class="main_nav_container">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-right">
						<div class="logo_container">
							<a href="<?php echo site_url('welcome/beranda');?>">Jas<span>min</span></a>
						</div>
						<nav class="navbar">
							<ul class="navbar_user">
								<li class="checkout">
									<a href="<?php echo site_url('welcome/notifikasi');?>">
										<i class="fa fa-bell" aria-hidden="true"></i>
										<span id="checkout_items" class="checkout_items">2</span>
									</a>
								</li>
								<li class="checkout">
									<a href="<?php echo site_url('welcome/obrolan');?>">
										<i class="fa fa-comments" aria-hidden="true"></i>
										<span id="checkout_items" class="checkout_items">2</span>
									</a>
								</li>
								<li class="checkout"><a href="<?php echo site_url('welcome/setting');?>"><i class="fa fa-cog" aria-hidden="true"></i></a></li>
								<li class="checkout"><a href="<?php echo site_url('welcome/landing');?>"><i class="fa fa-remove" aria-hidden="true"></i></a></li>
							</ul>
							<div class="hamburger_container">
								<i class="fa fa-bars" aria-hidden="true"></i>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>

	</header>

	<!-- New Arrivals -->

	<div class="new_arrivals">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title new_arrivals_title">
						<h2>Jasa</h2>
					</div>
				</div>
			</div>
			<div class="row align-items-center">
				<div class="col text-center">
					<div class="new_arrivals_sorting">
						<ul class="arrivals_grid_sorting clearfix button-group filters-button-group">
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center active is-checked" data-filter="*">semua</li>
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".women">Elektronik</li>
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".accessories">Konstruksi Ringan</li>
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".men">Rumah Tangga</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="product-grid" data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>

						<!-- Product 1 -->

						<div class="product-item men">
							<div class="product discount product_filter">
								<div class="product_image">
									<img src="<?php echo base_url('assets/coloshop/images/product_1.png'); ?>" alt="">
								</div>
								<div class="product_info">
									<h6 class="product_name"><a href="single.html">Fujifilm X100T 16 MP Digital Camera (Silver)</a></h6>
									<div class="product_price">$520.00</div>
								</div>
							</div>
							<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
						</div>

						<!-- Product 2 -->

						<div class="product-item women">
							<div class="product product_filter">
								<div class="product_image">
									<img src="<?php echo base_url('assets/coloshop/images/product_2.png'); ?>" alt="">
								</div>
								<div class="product_info">
									<h6 class="product_name"><a href="single.html">Samsung CF591 Series Curved 27-Inch FHD Monitor</a></h6>
									<div class="product_price">$610.00</div>
								</div>
							</div>
							<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
						</div>

						<!-- Product 3 -->

						<div class="product-item women">
							<div class="product product_filter">
								<div class="product_image">
									<img src="<?php echo base_url('assets/coloshop/images/product_3.png'); ?>" alt="">
								</div>
								<div class="favorite"></div>
								<div class="product_info">
									<h6 class="product_name"><a href="single.html">Blue Yeti USB Microphone Blackout Edition</a></h6>
									<div class="product_price">$120.00</div>
								</div>
							</div>
							<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
						</div>

						<!-- Product 4 -->

						<div class="product-item accessories">
							<div class="product product_filter">
								<div class="product_image">
									<img src="<?php echo base_url('assets/coloshop/images/product_4.png'); ?>" alt="">
								</div>
								<div class="product_info">
									<h6 class="product_name"><a href="single.html">DYMO LabelWriter 450 Turbo Thermal Label Printer</a></h6>
									<div class="product_price">$410.00</div>
								</div>
							</div>
							<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
						</div>

						<!-- Product 5 -->

						<div class="product-item women men">
							<div class="product product_filter">
								<div class="product_image">
									<img src="<?php echo base_url('assets/coloshop/images/product_5.png'); ?>" alt="">
								</div>
								<div class="product_info">
									<h6 class="product_name"><a href="single.html">Pryma Headphones, Rose Gold & Grey</a></h6>
									<div class="product_price">$180.00</div>
								</div>
							</div>
							<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
						</div>

						<!-- Product 6 -->

						<div class="product-item accessories">
							<div class="product discount product_filter">
								<div class="product_image">
									<img src="<?php echo base_url('assets/coloshop/images/product_6.png'); ?>" alt="">
								</div>
								<div class="product_info">
									<h6 class="product_name"><a href="#single.html">Fujifilm X100T 16 MP Digital Camera (Silver)</a></h6>
									<div class="product_price">$520.00</div>
								</div>
							</div>
							<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
						</div>

						<!-- Product 7 -->

						<div class="product-item women">
							<div class="product product_filter">
								<div class="product_image">
									<img src="<?php echo base_url('assets/coloshop/images/product_7.png'); ?>" alt="">
								</div>
								<div class="product_info">
									<h6 class="product_name"><a href="single.html">Samsung CF591 Series Curved 27-Inch FHD Monitor</a></h6>
									<div class="product_price">$610.00</div>
								</div>
							</div>
							<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
						</div>

						<!-- Product 8 -->

						<div class="product-item accessories">
							<div class="product product_filter">
								<div class="product_image">
									<img src="<?php echo base_url('assets/coloshop/images/product_8.png'); ?>" alt="">
								</div>
								<div class="product_info">
									<h6 class="product_name"><a href="single.html">Blue Yeti USB Microphone Blackout Edition</a></h6>
									<div class="product_price">$120.00</div>
								</div>
							</div>
							<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
						</div>

						<!-- Product 9 -->

						<div class="product-item men">
							<div class="product product_filter">
								<div class="product_image">
									<img src="<?php echo base_url('assets/coloshop/images/product_9.png'); ?>" alt="">
								</div>
								<div class="product_info">
									<h6 class="product_name"><a href="single.html">DYMO LabelWriter 450 Turbo Thermal Label Printer</a></h6>
									<div class="product_price">$410.00</div>
								</div>
							</div>
							<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
						</div>

						<!-- Product 10 -->

						<div class="product-item men">
							<div class="product product_filter">
								<div class="product_image">
									<img src="<?php echo base_url('assets/coloshop/images/product_10.png'); ?>" alt="">
								</div>
								<div class="product_info">
									<h6 class="product_name">Pryma Headphones Pryma Headphones</h6>
									<div class="product_price">Rp. 80.000 - 100.000</div>
									<div class="product_price text-muted"> <small>per jam</small> </div>
									<br>
								</div>
							</div>
							<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="footer_nav_container d-flex flex-sm-row flex-column align-items-center justify-content-lg-start justify-content-center text-center">
						<ul class="footer_nav">
							<li><a href="#">FAQs</a></li>
							<li><a href="contact.html">Contact us</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="footer_nav_container">
						<div class="cr">©2018 All Rights Reserverd. <a href="#">Politeknik Negeri Malang</a></div>
					</div>
				</div>
			</div>
		</div>
	</footer>

</div>

<script src="<?php echo base_url('assets/coloshop/js/jquery-3.2.1.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/coloshop/styles/bootstrap4/popper.js'); ?>"></script>
<script src="<?php echo base_url('assets/coloshop/styles/bootstrap4/bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/coloshop/plugins/Isotope/isotope.pkgd.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/coloshop/plugins/OwlCarousel2-2.2.1/owl.carousel.js'); ?>"></script>
<script src="<?php echo base_url('assets/coloshop/plugins/easing/easing.js'); ?>"></script>
<script src="<?php echo base_url('assets/coloshop/js/custom.js'); ?>"></script>
</body>

</html>
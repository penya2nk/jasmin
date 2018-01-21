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
									<a href="<?php echo site_url('welcome/profil_2');?>">
										Allan Taylor
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
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".elektro">Elektronik</li>
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".konstruksi">Konstruksi Ringan</li>
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".rumah">Rumah Tangga</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="product-grid" data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>

						<!-- Product 1 -->

						<div class="product-item elektro">
							<div class="product discount product_filter">
								<div class="product_image">
									<img src="<?php echo base_url('assets/coloshop/images/product_ac.png'); ?>" alt="">
								</div>
								<div class="product_info">
									<h6 class="product_name"><a href="single.html">Service AC</a></h6>
									<div class="product_price">Rp. 100.000 - 200.000/unit</div>
								</div>
							</div>
							<div class="red_button add_to_cart_button"><a href="<?php echo site_url('welcome/penyedia');?>">Cari</a></div>
						</div>

						<!-- Product 6 -->

						<div class="product-item konstruksi">
							<div class="product discount product_filter">
								<div class="product_image">
									<img src="<?php echo base_url('assets/coloshop/images/product_saluranair.png'); ?>" alt="">
								</div>
								<div class="product_info">
									<h6 class="product_name"><a href="single.html">Perbaikan Saluran Air</a></h6>
									<div class="product_price">Rp. 200.000 - 220.000/hari</div>
								</div>
							</div>
							<div class="red_button add_to_cart_button"><a href="<?php echo site_url('welcome/penyedia');?>">Cari</a></div>
						</div>

						<!-- Product 3 -->

						<div class="product-item elektro">
							<div class="product discount product_filter">
								<div class="product_image">
									<img src="<?php echo base_url('assets/coloshop/images/product_kulkas.png'); ?>" alt="">
								</div>
								<div class="product_info">
									<h6 class="product_name"><a href="single.html">Service Kulkas</a></h6>
									<div class="product_price">Rp. 90.000 - 180.000/unit</div>
								</div>
							</div>
							<div class="red_button add_to_cart_button"><a href="<?php echo site_url('welcome/penyedia');?>">Cari</a></div>
						</div>

						<!-- Product 4 -->

						<div class="product-item elektro">
							<div class="product discount product_filter">
								<div class="product_image">
									<img src="<?php echo base_url('assets/coloshop/images/product_komputer.png'); ?>" alt="">
								</div>
								<div class="product_info">
									<h6 class="product_name"><a href="single.html">Service Komputer</a></h6>
									<div class="product_price">Rp. 100.000 - 120.000/unit</div>
								</div>
							</div>
							<div class="red_button add_to_cart_button"><a href="<?php echo site_url('welcome/penyedia');?>">Cari</a></div>
						</div>

						<!-- Product 8 -->

						<div class="product-item rumah">
							<div class="product discount product_filter">
								<div class="product_image">
									<img src="<?php echo base_url('assets/coloshop/images/product_babysitter.png'); ?>" alt="">
								</div>
								<div class="product_info">
									<h6 class="product_name"><a href="single.html">Babysitter</a></h6>
									<div class="product_price">Rp. 50.000 - 120.000/hari</div>
								</div>
							</div>
							<div class="red_button add_to_cart_button"><a href="<?php echo site_url('welcome/penyedia');?>">Cari</a></div>
						</div>

						<!-- Product 5 -->

						<div class="product-item konstruksi">
							<div class="product discount product_filter">
								<div class="product_image">
									<img src="<?php echo base_url('assets/coloshop/images/product_kelistrikan.png'); ?>" alt="">
								</div>
								<div class="product_info">
									<h6 class="product_name"><a href="single.html">Perbaikan Kelistrikan</a></h6>
									<div class="product_price">Rp. 150.000 - 200.000/hari</div>
								</div>
							</div>
							<div class="red_button add_to_cart_button"><a href="<?php echo site_url('welcome/penyedia');?>">Cari</a></div>
						</div>

						<!-- Product 10 -->

						<div class="product-item rumah">
							<div class="product discount product_filter">
								<div class="product_image">
									<img src="<?php echo base_url('assets/coloshop/images/product_dapur.png'); ?>" alt="">
								</div>
								<div class="product_info">
									<h6 class="product_name"><a href="single.html">Tenaga Dapur</a></h6>
									<div class="product_price">Rp. 50.000 - 140.000/hari</div>
								</div>
							</div>
							<div class="red_button add_to_cart_button"><a href="<?php echo site_url('welcome/penyedia');?>">Cari</a></div>
						</div>

						<!-- Product 7 -->

						<div class="product-item konstruksi">
							<div class="product discount product_filter">
								<div class="product_image">
									<img src="<?php echo base_url('assets/coloshop/images/product_konstruksi.png'); ?>" alt="">
								</div>
								<div class="product_info">
									<h6 class="product_name"><a href="single.html">Perbaikan Rumah Ringan</a></h6>
									<div class="product_price">Rp. 100.000 - 220.000/hari</div>
								</div>
							</div>
							<div class="red_button add_to_cart_button"><a href="<?php echo site_url('welcome/penyedia');?>">Cari</a></div>
						</div>

						<!-- Product 2 -->

						<div class="product-item elektro">
							<div class="product discount product_filter">
								<div class="product_image">
									<img src="<?php echo base_url('assets/coloshop/images/product_tv.png'); ?>" alt="">
								</div>
								<div class="product_info">
									<h6 class="product_name"><a href="single.html">Service Televisi</a></h6>
									<div class="product_price">Rp. 120.000 - 200.000/unit</div>
								</div>
							</div>
							<div class="red_button add_to_cart_button"><a href="<?php echo site_url('welcome/penyedia');?>">Cari</a></div>
						</div>

						<!-- Product 9 -->

						<div class="product-item rumah">
							<div class="product discount product_filter">
								<div class="product_image">
									<img src="<?php echo base_url('assets/coloshop/images/product_supir.png'); ?>" alt="">
								</div>
								<div class="product_info">
									<h6 class="product_name"><a href="single.html">Driver</a></h6>
									<div class="product_price">Rp. 80.000 - 120.000/hari</div>
								</div>
							</div>
							<div class="red_button add_to_cart_button"><a href="<?php echo site_url('welcome/penyedia');?>">Cari</a></div>
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
<!DOCTYPE html>
<html lang="en">
<head>
<title>Jasmin - Selamat Datang</title>
<link rel="shortcut icon" href="<?php echo base_url('assets/coloshop/images/favicon.ico'); ?>">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Colo Shop Template">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap Core CSS -->

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url('assets/sbadmin2/vendor/metisMenu/metisMenu.min.css'); ?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/sbadmin2/dist/css/sb-admin-2.css'); ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url('assets/coloshop/plugins/font-awesome-4.7.0/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/datetime/css/bootstrap-datetimepicker.min.css'); ?>" rel="stylesheet" media="screen">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/coloshop/styles/bootstrap4/bootstrap.min.css'); ?>">
    <link href="<?php echo base_url('assets/sbadmin2/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/coloshop/plugins/OwlCarousel2-2.2.1/owl.carousel.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/coloshop/plugins/OwlCarousel2-2.2.1/owl.theme.default.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/coloshop/plugins/OwlCarousel2-2.2.1/animate.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/coloshop/plugins/themify-icons/themify-icons.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/coloshop/plugins/jquery-ui-1.12.1.custom/jquery-ui.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/coloshop/styles/contact_styles.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/coloshop/styles/contact_responsive.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/coloshop/styles/main_styles.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/coloshop/styles/responsive.css'); ?>">
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
									<a href="<?php echo site_url('welcome/login');?>"><i class="fa fa-sign-in" ></i> Masuk</a>
								</li>
								<li class="account">
									<a href="<?php echo site_url('welcome/register');?>"><i class="fa fa-user-plus" ></i> Daftar</a>
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
							<a href="#">Jas<span>min</span></a>
						</div>
						<nav class="navbar">
							<div class="hamburger_container">
								<i class="fa fa-bars" aria-hidden="true"></i>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>

	</header>

	

	<!-- Slider -->

	<div class="main_slider" style="background-image:url(<?php echo base_url('assets/coloshop/images/slider_1.jpg'); ?>)">
		<div class="container fill_height">
			<div class="row align-items-center fill_height">
				<div class="col">
					<div class="main_slider_content">
						<h6>Selamat datang</h6>
						<h1>Temukan penyedia jasa dari berbagai bidang</h1>
					</div>
				</div>
			</div>
		</div>
	</div>


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
							<div class="red_button add_to_cart_button"><a href="#" data-toggle="modal" data-target="#ModalNoHp">add to cart</a></div>
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
							<div class="red_button add_to_cart_button"><a href="#" data-toggle="modal" data-target="#ModalNoHp">add to cart</a></div>
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
							<div class="red_button add_to_cart_button"><a href="#" data-toggle="modal" data-target="#ModalNoHp">add to cart</a></div>
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
							<div class="red_button add_to_cart_button"><a href="#" data-toggle="modal" data-target="#ModalNoHp">add to cart</a></div>
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
							<div class="red_button add_to_cart_button"><a href="#" data-toggle="modal" data-target="#ModalNoHp">add to cart</a></div>
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
							<div class="red_button add_to_cart_button"><a href="#" data-toggle="modal" data-target="#ModalNoHp">add to cart</a></div>
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
							<div class="red_button add_to_cart_button"><a href="#" data-toggle="modal" data-target="#ModalNoHp">add to cart</a></div>
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
							<div class="red_button add_to_cart_button"><a href="#" data-toggle="modal" data-target="#ModalNoHp">add to cart</a></div>
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
							<div class="red_button add_to_cart_button"><a href="#" data-toggle="modal" data-target="#ModalNoHp">add to cart</a></div>
						</div>

						<!-- Product 10 -->

						<div class="product-item men">
							<div class="product product_filter">
								<div class="product_image">
									<img src="<?php echo base_url('assets/coloshop/images/product_10.png'); ?>" alt="">
								</div>
								<div class="product_info">
									<h6 class="product_name">Prymann Headphones Pryma Headphones</h6>
									<div class="product_price">Rp. 80.000 - 100.000</div>
									<div class="product_price text-muted"> <small>per jam</small> </div>
									<br>
								</div>
							</div>
							<div class="red_button add_to_cart_button"><a href="#" data-toggle="modal" data-target="#ModalNoHp">add to cart</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	

	<!-- Benefit -->

	<div class="benefit">
		<div class="container">
			<div class="row benefit_row">
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>free shipping</h6>
							<p>Suffered Alteration in Some Form</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-money" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>cach on delivery</h6>
							<p>The Internet Tend To Repeat</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-undo" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>45 days return</h6>
							<p>Making it Look Like Readable</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>opening all week</h6>
							<p>8AM - 09PM</p>
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
<!-- /.modal -->
<div class="modal fade" id="ModalNoHp" tabindex="-1" role="dialog" aria-labelledby="ModalNoHpLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="ModalNoHpLabel">Peringatan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body" align="center">
            	Harap masuk untuk melanjutkan
            </div>
            <div class="modal-footer">
                <a href="<?php echo site_url('welcome/register');?>"  class="btn btn-info"><i class="fa fa-user-plus" ></i> Daftar</a>
                <a href="<?php echo site_url('welcome/login');?>"  class="btn btn-primary"><i class="fa fa-sign-in" ></i> Masuk</a>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<script src="<?php echo base_url('assets/coloshop/js/jquery-3.2.1.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/coloshop/styles/bootstrap4/popper.js'); ?>"></script>
<script src="<?php echo base_url('assets/coloshop/styles/bootstrap4/bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/coloshop/plugins/Isotope/isotope.pkgd.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/coloshop/plugins/OwlCarousel2-2.2.1/owl.carousel.js'); ?>"></script>
<script src="<?php echo base_url('assets/coloshop/plugins/easing/easing.js'); ?>"></script>
<script src="<?php echo base_url('assets/coloshop/js/custom.js'); ?>"></script>
    <!-- jQuery -->
    <script src="<?php echo base_url('assets/sbadmin2/vendor/jquery/jquery.min.js'); ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('assets/sbadmin2/vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url('assets/sbadmin2/vendor/metisMenu/metisMenu.min.js'); ?>"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url('assets/sbadmin2/dist/js/sb-admin-2.js'); ?>"></script>
</body>

</html>
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

	<div class="main_slider" style="background-image:url(<?php echo base_url('assets/coloshop/images/slider_2.jpg'); ?>)">
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
							<div class="red_button add_to_cart_button"><a href="#" data-toggle="modal" data-target="#ModalNoHp">Cari</a></div>
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
							<div class="red_button add_to_cart_button"><a href="#" data-toggle="modal" data-target="#ModalNoHp">Cari</a></div>
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
							<div class="red_button add_to_cart_button"><a href="#" data-toggle="modal" data-target="#ModalNoHp">Cari</a></div>
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
							<div class="red_button add_to_cart_button"><a href="#" data-toggle="modal" data-target="#ModalNoHp">Cari</a></div>
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
							<div class="red_button add_to_cart_button"><a href="#" data-toggle="modal" data-target="#ModalNoHp">Cari</a></div>
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
							<div class="red_button add_to_cart_button"><a href="#" data-toggle="modal" data-target="#ModalNoHp">Cari</a></div>
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
							<div class="red_button add_to_cart_button"><a href="#" data-toggle="modal" data-target="#ModalNoHp">Cari</a></div>
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
							<div class="red_button add_to_cart_button"><a href="#" data-toggle="modal" data-target="#ModalNoHp">Cari</a></div>
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
							<div class="red_button add_to_cart_button"><a href="#" data-toggle="modal" data-target="#ModalNoHp">Cari</a></div>
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
							<div class="red_button add_to_cart_button"><a href="#" data-toggle="modal" data-target="#ModalNoHp">Cari</a></div>
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
						<div class="benefit_icon"><i class="fa fa-money" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>Gaji Bervariasi</h6>
							<p>Gaji penuh atau paruh waktu, harian, per jam. Semua ada!</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>Cepat Dan Mudah</h6>
							<p>Cari dan sediakan jasa dengan mudah.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-user" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>Profil Sederhana</h6>
							<p>Buat profil yang menarik dan lengkap.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-tags" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>Layanan Gratis</h6>
							<p>Tidak ada komisi agen atau biaya lainnya.</p>
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
<!DOCTYPE html>
<html lang="en">
<head>
<title>Jasmin - Permintaan</title>
<link rel="shortcut icon" href="<?php echo base_url('assets/coloshop/images/favicon.ico'); ?>">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Colo Shop Template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/coloshop/styles/bootstrap4/bootstrap.min.css'); ?>">
<link href="<?php echo base_url('assets/sbadmin2/dist/css/sb-admin-2.css'); ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/sbadmin2/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/coloshop/plugins/font-awesome-4.7.0/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">
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

	<div class="fs_menu_overlay"></div>

	<!-- Hamburger Menu -->

	<div class="hamburger_menu">
		<div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
		<div class="hamburger_menu_content text-right">
			<ul class="menu_top_nav">				
				<li class="menu_item has-children">
					<a href="<?php echo site_url('welcome/setting');?>">
						Pengaturan
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="account_selection">
						<li><a href="<?php echo site_url('welcome/setting');?>"><i class="fa fa-cog" aria-hidden="true"></i>Akun</a></li>
						<li><a href="<?php echo site_url('welcome/landing');?>"><i class="fa fa-remove" aria-hidden="true"></i>Keluar</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>

	<div class="container contact_container">

		<br>
		<br>
		<br>

		<!-- Banner -->

		<div class="container">
			<div class="panel panel-default">
                        <div class="panel-heading">
                            Alert Styles
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr align="center">
                                            <th></th>
                                            <th>Jasa</th>
                                            <th>Klien</th>
                                            <th width="15%">Waktu Pengerjaan</th>
                                            <th width="10%">Status</th>
                                            <th width="10%"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Reparasi AC</td>
                                            <td>Reparasi AC</td>
                                            <td>12-12-2017 18:00</td>
                                            <td class="success" align="center"><small>Selesai</small></td>
                                            <td><a class="btn btn-primary btn-sm" href="index.html">Login</a></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Reparasi AC</td>
                                            <td>Reparasi AC</td>
                                            <td>12-12-2017 18:00</td>
                                            <td class="success" align="center"><small>Selesai</small></td>
                                            <td><a class="btn btn-primary btn-sm" href="index.html">Login</a></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Reparasi AC</td>
                                            <td>Reparasi AC</td>
                                            <td>12-12-2017 18:00</td>
                                            <td class="success" align="center"><small>Selesai</small></td>
                                            <td><a class="btn btn-primary btn-sm" href="index.html">Login</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- .panel-body -->
                    </div>
                    <!-- /.panel -->
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
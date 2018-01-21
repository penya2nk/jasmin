<!DOCTYPE html>
<html lang="en">
<head>
<title>Jasmin - Penyedia Jasa</title>
<link rel="shortcut icon" href="<?php echo base_url('assets/coloshop/images/favicon.ico'); ?>">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Colo Shop Template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/coloshop/styles/bootstrap4/bootstrap.min.css'); ?>">
<link href="<?php echo base_url('assets/coloshop/plugins/font-awesome-4.7.0/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/coloshop/plugins/OwlCarousel2-2.2.1/owl.carousel.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/coloshop/plugins/OwlCarousel2-2.2.1/owl.theme.default.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/coloshop/plugins/OwlCarousel2-2.2.1/animate.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/coloshop/plugins/jquery-ui-1.12.1.custom/jquery-ui.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/coloshop/styles/categories_styles.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/coloshop/styles/categories_responsive.css'); ?>">
</head>

<body>

<div class="super_container">

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
<br>
<br>
<br>
	<div class="container product_section_container">
		<div class="row">
			<div class="col product_section clearfix">

				<!-- Sidebar -->

				<div class="sidebar">
					<div class="sidebar_section">
						<div class="sidebar_title">
							<h5>Product Category</h5>
						</div>
						<ul class="sidebar_categories">
							<li class="active"><a href="#">Service AC</a></li>
							<li><a href="#">Service Televisi</a></li>
							<li><a href="#">Service Kulkas</a></li>
							<li><a href="#">Service Komputer</a></li>
							<li><a href="#">Perbaikan Kelistrikan</a></li>
							<li><a href="#">Perbaikan Saluran Air</a></li>
							<li><a href="#">Perbaikan Rumah Ringan</a></li>
							<li><a href="#">Babysitter</a></li>
							<li><a href="#">Tenaga Dapur</a></li>
							<li><a href="#">Driver</a></li>
						</ul>
					</div>

					<!-- Sizes -->
					<div class="sidebar_section">
						<div class="sidebar_title">
							<h5>Jenis Kelamin</h5>
						</div>
						<ul class="checkboxes">
							<li><i class="fa fa-square-o" aria-hidden="true"></i><span>Pria</span></li>
							<li><i class="fa fa-square-o" aria-hidden="true"></i><span>Wanita</span></li>
						</ul>
					</div>

					<!-- Sizes -->
					<div class="sidebar_section">
						<div class="sidebar_title">
							<h5>Lokasi</h5>
						</div>
						<select name="prov" class="form-control" id="provinsi">
							<option>- Select Provinsi -</option>
							<?php foreach($provinsi as $prov){
								echo '<option value="'.$prov->id.'">'.$prov->nama.'</option>';
							} ?>
						</select>
						<br>
						<select name="kab" class="form-control" id="kabupaten">
							<option value=''>Select Kabupaten</option>
						</select>
						<br>						
						<select name="kec" class="form-control" id="kecamatan">
							<option>Select Kecamatan</option>
						</select>
						<br>
						<select name="des" class="form-control" id="desa">
							<option>Select Desa</option>
						</select>
						<div class="filter_button"><span>filter</span></div>
					</div>					

				</div>

				<!-- Main Content -->

				<div class="main_content">

					<!-- Products -->

					<div class="products_iso">
						<div class="row">
							<div class="col">

								<!-- Product Sorting -->

								<div class="product_sorting_container product_sorting_container_top">
									<ul class="product_sorting">
										<li>
											<span class="type_sorting_text">Default Sorting</span>
											<i class="fa fa-angle-down"></i>
											<ul class="sorting_type">
												<li class="type_sorting_btn" data-isotope-option='{ "sortBy": "original-order" }'><span>Default Sorting</span></li>
												<li class="type_sorting_btn" data-isotope-option='{ "sortBy": "price" }'><span>Price</span></li>
												<li class="type_sorting_btn" data-isotope-option='{ "sortBy": "name" }'><span>Product Name</span></li>
											</ul>
										</li>
										<li>
											<span>Show</span>
											<span class="num_sorting_text">6</span>
											<i class="fa fa-angle-down"></i>
											<ul class="sorting_num">
												<li class="num_sorting_btn"><span>6</span></li>
												<li class="num_sorting_btn"><span>12</span></li>
												<li class="num_sorting_btn"><span>24</span></li>
											</ul>
										</li>
									</ul>
									<div class="pages d-flex flex-row align-items-center">
										<div class="page_current">
											<span>1</span>
											<ul class="page_selection">
												<li><a href="#">1</a></li>
												<li><a href="#">2</a></li>
												<li><a href="#">3</a></li>
											</ul>
										</div>
										<div class="page_total"><span>of</span> 3</div>
										<div id="next_page" class="page_next"><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div>
									</div>

								</div>

								<!-- Product Grid -->

								<div class="product-grid">

									<!-- Product 1 -->

									<div class="product-item men">
										<div class="product discount product_filter">
											<div class="product_image">
												<img src="<?php echo base_url('assets/coloshop/images/product_a.jpg'); ?>" alt="">
											</div>
											<div class="product_info">
												<h6 class="product_name"><a href="single.html">Ahmad Pourmovahed</a></h6>
												<div class="product_price">Rp. 120.000</div>
											</div>
										</div>
										<div class="red_button add_to_cart_button"><a href="<?php echo site_url('welcome/profil');?>">Kirim Permintaan</a></div>
									</div>

									<!-- Product 2 -->

									<div class="product-item women">
										<div class="product product_filter">
											<div class="product_image">
												<img src="<?php echo base_url('assets/coloshop/images/product_b.jpg'); ?>" alt="">
											</div>
											<div class="product_info">
												<h6 class="product_name"><a href="single.html">Ali Zand</a></h6>
												<div class="product_price">Rp. 110.000</div>
											</div>
										</div>
										<div class="red_button add_to_cart_button"><a href="<?php echo site_url('welcome/profil');?>">Kirim Permintaan</a></div>
									</div>

									<!-- Product 3 -->

									<div class="product-item women">
										<div class="product product_filter">
											<div class="product_image">
												<img src="<?php echo base_url('assets/coloshop/images/product_c.jpg'); ?>" alt="">
											</div>
											<div class="product_info">
												<h6 class="product_name"><a href="single.html">Alicia Flood</a></h6>
												<div class="product_price">Rp. 120.000</div>
											</div>
										</div>
										<div class="red_button add_to_cart_button"><a href="<?php echo site_url('welcome/profil');?>">Kirim Permintaan</a></div>
									</div>

									<!-- Product 4 -->

									<div class="product-item accessories">
										<div class="product product_filter">
											<div class="product_image">
												<img src="<?php echo base_url('assets/coloshop/images/product_d.jpg'); ?>" alt="">
											</div>
											<div class="product_info">
												<h6 class="product_name"><a href="single.html">Amanda Rodden</a></h6>
												<div class="product_price">Rp. 110.000</div>
											</div>
										</div>
										<div class="red_button add_to_cart_button"><a href="<?php echo site_url('welcome/profil');?>">Kirim Permintaan</a></div>
									</div>

									<!-- Product 5 -->

									<div class="product-item women men">
										<div class="product product_filter">
											<div class="product_image">
												<img src="<?php echo base_url('assets/coloshop/images/product_e.jpg'); ?>" alt="">
											</div>
											<div class="product_info">
												<h6 class="product_name"><a href="single.html">Anthony Parker</a></h6>
												<div class="product_price">$Rp. 80.000</div>
											</div>
										</div>
										<div class="red_button add_to_cart_button"><a href="<?php echo site_url('welcome/profil');?>">Kirim Permintaan</a></div>
									</div>

									<!-- Product 6 -->

									<div class="product-item accessories">
										<div class="product discount product_filter">
											<div class="product_image">
												<img src="<?php echo base_url('assets/coloshop/images/product_f.jpg'); ?>" alt="">
											</div>
											<div class="product_info">
												<h6 class="product_name"><a href="single.html">Arthur DeMonte</a></h6>
												<div class="product_price">Rp. 120.000</div>
											</div>
										</div>
										<div class="red_button add_to_cart_button"><a href="<?php echo site_url('welcome/profil');?>">Kirim Permintaant</a></div>
									</div>

									<!-- Product 7 -->

									<div class="product-item women">
										<div class="product product_filter">
											<div class="product_image">
												<img src="<?php echo base_url('assets/coloshop/images/product_g.jpg'); ?>" alt="">
											</div>
											<div class="product_info">
												<h6 class="product_name"><a href="single.html">Bassem Ramadan</a></h6>
												<div class="product_price">Rp. 110.000</div>
											</div>
										</div>
										<div class="red_button add_to_cart_button"><a href="<?php echo site_url('welcome/profil');?>">Kirim Permintaan</a></div>
									</div>

									<!-- Product 8 -->

									<div class="product-item accessories">
										<div class="product product_filter">
											<div class="product_image">
												<img src="<?php echo base_url('assets/coloshop/images/product_h.jpg'); ?>" alt="">
											</div>
											<div class="product_info">
												<h6 class="product_name"><a href="single.html">Betsy Homsher</a></h6>
												<div class="product_price">Rp. 120.000</div>
											</div>
										</div>
										<div class="red_button add_to_cart_button"><a href="<?php echo site_url('welcome/profil');?>">Kirim Permintaan</a></div>
									</div>

									<!-- Product 9 -->

									<div class="product-item men">
										<div class="product product_filter">
											<div class="product_image">
												<img src="<?php echo base_url('assets/coloshop/images/product_j.jpg'); ?>" alt="">
											</div>
											<div class="product_info">
												<h6 class="product_name"><a href="single.html">Brandon Parkinson</a></h6>
												<div class="product_price">Rp. 110.000</div>
											</div>
										</div>
										<div class="red_button add_to_cart_button"><a href="<?php echo site_url('welcome/profil');?>">Kirim Permintaan</a></div>
									</div>

									<!-- Product 10 -->

									<div class="product-item men">
										<div class="product product_filter">
											<div class="product_image">
												<img src="<?php echo base_url('assets/coloshop/images/product_k.jpg'); ?>" alt="">
											</div>
											<div class="product_info">
												<h6 class="product_name"><a href="single.html">Brian Beck</a></h6>
												<div class="product_price">Rp. 80.000</div>
											</div>
										</div>
										<div class="red_button add_to_cart_button"><a href="<?php echo site_url('welcome/profil');?>">Kirim Permintaan</a></div>
									</div>

									<!-- Product 11 -->

									<div class="product-item women men">
										<div class="product product_filter">
											<div class="product_image">
												<img src="<?php echo base_url('assets/coloshop/images/product_l.jpg'); ?>" alt="">
											</div>
											<div class="product_info">
												<h6 class="product_name"><a href="single.html">Dale Karbginsky</a></h6>
												<div class="product_price">Rp. 80.000</div>
											</div>
										</div>
										<div class="red_button add_to_cart_button"><a href="<?php echo site_url('welcome/profil');?>">Kirim Permintaan</a></div>
									</div>

									<!-- Product 12 -->

									<div class="product-item accessories">
										<div class="product discount product_filter">
											<div class="product_image">
												<img src="<?php echo base_url('assets/coloshop/images/product_i.jpg'); ?>" alt="">
											</div>
											<div class="product_info">
												<h6 class="product_name"><a href="single.html">Charles Hanson</a></h6>
												<div class="product_price">Rp. 120.000</div>
											</div>
										</div>
										<div class="red_button add_to_cart_button"><a href="<?php echo site_url('welcome/profil');?>">Kirim Permintaan</a></div>
									</div>
								</div>

								<!-- Product Sorting -->

								<div class="product_sorting_container product_sorting_container_bottom clearfix">
									<ul class="product_sorting">
										<li>
											<span>Show:</span>
											<span class="num_sorting_text">04</span>
											<i class="fa fa-angle-down"></i>
											<ul class="sorting_num">
												<li class="num_sorting_btn"><span>01</span></li>
												<li class="num_sorting_btn"><span>02</span></li>
												<li class="num_sorting_btn"><span>03</span></li>
												<li class="num_sorting_btn"><span>04</span></li>
											</ul>
										</li>
									</ul>
									<span class="showing_results">Showing 1–3 of 12 results</span>
									<div class="pages d-flex flex-row align-items-center">
										<div class="page_current">
											<span>1</span>
											<ul class="page_selection">
												<li><a href="#">1</a></li>
												<li><a href="#">2</a></li>
												<li><a href="#">3</a></li>
											</ul>
										</div>
										<div class="page_total"><span>of</span> 3</div>
										<div id="next_page_1" class="page_next"><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div>
									</div>

								</div>

							</div>
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
<script src="<?php echo base_url('assets/coloshop/plugins/jquery-ui-1.12.1.custom/jquery-ui.js'); ?>"></script>
<script src="<?php echo base_url('assets/coloshop/js/categories_custom.js'); ?>"></script><script>
	        $(document).ready(function(){
	            $("#provinsi").change(function (){
	                var url = "<?php echo site_url('wilayah/add_ajax_kab');?>/"+$(this).val();
	                $('#kabupaten').load(url);
	                return false;
	            })
				
				$("#kabupaten").change(function (){
	                var url = "<?php echo site_url('wilayah/add_ajax_kec');?>/"+$(this).val();
	                $('#kecamatan').load(url);
	                return false;
	            })
				
				$("#kecamatan").change(function (){
	                var url = "<?php echo site_url('wilayah/add_ajax_des');?>/"+$(this).val();
	                $('#desa').load(url);
	                return false;
	            })
	        });
	    </script>
</body>

</html>

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
							<li><a href="#">Men</a></li>
							<li class="active"><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>Women</a></li>
							<li><a href="#">Accessories</a></li>
							<li><a href="#">New Arrivals</a></li>
							<li><a href="#">Collection</a></li>
							<li><a href="#">Shop</a></li>
						</ul>
					</div>

					<!-- Price Range Filtering -->
					<div class="sidebar_section">
						<div class="sidebar_title">
							<h5>Filter by Price</h5>
						</div>
						<p>
							<input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
						</p>
						<div id="slider-range"></div>
						<div class="filter_button"><span>filter</span></div>
					</div>

					<!-- Sizes -->
					<div class="sidebar_section">
						<div class="sidebar_title">
							<h5>Sizes</h5>
						</div>
						<ul class="checkboxes">
							<li><i class="fa fa-square-o" aria-hidden="true"></i><span>S</span></li>
							<li class="active"><i class="fa fa-square" aria-hidden="true"></i><span>M</span></li>
							<li><i class="fa fa-square-o" aria-hidden="true"></i><span>L</span></li>
							<li><i class="fa fa-square-o" aria-hidden="true"></i><span>XL</span></li>
							<li><i class="fa fa-square-o" aria-hidden="true"></i><span>XXL</span></li>
						</ul>
					</div>

					<!-- Color -->
					<div class="sidebar_section">
						<div class="sidebar_title">
							<h5>Color</h5>
						</div>
						<ul class="checkboxes">
							<li><i class="fa fa-square-o" aria-hidden="true"></i><span>Black</span></li>
							<li class="active"><i class="fa fa-square" aria-hidden="true"></i><span>Pink</span></li>
							<li><i class="fa fa-square-o" aria-hidden="true"></i><span>White</span></li>
							<li><i class="fa fa-square-o" aria-hidden="true"></i><span>Blue</span></li>
							<li><i class="fa fa-square-o" aria-hidden="true"></i><span>Orange</span></li>
							<li><i class="fa fa-square-o" aria-hidden="true"></i><span>White</span></li>
							<li><i class="fa fa-square-o" aria-hidden="true"></i><span>Blue</span></li>
							<li><i class="fa fa-square-o" aria-hidden="true"></i><span>Orange</span></li>
							<li><i class="fa fa-square-o" aria-hidden="true"></i><span>White</span></li>
							<li><i class="fa fa-square-o" aria-hidden="true"></i><span>Blue</span></li>
							<li><i class="fa fa-square-o" aria-hidden="true"></i><span>Orange</span></li>
						</ul>
						<div class="show_more">
							<span><span>+</span>Show More</span>
						</div>
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
												<img src="<?php echo base_url('assets/coloshop/images/product_8.png'); ?>" alt="">
											</div>
											<div class="favorite favorite_left"></div>
											<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-$20</span></div>
											<div class="product_info">
												<h6 class="product_name"><a href="single.html">Fujifilm X100T 16 MP Digital Camera (Silver)</a></h6>
												<div class="product_price">$520.00<span>$590.00</span></div>
											</div>
										</div>
										<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
									</div>

									<!-- Product 2 -->

									<div class="product-item women">
										<div class="product product_filter">
											<div class="product_image">
												<img src="<?php echo base_url('assets/coloshop/images/product_8.png'); ?>" alt="">
											</div>
											<div class="favorite"></div>
											<div class="product_bubble product_bubble_left product_bubble_green d-flex flex-column align-items-center"><span>new</span></div>
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
												<img src="<?php echo base_url('assets/coloshop/images/product_8.png'); ?>" alt="">
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
												<img src="<?php echo base_url('assets/coloshop/images/product_8.png'); ?>" alt="">
											</div>
											<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>sale</span></div>
											<div class="favorite favorite_left"></div>
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
												<img src="<?php echo base_url('assets/coloshop/images/product_8.png'); ?>" alt="">
											</div>
											<div class="favorite"></div>
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
												<img src="<?php echo base_url('assets/coloshop/images/product_8.png'); ?>" alt="">
											</div>
											<div class="favorite favorite_left"></div>
											<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-$20</span></div>
											<div class="product_info">
												<h6 class="product_name"><a href="single.html">Fujifilm X100T 16 MP Digital Camera (Silver)</a></h6>
												<div class="product_price">$520.00<span>$590.00</span></div>
											</div>
										</div>
										<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
									</div>

									<!-- Product 7 -->

									<div class="product-item women">
										<div class="product product_filter">
											<div class="product_image">
												<img src="<?php echo base_url('assets/coloshop/images/product_8.png'); ?>" alt="">
											</div>
											<div class="favorite"></div>
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
											<div class="favorite"></div>
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
												<img src="<?php echo base_url('assets/coloshop/images/product_8.png'); ?>" alt="">
											</div>
											<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>sale</span></div>
											<div class="favorite favorite_left"></div>
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
												<img src="<?php echo base_url('assets/coloshop/images/product_8.png'); ?>" alt="">
											</div>
											<div class="favorite"></div>
											<div class="product_info">
												<h6 class="product_name"><a href="single.html">Pryma Headphones, Rose Gold & Grey</a></h6>
												<div class="product_price">$180.00</div>
											</div>
										</div>
										<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
									</div>

									<!-- Product 11 -->

									<div class="product-item women men">
										<div class="product product_filter">
											<div class="product_image">
												<img src="<?php echo base_url('assets/coloshop/images/product_8.png'); ?>" alt="">
											</div>
											<div class="favorite"></div>
											<div class="product_info">
												<h6 class="product_name"><a href="single.html">Pryma Headphones, Rose Gold & Grey</a></h6>
												<div class="product_price">$180.00</div>
											</div>
										</div>
										<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
									</div>

									<!-- Product 12 -->

									<div class="product-item accessories">
										<div class="product discount product_filter">
											<div class="product_image">
												<img src="<?php echo base_url('assets/coloshop/images/product_8.png'); ?>" alt="">
											</div>
											<div class="favorite favorite_left"></div>
											<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-$20</span></div>
											<div class="product_info">
												<h6 class="product_name"><a href="single.html">Fujifilm X100T 16 MP Digital Camera (Silver)</a></h6>
												<div class="product_price">$520.00<span>$590.00</span></div>
											</div>
										</div>
										<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
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
<script src="<?php echo base_url('assets/coloshop/js/categories_custom.js'); ?>"></script>
</body>

</html>

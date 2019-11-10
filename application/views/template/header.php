<!doctype html>
<html class="no-js" lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title><?= $title ?> | Vefresh</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

	<!-- CSS
    ========================= -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<!-- Plugins CSS -->
	<link rel="stylesheet" href="<?= base_url('assets/css/plugins.css') ?>">

	<!-- Main Style CSS -->
	<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

</head>

<body>

	<!-- Main Wrapper Start -->
	<!--Offcanvas menu area start-->
	<div class="off_canvars_overlay">

	</div>

	<!--Offcanvas menu area end-->

	<!--header area start-->
	<header class="header_area">

		<!--header middel start-->
		<div class="header_middel">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-2 col-md-3">
						<div class="logo">
							<a href="index.html"><img src="<?= base_url('') ?>assets/img/logo/logo.png" alt=""></a>
						</div>
					</div>
					<div class="col-lg-10 col-md-9">
						<div class="middel_right">
							<div class="search_btn">
								<a href="#"><i class="ion-ios-search-strong"></i></a>
								<div class="dropdown_search">
									<form action="#">
										<input placeholder="Search product..." type="text">
										<button type="submit"><i class="ion-ios-search-strong"></i></button>
									</form>
								</div>
							</div>
							<?php if ($this->session->userdata('username') == null) : ?>
								<div class="cart_link">
									<a href="<?= base_url('login') ?>">Login</a>
								</div>
							<?php else : ?>
								<div class="box_setting">
									<a href="#"><i class="ion-gear-b"></i></a>
									<div class="dropdown_setting">
										<ul>
											<li><a href="<?= base_url('checkout') ?>">Checkout </a></li>
											<!-- <li><a href="<?= base_url('') ?>login.html">My Account </a></li> -->
											<li><a href="<?= base_url('profile') ?>">Profile </a></li>
											<li><a href="<?= base_url('cart') ?>">Shopping Cart</a></li>
											<li><a href="<?= base_url('wishlist') ?>">Wishlist</a></li>
											<li><a href="<?= base_url('shop') ?>">Shop</a></li>
											<li><a href="<?= base_url('logout') ?>">Logout</a></li>
										</ul>

									</div>
								</div>
								<div class="cart_link">
									<a href="#"><i class="ion-android-cart"></i>Rp. 43.000 <i class="fa fa-angle-down"></i></a>
									<span class="cart_quantity">1</span>
									<!--mini cart-->
									<div class="mini_cart">
										<div class="mini_cart_inner">
											<div class="cart_item">
												<div class="cart_img">
													<a href="#"><img src="<?= base_url('assets/img/s-product/apel.jpg') ?>" alt=""></a>
												</div>
												<div class="cart_info">
													<a href="#">Apel</a>

													<span class="quantity">Qty: 1</span>
													<span class="price_cart">Rp. 43.000</span>

												</div>
												<div class="cart_remove">
													<a href="#"><i class="ion-android-close"></i></a>
												</div>
											</div>
											<div class="cart_total">
												<span>Subtotal:</span>
												<span>Rp. 43.000</span>
											</div>
										</div>
										<div class="mini_cart_footer">
											<div class="cart_button view_cart">
												<a href="<?= base_url('cart') ?>">View cart</a>
											</div>
											<div class="cart_button checkout">
												<a href="<?= base_url('checkout') ?>">Checkout</a>
											</div>

										</div>

									</div>
									<!--mini cart end-->
								</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--header middel end-->

		<!--header bottom satrt-->
		<div class="header_bottom sticky-header">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-12">
						<div class="main_menu_inner">
							<div class="logo_sticky">
								<a href="index.html"><img src="<?= base_url('') ?>assets/img/logo/logo.png" alt=""></a>
							</div>
							<div class="main_menu">

							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<!--header bottom end-->
	</header>
	<!--header area end-->
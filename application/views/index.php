	<!--slider area start-->
	<div class="slider_area owl-carousel">
		<div class="single_slider" data-bgimg="assets/img/slider/web-banner1.jpg">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-12">
						<!-- <div class="slider_content">
              <p>exclusive offer -10% off this week</p>
              <h1>jewelry arrivals</h1>
              <p class="slider_price">starting at <span>$2.199.oo</span></p>
              <a class="button" href="shop.html">shopping now</a>
            </div> -->
					</div>
				</div>
			</div>
		</div>
		<div class="single_slider" data-bgimg="assets/img/slider/web-banner2.jpg">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-12">
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--slider area end-->

	<!--banner area start-->

	<!--product section area start-->
	<section class="product_section p_section1">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="product_area">
						<div class="product_tab_button">
							<ul class="nav" role="tablist">
								<!-- <li>
									<a class="active" data-toggle="tab" href="#featured" role="tab" aria-controls="featured" aria-selected="true">Featured</a>
								</li> -->
								<li>
									<a data-toggle="tab" href="#arrivals" role="tab" aria-controls="arrivals" aria-selected="false">New Arrivals</a>
								</li>
								

							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade show active" id="arrivals" role="tabpanel">
							<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section_title">
						<h2></h2>
					</div>
				</div>
				<div class="col-12">
					<div class="product_area ">
						<div class="product_container bottom">
							<div class="custom-row product_row1">
								<?php $i = 1; ?>
								<?php foreach ($sayur as $row) : ?>
									<div class="custom-col-5">
										<div class="single_product">
											<div class="product_thumb">
												<a class="primary_img" href="product-details.html"><img src="<?= base_url('assets/img/product/' . $row['foto']) ?>" alt=""></a>
												<a class="secondary_img" href="product-details.html"><img src="<?= base_url('assets/img/product/' . $row['foto']) ?>" alt=""></a>
												<div class="quick_button">
													<a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view">Quick View</a>
												</div>
											</div>
											<div class="product_content">
												<h3><a href="product-details.html"><?= $row['nama'] ?></a></h3>
												<div class="price_box">
													<!-- <span class="old_price">Rp. 38.000</span> -->
													<span class="current_price">Rp <?= number_format($row['harga'], 0, ',', '.') ?></span>
												</div>
												<div class="product_hover">
													
													<div class="product_desc">
														<p><?= $row['deskripsi'] ?></p>
													</div>
													<div class="action_links">
														<ul>
															<!-- <li><a href="wishlist.html" data-placement="top" title="Add to Wishlist" data-toggle="tooltip"><span class="icon icon-Heart"></span></a></li> -->
															<form action="<?= base_url('add-cart-one') ?>" method="post">
																<input type="hidden" name="id" value="<?= $row['id'] ?>">
																	<li class="add_to_cart"><a href="javascript:" onclick="parentNode.parentNode.submit()" title="add to cart">add to cart</a></li>
															</form>
															<!-- <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a> -->
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
									<?php $i++; ?>
								<?php endforeach; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
							

							
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>

	

	<!--blog section area start-->
	<!-- <section class="blog_section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section_title">
						<h2>VEFRESH News</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="blog_wrapper blog_column3 owl-carousel">
					<div class="col-lg-4">
						<div class="single_blog">
							<div class="blog_thumb">
								<a href="blog-details.html"><img src="assets/img/blog/news1.jpg" alt=""></a>
							</div>
							<div class="blog_content">
								<h3><a href="blog-details.html">Asian Vegetables Rapidly Emerging in Florida</a></h3>
								<div class="author_name">
									<p>
										<span>by</span>
										<span class="themes">admin</span>
										/ 30 Oct 2018
									</p>

								</div>

								<div class="post_desc">
									<p>Asian vegetables are crops originating from countries such as China, India and
										Japan.
										They are also referred to as “oriental vegetables,” and include bitter melon</p>
								</div>
								<div class="read_more">
									<a href="blog-details.html">read more</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="single_blog">
							<div class="blog_thumb">
								<a href="blog-details.html"><img src="assets/img/blog/news2.jpg" alt=""></a>
							</div>
							<div class="blog_content">
								<h3><a href="blog-details.html">30 Spring Vegetables in Season Now</a></h3>
								<div class="author_name">
									<p>
										<span>by</span>
										<span class="themes">admin</span>
										/ 30 Oct 2018
									</p>

								</div>
								<div class="post_desc">
									<p>After months of winter root vegetables and frozen veggies, spring is a time to
										indulge in delicate, light produce just beginning to pop out of the ground.</p>
								</div>
								<div class="read_more">
									<a href="blog-details.html">read more</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="single_blog">
							<div class="blog_thumb">
								<a href="blog-details.html"><img src="assets/img/blog/news3.jpg" alt=""></a>
							</div>
							<div class="blog_content">
								<h3><a href="blog-details.html">Tips for growing vegetables in containers</a></h3>
								<div class="author_name">
									<p>
										<span>by</span>
										<span class="themes">admin</span>
										/ 30 Oct 2018
									</p>

								</div>
								<div class="post_desc">
									<p>Do you have a small space? Perhaps just a balcony or patio as outdoor space?
										Maybe you have no soil and can only grow plants in pots.</p>
								</div>
								<div class="read_more">
									<a href="blog-details.html">read more</a>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section> -->
	<!--blog section area end-->

	<!--testimonials section start-->
	<div class="testimonial_are">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section_title">
						<h2>What Our Custumers Say ?</h2>
					</div>
				</div>
				<div class="testimonial_active owl-carousel">
					<div class="col-12">
						<div class="single_testimonial">
							<p>These guys have been absolutely outstanding. Perfect Themes and the best of all that you
								have many options to choose! Best Support team ever! Very fast responding! Thank you
								very much! I highly recommend this theme and these people!</p>

							<span class="name">Kathy Young</span>
							<div class="checkout_btn">
								<a href="testimonial.html">Tulis Testimoni</a>
							</div>
							<!-- <a href="testimonial.html">Tulis Testimoni</a> -->
						</div>

					</div>
					<div class="col-12">
						<div class="single_testimonial">
							<p>These guys have been absolutely outstanding. Perfect Themes and the best of all that you
								have many options to choose! Best Support team ever! Very fast responding! Thank you
								very much! I highly recommend this theme and these people!</p>

							<span class="name">Kathy Young</span>
							<div class="checkout_btn">
								<a href="testimonial.html">Tulis Testimoni</a>
							</div>
						</div>
					</div>
					<div class="col-12">
						<div class="single_testimonial">
							<p>These guys have been absolutely outstanding. Perfect Themes and the best of all that you
								have many options to choose! Best Support team ever! Very fast responding! Thank you
								very much! I highly recommend this theme and these people!</p>

							<span class="name">Kathy Young</span>
							<div class="checkout_btn">
								<a href="testimonial.html">Tulis Testimoni</a>
							</div>
						</div>
					</div>
				</div>


			</div>
		</div>
	</div>
	<!--testimonials section end-->

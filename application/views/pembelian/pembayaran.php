    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <!-- <div class="col-12">
                    <div class="breadcrumb_content">
                        <h3>My account</h3>
                        <ul>
                            <li><a href="index.html">home</a></li>
                            <li>></li>
                            <li>My account</li>
                        </ul>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!-- customer login start -->
    <div class="customer_login">
        <div class="container">
            <div class="row">


                <!--register area start-->
                <div class="col-lg-4 col-md-6"></div>
                <div class="col-lg-4 col-md-6">
                    <h2>Bank Transfer</h2>
                    <br>
                    <h4>Detail Transfer</h4>

                    <div class="coupon_code right">
                        <div class="coupon_inner">
                            <div class="cart_subtotal">
                                <label>Total</label>
                                <label class="cart_amount">Rp <?= number_format($this->session->userdata('totalHarga'));?></label>
                            </div>
                            <!-- <div class="cart_subtotal ">
                                <label>Biaya Transaksi</label>
                                <label class="cart_amount">-Rp. 375</label>
                            </div> -->
                            <a href="#"></a>

                            <div class="cart_subtotal">
                                <label>Jumlah Harus Dibayar</label>
                                <label class="cart_amount">Rp <?= number_format($this->session->userdata('totalHarga'));?></label>
                            </div>
                            <!-- <div class="checkout_btn">
                                    <a href="#">Salin Jumlah</a>
                                </div> -->
                        </div>
                    </div>
                    <br>
                    <h4>Bank Transfer</h4>
                    <div class="coupon_code right">
                        <div class="coupon_inner">
                            <div class="cart_subtotal">
                                <label>Bank Tujuan</label>
                                <label class="cart_amount">BCA</label>
                            </div>
                            <div class="cart_subtotal ">
                                <label>Nama</label>
                                <label class="cart_amount">PT. Rumah Vefresh Indonesia</label>
                            </div>
                            <div class="cart_subtotal ">
                                <label>Cabang</label>
                                <label class="cart_amount">KCP Malang</label>
                            </div>

                            <a href="#"></a>
                            <div class="cart_subtotal ">
                                <label>Nomor Rekening</label>
                                <p class="cart_amount">524-299-1192</p>
                            </div>
													</div>
												</div>
												<br>
												<h4>Upload bukti transfer</h4>
												<div class="coupon_code right">
													<div class="coupon_inner">                            
														<!-- <div class="checkout_btn">
															<a href="#">Salin No Rekening</a>
														</div> -->
														<!-- <div class="input-group mb-3"> -->
															<form action="<?= base_url('pembayaran/re') ?>" method="POST">
																<div class="form-group">
																	<!-- <label for="exampleFormControlFile1">Upload bukti bayar</label> -->
																	<input type="file" class="form-control-file" id="exampleFormControlFile1">
																</div>
																<div class="checkout_btn">
																	<a href="javascript:" onclick="parentNode.parentNode.submit()">Upload</a>
																	<!-- <a href="javascriot:" onclick="console.log('tes')">Upload</a> -->
																</div>
															</form>
																<!-- </div> -->
                        </div>
                    </div>
                </div>
                <!--register area end-->
            </div>
        </div>
    </div>
    <!-- customer login end -->
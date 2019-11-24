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
            <div class="row justify-content-center">
                <!--register area start-->
                <div class="col-lg-6 col-md-6">
                    <h2>Bank Transfer</h2>
                    <br>
                    <h4>Detail Transfer</h4>
										<?= $this->session->flashdata('message'); ?>
                    <div class="coupon_code right">
                        <div class="coupon_inner">
                            <div class="cart_subtotal ">
                                <label>Nomor Order</label>
                                <label class="cart_amount"><b><?= $result['nomor_order'] ?></b></label>
                            </div>

                            <div class="cart_subtotal">
                                <label>Jumlah Harus Dibayar</label>
                                <label class="cart_amount">Rp <?= number_format($result['total'], 0, ',', '.');?></label>
                            </div>
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

															<form action="<?= base_url("payment/" . $result['nomor_order']) ?>" method="POST" enctype="multipart/form-data">
																<!-- <div class="form-group">
																	<input type="file" class="form-control-file" id="exampleFormControlFile1">
																</div> -->
																<div class="input-group">
  																<div class="custom-file">
    																<input type="file" name="buktiBayar" class="custom-file-input" id="inputGroupFile01"
      																aria-describedby="inputGroupFileAddon01">
																		<label class="custom-file-label" for="inputGroupFile01">Choose file</label>
																		<input type="hidden" name="nomor" value="<?= $result['nomor_order'] ?>">
  																</div>
																</div>
																<br>
																<div class="checkout_btn">
																	<a href="javascript:" onclick="parentNode.parentNode.submit()">Upload</a>
																	<!-- <a href="javascriot:" onclick="console.log('tes')">Upload</a> -->
																</div>
															</form>
													</div>
                        </div>
                    </div>
                </div>
                <!--register area end-->
            </div>
        </div>
    </div>
		<!-- customer login end -->

		<script src="<?= base_url('assets/js/custom-file-input.js') ?>"></script>

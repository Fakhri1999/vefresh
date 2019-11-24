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
    			<div class="col-lg-6 col-md-6">
    				<div class="account_form register">
							<h2 class="text-center">Confirm your payment</h2>
							<?= $this->session->flashdata('message'); ?>
    					<form action="<?= base_url('payment') ?>" method="post">
    						<p>
    							<label for="nomor">Kode Pembelian</label>
    							<input type="text" id="nomor" name="nomor" placeholder="Enter your order number">
    						</p>
    						<!-- <div class="login_submit"> -->
    							<button type="submit" class="btn btn-block" style="margin-left: 0px;">Cari</button>
    						<!-- </div> -->
    					</form>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
    <!-- customer login end -->

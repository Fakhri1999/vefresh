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
    					<?php if ($this->session->flashdata('sukses') == 'sukses') : ?>
    						<h2 class="text-center">Payment Success</h2>
    						<?= $this->session->flashdata('message'); ?>
    						<form method="post">
    							<p class="text-center">Bukti bayar berhasil diupload. Bukti bayar Anda akan kami cek, kemudian akan kami kirim belanjaan Anda.</p>
    						</form>
    					<?php else : ?>
    						<h2 class="text-center">Oooppss error. Kami tidak dapat mencari nomor order anda</h2>

    					<?php endif; ?>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
    <!-- customer login end -->

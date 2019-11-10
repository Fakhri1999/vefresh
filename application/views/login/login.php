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
    			<!--login area start-->
    			<div class="col-lg-4 col-md-6"></div>
    			<div class="col-lg-4 col-md-6">
    				<div class="account_form">
    					<h2>login</h2>
    					<?= $this->session->flashdata('message'); ?>
    					<form action="<?= base_url('login') ?>" method="POST">
    						<p>
    							<label>Username<span>*</span></label>
									<input type="text" name="username">
									<small class="form-text text-danger"><?= form_error('username'); ?></small>
    						</p>
    						<p>
    							<label>Password <span>*</span></label>
									<input type="password" name="password">
									<small class="form-text text-danger"><?= form_error('password'); ?></small>
    						</p>
    						<div class="login_submit">
    							<a href="#">Lost your password?</a>
    							<br>

    							<label for="remember">
    								<input id="remember" type="checkbox">
    								Remember me
    							</label>
    							<button type="submit">login</button>
    							<a href="<?= base_url('register') ?>">Don't have an account?</a>
    							<p></p>
    						</div>

    					</form>
    				</div>
    			</div>
    			<!--login area start-->


    		</div>
    	</div>
    </div>
    <!-- customer login end -->

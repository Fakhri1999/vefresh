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
                <!-- <div class="col-lg-6 col-md-6">
                    <div class="account_form">
                        <h2>login</h2>
                        <form action="#">
                            <p>
                                <label>Username or email <span>*</span></label>
                                <input type="text">
                             </p>
                             <p>
                                <label>Passwords <span>*</span></label>
                                <input type="password">
                             </p>
                            <div class="login_submit">
                               <a href="#">Lost your password?</a>
                                <label for="remember">
                                    <input id="remember" type="checkbox">
                                    Remember me
                                </label>
                                <button type="submit">login</button>

                            </div>

                        </form>
                     </div>
                </div> -->
                <!--login area start-->

                <!--register area start-->
                <div class="col-lg-4 col-md-6"></div>
                <div class="col-lg-4 col-md-6">
                    <div class="account_form register">
                        <h2>Register</h2>
                        <form action="<?= base_url('register') ?>" method="POST">
                            <p>
                                <label>Name <span>*</span></label>
																<input type="text" name="name" required>
																<small class="form-text text-danger"><?= form_error('name'); ?></small>
                            </p>
                            <p>
                                <label>Username <span>*</span></label>
																<input type="text" name="username" required>
																<small class="form-text text-danger"><?= form_error('username'); ?></small>
                            </p>
                            <p>
                                <label>Email address <span>*</span></label>
																<input type="email" name="email" required>
																<small class="form-text text-danger"><?= form_error('email'); ?></small>
                            </p>
                            <p>
                                <label>Password <span>*</span></label>
																<input type="password" name="password" minlength="5" required>
																<small class="form-text text-danger"><?= form_error('password'); ?></small>
                            </p>
                            <p>
                                <label>Password Confirmation <span>*</span></label>
																<input type="password" name="passwordConf" minlength="5" required>
																<small class="form-text text-danger"><?= form_error('passwordConf'); ?></small>
                            </p>
                            <div class="login_submit">
														<a href="<?= base_url('login') ?>">Already have an account?</a>
                                <button type="submit">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!--register area end-->
            </div>
        </div>
    </div>
    <!-- customer login end -->

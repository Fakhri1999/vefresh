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
            <h2>Profile</h2>
            <br>
            <!-- <h4>Detail Transfer</h4> -->

            <div class="coupon_code right">
              <div class="coupon_inner">
                <div class="cart_subtotal">
                  <label>Username</label>
                  <label class="cart_amount"><?= $this->session->userdata('username') ?></label>
                </div>
                <div class="cart_subtotal ">
                  <label>Nama</label>
                  <label class="cart_amount"><?= $this->session->userdata('nama') ?></label>
                </div>
                <div class="cart_subtotal ">
                  <label>Email</label>
                  <label class="cart_amount"><?= $this->session->userdata('email') ?></label>
                </div>
                <!-- <div class="cart_subtotal ">
                  <label>Alamat</label>
                  <label class="cart_amount">082213694180</label>
                </div> -->
                <a href="#"></a>

                <!-- <div class="cart_subtotal">
                  <label>Jumlah Harus Dibayar</label>
                  <label class="cart_amount">Rp. 82.625</label>
                </div> -->
                <div class="checkout_btn">
                  <a href="<?= base_url('edit-profile') ?>">Edit Profile</a>
                </div>
              </div>
            </div>
            <br>


          </div>
          <!--register area end-->
        </div>
      </div>
    </div>
    <!-- customer login end -->
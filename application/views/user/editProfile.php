    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
      <div class="container">
        <div class="row">

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
            <div class="account_form">
              <h2>Edit Profile</h2>
              <form action="<?= base_url('edit-profile') ?>" method="post">
                <p>
                  <label>Username</label>
                  <input type="text" name="username" value="<?= $user['username'] ?>">
                </p>
                <p>
                  <label>Nama</label>
                  <input type="text" name="nama" value="<?= $user['nama'] ?>">
                </p>
                <p>
                  <label>Email </label>
                  <input type="text" name="email" value="<?= $user['email'] ?>">
                </p>
                <p>
                  <label>Alamat </label>
                  <input type="text" name="alamat" value="<?= $user['alamat'] ?>">
                </p>
                <p>
                  <label>Kecamatan </label>
                  <input type="text" name="kecamatan" value="<?= $user['kecamatan'] ?>">
                </p>
                <p>
                  <label>Kelurahan </label>
                  <input type="text" name="kelurahan" value="<?= $user['kelurahan'] ?>">
                </p>
                <div class="login_submit">
                  <button type="submit">Save Profile</button>
                  <p></p>
                </div>

              </form>
            </div>
            <br>


          </div>
          <!--register area end-->
        </div>
      </div>
    </div>
    <!-- customer login end -->
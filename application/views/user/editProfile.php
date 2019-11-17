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
									<label for="username">Username</label>
									<input type="hidden" name="id" value="<?= $user['id'] ?>">
    							<input type="text" id="username" name="username" value="<?= $user['username'] ?>" required>
    						</p>
    						<p>
    							<label for="nama">Name</label>
    							<input type="text" id="nama" name="nama" value="<?= $user['nama'] ?>" required>
    						</p>
    						<p>
    							<label for="no_hp">No HP</label>
    							<input type="number" id="no_hp" name="no_hp" value="<?= $user['no_hp'] ?>" required>
    						</p>
    						<p>
    							<label for="email">Email</label>
    							<input type="text" id="email" name="email" value="<?= $user['email'] ?>" required>
    						</p>
    						<div class="order-notes">
    							<label for="alamat">Alamat</label>
    							<textarea name="alamat" id="alamat" cols="30" rows="3" required><?= $user['alamat'] ?></textarea>
    						</div>
    						<p class="mb-4">
    							<div class="option-kecamatan">
    								<label for="kecamatan">Kecamatan</label>
    								<br>
    								<input type="hidden" id="data-kelurahan" value='<?= $kelurahanJson ?>'>
    								<select class="niceselect_option_kecamatan wide" name="kecamatan" id="kecamatan" required>
    									<option disabled selected>Pilih salah satu</option>
    									<?php for ($i = 0; $i < sizeof($kecamatan); $i++) : ?>
    										<?php if ($kecamatan[$i]['kecamatan'] == $user['kecamatan']) : ?>
    											<option value="<?= $kecamatan[$i]['kecamatan'] ?>" selected><?= $kecamatan[$i]['kecamatan'] ?></option>
    										<?php else : ?>
    											<option value="<?= $kecamatan[$i]['kecamatan'] ?>"><?= $kecamatan[$i]['kecamatan'] ?></option>
    										<?php endif; ?>
    									<?php endfor; ?>
    								</select>
    								<br>
    							</div>
    						</p>
    						<p>
    							<label for="kelurahan">Kelurahan</label>
    							<select class="niceselect_option_kelurahan wide" name="kelurahan" id="kelurahan" required>
    								<option disabled selected>Pilih kecamatan</option>

    								<?php for ($i = 0; $i <  sizeof($kelurahan); $i++) : ?>
    									<?php if ($kelurahan[$i]['kecamatan'] == $user['kecamatan']) : ?>
    										<?php if ($kelurahan[$i]['kelurahan'] == $user['kelurahan']) : ?>
    											<option value="<?= $kelurahan[$i]['kelurahan'] ?>" selected><?= $kelurahan[$i]['kelurahan'] ?></option>
    										<?php else : ?>
    											<option value="<?= $kelurahan[$i]['kelurahan'] ?>"><?= $kelurahan[$i]['kelurahan'] ?></option>
    										<?php endif; ?>
    									<?php endif; ?>
    								<?php endfor; ?>
    							</select>
    						</p><br>
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

    <script>
    	// $('#kecamatan').on('change', function() {
    	// 	console.log('halo')
    	// 	pilihan = $('#kecamatan').val();
    	// 	console.log(pilihan)
    	// })
    </script>

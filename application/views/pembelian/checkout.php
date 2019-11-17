    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">

    </div>
    <!--breadcrumbs area end-->



    <!--Checkout page section-->
    <div class="Checkout_section">
    	<div class="container">
    		<div class="row">

    		</div>

    		<div class="checkout_form">
    			<form action="<?= base_url('checkout') ?>" id="form_checkout" method="post">
    				<div class="row">
    					<div class="col-lg-6 col-md-6">
    						<h3>Billing Details</h3>
    						<div class="row">

    							<div class="col-lg-12 mb-20">
    								<label>Nama <span>*</span></label>
    								<input type="text" name="nama" value="<?= $user['nama'] ?>">
    							</div>
    							<div class="col-lg-6 mb-20">
    								<label>Phone<span>*</span></label>
    								<input type="text" name="no_hp" value="<?= $user['no_hp'] ?>">

    							</div>
    							<div class="col-lg-6 mb-20">
    								<label>Email Address <span>*</span></label>
    								<input type="text" name="email" value="<?= $user['email'] ?>">
    							</div>

    							<div class="col-12 mb-20">
    								<div class="order-notes">
    									<label>Alamat Pengiriman <span>*</span></label>
    									<textarea name="alamat" id="" cols="30" rows="3"><?= $user['alamat'] ?></textarea>
    								</div>
    							</div>

    							<div class="col-12 mb-20">
    								<label for="kelurahan-checkout">Kelurahan <span>*</span></label>
    								<input type="hidden" id="data-kelurahan" value='<?= $kelurahanJson ?>'>
    								<select class="niceselect_option_kelurahan" name="kelurahan" id="kelurahan-checkout">
    									<?php foreach ($kelurahan as $row) : ?>
    										<?php if ($row['kelurahan'] == $user['kelurahan']) : ?>
    											<option value="<?= $row['kelurahan'] ?>" selected><?= $row['kelurahan'] ?></option>
    										<?php else : ?>
    											<option value="<?= $row['kelurahan'] ?>"><?= $row['kelurahan'] ?></option>
    										<?php endif; ?>
    									<?php endforeach; ?>
    								</select>
    							</div>

    							<div class="col-12">
    								<div class="order-notes">
    									<label for="order_note">Catatan</label>
    									<textarea id="order_note" name="note" placeholder="Catatan untuk order, ciri-ciri alamat yang jelas, dll"></textarea>
    								</div>
    							</div>
    						</div>
    					</div>
    					<div class="col-lg-6 col-md-6">
    						<h3>Your order</h3>
    						<div class="order_table table-responsive">
    							<table>
    								<thead>
    									<tr>
    										<th>Product</th>
    										<th>Total</th>
    									</tr>
    								</thead>
    								<tbody>
    									<?php if ($keranjang != null) : ?>
    										<?php foreach ($keranjang as $row) : ?>
    											<tr>
    												<td> <?= $row['nama'] ?> (<?= $row['jumlah'] ?>x @ Rp <?= number_format($row['harga'], 0, ',', '.') ?>)</td>
    												<td> Rp <?= number_format($row['subtotal'], 0, ',', '.') ?></td>
    											</tr>
    										<?php endforeach; ?>
    									<?php endif; ?>
    								</tbody>
    								<tfoot>
    									<tr>
    										<th>Cart Subtotal</th>
    										<td><strong>Rp <?= $keranjang != null ? number_format($this->session->userdata('totalHarga'), 0, ',', '.') : 0 ?></strong></td>
    									</tr>
    									<tr>
    										<th>Shipping</th>
    										<td><strong>Rp <span id="shipping"><?= number_format($ongkir['harga'], 0, ',', '.') ?></span></strong></td>
    									</tr>
    									<tr class="order_total">
    										<th>Order Total</th>
    										<input type="hidden" id="order_total_value" value="<?= $this->session->userdata('totalHarga') ?>">
    										<td><strong>Rp <span id="order_total"><?= number_format($ongkir['harga'] + $this->session->userdata('totalHarga'), 0, ',', '.') ?></span></strong></td>
    									</tr>
    								</tfoot>
    							</table>
    						</div>
    						<div class="checkout_btn">
    							<a href="javascript:" onclick="formCheckoutSubmit()">Checkout</a>
    						</div>
    					</div>
    				</div>
    			</form>
    		</div>
    	</div>
    </div>
    <!--Checkout page section end-->

    <script>
    	function formCheckoutSubmit(id) {
    		$('#form_checkout').submit()
    	}
    </script>

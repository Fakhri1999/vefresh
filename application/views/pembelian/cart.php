    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="breadcrumb_content">
              <h3>Shopping Cart</h3>
              <!-- <ul>
                            <li><a href="index.html">home</a></li>
                            <li>></li>
                            <li>Shopping Cart</li>
                        </ul> -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--breadcrumbs area end-->

    <!--shopping cart area start -->
    <div class="shopping_cart_area">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="table_desc">
              <form action="<?= base_url('update-cart') ?>" method="post">
                <div class="cart_page table-responsive">
                  <table>
                    <thead>
                      <tr>
                        <th class="product_remove">Delete</th>
                        <th class="product_thumb">Image</th>
                        <th class="product_name">Product</th>
                        <th class="product-price">Price</th>
                        <th class="product_quantity">Quantity</th>
                        <th class="product_total">Total</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php if ($keranjang != null) : ?>
                        <?php for ($i = 0; $i < sizeof($keranjang); $i++) : ?>
                          <tr>
                            <td class="product_remove"><a href="javascript:" onclick="hapusItem(<?= $keranjang[$i]['id_stok'] ?>)"><i class="fa fa-trash-o"></i></a></td>
                            <input type="hidden" name="id_stok[]" id="" value="<?= $keranjang[$i]['id_stok'] ?>">
                            <input type="hidden" name="nama[]" id="" value="<?= $keranjang[$i]['nama'] ?>">
                            <input type="hidden" name="foto[]" id="" value="<?= $keranjang[$i]['foto'] ?>">
                            <input type="hidden" name="harga[]" id="" value="<?= $keranjang[$i]['harga'] ?>">
                            <input type="hidden" name="subtotal[]" id="" value="<?= $keranjang[$i]['subtotal'] ?>">
                            <td class="product_thumb"><a href="#"><img src="<?= base_url('assets/img/s-product/' . $keranjang[$i]['foto']) ?>" alt=""></a></td>
                            <td class="product_name"><a href="#"><?= $keranjang[$i]['nama'] ?></a></td>
                            <td class="product-price">Rp <?= number_format($keranjang[$i]['harga'], 0, ',', '.') ?></td>
                            <td class="product_quantity"><label>Quantity</label> <input min="0" max="100" value="<?= $keranjang[$i]['jumlah'] ?>" type="number" name="jumlah[]"></td>
                            <td class="product_total">Rp <?= number_format($keranjang[$i]['subtotal'], 0, ',', '.') ?></td>
                          </tr>
                        <?php endfor; ?>
                      <?php endif; ?>
                    </tbody>
                  </table>
                </div>
                <div class="cart_submit">
                  <button type="submit">update cart</button>
                </div>
              </form>
              <!-- Form untuk menghapus item -->
              <form action="<?= base_url('delete-cart') ?>" method="post" id="form-hapus">
                <input type="hidden" name="id_stok" value="" id="id_stok-hapus">
              </form>
            </div>
          </div>
        </div>
        <!--coupon code area start-->
        <div class="coupon_area">
          <div class="row">
            <div class="col-lg-6 col-md-6">
              <div class="coupon_code left">
                <h3>Coupon</h3>
                <div class="coupon_inner">
                  <p>Enter your coupon code if you have one.</p>
                  <input placeholder="Coupon code" type="text">
                  <button type="submit">Apply coupon</button>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6">
              <div class="coupon_code right">
                <h3>Cart Totals</h3>
                <div class="coupon_inner">
                  <div class="cart_subtotal">
                    <p>Subtotal</p>
                    <p class="cart_amount">Rp <?= $keranjang != null ? number_format($total, 0, ',', '.') : 0 ?></p>
                  </div>
                  <!-- <div class="cart_subtotal ">
                      <p>Shipping</p>
                      <p class="cart_amount"><span>Flat Rate:</span>Rp. 10.000</p>
                  </div> -->
                  <a href="#"></a>

                  <div class="cart_subtotal">
                    <p>Total</p>
                    <p class="cart_amount">Rp <?= $keranjang != null ? number_format($total, 0, ',', '.') : 0 ?></p>
                  </div>
                  <div class="checkout_btn">
                    <a href="checkout.html">Proceed to Checkout</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--coupon code area end-->
      </div>
    </div>
    <!--shopping cart area end -->

    <script>
      function hapusItem(id) {
        $('#id_stok-hapus').val(id)
        $('#form-hapus').submit()
      }
    </script>
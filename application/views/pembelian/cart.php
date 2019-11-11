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
            <form action="#">
                <div class="row">
                    <div class="col-12">
                        <div class="table_desc">
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
															<?php if($keranjang != null): ?>
															<?php foreach($keranjang as $row):?>
															<tr>
																<form action="<?= base_url('delete-cart') ?>" method="post">
																	<input type="hidden" name="id" value="<?= $row['id_stok'] ?>">
																	<td class="product_remove"><a href="javascript:" onclick="parentNode.parentNode.submit()"><i class="fa fa-trash-o"></i></a></td>
																</form>
																<td class="product_thumb"><a href="#"><img src="<?= base_url('assets/img/s-product/' . $row['foto']) ?>" alt=""></a></td>
																<td class="product_name"><a href="#"><?= $row['nama'] ?></a></td>
																<td class="product-price">Rp <?= number_format($row['harga'], 0, ',', '.')?></td>
																<td class="product_quantity"><label>Quantity</label> <input min="0" max="100" value="<?= $row['jumlah'] ?>" type="number"></td>
																<td class="product_total">Rp <?= number_format($row['subtotal'], 0, ',', '.')?></td>
															</tr>
															<?php endforeach; ?>
															<?php endif; ?>
                            </tbody>
                        </table>
                            </div>
                            <div class="cart_submit">
                                <button type="submit">update cart</button>
                            </div>
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
                                       <p class="cart_amount">Rp. 73.000</p>
                                   </div>
                                   <!-- <div class="cart_subtotal ">
                                       <p>Shipping</p>
                                       <p class="cart_amount"><span>Flat Rate:</span>Rp. 10.000</p>
                                   </div> -->
                                   <a href="#"></a>

                                   <div class="cart_subtotal">
                                       <p>Total</p>
                                       <p class="cart_amount">Rp. 73.000</p>
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
            </form>
        </div>
    </div>
     <!--shopping cart area end -->

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Login
$route['login'] = 'Login/masuk';
$route['register'] = 'Login/daftar';

// User
$route['logout'] = 'User/keluar';

// Pembelian
$route['add-cart-one'] = 'Pembelian/tambahKeranjangSatu';
$route['delete-cart'] = 'Pembelian/hapusKeranjang';
$route['update-cart'] = 'Pembelian/ubahKeranjang';
$route['cart'] = 'Pembelian/keranjang';

$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

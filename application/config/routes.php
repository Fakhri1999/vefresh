<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Login
$route['login'] = 'Login/masuk';
$route['register'] = 'Login/daftar';

// User
$route['logout'] = 'User/keluar';
$route['profile'] = 'User/profile';
$route['edit-profile'] = 'User/editProfile';

// Pembelian
$route['add-cart-one'] = 'Pembelian/tambahKeranjangSatu';
$route['delete-cart'] = 'Pembelian/hapusKeranjang';
$route['update-cart'] = 'Pembelian/ubahKeranjang';
$route['cart'] = 'Pembelian/keranjang';
$route['checkout'] = 'Pembelian/checkout';
$route['pembayaran'] = 'Pembelian/pembayaran';

$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

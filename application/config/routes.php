<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Login
$route['login'] = 'Login/masuk';
$route['register'] = 'Login/daftar';

// User
$route['logout'] = 'User/keluar';

// Pembelian
$route['add-cart'] = 'Pembelian/tambahKeranjang';
$route['cart'] = 'Pembelian/keranjang';

$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

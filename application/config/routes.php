<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Login routes
$route['login'] = 'login';
$route['login/daftar'] = 'login/daftar';
$route['login/masuk'] = 'login/masuk';
$route['login/daftar_aksi'] = 'login/daftar_aksi';
$route['logout'] = 'login/logout';

// Dashboard routes
$route['dashboard'] = 'dashboard';
$route['dashboard/about'] = 'dashboard/about';

// Barang routes
$route['barang'] = 'barang';
$route['barang/tambah'] = 'barang/tambah';
$route['barang/simpan'] = 'barang/simpan';
$route['barang/edit/(:num)'] = 'barang/edit/$1';
$route['barang/update/(:num)'] = 'barang/update/$1';
$route['barang/hapus/(:num)'] = 'barang/hapus/$1';

// About route
$route['about'] = 'about';


// API route
$route['api/barang']['get'] = 'api/barang_api/index_get';
$route['api/barang']['post'] = 'api/barang_api/index_post';
$route['api/barang']['put'] = 'api/barang_api/index_put';
$route['api/barang']['delete'] = 'api/barang_api/index_delete';
<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Auth::index');
$routes->get('/login', 'Auth::login');
// $routes->get('/Home', 'Home::index');
$routes->get('dashboard', 'DashboardController::index');

// pelanggan
$routes->get('/pelanggan', 'PelangganController::index');
$routes->get('/pelanggan/create', 'PelangganController::create');
$routes->post('/pelanggan/store', 'PelangganController::store');
$routes->get('/pelanggan/edit/(:num)', 'PelangganController::edit/$1');
$routes->post('/pelanggan/update/(:num)', 'PelangganController::update/$1');
$routes->get('/pelanggan/delete/(:num)', 'PelangganController::delete/$1');

// kategori
$routes->get('/kategori', 'KategoriController::index');
$routes->get('/kategori/create', 'KategoriController::create');
$routes->post('/kategori/store', 'KategoriController::store');
$routes->get('/kategori/edit/(:num)', 'KategoriController::edit/$1');
$routes->post('/kategori/update/(:num)', 'KategoriController::update/$1');
$routes->get('/kategori/delete/(:num)', 'KategoriController::delete/$1');

// produk/menu
$routes->get('/produk', 'ProdukController::index');
$routes->get('/produk/create', 'ProdukController::create');
$routes->post('/produk/store', 'ProdukController::store');
$routes->get('/produk/edit/(:num)', 'ProdukController::edit/$1');
$routes->post('/produk/update/(:num)', 'ProdukController::update/$1');
$routes->get('/produk/delete/(:num)', 'ProdukController::delete/$1');

// meja
$routes->get('/meja', 'MejaController::index');
$routes->get('/meja/create', 'MejaController::create');
$routes->post('/meja/store', 'MejaController::store');
$routes->get('/meja/edit/(:num)', 'MejaController::edit/$1');
$routes->post('/meja/update/(:num)', 'MejaController::update/$1');
$routes->get('/meja/delete/(:num)', 'MejaController::delete/$1');

// pesanan/booking
$routes->get('/pesanan', 'PesananController::index');
$routes->get('/pesanan/create', 'PesananController::create');
$routes->post('/pesanan/store', 'PesananController::store');
$routes->get('/pesanan/detail/(:num)', 'PesananController::detail/$1');
$routes->get('/pesanan/edit/(:num)', 'PesananController::edit/$1');
$routes->post('/pesanan/update/(:num)', 'PesananController::update/$1');
$routes->get('/pesanan/delete/(:num)', 'PesananController::delete/$1');

// Order
$routes->get('/item_pesanan', 'ItemPesananController::index');
$routes->get('/item_pesanan/(:num)', 'ItemPesananController::index/$1');
$routes->get('/item_pesanan/create/(:num)', 'ItemPesananController::create/$1');
$routes->post('/item_pesanan/store', 'ItemPesananController::store');
$routes->get('/item_pesanan/delete/(:num)', 'ItemPesananController::delete/$1');

// Bayar
$routes->get('/pembayaran', 'PembayaranController::index');
$routes->get('/pembayaran/create', 'PembayaranController::create');
$routes->post('/pembayaran/store', 'PembayaranController::store');
$routes->get('/pembayaran/detail/(:num)', 'PembayaranController::detail/$1');
$routes->get('/pembayaran/delete/(:num)', 'PembayaranController::delete/$1');

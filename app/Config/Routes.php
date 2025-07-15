<?php

$routes->get('/', 'Landing::index');
$routes->get('detail/(:num)', 'Detail::index/$1');
$routes->get('book/get/(:num)', 'Book::get/$1');

// REGISTER
$routes->get('/register', 'Auth::register');
$routes->post('/register/save', 'Auth::registerSave');
// LOGIN
$routes->get('/login', 'Auth::login');
$routes->post('/login/process', 'Auth::loginProcess');

// LOGOUT
$routes->get('/logout', 'Auth::logout');


// DASHBOARD

$routes->view('admin/dashboard', 'dashboard/index', ['filter' => 'admin']);
$routes->view('user/dashboard', 'dashboard/users', ['filter' => 'auth']);
$routes->get('manage-book', 'Book::index', ['filter' => 'admin']);


$routes->post('book/save', 'Book::save', ['filter' => 'admin']);
$routes->post('book/delete/(:num)', 'Book::delete/$1', ['filter' => 'admin']);
$routes->post('book/update/(:num)', 'Book::update/$1', ['filter' => 'admin']);
<?php

$routes->get('/', 'Landing::index');
$routes->get('detail/(:num)', 'Detail::index/$1');

$routes->view('dashboard', 'dashboard/index');
$routes->get('manage-book', 'Book::index');
$routes->post('book/save', 'Book::save');
$routes->post('book/delete/(:num)', 'Book::delete/$1');

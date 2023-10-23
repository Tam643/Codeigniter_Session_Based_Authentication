<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Pages;

/**
 * @var RouteCollection $routes
 */
// Render Pages
$routes->get('/', [Pages::class, 'signin']);
$routes->get('/signup', [Pages::class, 'signup']);
$routes->get('/forgotpassword', [Pages::class, 'forgotpassword']);
$routes->get('/resetpassword', [Pages::class, 'resetpassword']);

// Process Routers
$routes->post('/', [Pages::class, 'signin']);
$routes->post('/signup', [Pages::class, 'signup']);
$routes->post('/forgotpassword', [Pages::class, 'forgotpassword']);
$routes->post('/resetpassword', [Pages::class, 'resetpassword']);

<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\PagesController;
use App\Controllers\AuthController;

/**
 * @var RouteCollection $routes
 */
// Render Pages
$routes->get('/', [PagesController::class, 'signin'], ['as' => 'signinpage']);
$routes->get('/signup', [PagesController::class, 'signup'], ['as' => 'signuppage']);
$routes->get('/forgotpassword', [PagesController::class, 'forgotpassword'], ['as' => 'forgotpasswordpage']);
$routes->get('/resetpassword', [PagesController::class, 'resetpassword'], ['as' => 'resetpasswordpage']);
$routes->get('/db', [PagesController::class, 'db']);


// Process Routers
$routes->post('/', [AuthController::class, 'signin']);
$routes->post('/signup', [AuthController::class, 'signup']);
$routes->post('/forgotpassword', [EmailController::class, 'forgotpassword']);
$routes->post('/resetpassword', [UserController::class, 'resetpassword']);

<?php

use App\Core\Router;
use App\Controllers\Front\HomeController;
use App\Controllers\AuthController;

// Define routes
$router->addRoute('GET', '/', AuthController::class, 'showLogin');
$router->addRoute('POST', '/', AuthController::class, 'login');
$router->addRoute('GET', '/logout', AuthController::class, 'logout');
$router->addRoute('GET', '/signup', AuthController::class, 'showRegister');
$router->addRoute('POST', '/register', AuthController::class, 'register');

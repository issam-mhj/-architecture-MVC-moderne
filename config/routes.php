<?php

// routes.php

use App\Core\Router;
use App\Controllers\Front\HomeController;
use App\Controllers\AuthController;

// Define routes
$router->addRoute('GET', '/login', AuthController::class, 'showLogin');
$router->addRoute('POST', '/login', AuthController::class, 'login');
$router->addRoute('GET', '/logout', AuthController::class, 'logout');

<?php

// routes.php
use App\Core\Router;
use App\Controllers\Front\HomeController;

// Define routes
$router->addRoute('GET', '/', HomeController::class, 'index');

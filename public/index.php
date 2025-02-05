<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);


require_once __DIR__ . "/../vendor/autoload.php";

use App\Core\Router;

$router = new Router();

require_once __DIR__ . '/../config/routes.php';

$router->dispatch($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);

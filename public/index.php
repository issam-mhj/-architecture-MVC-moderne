<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require __DIR__ . '/../vendor/autoload.php';

// Load environment variables
if (file_exists(__DIR__ . '/../.env')) {
    $env = parse_ini_file(__DIR__ . '/../.env', true);
    foreach ($env as $key => $value) {
        $_ENV[$key] = $value;
    }
}

// Import the Database class
use App\Core\Database;

// Initialize the database
new Database();

// Start the session
use App\Core\Session;

Session::start();

// Load routes
use App\Core\Router;

$router = new Router();
require __DIR__ . '/../config/routes.php';

// Dispatch the request
$router->dispatch($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);

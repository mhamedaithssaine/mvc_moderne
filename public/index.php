<?php
require_once __DIR__ . '/../vendor/autoload.php';

use App\Core\Router;

$router = require_once __DIR__ . '/../app/config/routes.php';

$router->run();
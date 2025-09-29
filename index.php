<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));


// Maintenance mode check
if (file_exists($maintenance = __DIR__ . '/laravel-crud/storage/framework/maintenance.php')) {
    require $maintenance;
}

// Composer autoload
require __DIR__ . '/laravel-crud/vendor/autoload.php';

// Bootstrap Laravel application
/** @var Application $app */
$app = require_once __DIR__ . '/laravel-crud/bootstrap/app.php';

// ✅ Force Laravel to use current htdocs folder as public path
$app->usePublicPath(__DIR__);

// Handle incoming HTTP request
$app->handleRequest(Request::capture());

<?php
namespace App;

require_once '../vendor/autoload.php';

use App\Controllers\PageController;
use App\Routes\Request;
use App\Routes\Router;
use Dotenv\Dotenv;

/**
 * Set up some directories for later user
 */
const WEB_ROOT =  __DIR__;
$app_root = substr(WEB_ROOT, 0, strrpos( WEB_ROOT, DIRECTORY_SEPARATOR));
define("App\ROOT_DIR", $app_root);

/**
 * Load the .env file
 */
$dotenv = Dotenv::createImmutable(ROOT_DIR);
$dotenv->load();

/**
 * Route stuff.
 */
$router = new Router(new Request());

$router->get('/', function() {
    $page = new PageController();
    return $page->page_handler('/');
});

$router->get('/about', function() {
    $page = new PageController();
    return $page->page_handler('/about');
});
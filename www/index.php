<?php
namespace App;

require_once '../vendor/autoload.php';

use App\Controllers\PageController;
use App\Routes\Request;
use App\Routes\Router;
use Dotenv\Dotenv;

//foreach ($_SERVER as $parm => $value)  echo "$parm = '$value' <br><br>";
//die;

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
 * For later...
 */
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

// Strip query string (?foo=bar) and decode URI
if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

/**
 * Route stuff.
 */
$router = new Router(new Request());
echo $router->handleRequest();

//$router->get('/', function() {
//    $page = new PageController();
//    return $page->page_handler('/');
//});
//
//$router->get('/about', function() {
//    $page = new PageController();
//    return $page->page_handler('/about');
//});
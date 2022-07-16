<?php
namespace App;

require_once '../vendor/autoload.php';

use App\Controllers\PageController;
use App\Routes\Request;
use App\Routes\Router;

const ROOT_DIR =  'D:\laragon\www\fromscratch';
const WEB_ROOT =  __DIR__;

$router = new Router(new Request());

$router->get('/', function() {
    $page = new PageController();
    return $page->home_handler();
});

$router->get('/about', function() {
    $page = new PageController();
    return $page->about_handler();
});
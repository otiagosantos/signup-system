<?php

require __DIR__ . "/../vendor/autoload.php";

// CORS support
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

//teste------------------------------------------
use SignUp\Database\DB;

// $db = DB();
// $db->query("INSERT INTO ")

//-----------------------------------------------

//Router
use CoffeeCode\Router\Router;

$router = new Router("http://www.signup-system.com/");
$router->namespace("Signup\Controller");

$router->get('/test', "UserController:index");

$router->dispatch();
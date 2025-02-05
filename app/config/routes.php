<?php

use App\Core\Router;

$router = new Router();

$router->get('/', 'App\Controllers\HomeController@index');
$router->get('/article', 'App\Controllers\ArticleController@index');
$router->get('/login', 'App\Controllers\AuthController@loginForm');
$router->post('/login', 'App\Controllers\AuthController@login');

$router->get('/dashboard', 'App\Controllers\AuthController@dashboard');

$router->get('/front/home', 'App\Controllers\HomeController@index');

$router->get('/register', 'App\Controllers\AuthController@registerForm');
$router->post('/front/register', 'App\Controllers\AuthController@register');

return $router;

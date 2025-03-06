<?php
use Core\Router;
use App\Controllers\HomeController;
use App\Controllers\ErrorController;

Router::get('/', 'HomeController@index');
Router::get('/error', 'ErrorController@show');
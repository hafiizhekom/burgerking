<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('product', 'ProductController@show');
$router->get('product/all', 'ProductController@showAll');
$router->get('product/{code}', 'ProductController@showByCode');
$router->get('product/category/all', 'ProductController@showAll');
$router->get('product/category/{code}', 'ProductController@showByCategory');
$router->get('product/search/{code}', 'ProductController@search');

$router->get('article', 'ArticleController@show');
$router->get('article/all', 'ArticleController@showAll');
$router->get('category', 'CategoryController@show');

$router->get('user', 'UserController@show');


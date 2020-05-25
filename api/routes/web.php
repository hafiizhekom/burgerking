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
$router->get('article/{code}', 'ArticleController@showByCode');

$router->get('category', 'CategoryController@show');

$router->get('store', 'StoreController@show');


$router->group(['middleware' => ['authadmin']], function () use ($router) {
    $router->get('admin', 'AdministratorController@show');
    $router->get('admin/me', [
        'uses' => 'AdministratorController@showCurrent'
    ]);

    $router->post('product/store', [
        'middleware' => 'product',
        'uses' => 'ProductController@store'
    ]);
    $router->post('product/change', [
        'middleware' => 'productchange',
        'uses' => 'ProductController@change'
    ]);
    $router->post('product/delete', [
        'middleware' => 'delete',
        'uses' => 'ProductController@delete'
    ]);

    $router->post('category/store', [
        'middleware' => 'category',
        'uses' => 'CategoryController@store'
    ]);
    $router->post('category/change', [
        'middleware' => 'categorychange',
        'uses' => 'CategoryController@change'
    ]);
    $router->post('category/delete', [
        'middleware' => 'delete',
        'uses' => 'CategoryController@delete'
    ]);

    $router->post('article/store', [
        'middleware' => 'article',
        'uses' => 'ArticleController@store'
    ]);
    $router->post('article/change', [
        'middleware' => 'articlechange',
        'uses' => 'ArticleController@change'
    ]);
    $router->post('article/delete', [
        'middleware' => 'delete',
        'uses' => 'ArticleController@delete'
    ]);

    $router->post('store/store', [
        'middleware' => 'store',
        'uses' => 'StoreController@store'
    ]);
    $router->post('store/change', [
        'middleware' => 'storechange',
        'uses' => 'StoreController@change'
    ]);
    $router->post('store/delete', [
        'middleware' => 'delete',
        'uses' => 'StoreController@delete'
    ]);


});


$router->post('auth/admin', [
    'middleware' => 'adminlogin',
    'uses' => 'AuthController@loginAdmin'
]);


$router->post('category/store', [
    'middleware' => 'category',
    'uses' => 'CategoryController@store'
]);


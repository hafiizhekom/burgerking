<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/offers', function () {
    return view('offers');
});

Route::get('/trending', function () {
    return view('trending');
});

Route::get('/restaurant', function () {
    return view('restaurant');
});

Route::get('/signup', function () {
    return view('signup');
});


Route::get('/admin', function () {
    return view('admin/login');
});

Route::get('/admin/dashboard', function () {
    return view('admin/dashboard');
});

Route::get('/admin/product', function () {
    return view('admin/product');
});

Route::get('/admin/category', function () {
    return view('admin/category');
});

Route::get('/admin/article', function () {
    return view('admin/article');
});

Route::get('/admin/article', function () {
    return view('admin/article');
});

Route::get('/admin/store', function () {
    return view('admin/store');
});






//Route::get('/admin','AdminController@index');




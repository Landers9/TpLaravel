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
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/registration', function () {
    return view('registration');
});

Route::get('/reservation', function () {
    return view('reservation');
});

Route::get('/myrentals', function () {
    return view('myrentals');
});

Route::get('/cars', function () {
    return view('cars');
});

Route::get('/history-details', function () {
    return view('history-details');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

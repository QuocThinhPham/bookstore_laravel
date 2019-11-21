<?php

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

Route::get('/quantri', function () {
    return view('addproducts');
});

Route::get('/ten{ten}', function ($ten) {
    echo "<h1>Chào bạn, " . $ten . "</h1>";
});

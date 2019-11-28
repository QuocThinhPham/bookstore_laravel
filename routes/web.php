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
//home routes
Route::get('/', function () {
    return view('home');
});
Route::get('home', function () {
    return view('home');
});

// Route -> User

// Route::group(['prefix' => '']);
//register
Route::get('register', 'RegisterController@index');
Route::post('register', 'RegisterController@createUser');


//login
Route::get('login', 'LoginController@index');
Route::post('login', 'LoginController@checkUser');


//logout
Route::get('logout', 'LoginController@logout');


//book
Route::get('books', 'BooksController@index');


//add to cart
Route::get('cart/{id}', 'BooksController@getAddToCart');

// Route -> Admin
Route::group(['prefix' => 'dashboard'], function () {
    Route::get('/', 'AdminController@index');

    Route::group(['namespace' => 'Admin'], function () {
        // Route -> Category
        Route::group(['prefix' => 'category'], function () {
            Route::get('/', 'CategoryController@getCate');
            Route::post('/', 'CategoryController@postCate');

            Route::get('edit/{id}', 'CategoryController@getEditCate');
            Route::post('edit/{id}', 'CategoryController@postEditCate');

            Route::get('delete/{id}', 'CategoryController@getDeleteCate');
        });
        // Route -> Product
        Route::group(['prefix' => 'product'], function () {
            Route::get('/', 'ProductController@getProduct');

            Route::get('add', 'ProductController@getAddProduct');
            Route::post('add', 'ProductController@postAddProduct');

            Route::get('edit/{id}', 'ProductController@getEditProduct');
            Route::post('edit/{id}', 'ProductController@postEditProduct');

            Route::get('delete/{id}', 'ProductController@getDeleteProduct');
        });

        Route::group(['prefix' => 'publisher'], function () {
            Route::get('/', 'PublisherController@getPublisher');
            Route::post('/', 'PublisherController@postPublisher');

            Route::get('edit/{id}', 'PublisherController@getEditPublisher');
            Route::get('edit/{id}', 'PublisherController@postEditPublisher');

            Route::get('delete/{id}', 'PublisherController@getDeletePublisher');
        });
    });
});

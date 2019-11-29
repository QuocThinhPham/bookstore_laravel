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
Route::get('/home', function () {
    return view('home');
});


//register
Route::get('/register', 'RegisterController@index');
Route::post('/register', 'RegisterController@createUser');


//login
Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@checkUser');


//logout
Route::get('/logout', 'LoginController@logout');


//admin page route
// Route::get('/dashboard', 'AdminController@index');
Route::group(['prefix' => 'dashboard'], function () {
    Route::get('/', 'AdminController@index');

    Route::group(['namespace' => 'Admin'], function () {
        Route::group(['prefix' => 'category'], function () {
            Route::get('/', 'CategoryController@getCate');
            Route::post('/', 'CategoryController@postCate');

            Route::get('edit/{id}', 'CategoryController@getEditCate');
            Route::post('edit/{id}', 'CategoryController@postEditCate');

            Route::get('delete/{id}', 'CategoryController@getDeleteCate');
        });

        Route::group(['prefix' => 'product'], function () {
            Route::get('/', 'ProductController@getProduct');

            Route::get('add', 'ProductController@getAddProduct');
            Route::post('add', 'ProductController@postAddProduct');

            Route::get('edit/{id}', 'ProductController@getEditProduct');
            Route::post('edit/{id}', 'ProductController@postEditProduct');

            Route::get('delete/{id}', 'ProductController@getDeleteProduct');
        });
    });
});

//book
Route::get('/books', 'BooksController@index');


//add to cart
Route::get('/cart', 'BooksController@getAddToCart');
Route::get('/test', 'BooksController@getCart');
Route::get('/checkout', function() {
    return view('checkout');
});
// Route::get('/test2', function(){
//     return 69;
// });

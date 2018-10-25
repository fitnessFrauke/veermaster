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
use Illuminate\Http\Request;

/** products */

Route::get('/', 'OrderController@openCreateContext');

Route::get('/submit', function () {
    return view('submit');
});

Route::get('/edit/{id}', function($id) {
    $product = \App\Product::findOrFail($id);
    return view('edit', ["product"=>$product]);
});

Route::get('/products', 'ProductController@getAll');

Route::post('create', 'ProductController@create');

Route::get('delete/{id}','ProductController@delete');

Route::post('update/{id}', 'ProductController@update');

Route::get('/home', 'HomeController@index')->name('home');

/** restaurants */

Route::get('/restaurants', 'RestaurantController@getAll');

Route::post('create/restaurant', 'RestaurantController@create');

/** auth*/

Auth::routes();
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

Route::get('/', 'ProductController@getAll');

Route::get('/submit', function () {
    return view('submit');
});

Route::get('/edit/{id}', function($id) {
    $product = \App\Product::findOrFail($id);
    return view('edit', ["product"=>$product]);
});

use Illuminate\Http\Request;

Route::post('create', 'ProductController@create');

Route::get('delete/{id}','ProductController@delete');

Route::post('update/{id}', 'ProductController@update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

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


/*
 * This is the quick way to do the routing!
 */
//Route::resource('products','ProductController');


/*
 * The way asked in the test (at least 3 routes)
 */
Route::get('/products', 'ProductController@index')->name('products.index');
Route::get('/products/{id}/edit', 'ProductController@edit')->name('products.edit');
Route::get('/products/create', 'ProductController@create')->name('products.create');

Route::delete('/products/{id}/destroy', 'ProductController@destroy')->name('products.destroy');
Route::post('/products/store', 'ProductController@store')->name('products.store');
Route::patch('/products/{id}/update', 'ProductController@update')->name('products.update');



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
    return view('index');
});

Route::get('/','ProductsController@home')->name('product.index');

Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/cart', function () {
    return view('cart');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/fruits','ProductsController@allFruits');
Route::get('/vegetables','ProductsController@allVegetables');

Route::get('/category/{category}', 'CategoryController@category')->name('category.view');

Route::get('category_list','CategoryController@view')->name('category.list');
Route::get('add_category','CategoryController@index')->name('add.category');
Route::post('category/add','CategoryController@add')->name('category.add');
Route::get('/category/delete-category/{id}','CategoryController@delete');



Route::get('/product/delete-product/{id}','ProductsController@delete');
Route::get('/product/{id}/{product}', 'ProductsController@show')->name('products.show');
Route::get('product_list','ProductsController@view')->name('product.list');
Route::get('add_product','ProductsController@index')->name('add.product');
Route::post('product/add','ProductsController@add')->name('product.add');
Route::match(['get', 'post'], '/product/edit/{id}/{product}','ProductsController@edit')->name('product.edit');


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

/*Route::get('/', function () {
    return view('admin/products/costumerindex');
});*/

Auth::routes();

Route::get('/home', 'HomeController@index');


Route::get('/site', 'ProductController@site');
Route::get('/', 'ProductController@site');


Route::get('/cart', 'HomeController@cart');
Route::get('/profile', 'HomeController@profile');
Route::get('/history', 'HomeController@history');


/**
 * tag Routes
 */


Route::get('/tags/create', 'TagController@create');
Route::get('/tags', 'TagController@index');
Route::post('/tags', 'TagController@store');
Route::get('/tags/{tag}', 'TagController@show');
Route::get('/tags/edit/{tag}', 'TagController@edit');
Route::post('/tags/{tag}', 'TagController@update');
Route::get('/tags/delete/{tag}', 'TagController@destroy');


Route::get('/products/create', 'ProductController@create');
Route::get('/products', 'ProductController@index');
Route::post('/products', 'ProductController@store');
Route::get('/products/{product}', 'ProductController@show');
Route::get('/products/edit/{product}', 'ProductController@edit');
Route::post('/products/{product}', 'ProductController@update');
Route::get('/products/delete/{product}', 'ProductController@destroy');



Route::post('/search', 'ProductController@search');
Route::post('/', 'ProductController@filtering');



Route::get('/test', 'ProductController@test');








Route::get('/sizes/create', 'SizeController@create');
Route::get('/sizes', 'SizeController@index');
Route::post('/sizes', 'SizeController@store');
Route::get('/sizes/{size}', 'SizeController@show');
Route::get('/sizes/edit/{size}', 'SizeController@edit');
Route::post('/sizes/{size}', 'SizeController@update');
Route::get('/sizes/delete/{size}', 'SizeController@destroy');

Route::get('/colors/create', 'ColorController@create');
Route::get('/colors', 'ColorController@index');
Route::post('/colors', 'ColorController@store');
Route::get('/colors/{color}', 'ColorController@show');
Route::get('/colors/edit/{color}', 'ColorController@edit');
Route::post('/colors/{color}', 'ColorController@update');
Route::get('/colors/delete/{color}', 'ColorController@destroy');

Route::get('/categories/create', 'CategoryController@create');
Route::get('/categories', 'CategoryController@index');
Route::post('/categories', 'CategoryController@store');
Route::get('/categories/{category}', 'CategoryController@show');
Route::get('/categories/edit/{category}', 'CategoryController@edit');
Route::post('/categories/{category}', 'CategoryController@update');
Route::get('/categories/delete/{category}', 'CategoryController@destroy');

Route::get('/subcategories/create', 'SubcategoryController@create');
Route::get('/subcategories', 'SubcategoryController@index');
Route::post('/subcategories', 'SubcategoryController@store');
Route::get('/subcategories/{subcategory}', 'SubcategoryController@show');
Route::get('/subcategories/edit/{subcategory}', 'SubcategoryController@edit');
Route::post('/subcategories/{subcategory}', 'SubcategoryController@update');
Route::get('/subcategories/delete/{subcategory}', 'SubcategoryController@destroy');

Route::get('/companies/create', 'CompanyController@create');
Route::get('/companies', 'CompanyController@index');
Route::post('/companies', 'CompanyController@store');
Route::get('/companies/{company}', 'CompanyController@show');
Route::get('/companies/edit/{company}', 'CompanyController@edit');
Route::post('/companies/{company}', 'CompanyController@update');
Route::get('/companies/delete/{company}', 'CompanyController@destroy');




Route::post('/orderedproducts/create', 'OrderedproductController@store');
Route::get('/orderedproducts/delete/{orderedproduct}', 'OrderedproductController@destroy');
Route::post('/orderedproducts/edit/{orderedproduct}', 'OrderedproductController@update');


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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/add/category', 'CategoryController@addCategory')->name('add_category');
Route::post('/category/save','CategoryController@saveCategory')->name('store');

Route::get('/category/manage', 'CategoryController@manageCategory')->name('manage');
Route::get('/category/edit/{id}','CategoryController@editCategory')->name('edit-category');
Route::post('/category/update','CategoryController@updateCategory')->name('update-category');
Route::get('/category/delete/{id}','CategoryController@deleteCategory')->name('delete-category');

Route::get('/brand/add','BrandController@addBrand')->name('add_brand');
Route::post('/brand/save','BrandController@saveBrand')->name('brand-store');
Route::get('/brand/manage','BrandController@manageBrand')->name('manage_brand');

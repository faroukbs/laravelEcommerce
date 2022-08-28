<?php

use Illuminate\Support\Facades\Auth;
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
//category routes
Route::post('/category/add', 'CategoryController@AddCategory');
Route::get('/category/form', 'CategoryController@showcat');
Route::get('/category/list', 'CategoryController@listCategory');
Route::get('/category/delete/{id}', 'CategoryController@deleteCategory');

//product routes
Route::post('/product/add', 'ProductController@AddProduct');
Route::get('/product/form', 'ProductController@showproduct');
Route::get('/product/list', 'ProductController@deleteCategory');

//auth routes
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/dashboard', 'AdminController@dashboard')->name('admin.dashboard');
Route::get('/client/dashboard', 'ClientController@dashboard')->name('client.dashboard');

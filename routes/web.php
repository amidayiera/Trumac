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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PagesController@index');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::get('/products','productController@showProducts');

Route::get('/prodMaster/{id}','productController@showProductsById');

Route::get('/cart','cartController@cart');

Route::get('/add-to-cart/{id}','cartController@addToCart');

Route::get('/update-cart','cartController@update');

Route::get('/remove-from-cart','cartController@remove');

Route::prefix('admin')->group(function() {
Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/login', 'Auth\AdminLoginController@Login')->name('admin.login.submit');
Route::get('/home', 'AdminController@index')->name('admin.dashboard');
Route::get('/users', 'UserChartController@index');
Route::get('/devices', 'DevicesController@index');
Route::get('/orders','ordersController@index');
});
 
Route::get('/about','PagesController@about');
Route::get('/services','PagesController@services');

Route::resource('posts', 'PostsController');
 
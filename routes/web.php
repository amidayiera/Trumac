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
    Route::prefix('admin')->group(function() {
        Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
        Route::post('/login', 'Auth\AdminLoginController@Login')->name('admin.login.submit');
        Route::get('/', 'AdminController@index')->name('admin.dashboard');
    });

    // CAN ALSO BE WRITTEN LIKE THIS :

// Route::get('/admin', 'AdminController@index')->name('admin.dashboard');
// Route::get('/admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
// Route::get('/admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login.submit');
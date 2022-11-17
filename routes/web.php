<?php

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
Route::post('/registrasi', 'App\Http\Controllers\Auth\RegisterController@registrasi');

Route::view('/', 'pages.auth.login');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index', function() {return view('dashboard');});

    Route::get('/users', 'App\Http\Controllers\UserController@index');
    Route::get('/users/create', 'App\Http\Controllers\UserController@create');
    Route::post('/users', 'App\Http\Controllers\UserController@store');
    Route::delete('/users/{user}', 'App\Http\Controllers\UserController@destroy');
    Route::get('/users/{user}/edit', 'App\Http\Controllers\UserController@edit');
    Route::patch('/users/{user}', 'App\Http\Controllers\UserController@update');
    Route::get('/users/printpdf', 'App\Http\Controllers\UserController@printPdf');

    Route::get('/rooms', 'App\Http\Controllers\RoomController@index');
    Route::get('/rooms/create', 'App\Http\Controllers\RoomController@create');
    Route::post('/rooms', 'App\Http\Controllers\RoomController@store');
    Route::delete('/rooms/{room}', 'App\Http\Controllers\RoomController@destroy');
    Route::get('/rooms/{room}/edit', 'App\Http\Controllers\RoomController@edit');
    Route::patch('/rooms/{room}', 'App\Http\Controllers\RoomController@update');
    Route::get('/rooms/printpdf', 'App\Http\Controllers\RoomController@printPdf');

    Route::get('/customers', 'App\Http\Controllers\CustomerController@index');
    Route::get('/customers/create', 'App\Http\Controllers\CustomerController@create');
    Route::post('/customers', 'App\Http\Controllers\CustomerController@store');
    Route::delete('/customers/{customer}', 'App\Http\Controllers\CustomerController@destroy');
    Route::get('/customers/{customer}/edit', 'App\Http\Controllers\CustomerController@edit');
    Route::patch('/customers/{customer}', 'App\Http\Controllers\CustomerController@update');
    Route::get('/customers/printpdf', 'App\Http\Controllers\CustomerController@printPdf');

    Route::get('/services', 'App\Http\Controllers\ServiceController@index');
    Route::get('/services/create', 'App\Http\Controllers\ServiceController@create');
    Route::post('/services', 'App\Http\Controllers\ServiceController@store');
    Route::delete('/services/{service}', 'App\Http\Controllers\ServiceController@destroy');
    Route::get('/services/{service}/edit', 'App\Http\Controllers\ServiceController@edit');
    Route::patch('/services/{service}', 'App\Http\Controllers\ServiceController@update');
    Route::get('/services/printpdf', 'App\Http\Controllers\ServiceController@printPdf');

    Route::get('/transactions', 'App\Http\Controllers\TransactionController@index');
    Route::get('/transactions/create', 'App\Http\Controllers\TransactionController@create');
    Route::post('/transactions', 'App\Http\Controllers\TransactionController@store');
    Route::delete('/transactions/{transaction}', 'App\Http\Controllers\TransactionController@destroy');
    Route::get('/transactions/{transaction}/edit', 'App\Http\Controllers\TransactionController@edit');
    Route::patch('/transactions/{transaction}', 'App\Http\Controllers\TransactionController@update');
    Route::get('/transactions/printpdf', 'App\Http\Controllers\TransactionController@printPdf');
}); 

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

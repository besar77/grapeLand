<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layout.index');
})->name('home');

Route::get('/product', function () {
    return view('pages.product-view');
})->name('product');

Route::get('/login', function () {
    return view('pages.login-register.login');
})->name('login');

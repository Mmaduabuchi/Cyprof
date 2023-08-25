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
    return view('welcome');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/signup', function () {
    return view('register');
});
Route::get('/signin', function () {
    return view('login');
});
Route::get('/customer/account', function () {
    return view('customer.account');
});
Route::get('/admin', function () {
    return view('admin.admin');
});
Route::get('/admin/account', function () {
    return view('admin.account');
});
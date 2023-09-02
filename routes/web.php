<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\register;
use App\Http\Controllers\usersdashboard;
use App\Http\Controllers\admin;

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

Route::get('/', [usersdashboard::class, 'display'])->name('home');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/register', [register::class, 'register'])->name('register');
Route::post('/registerpost', [register::class, 'registerpost'])->name('registerpost');

Route::get('/signin', [register::class, 'login'])->name('login');
Route::post('/signin', [register::class, 'loginpost'])->name('loginpost');

Route::get('/logout', [register::class, 'logout'])->name('logout');

Route::get('/admin', [admin::class, 'admin'])->name('adminpage');

Route::group(['middleware' => 'auth'], function (){
    //uses dashboard route page
    Route::get('/customer/account', [usersdashboard::class, 'dashboard'])->name('dashboard');

});
//admin panel route page
Route::get('/admin/upload', [usersdashboard::class, 'upload'])->name('upload');
Route::post('/admin/upload', [usersdashboard::class, 'storeproducts'])->name('store');
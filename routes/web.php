<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\register;
use App\Http\Controllers\products;
use App\Http\Controllers\usersdashboard;
use App\Http\Controllers\admin;
use App\Http\Controllers\addtocart;
use App\Http\Controllers\resetPassword;

Route::get('/', [usersdashboard::class, 'display'])->name('home');

Route::get('/contact', function () {
    return view('contact');
});

// forgotten password
Route::get('/forgot', function () {
    return view('forgot');
})->name('forgot');
//post method
Route::post('/forgot', [resetPassword::class, 'forgotten'])->name('forgot');

//resetting password
Route::get('/reset', function () {
    return view('reset');
})->name('reset');
//post method
Route::post('/reset', [resetPassword::class, 'success'])->name('reset');

Route::get('/help', function () {
    return view('help');
})->name('help');
Route::get('/about', function () {
    return view('about-us');
})->name('about');

Route::get('/products', [products::class, 'products'])->name('products');

Route::get('/register', [register::class, 'register'])->name('register');
Route::post('/registerpost', [register::class, 'registerpost'])->name('registerpost');

Route::get('/signin', [register::class, 'login'])->name('login');
Route::post('/signin', [register::class, 'loginpost'])->name('loginpost');

Route::get('/logout', [register::class, 'logout'])->name('logout');

Route::get('/admin', [admin::class, 'admin'])->name('adminpage');

Route::group(['middleware' => 'auth'], function (){
    //uses dashboard route page
    Route::get('/customer/account', [usersdashboard::class, 'dashboard'])->name('dashboard');
    Route::get('/customer/settings', [usersdashboard::class, 'settings'])->name('settings');
    Route::get('/customer/orders', [usersdashboard::class, 'orders'])->name('orders');

});
//admin panel route page
Route::get('/admin/upload', [usersdashboard::class, 'upload'])->name('upload');
Route::post('/admin/upload', [usersdashboard::class, 'storeproducts'])->name('store');

//registered users route
Route::get('/admin/users', [admin::class, 'allusers'])->name('users');

//payments records
Route::get('/admin/payments', [admin::class, 'payments'])->name('payments');

//order route
Route::get('/admin/orders', [admin::class, 'orders'])->name('orders');



// products pages

Route::get('/HealthBeauty', [products::class, 'HealthBeauty'])->name('HealthBeauty');
Route::get('/Appliances', [products::class, 'Appliances'])->name('Appliances');
Route::get('/Baby-Products', [products::class, 'BabyProducts'])->name('Baby-Products');
Route::get('/Computing', [products::class, 'Computing'])->name('Computing');
Route::get('/Electronics', [products::class, 'Electronics'])->name('Electronics');
Route::get('/Fashion', [products::class, 'Fashion'])->name('Fashion');
Route::get('/Gaming', [products::class, 'Gaming'])->name('Gaming');
Route::get('/Phones&Tablets', [products::class, 'PhoneTablets'])->name('Phones&Tablets');
Route::get('/Sporting-Goods', [products::class, 'SportingGoods'])->name('Sporting-Goods');

//Add to cart route

Route::get('/cart', [addtocart::class, 'cart'])->name('cart');
Route::post('/addtocart', [addtocart::class, 'addtocart'])->name('addtocart');


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

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/404', function () {
    return view('404');
})->name('404');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/cart', function () {
    return view('cart');
})->name('cart');
Route::get('/wishlist', function () {
    return view('wishlist');
})->name('wish');
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/sign', function () {
    return view('sign');
})->name('sign');
Route::get('/myaccount', function () {
    return view('myaccount');
})->name('myaccount');
Route::get('/items_cats', function () {
    return view('items_cats');
})->name('items_cats');
Route::get('/product', function () {
    return view('product');
})->name('product');
Route::get('/faq', function () {
    return view('faq');
})->name('faq');
Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');